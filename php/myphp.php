<html>
  <head>
    <title> Contact Info!</title>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" type="text/css" href="../css/contact.css">   
          
  </head>  

  <body>   
   <div class="main">
       <div class="main-box">       
              <?PHP

                $newsletter = false;

                if (isset($_POST['news'])) {
                    $newsletter = true;
                }

                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];

                echo '<h1 style="color:black;">Entered Name Is:</h1><p>' , $name ,'</p>';
                echo '<h1 style="color:black;">Entered Email Is: </h1><p>' , $email ,'</p>';
                echo '<h1 style="color:black;">Entered Message Is:</h1><p>' , $message ,'</p';

            ?>
       </div>
  </div>
</body>
</html>