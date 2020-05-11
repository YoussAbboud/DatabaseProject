<?php 

session_start();
require("../data/connection.php");

if(!isset($_POST["review"]))
{
    /*if the two POST fields are not set, return an error*/
    die ("error in fields");
    exit();
}


else
{

    $review = $_POST['review'];
    $id = $_POST['id'];

   
   
        $sql = "INSERT INTO reviews ( Rating ,idDealership VALUES (? ,?)";

        

        $stmt = $connection->prepare($sql);
        $stmt->bind_param("is", $review , $id);
        $stmt->execute();
        die("true");

        




}










?>