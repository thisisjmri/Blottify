//SAVING PASSWORD
$(document).ready(function(){
  $('#cnpass').on("keyup", function() {
  var npass = $('#npass').val();
  var cnpass = $('#cnpass').val();
  
  if (npass !== cnpass || !document.getElementById("npass").checkValidity()) {
    $('#npass').removeClass("is-valid").addClass("is-invalid");
    $('#cnpass').removeClass("is-valid").addClass("is-invalid");
    $('#changee').prop("disabled", true);
  } else {
    $('#npass').removeClass("is-invalid").addClass("is-valid");
    $('#cnpass').removeClass("is-invalid").addClass("is-valid");
    $('#changee').prop("disabled", false);
  }
});

  $('#changee').on("click",function(){
    var npass = $('#npass').val();
    var cnpass = $('#cnpass').val();

    if(npass != '' && cnpass != ''){
      $.ajax({
          url:'change_password/updatePassword',
          type: 'post',
          data: {
            npass : npass,
            cnpass : cnpass
          },
          cache: false,
          success: function(data) {
          if(data == 'SUCCESS'){
              Swal.fire("SUCCESSFULLY!","Password Update Successfully", "success")
                  .then((value)=>{
                  if (value){
                    window.location='biometric';
                  }
                });
            }else{
              Swal.fire("ERROR!",data, "error")
                  .then((value)=>{
                  if (value){
                    window.location='change_password';
                  }
                });
            }
          },
          error: function(xhr, status, error) {
          alert('Cannot do action: '+console.error(xhr));
         }
      });
    }
  });
});