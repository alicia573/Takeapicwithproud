<?php
error_reporting(E_ALL);
ini_set('display_errors', 'stdout');
require_once "config.php";

$db = new config("localhost", "id15916792_takeapicwithproud", "3306", "id15916792_takeapic", "Takeapic-123");
$db->getTableByName('admin_login');

if(isset($_POST["login"]))
{
    if(empty($_POST["username"]) || empty($_POST["password"]))
    {
        $error_message = '<label>Vul de je inlog gegevens in.</label>';
    }
    else
    {
        $query = "SELECT * FROM admin_login WHERE username = :username AND password = :password";
        $statement = $db->prepare($query);
        $statement->execute(
            array(
                'username'     =>     $_POST["username"],
                'password'     =>     $_POST["password"]
            )
        );
        $count = $statement->rowCount();
        if($count > 0)
        {
            $_SESSION["username"] = $_POST["username"];
            header("location:medewerkerArea.php");
        }
        else
        {
            $error_message = 'Onjuiste Gegevens!';
        }
    }
}
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <label>Username
        <input placeholder="username" name="username">
    </label>
    <label>Password
        <input placeholder="password" name="password">
    </label>
    <button name="login">Login</button>

</form>
