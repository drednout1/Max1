<?
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
error_reporting(E_ALL);

require_once 'users.php';


if (isset($_GET['login'])) {
    $login = $_GET['login'];
};

if (isset($_GET['pass'])) {
    $pass = $_GET['pass'];
};

foreach($users as $key => $users){
    if($users['login'] == $login && $users['pass'] == $pass){
        setcookie('auth' , $key);
        header('location: auth.php');
    }
}

