<html>
  <head>
    <title> Contact Info!</title>  
  </head>  

  <body style="
       background: rgb(29,18,213);
       background: linear-gradient(125deg, rgba(29,18,213,1) 2%, rgba(201,23,23,0.908000700280112) 35%, rgba(28,99,190,1) 83%, rgba(125,63,12,1) 97%);
       font-size:20px;
       position:fixed;
       color:#ffff;
       top:20%;
       left:35%;    
   ">
    <?PHP

    $newsletter = false;

    if (isset($_POST['news'])) {
        $newsletter = true;
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    echo '<h1>Entered Name Is:</h1><p>' , $name ,'</p>';
    echo '<h1>Entered Email Is: </h1><p>' , $email ,'</p>';
    echo '<h1>Entered Message Is:</h1><p>' , $message ,'</p';

?>
    </body>
</html>