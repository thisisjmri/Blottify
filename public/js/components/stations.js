function setStatus(id){
	$.ajax({
		url:'stations/getName',
		type: 'post',
		data: { id: id},
		cache: false,
		success: function(server_reply) {
		    var data = data = JSON.parse(server_reply)[0];
		    document.getElementById("uid").value = id;
		    document.getElementById("uname").textContent = data.fullname; 
		    document.getElementById("erank").value = data.rank; 
		    document.getElementById("prof").setAttribute("src", data.image); 
		    document.getElementById(data.status).selected = true;
		},
		error: function(xhr, status, error) {
			alert('Cannot do action: '+console.error(xhr));
		}
	});
}

function saveStatus(){
	var id = document.getElementById("uid").value;
	var stat = document.getElementById("stat").value;
	var erank = document.getElementById("erank").value;
	$.ajax({
		url:'stations/setStat',
		type: 'post',
		data: { 
			id: id,
			stat : stat,
			erank : erank
		},
		cache: false,
		success: function(server_reply) {
			if(server_reply=="SUCCESS"){
              Swal.fire(
                'Updated!',
	                'User updated successfully!',
	                'success'
	              ).then((value)=>{
	                  if (value){
	                    window.location='stations';
	                  }
	                });
	          }
	          else{
	              Swal.fire(
	                'Error!',
	                'There seems to be a problem.',
	                'error'
	              ).then((value)=>{
	                  if (value){
	                    window.location='stations';
	                  }
	                });
	          }  
		},
		error: function(xhr, status, error) {
			alert('Cannot do action: '+console.error(xhr));
		}
	});
}

$(document).ready(function(){
	$('#gen').on("click",function(){

	    var ustatus = $('#ustatus').val();
	    var ustation =  $('#ustation').val();

	     // alert(ustatus+" "+ustation);
	    $.ajax({
	        url:'stations/getResults',
	        type: 'post',
	        dataType:"json",
	        data: {
	          ustatus:ustatus,
	          ustation:ustation
	        },
	        cache: false,
	        success:function(response){
	        	console.log(response);
	          populateDataTable(response);
	          
	        },
	       error: function(xhr, status, error) {
			  console.log('Cannot do action: ' + error + '\nServer response: ' + xhr.responseText);
			}
	    });
	    function populateDataTable(data) {
		    console.log("populating data table...");
		    // clear the table before populating it with more data
		    $("#example6").DataTable().clear();

		    var length = data.length;
		    if(length == 0){
		    	// var noResultsRow = $('<tr>').append($('<td>').text('No results found').attr('colspan', '2').addClass('text-center'));
       //  $('#example6').DataTable().row.add(noResultsRow);
			var noResultsRow = $('<tr>').append($('<td>').text('No results found').attr('colspan', '2').addClass('text-center'));
			$('#example6').DataTable().clear().draw();
			$('#example6').DataTable().rows.add(noResultsRow).draw();

		    }
		    else{
		    	data.forEach((program, index) => {
			        var row = $('<tr>').attr('data-bs-toggle', 'modal').attr('data-bs-target', '#modal1').addClass('cursor-pointer').click(() => {
			            setStatus(program['id']);
			        });

			        var image = $('<img>').attr('src', program['image']).addClass('avatar avatar-sm me-3');
			        var imageDiv = $('<div>').append(image);
			        var fullname = $('<h6>').addClass('mb-0 text-sm').text(program['fullname']);
			        var email = $('<p>').addClass('text-sm text-secondary mb-0').text(program['email']);
			        var infoDiv = $('<div>').addClass('d-flex flex-column justify-content-center').append(fullname, email);
			        var mainDiv = $('<div>').addClass('d-flex px-2 py-1').append(imageDiv, infoDiv);
			        var td1 = $('<td>').append(mainDiv);

			        var statusSpan = $('<span>').addClass('badge badge-xs').addClass(program['status'] == "ACTIVE" ? 'bg-gradient-success' : 'bg-gradient-danger').text(program['status']);
			        var td2 = $('<td>').addClass('text-end').append(statusSpan);

			        row.append(td1, td2);
			        $('#example6').dataTable().fnAddData(row);
			    });
		    }
		}


	});
});