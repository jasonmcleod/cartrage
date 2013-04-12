<?
    session_start();
    include('config.php');
    if(isset($_GET['pw']) && $_GET['pw'] == $pw) {
        $_SESSION['user'] = 1;
        echo 'k, cool.';
    } else {
        echo 'nah dude.';
    }
?>