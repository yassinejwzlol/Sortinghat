<?php
    $Firstname =$_GET["Firstname"];
   
    $Lastname =$_GET["Lastname"];
  
    $Gender = $_GET["Gender"];
 
    $Interesses = $_GET["Interesses"];
   
    $Age = $_GET["Age"];
    
    $Telefoonnummer =$_GET["Telefoonnummer"];
    
   
    include "Connection.php";

    $Database = new Database();
    
    $query="INSERT INTO informatiepersoon (Firstname, Lastname,Gender,Interesses,Age,Telefoonnummer )
    VALUES ('$Firstname', '$Lastname', '$Gender','$Interesses','$Age','$Telefoonnummer');";
    $Database->updateQuery($query);

    $sql = "SELECT COUNT(*) as PersoonID FROM informatiepersoon";
    
    $result = $Database->getQuery($sql);
    $rowcount = $result[0]["PersoonID"];
    for ($i=1; $i < 5; $i++) { 
      $Database->updateQuery("insert into ratings(PersoonID,HouseID) VALUES ($rowcount,$i);");
    }
    header("Location: https://sortinghat.mezapc.be/succesvol.php");
    ?>