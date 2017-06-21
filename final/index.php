<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Good2GO</title>
 
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->

	<div id="preloader" >
	  <div id="load"></div>
	</div>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <h1>Good2Go</h1>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#intro">Home</a></li>
        <li><a href="#service">Map</a></li>
        <li><a href="#about">About</a></li>
		<li><a href="#contact">Contact</a></li>
        
        <!--<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Example menu</a></li>
            <li><a href="#">Example menu</a></li>
            <li><a href="#">Example menu</a></li>
          </ul>
        </li>
        -->
      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<!-- Section: intro -->
    <section id="intro" class="intro">
    
		<div class="slogan">
			<!-- <h2>WELCOME TO <span class="text_color">SQUAD</span> </h2>
			  -->
			<h4></h4>
		</div>
		
    </section>
	<!-- /Section: intro -->

<!-- Section: services -->
    <section id="service" class="home-section text-center bg-gray">
		
		<div class="container">
			<div>
			    <!-- <input type="button" onclick="showAll()" value="Show Markers">
			    <input type="button" onclick="hideAll()" value="Hide Markers"> -->
			<div id="netart_map" style="width:100%;height:400px"></div>
			<div>
			  <form id="myForm"> 
			    <!-- 緯度 :  -->
			    <input id="Lat" type="hidden" name="fname" readonly><br>
			    <!-- 經度 :  -->
			    <input id="Lng" type="hidden" name="lname" readonly><br>
			    主題 : <input id="act" type="text" name="aname"><br>
			    特色 : <input id="features" type="text" name = "feature_name"><br>
			    類型 :
			    <input type="radio" name="activities" value="shopping" checked>shopping
			    <input type="radio" name="activities" value="party"> party
			    <input type="radio" name="activities" value="study"> study
			    <input type="radio" name="activities" value="sport"> sport
			    <input type="radio" name="activities" value="concert"> concert
			    <input type="radio" name="activities" value="other"> other
			    <br>
			    <!-- <input type="button" onclick="myFunction()" value="Submit form"> -->
			    <input type="button" onclick="loadXMLDoc(1)" value="Submit form">
			  </form>
			</div>

		</div>
	</section>
	<!-- /Section: services -->

	<!-- Section: about -->
    <section id="about" class="home-section text-center">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>About us</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
        <div class="row">
        	<div>
	            <div class="col-xs-6 col-sm-3 col-md-3" style="left:12.5%">
					<div class="wow bounceInUp" data-wow-delay="0.2s">
	                <div class="team boxed-grey">
	                    <div class="inner">
							<h5>Tseng.</h5>
	                        <p class="subtitle">NTU</p>
	                        <div class="avatar"><img src="img/team/1.jpg" alt="" class="img-responsive img-circle" /></div>
	                    </div>
	                </div>
					</div>
	            </div>
				<div class="col-xs-6 col-sm-3 col-md-3" style="left:12.5%">
					<div class="wow bounceInUp" data-wow-delay="0.5s">
	                <div class="team boxed-grey">
	                    <div class="inner">
							<h5>Hsiao.</h5>
	                        <p class="subtitle">NTU</p>
	                        <div class="avatar"><img src="img/team/2.jpg" alt="" class="img-responsive img-circle" /></div>

	                    </div>
	                </div>
					</div>
	            </div>
				<div class="col-xs-6 col-sm-3 col-md-3" style="left:12.5%">
					<div class="wow bounceInUp" data-wow-delay="0.8s">
	                <div class="team boxed-grey">
	                    <div class="inner">
							<h5>Hung.</h5>
	                        <p class="subtitle">NTU</p>
	                        <div class="avatar"><img src="img/team/3.jpg" alt="" class="img-responsive img-circle" /></div>

	                    </div>
	                </div>
					</div>
	            </div>
           	</div>
			
                    </div>
                </div>
				</div>
            </div>
        </div>		
		</div>
	</section>
	

	<!-- Section: contact -->
    <section id="contact" class="home-section text-center">
		<div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Get in touch</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
    <div class="row">
        <div class="col-lg-8">
            <div class="boxed-grey">
                <form id="contact-form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
		
		<div class="col-lg-4">
			<div class="widget-contact">
				<h5>Main </h5>
				
				<address>
				  <strong>Net ART C</strong><br>
				  Nation Taiwan University<br>
				  Taipei, Taiwan<br>
				  <abbr title="Phone">P:</abbr> (02) xxxx-xxxx
				</address>

				<address>
				  <strong>Email</strong><br>
				  <a href="mailto:#">Rxxxxxxxx@ntu.edu.tw</a>
				</address>	
				<address>
				  <strong>We're on social networks</strong><br>
                       	<ul class="company-social">
                            <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-dribble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                            <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        </ul>	
				</address>					
			
			</div>	
		</div>
    </div>	

		</div>
	</section>
	<!-- /Section: contact -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
					<div class="page-scroll marginbot-30">
						<a href="#intro" id="totop" class="btn btn-circle">
							<i class="fa fa-angle-double-up animated"></i>
						</a>
					</div>
					</div>
					<p>&copy;Copyright 2017 <a href="http://bootstraptaste.com/">Bootstrap Themes</a> </p>
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Squadfree
                    -->
				</div>
			</div>	
		</div>
	</footer>

    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>	
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>


 
<script>

var map;
var markers = [];
var circles = [];
var MarksFromOther = [];
var CircleFromOther= [];
var infoFromOther = [];
var infoShowed = 1;
var infoContent = [];
var iconBase = ' picture/';
var icons = {
  0: {
    icon: iconBase + 'shopping.png'
  },
  1: {
    icon: iconBase + 'party.png'
  },
  2: {
    icon: iconBase + 'study.png'
  },
  3: {
    icon: iconBase + 'sport.png'
  },
  4: {
    icon: iconBase + 'concert.png'
  },
  5: {
    icon: iconBase + 'other.png'
  }
};
function loadXMLDoc(action) {
  hideAll();
  MarksFromOther = [];
  CircleFromOther= [];
  infoFromOther = [];
  infoContent = [];
  var xhttp = new XMLHttpRequest();
  var res;
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      // document.getElementById("demo").innerHTML =
      var data = this.responseText;
      res = data.split("\n");
      console.log(data);
      for (var i = 0; i < res.length-1; i++){
        res[i] = res[i].split(",");
        // for (var j = 0; j < res[i].length - 1; j++){
        for (var j = 0; j < 4; j++){
          res[i][j] = parseFloat(res[i][j]);
          // console.log(res[i][j]);
        }
        var tempString = '\n';
        for (var j = 0; j < res[i][5]; j++){
          tempString = tempString + '<br>' + res[i][j+6];
        }
        //infoContent.push(tempString);
        circleXmarkPush(res[i][0], res[i][1], res[i][2], res[i][3], res[i][4],tempString);
        // infoPush(res[i][4]);
        // console.log(res[i][j]);
      }
    }
    showAll();
  };
  if (action == 0) {
    xhttp.open("GET", "apiGetXXX.php", true);
  } else {
    lat = document.getElementById("Lat").value;
    lng = document.getElementById("Lng").value;
    tag = document.getElementById("act").value;
    fea = document.getElementById("features").value;
    var radios = document.getElementsByName('activities');
    var typeId = 0;
    for (var i = 0, length = radios.length; i < length; i++) {
        if (radios[i].checked) {
            typeId = i + 1;
        }
    }
    xhttp.open("GET", "apiGetXXX.php?lat=" + lat + "&lng=" + lng + "&tag=" + tag + "&fea=" + fea + "&type=" + String(typeId), true);

  }
  xhttp.send();
}
window.onload = loadXMLDoc(0);
function circleXmarkPush(lat, lng, type, menbers_num, tag, stringContent){
  var haightAshbury = {lat: lat, lng: lng};
  var tmpType = type;
  var myCity = new google.maps.Circle({
    center: haightAshbury,
    radius: Math.sqrt(menbers_num) * 10,
    strokeColor: "#0000FF",
    strokeOpacity: 0.8,
    strokeWeight: 2,
    fillColor: "#0000FF",
    fillOpacity: 0.4,
  });
  switch (type){
    case 1:
        myCity.fillColor= '#00FF00';
        myCity.strokeColor='#00FF00';
        break;
    case 2:
        myCity.fillColor= '#FF00FF';
        myCity.strokeColor='#FF00FF';
        break;
    case 3:
        myCity.fillColor= '#00FFFF';
        myCity.strokeColor='#00FFFF';
        break;
    case 4:
        myCity.fillColor= '#FFFF00';
        myCity.strokeColor='#FFFF00';
        break;
    case 5:
        myCity.fillColor= '#FF0000';
        myCity.strokeColor='#FF0000';
        break;
    default:
        myCity.fillColor= '#0000FF';
        myCity.strokeColor='#0000FF';
  }

  
  var infowindow = new google.maps.InfoWindow({
    content: "<div>" + "<b>"+tag+"</b>"  + "</div>"//"Hello World!"
  });
  // google.maps.event.addListener(infowindow,'click',function(){
  //   console.log("clicked");
  //   infowindow.content = "NOOOOOOOOOOO";
  // })
  infoFromOther.push(infowindow);


  // var marker = new google.maps.Marker({position:haightAshbury});

    infoContent.push(tag);
    console.log(infoContent);
    var marker = new google.maps.Marker({
      position: haightAshbury,
      icon: icons[(type-1).toString()].icon
      //map: map
    });
    //console.log(type);

  MarksFromOther.push(marker);
  google.maps.event.addListener(marker, 'click', function()   
  {
    clearMarkers();
    // hideAll();
    // showAll();
    hideinfo();

    myCity.setMap(null);
    myCity.setMap(map);
    
    infowindow.close();
    
    marker.setMap(null);
    // console.log(stringContent);
    infowindow.setContent("<div>" + "<b>"+tag+"</b>" + stringContent + "</div>");//"<div>" + "<b>"+tag+"</b>" + stringContent + "</div>" ;
    marker.setMap(map);
    infowindow.open(map,marker);
    document.getElementById('Lat').value = lat.toFixed(5) ;
    document.getElementById('Lng').value = lng.toFixed(5) ;
    document.getElementById('act').value = tag;
  });

  google.maps.event.addListener(myCity, 'click', function()   
  {
    clearMarkers();
    // hideAll();
    // showAll();
    hideinfo();

    myCity.setMap(null);
    myCity.setMap(map);
    
    infowindow.close();
    
    marker.setMap(null);
    // console.log(stringContent);
    infowindow.setContent("<div>" + "<b>"+tag+"</b>" + stringContent + "</div>");//"<div>" + "<b>"+tag+"</b>" + stringContent + "</div>" ;
    marker.setMap(map);
    infowindow.open(map,marker);
    document.getElementById('Lat').value = lat.toFixed(5) ;
    document.getElementById('Lng').value = lng.toFixed(5) ;
    document.getElementById('act').value = tag;
  });  

  CircleFromOther.push(myCity);

  // var marker = new google.maps.Marker({position:haightAshbury});
  // MarksFromOther.push(marker);
}


function myMap() {
  var haightAshbury = {lat: 25.017, lng: 121.538};

  map = new google.maps.Map(document.getElementById('netart_map'), {
    zoom: 16,
    center: haightAshbury,
    mapTypeId: 'terrain'
  });
  
  // ShowMarkerFromOther(map);

  // This event listener will call addMarker() when the map is clicked.
  map.addListener('click', function(event) {
    if(!infoShowed)showinfo(map);
    infoShowed = 1;
    addMarker(event.latLng);
    getLatLng(event.latLng);
  });
}

function showAll(){
  ShowMarkerFromOther(map);
}
function hideAll(){
  ShowMarkerFromOther(null); 
}
function hideinfo(){
  for (var i = 0; i < infoFromOther.length; i++) {
    infoFromOther[i].close();
  }
  infoShowed = 0;
}
// function showinfo(){
//     showinfo2(map);
// }
function showinfo(map){
  for (var i = 0; i < infoFromOther.length; i++) {
    console.log(infoContent);
    console.log(infoContent[i]);
    console.log(i);
    infoFromOther[i].setContent("<div>" + "<b>"+ infoContent[i] + "</b>"  + "</div>");
    infoFromOther[i].open(map,MarksFromOther[i]);
  }
  // for (var i = 0; i < infoFromOther.length; i++){
  //   infoFromOther[i].open(map,MarksFromOther[i]);
  // }
}

function ShowMarkerFromOther(map){
  for (var i = 0; i < MarksFromOther.length; i++) {
    MarksFromOther[i].setMap(map);
  }
  // console.log(MarksFromOther.length);
  for (var i = 0; i < CircleFromOther.length; i++) {
    CircleFromOther[i].setMap(map);
  }
  // console.log(CircleFromOther.length);
  if(map){
    // console.log('123');
    for (var i = 0; i < infoFromOther.length; i++) {
      infoFromOther[i].open(map,MarksFromOther[i]);
    }
  }
  
}

function addMarker(location) {
  clearMarkers();
  markers = [];
  circles = [];

  var mar = document.getElementsByName("activities");
    for(var i=0; i<6;i++){
      if(mar[i].checked)
        var marker = new google.maps.Marker({
          position: location,
          icon: icons[i.toString()].icon,
          map: map
        });
    }



  // var marker = new google.maps.Marker({
  //   position: location,
  //   map: map
  // });
  markers.push(marker);

  var myCity = new google.maps.Circle({
    map: map,
    center: location,
    radius: 20,
    strokeColor: "#FFFFFF",
    strokeOpacity: 0.8,
    strokeWeight: 2,
    fillColor: "#FFFFFF",
    fillOpacity: 0.4,
  });

  circles.push(myCity);
  
  // myCity.setMap(map);
}

// Sets the map on all markers in the array.
function setMapOnAll(map) {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
  }
  for (var i = 0; i < circles.length; i++) {
    circles[i].setMap(map);
  }
}

// Removes the markers from the map, but keeps them in the array.
function clearMarkers() {
  setMapOnAll(null);
}

// Shows any markers currently in the array.
function showMarkers() {
  setMapOnAll(map);
}

// Deletes all markers in the array by removing references to them.
function deleteMarkers() {
  clearMarkers();
  markers = [];
  circles = [];
}

function getLatLng(location) {
  document.getElementById('Lat').value = location.lat().toFixed(5) ;
  document.getElementById('Lng').value = location.lng().toFixed(5) ;
  document.getElementById('act').value = '' ;
  document.getElementById('features').value = '' ;
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1v1bsQJwfyOgleEaMLQW1aK6HgSzUGIA&callback=myMap"></script>


<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
