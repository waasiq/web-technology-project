<?PHP 
    $name = 'b181210557';
    $password = '1234';
    
    if($_POST['username'] === $name && $_POST['password'] === $password){
        echo 'Welcome User ' , $name;
        echo "<script type='text/javascript'>
                            alert('Welcome User! Login Successful')
              </script>";
    }
    else {
        echo "<script type='text/javascript'>
                            alert('Was your username b181210557 and password 1234?')
              </script>";
        header("location: login.html");
        
    }
?>