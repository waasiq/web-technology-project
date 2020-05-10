<!DOCTYPE HTML>

<html>
    <head>
        <title> Login </title>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
    
        <link rel="stylesheet" type="text/css" href="./css/login.css">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    
        <link href="https://fonts.googleapis.com/css?family=Sen:400,700&display=swap&subset=latin-ext" rel="stylesheet">
                
        <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>          
    </head>
    
<body>
    <div class="container-fluid container-form">
        <form method="post" action="http://localhost/portfolio/php/loginphp.php" class="login-form"> 
            <div class="username-box">
                <div class="row">
                    <div class="col">
                        <label for="name" style="color:white;">Name:</label>
                    </div>

                    <div class="col">
                        <input type="text" name="username" id="username" placeholder="Your Username." required>
                    </div>
                </div>
            </div>
            
            <div class="password-box">
                <div class="row">
                    <div class="col">
                        <label for="password" style="color:white;">Password:</label>
                    </div>               

                    <div class="col password">
                        <input type="password" name="password" id="password" placeholder="Your Password." required>
                    </div>  
                </div>  
            </div>    
            
            <div class="col btn-padding">
                <button type="submit" class="btn btn-danger">Submit</button>
            </div>
        </form>  
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>


<?PHP
    session_start();

    if (isset($_SESSION["message"])) {        
        echo "<script>alert('".$_SESSION["message"]."')</script>";
        
        unset($_SESSION["message"]);
    }
?>