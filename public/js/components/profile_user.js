function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
  document.getElementById("savePic").className = "btn bg-gradient-warning";
});

//SAVING PASSWORD
$(document).ready(function(){
  $('#confirm').on("keyup", function() {
  var password = $('#password').val();
  var confirm = $('#confirm').val();
  
  if (password !== confirm || !document.getElementById("password").checkValidity()) {
    $('#password').removeClass("is-valid").addClass("is-invalid");
    $('#confirm').removeClass("is-valid").addClass("is-invalid");
    $('#savePass').prop("disabled", true);
  } else {
    $('#password').removeClass("is-invalid").addClass("is-valid");
    $('#confirm').removeClass("is-invalid").addClass("is-valid");
    $('#savePass').prop("disabled", false);
  }
});

  $('#savePass').on("click",function(){
    var current = $('#current').val();
    var password = $('#password').val();
    var confirm = $('#confirm').val();

    if(current != '' && password != '' && confirm != ''){
      $.ajax({
          url:'profile_user/updatePassword',
          type: 'post',
          data: {
            current : current,
            password : password
          },
          cache: false,
          success: function(data) {
          if(data == 'SUCCESS'){
              Swal.fire("SUCCESSFULLY!","Password Update Successfully", "success")
                  .then((value)=>{
                  if (value){
                    window.location='profile_user';
                  }
                });
            }else{
              Swal.fire("ERROR!",data, "error")
                  .then((value)=>{
                  if (value){
                    window.location='profile_user';
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


//SAVING IMAGE OF THE USER
$(document).ready(function(){
  $('#savePic').on("click",function(){

    var image = $('#imageUpload').val();
    var image2 = ($('#imageUpload'))[0].files[0];
    var imageTester = 0;
    
    var form_data = new FormData();
    form_data.append("image", document.getElementById('imageUpload').files[0]);
    if(image == ''){
      }else {
        if((Math.round(image2.size * 100 / 1048576) / 100) > 2){
          Swal.fire({
                icon: 'error',
                title: 'File Too Large!',
                text: 'File is too large. 2MB can only be accepted. Your file size is '+(Math.round(image2.size * 100 / 1048576) / 100) + ' MB.',
            })
        } else if(image2.name.split('.').pop() != 'jpg' && image2.name.split('.').pop() != 'jpeg' && image2.name.split('.').pop() != 'png'){
           Swal.fire({
                icon: 'error',
                title: 'Incorrect File Format!',
                text: 'Only JPG, JPEG & PNG file types are allowed. ('+image2.name.split('.').pop()+')',
            })
        } else {  
          imageTester = 2;
        }
      }

    if(imageTester == 2 && image != ''){
        $.ajax({
          url:'profile_user/updateProfile',
          dataType: 'text',
          type: 'post',
          data: form_data,
          cache: false,
          contentType: false,
          processData: false,
          success: function(data) {
          console.log(data);
          if(data == 'SUCCESSFULLY'){
              Swal.fire("SUCCESSFULLY!","Picture Updated Successfully", "success")
                  .then((value)=>{
                  if (value){
                    window.location='profile_user';
                  }
                });
            }else{
              Swal.fire("ERROR!","Error in Updating Picture", "error")
                  .then((value)=>{
                  if (value){
                    window.location='profile_user';
                  }
                });
            }
          },
          error: function(xhr, status, error) {
          alert('Cannot do action: '+console.error(xhr));
       // alert(xhr.status);
         }
      });
    }
        

  });
});

//CHECKING DUPLICATE USERNAME
$(document).ready(function(){
  $('#username').on("keyup", function(){
    var username = $('#username').val();
      $.ajax({
        url:'profile_user/checkUsername',
        type: 'post',
        data: {
            username : username
        },
         cache: false,
         success: function(server_reply) {
          if(server_reply=="LIKE"){
            document.getElementById("username").className = "form-control is-invalid";
            document.getElementById("warn").textContent = "Username is already taken";
            document.getElementById("un").textContent = "";
            document.getElementById("husername").value = "1";
            document.getElementById("saveInfo").disabled = true;
          }
          else{
            document.getElementById("username").className = "form-control";
            document.getElementById("warn").textContent = "";
            document.getElementById("un").textContent = "Username";
            document.getElementById("husername").value = "0";
            document.getElementById("saveInfo").disabled = false;
          }
         },
         error: function(xhr, status, error) {
         alert('Cannot do action: '+console.error(xhr));
         }
      });

  });
});

//SAVING PERSONAL INFORMATION OF THE USER
$(document).ready(function(){
  $('#saveInfo').on("click",function(){
    
        var first = $('#firstName').val();
        var middle = $('#middleName').val();
        var last = $('#lastName').val();
        var username = $('#username').val();
        var birthday = $('#birthday').val();
        var station = $('#station').val();
        var email = $('#email').val();
        var mobile = $('#mobile').val();
        var husername = $('#husername').val();

        var form_data = new FormData();

        form_data.append("firstName", document.getElementById('firstName').value);
        form_data.append("middleName", document.getElementById('middleName').value);
        form_data.append("lastName", document.getElementById('lastName').value);
        form_data.append("username", document.getElementById('username').value);
        form_data.append("birthday", document.getElementById('birthday').value);
        form_data.append("station", document.getElementById('station').value);
        form_data.append("email", document.getElementById('email').value);
        form_data.append("mobile", document.getElementById('mobile').value);

          if(husername == 0 && first != ''  && last != '' && username != '' && birthday != '' && email != '' && mobile != '' && station != ''){
          $.ajax({
            url:'profile_user/updateProf',
            dataType: 'text',
            type: 'post',
            data: form_data,
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
              // console.log(data);
            if(data == 'SUCCESS'){
              Swal.fire("SUCCESSFULLY!","Information Successfully Updated", "success")
                  .then((value)=>{
                  if (value){
                    window.location='profile_user';
                  }
                });
            }else{
              Swal.fire("ERROR!","Error in Updating Information", "error")
                  .then((value)=>{
                  if (value){
                    window.location='profile_user';
                  }
                });
             }
            },
            error: function(xhr, status, error) {
            alert('Cannot do action: '+console.error(xhr));
         // alert(xhr.status);
           }
          });
        }else{
          // alert(4);
        }

      
    });
  });