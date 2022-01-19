<!DOCTYPE html>
<html>
    <head>

        <title>Client Portal</title>
        <link rel="Stylesheet" type="text/css" href="Style.css">

        <img class="img" src='logo.jpg'/>
        
        <br><br><br><br><br>
        
        <div class="header">
            <div class="inner_header">
                <ul class="navigation">
                    <a><li></li></a>
                    <a><li></li></a>
                    <a><li></li></a>
                    <a><li></li></a>
                </ul> 
                
            </div>
        </div>
            
    
            
    </head>

<body>

<br><br>

<form action="client_login.php" method="post">

        <h2>CLIENT PORTAL</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>User Name</label>
        
        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Password</label>
        
        <input type="password" name="password" placeholder="Password"><br> 

        <button type="submit">Login</button>

        <button type="exit"><a class="exit" href="index.php">Cancel</a></button>

     </form>


     <br><br>
     
     
     <footer class="footer">

     <hr style="width:100%;text-align: center;margin-left:0">
    
     <p>                     Copyright @ 2021  Business Support CRM Web Application<br>
                                www.businesssupportwebapplication.com</p>
    
     </footer>

</body>

</html>