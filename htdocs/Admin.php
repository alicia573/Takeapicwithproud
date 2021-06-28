<?php
error_reporting(E_ALL);
ini_set('display_errors', 'stdout');
require_once "config.php";

$db = new config("localhost", "id15916792_takeapicwithproud", "3306", "id15916792_takeapic", "Takeapic-123");
$db->checkConnectionToDatabase();

session_start();
if(isset($_SESSION["username"]))
{
    echo '<h2>Admin Area</h2>';
    echo '<h4>Welcome - '.$_SESSION["username"].'</h4>';
    echo '<a href="logout.php"><button type="button">Logout</button></a>';

   foreach ($db->getTableByName('messages') as $row){

       echo "<td>"; echo $row["id"]; echo "</td>";
       echo "<td>"; echo $row["name"]; echo "</td>";
       echo "<td>"; echo $row["email"]; echo "</td>";
       echo "<td>"; echo $row["tel"]; echo "</td>";
       echo "<td>"; echo $row["subject"]; echo "</td>";
       echo "<td>"; echo $row["text"]; echo "</td>";



   }

}
else
{
    header("location:logout.php");
    echo'error';

}

?>

