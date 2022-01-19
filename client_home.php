<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>HOME</title>

    <link rel="Stylesheet" type="text/css" href="Style.css">

    <img class="img" src='logo.jpg'/>
        
          <div class="header">

                    <div class="inner_header">

                         <ul class="navigation">
                              <li><a href="#">ADD CUSTOMER</a></li>

                              <li><a href="#">MANAGE CUSTOMER</a>
                                   <ul>
                                        <li><a href="#">By Name</a></li>
                                        <li><a href="#">By Country</a></li>
                                        <li><a href="#">By Program</a></li>
                                   </ul>     
                              </li>
                              
                              <li><a href="#">ORDERS</a></li> 
                         </ul> 

                    </div>
          
           
               <h3>Client Portal Welcome Back, <?php echo $_SESSION['name']; ?></h3>

               <h4><a href="client_logout.php">Logout</a></h4>

          </div>
            
</head>

<br><br>

<body>

<img src="home.jpg" alt="Home" class="home_img">


</body>

</html>

<?php 

}else{

     header("Location: client_index.php");

     exit();

}

 ?>

<br><br>
     
     
     <footer class="footer">

     <hr style="width:100%;text-align: center;margin-left:0">
    
     <p>                     Copyright @ 2021  Business Support CRM Web Application<br>
                                www.businesssupportwebapplication.com</p>
    
     </footer>