<?php
   include "../db/Connection.php";
   // test database
   $PersoonID = $_GET["id"];
   $database = new Database();
   $query = "select * from  ratings where PersoonID = $PersoonID;";
   $persoon = $database->getQuery($query);
   echo json_encode($persoon);
?>