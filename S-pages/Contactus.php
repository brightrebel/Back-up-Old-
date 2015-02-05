<html>
<head>

	<?php include '../assets/includes/S-includes/Coreincludes.php'; ?>

  <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"></script>

  <script>
    function initialize()
    {
    var mapProp = {
    center:new google.maps.LatLng(-34.0677429,18.8347373),
    zoom:17,
    mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    var map=new google.maps.Map(document.getElementById("googleMap")
    ,mapProp);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
  </script>

</head>
<body>

   <?php include '../assets/includes/S-includes/header.php'; ?>

   <!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->


   	<div class="Main">

   		<div id="cmain">

            <h3>Contact Info</h3>
            <b>
               Tell  : 000 000 0000<br>
               Fax   : 000 000 0000<br>
               Email : info@Brightreble.com
            </b>

            <br>
            <br>

            <center>
               <div id="googleMap" style="width:750px;height:300px;"></div>
            </center>

         </div>

   	</div>


	<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

   <?php include '../assets/includes/S-includes/footer.php'; ?>
   <?php include '../assets/includes/S-includes/CoreJava.php'; ?>
</body>
</html>