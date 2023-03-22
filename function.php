<?php

 function get_total_all_records(){
    include('connection.php');
    $stmt = $con -> prepare("select * from course");
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $stmt->rowCount();
}

?>