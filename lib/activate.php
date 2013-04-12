<?
    session_start();
    if(!isset($_SESSION['user'])) { die('not logged in'); }
    if($_SESSION['user']==1) {
        $file = '../challenge.json';
        $text = $_POST['text'];
        file_put_contents($file, $text);
    }
?>