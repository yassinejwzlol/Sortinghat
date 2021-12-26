<?php
    include "../db/Connection.php";
    $database = new Database();
    $HouseID = $_GET["HouseID"];
    $PersoonID = $_GET["id"];
    $query = "Update ratings set vote = vote + 1 where PersoonID = $PersoonID and HouseID = $HouseID;";
    $database->updateQuery($query);
?>
    