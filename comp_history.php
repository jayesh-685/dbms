<?php
require_once('db.php');

$rollNo = $_POST["rollNo"];
$query = "select roomNo from `student` where rollNo = '$rollNo';";
$res= mysqli_query($con, $query);

if($res){
    echo 'succes';
    $data = mysqli_fetch_array($res);
    // echo json_encode($data[0]);
    // $query1 = "select * from `resolved_comp` where roomNo = '$data[0]';";
    $query1 = "select * from `resolved_comp`;";
    $res1 = mysqli_query($con,$query1);
    $data1 = mysqli_fetch_array($res1);
    echo json_encode($data1);
    echo '<br>';
    while ($row = mysqli_fetch_array($res1)) {
        echo json_encode($row);
    }
    // $query = "SELECT complaintID from `id18848798_jzclean`.`comp_table` ORDER BY complaintID DESC limit 1;";
    // $res= mysqli_query($con, $query);
    // $data = mysqli_fetch_array($res);
    // echo $data[0];
    // <!-- $query1 = "select * from  `id18848798_jzclean`.`comp_resolve` where comlaintID = '$compID'";  -->
}else{
    echo 'failes';
}
?>

