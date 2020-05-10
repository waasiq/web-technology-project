<html>
  <head>
    <title> Welcome!</title>  
  </head>  

  <body style="
       background: rgb(29,18,213);
       background: linear-gradient(125deg, rgba(29,18,213,1) 2%, rgba(201,23,23,0.908000700280112) 35%, rgba(28,99,190,1) 83%, rgba(125,63,12,1) 97%);
       font-size:30px;
       position:fixed;
       color:#ffff;
       top:40%;
       left:35%;  
   ">
    <?PHP 
        session_start();
      
        $name = 'b181210557';
        $password = '1234';

        if($_POST['username'] === $name && $_POST['password'] === $password){
            echo 'Welcome User ' , $name;
            echo "<script type='text/javascript'>
                                alert('Welcome User! Login Successful')
                  </script>";
        }
        else {
            $_SESSION["message"] = "Was your username b181210557 and password 1234?";

            header("location: ../login.php");
        }
    ?>  
  
    </body>
</html>