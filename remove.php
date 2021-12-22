<?php 

require_once("config.php");

$id = $_GET['id'];
if (isset($id))
{
    $sql = "DELETE from cars where id = $id";

    mysqli_query($db, $sql);

    header("Location: index.php");
}

?>