//ADD STATION
$(document).ready(function(){
  $('#stsave').on("click", function(){
    var stname = $('#stname').val();
    var staddress = $('#staddress').val();
    var sttype = $('#sttype').val();
    var stanumber = $('#stanumber').val();
      document.getElementById("stname").className = "form-control form-control-lg";
      document.getElementById("staddress").className = "form-control form-control-lg";
      document.getElementById("sttype").className = "form-control form-control-lg";
      document.getElementById("stanumber").className = "form-control form-control-lg";


    if(stname == '' && staddress == '' && sttype ==''){
      document.getElementById("stname").className = "form-control form-control-lg is-invalid";
      document.getElementById("staddress").className = "form-control form-control-lg is-invalid";
      document.getElementById("sttype").className = "form-control form-control-lg is-invalid";
      document.getElementById("stanumber").className = "form-control form-control-lg is-invalid";
    }
    else if(stname==''){
      document.getElementById("stname").className = "form-control form-control-lg is-invalid";
    }
    else if(staddress==''){
      document.getElementById("staddress").className = "form-control form-control-lg is-invalid";
    }
    else if(stanumber==''){
      document.getElementById("stanumber").className = "form-control form-control-lg is-invalid";
    }
    else{ //(stname != '' && staddress != '')
      $.ajax({
        url:'account_stations/addStation',
        type: 'post',
        data: {
            stname : stname,
            staddress : staddress,
            sttype : sttype,
            stanumber : stanumber
        },
         cache: false,
         success: function(server_reply) {
          alert(server_reply);
         },
         error: function(xhr, status, error) {
         alert('Cannot do action: '+console.error(xhr));
         }
      });
    }

  });
});

//ADDING CRIME TYPE
$(document).ready(function(){
  $('#crisave').on("click", function(){
    var crime_name = $('#crime_name').val();
    console.log("save");

      document.getElementById("crime_name").className = "multisteps-form__input form-control";

    if(crime_name != ''){

      $.ajax({
        url:'account_stations/addCrime',
        type: 'post',
        data: {
            crime_name : crime_name,
        },
         cache: false,
         success: function(server_reply) {
            alert(server_reply);
         },
         error: function(xhr, status, error) {
         alert('Cannot do action: '+console.error(xhr));
  
         }
      });
    }
    else{
      if(crime_name==''){
        document.getElementById("crime_name").className = "multisteps-form__input form-control is-invalid";

      }
    }

  });
});


//EDITING STATION
function setStatinfo(id){
  $.ajax({
    url:'account_stations/getStationinfo',
    type: 'post',
    data: { id: id},
    cache: false,
    success: function(server_reply) {
        var data = data = JSON.parse(server_reply)[0];
        document.getElementById("uid").value = id;
        document.getElementById("station_name").value = data.station_name; 
        document.getElementById("station_location").value = data.station_location;
        document.getElementById("station_type").value = data.station_type;
        document.getElementById("station_number").value = data.station_number;
    },
    error: function(xhr, status, error) {
      alert('Cannot do action: '+console.error(xhr));
    }
  });
}

//EDITING STATION
function saveStat(){
  var id = document.getElementById("uid").value;
  var station_name = document.getElementById("station_name").value;
  var station_location = document.getElementById("station_location").value;
  var station_type = document.getElementById("station_type").value;
  var station_number = document.getElementById("station_number").value;
  
      console.log("uwu");

  $.ajax({
    url:'account_stations/setStationinfo',
    type: 'post',
    data: {
      id : id,
      station_name : station_name,
      station_location : station_location,
      station_type : station_type,
      station_number : station_number
    },
    cache: false,
    success: function(server_reply) {
      if(server_reply=="SUCCESS"){
              Swal.fire(
                'Updated!',
                  'Station updated successfully!',
                  'success'
                ).then((value)=>{
                    if (value){
                      window.location='account_stations';
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
                      window.location='account_stations';
                    }
                  });
            }  
    },
    error: function(xhr, status, error) {
      alert('Cannot do action: '+console.error(xhr));
    }
  });
}

//USER-RANK-STATUS
function setStatus(id){
	$.ajax({
		url:'account_stations/getName',
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

//USER-RANK-STATUS
function saveStatus(){
	var id = document.getElementById("uid").value;
	var stat = document.getElementById("stat").value;
	var erank = document.getElementById("erank").value;
	$.ajax({
		url:'account_stations/setStat',
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
	                    window.location='account_stations';
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
	                    window.location='account_stations';
	                  }
	                });
	          }  
		},
		error: function(xhr, status, error) {
			alert('Cannot do action: '+console.error(xhr));
		}
	});
}

//EDIT-USER-RANK
  var rankDropdown = document.getElementById("erank");
  var currentRankInput = document.getElementById("currentRank");

    // Set the default selected option to the current rank
    var currentRank = currentRankInput.value;
    for (var i = 0; i < rankDropdown.options.length; i++) {
      if (rankDropdown.options[i].value == currentRank) {
        rankDropdown.selectedIndex = i;
        break;
      }
    }

    // Add an event listener to update the hidden input when the user changes their rank
    rankDropdown.addEventListener("change", function() {
      var newRankId = rankDropdown.value;
      currentRankInput.value = newRankId;
});


//FILTER
$(document).ready(function(){
	$('#gen').on("click",function(){

	    var ustatus = $('#ustatus').val();
	    var ustation =  $('#ustation').val();

	     // alert(ustatus+" "+ustation);
	    $.ajax({
	        url:'account_stations/getResults',
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