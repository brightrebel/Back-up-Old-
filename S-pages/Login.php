<html>
<head>

	<?php include '../assets/includes/S-includes/Coreincludes.php'; ?>

 

</head>
<body>

   <?php include '../assets/includes/S-includes/header.php'; ?>

   <!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

   

   <div id="loginform">

      <div id="logintitle">
         <CENTER><h2>LOGIN PLEASE</h2></CENTER>
      </div>
        <form action="../index.php" method="POST">

          <center>
            <ul>
              <li>
                  <label for="ussername" >Ussername:</label>
                  <br>
                  <input type="text" name="ussername">
              </li>

              <li>
                  <label for="password" >Password:</label>
                  <br>
                  <input type="password" name="password">
              </li>

              <li>
                  <br>
                  <input type="submit" name="loginbtn" value="login">
              </li>
            </ul>
          </center>

        </form>
   </div>

  
	<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
   <?php include '../assets/includes/S-includes/footer.php'; ?>
   <?php include '../assets/includes/S-includes/CoreJava.php'; ?>
</body>
</html>