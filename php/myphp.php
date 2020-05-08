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