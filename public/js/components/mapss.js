// BACK END JS FOR CHART. SOURCE: DAQUIL

// $(document).ready(function() {
//   //SIDE PANEL CHART
//     var ctx = $("#chart-line");
//     var myLineChart = new Chart(ctx, {
//         type: 'bar',
//         data: {
//             labels: ["Tagum City"],
//             datasets: [{
//                 data: [86],
//                 label: "Theft",
//                 borderColor: "#cc8f5e",
//                 backgroundColor:'#cc8f5e',

//                 fill: false
//             }, {
//                   data: [282],
//                   label: "Rape",
//                   borderColor: "#5ecc93",
//                   fill: true,
//                   backgroundColor:'#5ecc93'
                
//             },{
//                   data: [25],
//                   label: "Missing",
//                   borderColor: "#5e9bcc",
//                   fill: true,
//                   backgroundColor:'#5e9bcc'
                
//             },{
//                   data: [252],
//                   label: "Crime 1",
//                   borderColor: "#c8cc5e",
//                   fill: true,
//                   backgroundColor:'#c8cc5e'
                
//             }, {
//                 data: [168],
//                 label: "Crime 2",
//                 borderColor: "#cc5e76",
//                 fill: false,
//                 backgroundColor:'#cc5e76'
                
//             }]
//         },
//         options: {
//             title: {
//                 display: true,
//                 text: 'A graph showing crime reports recorded between March 12 -  March 14, 2023',

//             }
//         }
//     });
// });
//END FOR CHART


//set maximum day for start date and end date filter
var today = new Date().toISOString().split('T')[0];
document.getElementById("start").setAttribute('max', today);
document.getElementById("end").setAttribute('max', today);
document.getElementById("daily").setAttribute('max', today);
document.getElementById("annual1").setAttribute('max', today);

var todaym = new Date();
var yearMonth = todaym.toISOString().slice(0,7);
document.getElementById("monthly").setAttribute("max", yearMonth);

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


///////////TABLE
  //LEGEND TABLE
   $(function () {
  $("#example9").DataTable({
    "responsive": true,
    "lengthChange": false,
    "autoWidth": false,
    "searching": false, // Remove search functionality
    "dom": 'Pfrtip', // Show only pagination
    "language": {
      "paginate": {
        "previous": "&lt;", // Replace previous button text with an arrow
        "next": "&gt;" // Replace next button text with an arrow
      }
    }
  }).buttons().container().appendTo('#example9_wrapper .col-md-6:eq(0)');
  
  // Add CSS to make the table very tiny
  $("#example9").addClass("table-sm");
  $("#example9_wrapper").addClass("small");


  $('#example').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": false,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
  });
});

$(function () {
  $("#example5").DataTable({
    "responsive": true,
    "lengthChange": false,
    "autoWidth": false,
    "buttons": [

      { extend: "excel", className: "btn p-1 px-3 btn-dark" },
      { extend: "pdf", className: "btn p-1 px-3 btn-dark" },
      { extend: "print", className: "btn p-1 px-3 btn-dark" },
      { extend: "csv", className: "btn p-1 px-3 btn-dark" }

    ]
  }).buttons().container().appendTo('#example5_wrapper .col-md-6:eq(0)');

  $('#example').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": false,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
  });
});

//////////CHART FROM ANDALES

      //   $(document).ready(function() {
      //   //SIDE PANEL CHART
      //     var ctx = $("#chart-line1");
      //     var myLineChart = new Chart(ctx, {
      //         type: 'bar',
      //         data: {
      //             labels: ["Tagum City"],
      //             datasets: [{
      //                 data: [86],
      //                 label: "Theft",
      //                 borderColor: "#cc8f5e",
      //                 backgroundColor:'#cc8f5e',

      //                 fill: false
      //             },{
      //                 data: [168],
      //                 label: "Crime 2",
      //                 borderColor: "#cc5e76",
      //                 fill: false,
      //                 backgroundColor:'#cc5e76'
                      
      //             }]
      //         },
      //         options: {
      //             title: {
      //                 display: true,
      //                 text: 'A graph showing crime reports recorded between March 12 -  March 14, 2023',

      //             }
      //         }
      //     });
      // });

//////// DOWNLOAD CANVAS

//download canvas
      function downloadCanvas() {
     // Get the canvas element
     const canvas = document.getElementById("chart-line1");

     // Create a link element
     const link = document.createElement("a");

     // Set the link's href attribute to the data URL of the canvas image
     link.href = canvas.toDataURL();

     // Set the link's download attribute to the desired filename
     link.download = "tagumcity_crimereport.png";

     // Add the link element to the page
     document.body.appendChild(link);

     // Click the link to download the image
     link.click();

     // Remove the link from the page
     document.body.removeChild(link);
   }

//SET SVG TO ADJUST ON SCREEN SIZE
  function resize() {
    var svg = document.getElementById("limit-svg");
    var width = window.innerWidth;
    var height = window.innerHeight;
    svg.setAttribute("viewBox", "0 0 " + width + " " + height);
  }
  window.addEventListener("resize", resize);
  resize();

    // Don't use window.onLoad like this in production, because it can only listen to one function.
    window.onload = function() {
    var beforePan = function(oldPan, newPan){
    var stopHorizontal = false
      , stopVertical = false
      , gutterWidth = 1000
      , gutterHeight = 500
        // Computed variables
      , sizes = this.getSizes()
      , leftLimit = -((sizes.viewBox.x + sizes.viewBox.width) * sizes.realZoom) + gutterWidth
      , rightLimit = sizes.width - gutterWidth - (sizes.viewBox.x * sizes.realZoom)
      , topLimit = -((sizes.viewBox.y + sizes.viewBox.height) * sizes.realZoom) + gutterHeight
      , bottomLimit = sizes.height - gutterHeight - (sizes.viewBox.y * sizes.realZoom)

    // Disable panning beyond SVG viewport limits
    if (newPan.x < leftLimit || newPan.x > rightLimit) {
      stopHorizontal = true
    }
    if (newPan.y < topLimit || newPan.y > bottomLimit) {
      stopVertical = true
    }

    var customPan = {}
    customPan.x = stopHorizontal ? oldPan.x : newPan.x
    customPan.y = stopVertical ? oldPan.y : newPan.y

    return customPan
  }
};

// // <g elements
//   document.getElementById('triggerBtn').addEventListener('click', function() {
//   // Create the <g> element
//   var gElement1 = document.createElementNS('http://www.w3.org/2000/svg', 'g');
//   gElement1.setAttribute('class', 'pinn');
//   gElement1.setAttribute('transform', 'translate(373.8607177734375,466.9559326171875)');
  
//   // Create the <svg> element
//   var svgElement1 = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
//   svgElement1.setAttribute('width', '24');
//   svgElement1.setAttribute('height', '36');
//   svgElement1.setAttribute('viewBox', '0 0 24 36');
  
//   // Create the <g> element inside the <svg> element
//   var innerElement1 = document.createElementNS('http://www.w3.org/2000/svg', 'g');
//   innerElement1.setAttribute('transform', 'scale(0.2)');
  
//   // Create the <path> element inside the inner <g> element
//   var pathElement1 = document.createElementNS('http://www.w3.org/2000/svg', 'path');
//   pathElement1.setAttribute('id', 'madaum_pinnn');
//   pathElement1.setAttribute('d', 'M20,10A10,10 0 1,0 0,10A10,10 0 1,0 20,10');
//   pathElement1.setAttribute('fill', 'white');
  
//   // Append the elements to the DOM
//   innerElement1.appendChild(pathElement1);
//   svgElement1.appendChild(innerElement1);
//   gElement1.appendChild(svgElement1);
//   document.getElementById('pagss').appendChild(gElement1);
//   console.log(pathElement1);
//   });



// START OF ZOOM IN AND ZOOM OUT CODE. UNCOMMENT THIS TO ZOOM IN AND OUT THE MAPS
    var myPath = document.getElementById('madaum_zoom');
    var myButtonE = document.getElementById('buttonE');
    var myButtonD = document.getElementById('downloadB');
    var mySide = document.getElementById('sidebar1');
    var myLegend = document.getElementById('legend_container');
    var myModal = document.querySelector("#trigger");
    var myButton = document.getElementById('statistical');
    var myNav = document.getElementById('navbarr');
    var svg = myPath.closest('svg');
    var animationDuration = 0.8;
    var originalViewBox = svg.getAttribute('viewBox');
    let zoomed = false;
    myLegend.style.display = 'none';

    var locations = { apokon: 10, bincungan: 5, busaon: 6, canocotan: 10, cuambogan: 8, lafilipina: 8, liboganon: 7, madaum: 12, magdum: 7, magugpopoblacion: 10, magugpoeast: 10, magugponorth: 5, magugposouth: 5, magugpowest: 11, mankilam: 10, newbalamban: 3, nuevafuerza: 3, pagsabangan: 4, pandapan: 4, sanagustin: 4, sanisidro: 5, sanmiguel: 8, visayanvillage: 6};
    var zoomclass = { apokon: "st6", bincungan: "st3", busaon: "st4", canocotan: "st4", cuambogan: "st4", lafilipina: "st5", liboganon: "st9", madaum: "st3", magdum: "st3", magugpopoblacion: "st3", magugpoeast: "st14", magugponorth: "st11", magugposouth: "st9", magugpowest: "st4", mankilam: "st3", newbalamban: "st3", nuevafuerza: "st3", pagsabangan: "st4", pandapan: "st6", sanagustin: "st8", sanisidro: "st5", sanmiguel: "st5", visayanvillage: "st6"};
    var brgyList = ["apokon", "bincungan", "busaon", "canocotan", "cuambogan", "lafilipina", "liboganon", "madaum", "magdum", "magugpopoblacion", "magugpoeast", "magugponorth", "magugposouth", "magugpowest", "mankilam", "newbalamban", "nuevafuerza", "pagsabangan", "pandapan", "sanagustin", "sanisidro", "sanmiguel", "visayanvillage"];

    //hides all locations
    for (let key in locations) {
        let length = locations[key];
        for (var i=1; i <= length; i++) {
            var id = key+"_loc"+i;
            document.getElementById(id).parentNode.style.display = 'none';
        }
    }

    var limitsvg = document.getElementById("limit-svg"); //this is the svg
    var myPath;
    var brgy;
    var myText;
    var myPin;
    var path;

    limitsvg.addEventListener('click', function(event) {
      var clickedElement = event.target;
      myPath = clickedElement.getAttribute('id');//madaum_zoom

      if (myPath != null && myPath.endsWith("_zoom")) {
        // Do something with the path ID ;console.log('Clicked path ID:', myPath);
       
        brgy = myPath.split("_zoom")[0];//Get the brgy name of the zoomed element
        // console.log(brgy);
        // console.log(zoomclass[brgy]);
        document.getElementById(myPath).classList.add(zoomclass[brgy]); //Add class for brgy to reset the maps default color
        myText = document.getElementById(brgy+"_text"); //Get brgy name
        myPin = document.getElementById(brgy+"_pin");//Get brgy pin
        document.getElementById("statistical").innerHTML = "View Statistical Data of Barangay "+brgy;//change button name acc to brgy

        
        //RESETING TEXT
        for (var i = 0; i < brgyList.length; i++) {
          let a = brgyList[i] + "_text";
          let b = document.getElementById(a);
          let c = brgyList[i] + "_pin";
          let d = document.getElementById(c);
          
          if (b && d) {
            b.style.display = 'block';
            d.style.display = 'block';
          }
        }

        if (zoomed) {
            event.stopPropagation();
            // stop the click event from bubbling up to the document map-object
          } 
          else { 
            const pathElement = document.getElementById(myPath);
            const { x, y, width, height } = pathElement.getBBox();
            const viewBox = `${x} ${y} ${width} ${height}`;
            gsap.to(svg, { duration: animationDuration, attr: { viewBox } });
            // gsap.to(myText, { duration: animationDuration, scale: 0.5 });
            // gsap.to(myPin, { duration: animationDuration, scale: 0.5 });
            gsap.to(mySide, { duration: animationDuration, x: '-110%', ease: 'power2.inOut' }); // slide the sidebar out
            gsap.to(myButton, { duration: animationDuration, y: '-50%', ease: 'power2.inOut' });

            if (myText.hasAttribute('style')) {
                myText.style.display = 'none';
                myPin.style.display = 'none';
                myButton.style.display ='block';
            }

            //SETTING LOCATIONS
            //hides all location 
            for (let key in locations) {
                let length = locations[key];
                for (var i=1; i <= length; i++) {
                    var id = key+"_loc"+i;
                    document.getElementById(id).parentNode.style.display = 'none';
                }
            }
            //display location of current brgy
            for (var i=1; i <= locations[brgy]; i++) {
                var id = brgy+"_loc"+i;
                document.getElementById(id).parentNode.style.display = 'block';
            }


            //SETTING PATH COLOR
            var allPaths = svg.querySelectorAll('path');
            allPaths.forEach((path) => {
              // Code to turn all unclicked paths to original color before assigning to color. this is like a reset
              setTimeout(() => {
                let element = document.getElementById(path.id);
                if (element) {
                  element.classList.remove("st21");
                }
              }, 1000); // delay
              // Code to turn all unclicked paths to gray with a delay
              if (!path.id.startsWith(brgy) && path.id.endsWith("_zoom")) {
                setTimeout(() => {
                  let element = document.getElementById(path.id);
                  if (element) {
                    element.classList.add("st21");
                  }
                }, 1000); // delay
              }
            });

            // zoomed = true;
          }    
      }
    });

    //When any element outside of the SVG is clicked (unzoom)
    document.addEventListener('click', (event) => {
        var clickedElement1 = event.target;
        console.log("myPath:"+myPath);
        var hiddenzoom = document.getElementById("hiddenzoom").value;
        myPath1 = clickedElement1.getAttribute('id');
        console.log("path1:"+myPath1);

        //zoomout if not filtered
        if (hiddenzoom == 0 && myPath1 !== floatingCircle && myPath1 !== null && myPath1 !== myButton.id && !myNav.contains(event.target) && myPath1 !== "filter_button" && (myPath1 !== myPath || myPath1 === "limit-svg") && myPath1 !== myButtonE && !myModal.contains(event.target)){
          gsap.to(svg, { duration: animationDuration, attr: { viewBox: originalViewBox } });
          gsap.to(myText, { duration: animationDuration, scale: 1 });
          gsap.to(myPin, { duration: animationDuration, scale: 1 });
          gsap.to(mySide, { duration: animationDuration, x: '2%', ease: 'power2.inOut' }); // slide the sidebar back in
          gsap.to(myButton, { duration: animationDuration, y: '300%', ease: 'power2.inOut' });

          // hide the location element
            if (myText!=null) {
                myText.style.display = 'block';
                myPin.style.display = 'block';
                mySide.style.display = 'block';
                myButton.style.display = 'block';
            }
          //hides location 
            for (var i=1; i <= locations[brgy]; i++) {
                var id = brgy+"_loc"+i;
                document.getElementById(id).parentNode.style.display = 'none';
            }

            //SETTING PATH COLOR
            var allPaths = svg.querySelectorAll('path');
            allPaths.forEach((path) => {
              // Code to turn all unclicked paths to original color before assigning to color. this is like a reset
              setTimeout(() => {
                let element = document.getElementById(path.id);
                if (element) {
                  element.classList.remove("st21");
                }
              }, 1000);
            });
          zoomed = false;
        }

        //zoomout if filtered
        if (hiddenzoom == 1 && myPath1 !== floatingCircle && myPath1 !== null && myPath1 !== myButton.id && !myNav.contains(event.target) && myPath1 !== "filter_button" && (myPath1 !== myPath || myPath1 === "limit-svg") && myPath1 !== myButtonE && !myModal.contains(event.target)){
          gsap.to(svg, { duration: animationDuration, attr: { viewBox: originalViewBox } });
          gsap.to(myText, { duration: animationDuration, scale: 1 });
          gsap.to(myPin, { duration: animationDuration, scale: 1 });
          gsap.to(mySide, { duration: animationDuration, x: '2%', ease: 'power2.inOut' }); // slide the sidebar back in
          gsap.to(myButton, { duration: animationDuration, y: '300%', ease: 'power2.inOut' });

        console.log("hide: "+hiddenzoom);
          // hide the location element
            if (myText!=null) {
                myText.style.display = 'block';
                myPin.style.display = 'block';
                mySide.style.display = 'block';
                myButton.style.display = 'block';
            }
          //hides location 
            for (var i=1; i <= locations[brgy]; i++) {
                var id = brgy+"_loc"+i;
                document.getElementById(id).parentNode.style.display = 'none';
            }

            //SETTING PATH COLOR
            var allPaths = svg.querySelectorAll('path');
            allPaths.forEach((path) => {
              // Code to turn all unclicked paths to original color before assigning to color. this is like a reset
              setTimeout(() => {
                let element = document.getElementById(path.id);
                if (element) {
                  element.removeAttribute('class');
                }
              }, 1000);
            });
          zoomed = false;
        }
    });

//END OF ZOOM IN/OUT


 document.getElementById("floatingCircle").addEventListener("click", function() {
  document.getElementById("navbarr").classList.toggle("open");
});

document.getElementById("closeButton").addEventListener("click", function() {
  document.getElementById("navbarr").classList.remove("open");
});

//START OF DAQUIL OLD SCRIPT FOR BACKEND
var crime;
var start;
var end;
var cfilter;
var daily;
var monthly;
var annual1;
$(document).ready(function(){
  $('#generate').on("click",function(){
    crime = $('#crime').val();
    start = $('#start').val();
    end =  $('#end').val();
    cfilter =  $('#cfilter').val();
    daily =  $('#daily').val();
    monthly =  $('#monthly').val();
    annual1 =  $('#annual1').val();

    //THIS CODE WILL ONLY SET COLOR FOR EACH BRGY IN MAPS
    $.ajax({
        url: 'mapss/setGencolor',
        method: 'POST',
        data: {
          crime:crime,
          start:start,
          end:end,
          cfilter:cfilter,
          daily:daily,
          monthly:monthly,
          annual1:annual1
        },
        success: function(data) {
            document.getElementById("hiddenzoom").value = 1;
            var data = JSON.parse(data);
            var arr = data.arr;
            var circles = data.circles;
            var legend = data.legend;
            populateDataTable(legend);
            // console.log(legend);
            var zoom = ["apokon_zoom", "bincungan_zoom", "busaon_zoom", "canocotan_zoom", "cuambogan_zoom", "lafilipina_zoom", "liboganon_zoom", "madaum_zoom", "magdum_zoom", "magugpopoblacion_zoom", "magugpoeast_zoom", "magugponorth_zoom", "magugposouth_zoom", "magugpowest_zoom", "mankilam_zoom", "newbalamban_zoom", "nuevafuerza_zoom", "pagsabangan_zoom", "pandapan_zoom", "sanagustin_zoom", "sanisidro_zoom", "sanmiguel_zoom", "visayanvillage_zoom"];
            for(var a=0; a<arr.length; a++){
                if(arr[a]['crime_color']==''){
                  document.getElementById(zoom[a]).removeAttribute("class");
                  document.getElementById(zoom[a]).setAttribute("fill", "#bab8b8");
                }else{
                  document.getElementById(zoom[a]).removeAttribute("class");
                  document.getElementById(zoom[a]).setAttribute("fill", arr[a]['crime_color']);
                }
            }

            // loop through the array and remove each <path> element to reset
            var gElements = document.querySelectorAll('path');
            gElements.forEach(gElement => {
              if (gElement.id.endsWith('circless')) {
                console.log(gElement.id);
                gElement.remove();

              }
            });

            //check if the user already zoom in to brgy before setting filter
            if(myPath != "limit-svg"){
                if(myPath instanceof SVGPathElement){
                    console.log("if:"+myPath.id);
                    document.getElementById(myPath.id).setAttribute("class", zoomclass[brgy]);
                }
                else{
                    console.log("else:"+myPath);
                    document.getElementById(myPath).setAttribute("class", zoomclass[brgy]);
                    var allPaths = svg.querySelectorAll('path');
                    allPaths.forEach((path) => {
                      // Code to turn all unclicked paths to gray with a delay
                      if (!path.id.startsWith(brgy) && path.id.endsWith("_zoom")) {
                          let element = document.getElementById(path.id);
                          if (element) {
                            element.classList.add("st21");
                          }
                      }
                    });
                }
            }

            //LOOP FOR PINNED LOCATION
            for (var i=0; i<circles.length; i++) {
                for(var j=0; j<circles[i].length; j++){
                    if(typeof circles[i][j]['location'] !== 'undefined'){ 
                          var gElement1 = document.createElementNS('http://www.w3.org/2000/svg', 'g');
                          gElement1.setAttribute('class', 'pinn');
                          gElement1.setAttribute('transform', circles[i][j]['location']);
                          
                          var svgElement1 = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
                          svgElement1.setAttribute('width', '24');
                          svgElement1.setAttribute('height', '36');
                          svgElement1.setAttribute('viewBox', '0 0 24 36');
                          
                          var innerElement1 = document.createElementNS('http://www.w3.org/2000/svg', 'g');
                          innerElement1.setAttribute('transform', 'scale(0.2)');
                          
                          var circle_id = brgyList[circles[i][j]['id']-1]+(j+1)+"circless";
                          var pathElement1 = document.createElementNS('http://www.w3.org/2000/svg', 'path');
                          pathElement1.setAttribute('id', circle_id);
                          pathElement1.setAttribute('d', 'M20,10A10,10 0 1,0 0,10A10,10 0 1,0 20,10');
                          pathElement1.setAttribute('fill', circles[i][j]['crime_color']);
                          
                          innerElement1.appendChild(pathElement1);
                          svgElement1.appendChild(innerElement1);
                          gElement1.appendChild(svgElement1);
                          document.getElementById('pagss').appendChild(gElement1);
                          // console.log(circle_id);
                    }        
                }    
            }
        },
        error: function(xhr, status, error) {
            alert('Cannot do action: '+console.error(xhr));
        }
    });
      function populateDataTable(data) {
        console.log("populating data table...");
        // clear the table before populating it with more data
        $("#example9").DataTable().clear();
              
          data.forEach((program, index) => {
              var legendBox = $('<div>').addClass('legend-box me-2').css('background-color', program['crime_color']);
              var spanCrimeName = $('<span>').text(program['crime_name']);
              var divLegend = $('<div>').addClass('d-flex align-items-center mb-0').append(legendBox, spanCrimeName);
              var td1 = $('<td>').append(divLegend);

              var tr = $('<tr>').append(td1);
              $('#example9').dataTable().fnAddData(tr);
          });

          var td1 = $('<td>');
          var divContainer = $('<div>').addClass('d-flex align-items-center mb-0 py-2');
          var icon = $('<i>').addClass('fas fa-map-marker-alt').css('color', 'red').css('font-size', '2em');
          var spanText = $('<span>').html('&nbsp; &nbsp; &nbsp;Location');
          divContainer.append(icon, spanText);
          td1.append(divContainer);

          var tr = $('<tr>').append(td1);
          $('#example9').dataTable().fnAddData(tr);

          // var legendBox = $('<div>').addClass('legend-box me-2').css('background-color', "red");
          // var spanCrimeName = $('<span>').text("Location");
          // var divLegend = $('<div>').addClass('d-flex align-items-center mb-0').append(legendBox, spanCrimeName);
          // var td1 = $('<td>').append(divLegend);

          // var tr = $('<tr>').append(td1);
          // $('#example9').dataTable().fnAddData(tr);

          var legendBox = $('<div>').addClass('legend-box me-2').css('background-color', "#bab8b8");
          var spanCrimeName = $('<span>').text("No data");
          var divLegend = $('<div>').addClass('d-flex align-items-center mb-0').append(legendBox, spanCrimeName);
          var td1 = $('<td>').append(divLegend);

          var tr = $('<tr>').append(td1);
          $('#example9').dataTable().fnAddData(tr);

            myLegend.style.display ='block';
      }
  });
});



//START OF DATATABLE AND CHART CODE
$(document).ready(function(){
  $('#statistical').on("click", function(){
    console.log("stat:"+brgy);

    // Create a new canvas element
    var canvas = document.createElement('canvas');

    // Set the canvas attributes
    canvas.id = 'chart-line1';
    canvas.width = 299;
    canvas.height = 90;
    canvas.setAttribute('position', 'absolute');
    canvas.classList.add('chartjs-render-monitor', 'pb-4', 'pt-2');

    document.getElementById('chartParent').appendChild(canvas);

    $.ajax({
        url: 'mapss/genChart',
        method: 'POST',
        dataType: 'json', 
        data: {
          brgy : brgy,
          crime:crime,
          start:start,
          end:end,
          cfilter:cfilter,
          daily:daily,
          monthly:monthly,
          annual1:annual1
        },
        success: function(data) {
          console.log(data);
          var closeButton = document.getElementById("closeButton");
          closeButton.click();

          //POPULATING CHART
          var ctx = $("#chart-line1");
          var myLineChart;

          var chartData = {
              labels: [], // Initialize empty array for labels
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
          document.getElementById("repTitle").textContent = crime.repTitle;

          //POPULATING DATATABLE
          populateDataTable1(data);
      },
      error: function(error) {
          console.log(error);
      }
    });

    function populateDataTable1(data) {
        console.log("populating data table...");
        // clear the table before populating it with more data
        $("#example5").DataTable().clear();
              
          data.forEach((program, index) => {
            var tr = $('<tr>');
            var td1 = $('<td>').append($('<p>').addClass('text-xs font-weight-bold mb-0').text(program['crime_name']));
            var td2 = $('<td>').addClass('align-middle text-center').append($('<span>').addClass('text-secondary text-xs font-weight-bold').text(program['count']));
            tr.append(td1, td2);
            $('#example5').dataTable().fnAddData(tr);
          });
      }
  });
});

$(document).ready(function(){
  $('#buttonE').on("click", function(){
    // Select the canvas element
    var canvas = document.querySelector('#chart-line1');

    // Remove the canvas element from the document
    canvas.remove();

  });
});

// Initialize modal after document is ready
$(document).ready(function() {
  // Configure modal with backdrop: 'static' option
  $('#trigger').modal({
    backdrop: 'static',
    keyboard: false // Add this option to disable closing the modal with the keyboard 'esc' key
  });

  // Add event listener to the "x" button
  document.getElementById('buttonE').addEventListener('click', function() {
    // Close the modal when "x" button is clicked
    $('#trigger').modal('hide');
  });
});