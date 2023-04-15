function displayNotifications(notifications) {
      var container = document.getElementById("notifications-container");
      container.innerHTML = "";
      notifications.forEach(function(notification) {
        var html = "<li class='mb-2' >";
        html += "<a class='dropdown-item border-radius-md cursor-pointer' data-bs-toggle='modal' data-bs-target='#exampleModal' onclick='notifInfo("+notification.blotter_id+","+notification.isread+")' style='background-color: "+notification.color+"' href='javascript:;'>";
        html += "<div class='d-flex py-1'  > <div class='my-auto'> <img src='uploads/profile_image/" + notification.image +"' class='avatar avatar-sm  me-3'> </div>";
        html += "<div class='d-flex flex-column justify-content-center'><h6 class='text-sm font-weight-normal mb-1'><span class='font-weight-bold'>" + notification.fullname + "</span> forwarded a blotter: <br>";
        html += "Case #"+notification.blotter_id+"</h6> <p class='text-xs text-secondary mb-0'><i class='fa fa-home me-1'></i>"+notification.station_name+"</p>";
        html += "<p class='text-xs text-secondary mb-0'><i class='fa fa-clock me-1'></i>"+notification.time+"</p></div>";
        html += "</div></a></li>";
        container.innerHTML += html;
      });
    }

    function getNotifications() {
      return new Promise((resolve, reject) => {
        $.ajax({
          type: "post",
          url: "dashboardss/getNotifications",
          success: function(response) {
            console.log(response);
            var notifications = JSON.parse(response);
            displayNotifications(notifications);
            updateBadge(notifications.length);
            resolve(notifications);
          },
          error: function(xhr, status, error) {
            console.log("Error getting notifications: " + error);
            reject(error);
          }
        });
      });
    }

    setInterval(() => {
      getNotifications()
        .then((notifications) => {
          // console.log(notifications);
        })
        .catch((error) => {
          console.log(error);
        });
    }, 2000);

    function updateBadge(count) {
      var badge = document.getElementById("notification-badge");
      return new Promise((resolve, reject) => {
        $.ajax({
          type: "post",
          url: "dashboardss/getCount",
          success: function(response) {
            var notifications = response;
            console.log(notifications);
            badge.innerText = notifications;
            if (notifications > 0) {
              badge.classList.add("badge");
              badge.classList.add("rounded-pill");
              badge.style.display = "block";  
            } else {
              badge.style.display = "none";
            }
            resolve(notifications);
          },
          error: function(xhr, status, error) {
            console.log("Error getting notifications count: " + error);
            reject(error);
          }
        });
      });
    }

// Show notifications container when user clicks on bell icon
var bellIcon = document.getElementById("bell");
bellIcon.addEventListener("click", function() {
  // Make an AJAX request to set the notifications as "open"
  $.ajax({
    type: "post",
    url: "dashboardss/setOpen",
    success: function(response) {
      // console.log(response);
      if (response == 1) {
        document.getElementById("notifications-container").classList.add("show");
      }
    },
    error: function(xhr, status, error) {
      console.log("Error setting notifications as open: " + error);
    }
  });
});

// Hide notifications container when user clicks outside it
document.addEventListener("click", function(event) {
  var target = event.target;
  var container = document.getElementById("notifications-container");
  if (!target.closest("#bell") && !target.closest("#notifications-container")) {
    container.classList.remove("show");
  }
});

$(document).ready(function() {
    var ctx = $("#chart-line");
    var myLineChart;

    // Fetch data using AJAX
    $.ajax({
        url: 'dashboardss/genChart',
        method: 'POST',
        dataType: 'json', 
        success: function(data) {
          // console.log(data);

          var chartData = {
              labels: ["Tagum City"], // Initialize empty array for labels
              datasets: []
          };

          for(var i = 0; i < data.length; i++) {
              var crime = data[i];
              chartData.datasets.push({
                  label: crime.crime_name,
                  data: [crime.count],
                  borderColor: crime.borderColor,
                  backgroundColor: crime.backgroundColor,
                  fill: true
              });
          }

          // Update chart with received data
          myLineChart = new Chart(ctx, {
              type: 'bar',
              data: chartData,
              options: {
                  title: {
                      display: true,
                      text: crime.remarks,
                  },
                  scales: {
                    xAxes: [{
                      scaleLabel: {
                        display: true,
                        // labelString: 'Type of Crime'
                      }
                    }],
                    yAxes: [{
                      scaleLabel: {
                        display: true,
                        // labelString: 'Number of Crime Reports'
                      },
                      ticks: {
                        beginAtZero: true
                      }
                    }]
                  }
              }
          });
      },

        error: function(error) {
            console.log(error);
        }
    });
});

function addInfo(id){
  var place = "";
  var crime = "";
  var brgy = "";

  // var promise = new Promise(function(resolve, reject) {
    $.ajax({
      url:'dashboardss/getResults',
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
        console.log(server_reply);

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

function notifInfo(id,isread){
  var place = "";
  var crime = "";
  var brgy = "";

    $.ajax({
      url:'dashboardss/getNResults',
      type: 'post',
      dataType: "json",
      data: {
          id : id,
          isread : isread
      },
      cache: false,
      success: function(server_reply) {
        var obj = server_reply;
        console.log(server_reply);

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