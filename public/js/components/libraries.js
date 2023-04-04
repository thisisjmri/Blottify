function addInfo(id){

  var place = "";
  var crime = "";
  var brgy = "";

  // var promise = new Promise(function(resolve, reject) {
    $.ajax({
      url:'libraries/getResults',
      type: 'post',
      dataType: "json",
      data: {
          // type_incident : type_incident,
          // brgy_incident : brgy_incident,
          id : id
      },
      cache: false,
      success: function(server_reply) {
        var obj = server_reply;
        // console.log(server_reply);
        // var obj = JSON.parse(server_reply);
        // var obj = JSON.stringify(server_reply);

        for(var a=0; a<86; a++){
          if (a==1) {
            document.getElementById(a).textContent = "";
            document.getElementById(a).textContent = obj[82];
          }
          else if (a==5) {
            document.getElementById(a).textContent = "";
            document.getElementById(a).textContent = obj[5] + ", " + obj[81];
          }
          else if (a==77) {
            let sanitizedText = obj[a].replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;").replace(/'/g, "&#039;").replace(/\r?\n/g, "<br>");
            document.getElementById(a).innerHTML = sanitizedText;
          }
          else if (a==78) {
            document.getElementById(a).textContent = "";
            document.getElementById(a).textContent = obj[83];
          }
          else if (a==79) {
            document.getElementById(a).textContent = "";
            document.getElementById(a).textContent = obj[82];
          }
          else if (a==80) {
            document.getElementById(a).textContent = "";
            document.getElementById(a).textContent = obj[4];
            if(obj[a]==1){
                document.getElementById("forward_button").hidden = true;
            }
            else{
                document.getElementById("forward_button").hidden = false;
            }
          }
          else if (a==81) {
            document.getElementById(a).textContent = "";
            document.getElementById(a).textContent = obj[5] + ", " + obj[81];
          }
          else if (a==82) {
            document.getElementById(a).textContent = "";
            document.getElementById(a).textContent = obj[8] + " " + obj[9] + " " + obj[7];
          }
          else if (a==83) {
            document.getElementById("exampleModalLabel").textContent = "";
            document.getElementById("exampleModalLabel").textContent = "Case Number "+ obj[0];
          }
          else{
            document.getElementById(a).textContent = "";
            document.getElementById(a).textContent = obj[a];
          }
        }
      },
      error: function(xhr, status, error) {
        console.log('Cannot do action: ' + error + '\nServer response: ' + xhr.responseText);
      }
    });
}
// var forwardButton = document.getElementById("forward_button");
// forwardButton.disabled = true;
// forwardButton.onclick = null;
// forwardButton.onmouseover = null;

// forwardButton.disabled = false;
// forwardButton.onclick = inForward;
// forwardButton.onmouseover = function() { /* your hover handler code here */ };
function inForward(){
    var id = document.getElementById("0").textContent;
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Confirm'
    }).then((result) => {
        if (result.isConfirmed) {
            //insert ajax here
            // console.log(id);
            $.ajax({
                url:'libraries/setForwarded',
                type: 'post',
                data: {
                  id : id
                },
                cache: false,
                success: function(server_reply) {
                    // console.log(server_reply);
                    if(server_reply=="SUCCESS"){
                        Swal.fire(
                          'Forwarded!',
                          'Your blotter case has been forwarded.',
                          'success'
                        )
                    }
                    else{
                        Swal.fire(
                          'Error!',
                          'There seems to be a problem.',
                          'error'
                        )
                    }
                    
                },
                error: function(xhr, status, error) {
                  alert('Cannot do action: '+console.error(xhr));
                }
            });
        }
    })
}

//filter date
$(document).ready(function(){
  $('#gen').on("click",function(){

      var cfilter = $('#cfilter').val();
      var daily =  $('#daily').val();
      var monthly =  $('#monthly').val();
      var annual1 =  $('#annual1').val();
      var start = $('#start').val();
      var end =  $('#end').val();

    if(start>end){
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Invalid date combination!'
      })
    }
    else{
      $.ajax({
          url:'libraries/getFilter',
          type: 'post',
          dataType:"json",
          data: {
            cfilter:cfilter,
            daily:daily,
            monthly:monthly,
            annual1:annual1,
            start:start,
            end:end
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
    }
      
      function populateDataTable(data) {
        console.log("populating data table...");
        // clear the table before populating it with more data
        $("#example4").DataTable().clear();

        var length = data.length;
        if(length == 0){
          var noResultsRow = $('<tr>').append($('<td>').text('No results found').attr('colspan', '2').addClass('text-center'));
          $('#example4').DataTable().clear().draw();
          $('#example4').DataTable().rows.add(noResultsRow).draw();

        }
        else{
          data.forEach((program, index) => {
              var row = $('<tr>').attr('data-bs-toggle', 'modal').attr('data-bs-target', '#exampleModal').addClass('cursor-pointer').click(() => {
                  addInfo(program['id']);
              });
              var image = $('<img>').attr('src', program['image']).addClass('avatar avatar-sm me-3');
              var imageDiv = $('<div>').append(image);
              var fullname = $('<h6>').addClass('mb-0 text-xs').text(program['fullname']);
              var email = $('<p>').addClass('text-xs text-secondary mb-0').text(program['email']);
              var infoDiv = $('<div>').addClass('d-flex flex-column justify-content-center').append(fullname, email);
              var mainDiv = $('<div>').addClass('d-flex px-2 py-1').append(imageDiv, infoDiv);
              var td1 = $('<td>').append(mainDiv);

              var blotterId = $('<p>').addClass('text-xs text-center font-weight-bold mb-0').text(program['id']);
              var td2 = $('<td>').append(blotterId);

              var spanDateTime = $('<span>').addClass('text-secondary text-xs font-weight-bold').text(program['dt_reported']);
              var td3 = $('<td>').addClass('align-middle text-center').append(spanDateTime);

              var remarksDiv = $('<div>').addClass('text-secondary text-xs text-center font-weight-bold').text(program['remarks']);
              var td4 = $('<td>').append(remarksDiv);

              row.append(td1, td2, td3, td4);
              $('#example4').dataTable().fnAddData(row);
          });
        }
      }
  });
});

$(document).ready(function(){
  $('#allForward').on("click",function(){
    var checkboxes1 = document.querySelectorAll('table tbody input[type="checkbox"]:checked');
    if (checkboxes1.length > 0) {
      var checkedValues = [];
      checkboxes1.forEach((checkbox) => {
        checkedValues.push(checkbox.value);
      });

      $.ajax({
        url:'libraries/forwardAll',
        type: 'post',
        data: {
            checkboxes1 : checkedValues
        },
         cache: false,
         success: function(server_reply) {
          // console.log(server_reply);
          if(server_reply=="SUCCESS"){
              Swal.fire(
                'Forwarded!',
                'Your blotter case has been forwarded.',
                'success'
              ).then((value)=>{
                  if (value){
                    window.location='libraries';
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
                    window.location='libraries';
                  }
                });
          }
         },
         error: function(xhr, status, error) {
         alert('Cannot do action: '+console.error(xhr));
         }
      });
    } else {
      console.log("No checkboxes are checked.");
    }
  });
});



$(document).ready(function(){
  $('#daily').show();
  $('#dailylabel').show();
  $('#monthly, #annual1, #start, #end').hide();
  $('#monthlylabel, #annual1label, #startlabel, #endlabel').hide();
  $('#cfilter').on("change",function(){
    var cfilter = $('#cfilter').val();

    if (cfilter == 'daily') {
      $('#daily').show();
      $('#dailylabel').show();

      $('#monthly, #annual1, #start, #end').hide();
      $('#monthlylabel, #annual1label, #startlabel, #endlabel').hide();



    }
    else if (cfilter == 'monthly') {
      $('#monthly').show();
      $('#monthlylabel').show();

      $('#daily, #annual1, #start, #end').hide();
      $('#dailylabel, #annual1label, #startlabel, #endlabel').hide();




    }
    else if (cfilter == 'annual1') {
      $('#annual1').show();
      $('#annual1label').show();

      $('#daily, #monthly, #start, #end').hide();
      $('#dailylabel, #monthlylabel, #startlabel, #endlabel').hide();




    }
    else if (cfilter == 'custom') {
      $('#start, #end').show();
      $('#startlabel, #endlabel').show();

      $('#daily, #monthly, #annual1').hide();
      $('#dailylabel, #monthlylabel, #annual1label').hide();




    }
  });
});
