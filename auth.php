<form action="login.php">
    <input type="text" name="login" value="<?= $login ?>"><br>
    <input type="text" name="pass" value="<?= $pass ?>">
    <button>Confirm</button>

</form>

<a href="logout.php" name='logout'>Logout</a><br>


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

if (isset($login) && isset($pass)) {
    header('location: login.php');
}

if (isset($_GET['logout'])) {
    header('location: logout.php');
}
?>

<?
if (isset($_COOKIE['auth'])) {
    if (isset($users[$_COOKIE['auth']])) {
        echo $users[$_COOKIE['auth']]['string'];
    }
}
?>