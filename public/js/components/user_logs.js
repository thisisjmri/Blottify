$(document).ready(function(){
  $('#gen').on("click",function(){

    var location = $('#location').val();
    var start =  $('#start').val();
    var end =  $('#end').val();
    var kind =  $('#kind').val();
    var cfilter =  $('#cfilter').val();
    var daily =  $('#daily').val();
    var monthly =  $('#monthly').val();
    var annual1 =  $('#annual1').val();

     // alert(location+" "+start+" "+end+" "+kind);
    $.ajax({
        url:'user_logs/getResults',
        type: 'post',
        dataType:"json",
        data: {
          location:location,
          start:start,
          end:end,
          kind:kind,
          cfilter:cfilter,
          daily:daily,
          monthly:monthly,
          annual1:annual1
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
    $("#example1").DataTable().clear();

    var length = data.length;
    if(length == 0){
          var noResultsRow = $('<tr>').append($('<td>').text('No results found').attr('colspan', '2').addClass('text-center'));
          $('#example1').DataTable().clear().draw();
          $('#example1').DataTable().rows.add(noResultsRow).draw();

        }
        else{
      data.forEach((program,index)=>{
             
        $('#example1').dataTable().fnAddData( [
          program['id'],
          program['fullname'],
          program['activity'],
          program['date_time'],
          program['station_name']
        ]);
              
          })
    }
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
      console.log(cfilter);
      $('#daily').show();
      $('#dailylabel').show();

      $('#monthly, #annual1, #start, #end').hide();
      $('#monthlylabel, #annual1label, #startlabel, #endlabel').hide();



    }
    else if (cfilter == 'annual1') {
      console.log(cfilter);
      $('#annual1').show();
      $('#annual1label').show();

      $('#daily, #monthly, #start, #end').hide();
      $('#dailylabel, #monthlylabel, #startlabel, #endlabel').hide();




    }
    else if (cfilter == 'custom') {
      console.log(cfilter);
      $('#start, #end').show();
      $('#startlabel, #endlabel').show();

      $('#daily, #monthly, #annual1').hide();
      $('#dailylabel, #monthlylabel, #annual1label').hide();




    }
    else {
      console.log(cfilter);
      $('#monthly').show();
      $('#monthlylabel').show();

      $('#daily, #annual1, #start, #end').hide();
      $('#dailylabel, #annual1label, #startlabel, #endlabel').hide();




    }
  });
});

//filter date
// $(document).ready(function(){
//   $('#gen').on("click",function(){

//       var cfilter = $('#cfilter').val();
//       var daily =  $('#daily').val();
//       var monthly =  $('#monthly').val();
//       var annual1 =  $('#annual1').val();
//       var start = $('#start').val();
//       var end =  $('#end').val();

//       console.log(monthly);

//     if(start>end){
//       Swal.fire({
//         icon: 'error',
//         title: 'Oops...',
//         text: 'Invalid date combination!'
//       })
//     }
//     else{
//       $.ajax({
//           url:'admin_libraries/getFilter',
//           type: 'post',
//           dataType:"json",
//           data: {
//             start:start,
//             end:end
//           },
//           cache: false,
//           success:function(response){
//             console.log(response);
//             populateDataTable(response);
            
//           },
//          error: function(xhr, status, error) {
//         console.log('Cannot do action: ' + error + '\nServer response: ' + xhr.responseText);
//         }
//       });
//     }
      
//       function populateDataTable(data) {
//         console.log("populating data table...");
//         // clear the table before populating it with more data
//         $("#example4").DataTable().clear();

//         var length = data.length;
//         if(length == 0){
//           var noResultsRow = $('<tr>').append($('<td>').text('No results found').attr('colspan', '2').addClass('text-center'));
//           $('#example4').DataTable().clear().draw();
//           $('#example4').DataTable().rows.add(noResultsRow).draw();

//         }
//         else{
//           data.forEach((program, index) => {
//               var row = $('<tr>').attr('data-bs-toggle', 'modal').attr('data-bs-target', '#exampleModal').addClass('cursor-pointer').click(() => {
//                   setStatus(program['id']);
//               });
//               var image = $('<img>').attr('src', program['image']).addClass('avatar avatar-sm me-3');
//               var imageDiv = $('<div>').append(image);
//               var fullname = $('<h6>').addClass('mb-0 text-xs').text(program['fullname']);
//               var email = $('<p>').addClass('text-xs text-secondary mb-0').text(program['email']);
//               var infoDiv = $('<div>').addClass('d-flex flex-column justify-content-center').append(fullname, email);
//               var mainDiv = $('<div>').addClass('d-flex px-2 py-1').append(imageDiv, infoDiv);
//               var td1 = $('<td>').append(mainDiv);

//               var blotterId = $('<p>').addClass('text-xs text-center font-weight-bold mb-0').text(program['id']);
//               var td2 = $('<td>').append(blotterId);

//               var spanDateTime = $('<span>').addClass('text-secondary text-xs font-weight-bold').text(program['dt_reported']);
//               var td3 = $('<td>').addClass('align-middle text-center').append(spanDateTime);

//               var remarksDiv = $('<div>').addClass('text-secondary text-xs text-center font-weight-bold').text(program['remarks']);
//               var td4 = $('<td>').append(remarksDiv);

//               row.append(td1, td2, td3, td4);
//               $('#example4').dataTable().fnAddData(row);
//           });
//         }
//       }
//   });
// });