
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style 2.css">
    <title>Home Page</title>
</head>

<body>
<style>.column {
    float: left;
    width: 40%;
    margin-bottom: 16px;
    padding: 15px 25px;
  }
  @media screen and (max-width: 650px) {
    .column {
      width: 100%;
      display: block;
      align: center;
    }
  }
  
  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  }
  
  .container {
    padding: 0 16px;
  }
  
  .container::after, .row::after {
    content: "";
    clear: both;
    display: table;
  }
  
  .button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    right: 150px;  
  }
  
  /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
  @media (max-width: 600px) {
    nav, article {
      width: 100%;
      height: auto;
</style>
    

    <div class="header">
        <img src="logo.jpg" alt="logo" />
    </div>
    <div class="devider"></div>
    <!-- <hr class="rounded"> -->
    <div class="container">
        <div class="wrapper">
            <h2 class="title">Wecome to your CRM Web App</h2>
            <div class="row">
                <div class="column">
                  <div class="card">
                    <img src = "admin.png" alt="client" style="width:20%">
                    <div class="container">
                      
                      <p class="title"><a href="admin_login.php">Admin Login</a></p>
                    
                      
                      
                      
                    </div>
                  </div>
                </div>
              
                <div class="column">
                  <div class="card">
                    <img src="client.png" alt="client" style="width:26%; height:700%">
                    <div class="container">
                      
                      <p class="title"><a href="client_login.php">Client login</a></p>
                    
                      
                    </div>
                  </div>
                </div>
                
        </div>  
            
        </div>
        <!-- <div class="devider"></div> -->
    </div>
    <div class="devider2"></div>
    <div class="footer-text">Copyright @ 2021 Business Support CRM Web Application <br>www.businesssupportwebapplication.com</div>
</body>

</html>