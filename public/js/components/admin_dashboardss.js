$(document).ready(function() {
    var ctx = $("#chart-line");
    var myLineChart;

    // Fetch data using AJAX
    $.ajax({
        url: 'admin_dashboardss/genChart',
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
      url:'admin_dashboardss/getResults',
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