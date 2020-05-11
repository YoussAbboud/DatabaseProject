<?php 

session_start();
require("../data/connection.php");

if(!isset($_POST["email"]) || !isset($_POST["password"]) || !isset($_POST["firstname"]) || !isset($_POST["lastname"]))
{
    /*if the two POST fields are not set, return an error*/
    die ("error in fields");
    exit();
}


else
{

    $email = $_POST["email"];
    $pass = $_POST["password"];
    $first = $_POST["firstname"];
    $last = $_POST["lastname"];
    $date = $_POST["date"];
    $address = $_POST["address"];

    $sql = $connection->prepare("SELECT email FROM customer WHERE email = ?");
    $sql->bind_param("s", $email);
    $sql->execute();
    $sql->store_result();
    $sql->bind_result($useremail);
    $Count = $sql->num_rows;

    if($Count > 0)
    {
        die("already exists");
    }
    else
    {
        $idCustomer = uniqid (rand (),true);
        $sql = "INSERT INTO customer ( idCustomer,firstname, lastname, c_address,  birthday, email, pass)VALUES (? ,?, ?, ?, ?, ?, ?)";

        

        $stmt = $connection->prepare($sql);
        $stmt->bind_param("issssss", $idCustomer, $first, $last, $address, $date, $email, $pass);
        $stmt->execute();
        die("true");

        
    }



}










?>