<?php

  
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'config.inc.php';
    session_start();
    
   
   
    
    $lunchOption1 = $_POST['lunchOption1'];
    $lunchOption2 = $_POST['lunchOption2'];
    $breakfast='';
    $lunch='';

    $id=$_SESSION['roll'] ;
    global $conn;
    $select="SELECT * from mess WHERE `mess`.`Student_id` = '$id'";
    $idselect=mysqli_query($conn,$select);
    $num=mysqli_num_rows($idselect);
    if($num>0){
    $delete=mysqli_query($conn,"DELETE FROM `mess`");
    }

   
    
    echo "Lunch Option 1: " . $lunchOption1;
    echo "<br>";
    echo "Lunch Option 2: " . $lunchOption2;
    if (isset($lunchOption1)){
        $breakfast='breakfast';
        $sql1="INSERT INTO mess(orders,time_of_day,Student_id)
    VALUES ('$lunchOption1,$lunchOption2','$breakfast','$id' )";
    $Execute1=mysqli_query($conn, $sql1);

    } 
    
    if (isset($lunchOption2)){ 
        $lunch='lunch';
        $sql2="INSERT INTO mess(orders,time_of_day,Student_id)
    VALUES ('$lunchOption1,$lunchOption2','$lunch','$id' )";
    $Execute2=mysqli_query($conn, $sql2);
    }

   
   
    
    if($delete){
        echo 'deleted';
    }

    if($Execute1){
        echo 'Successfully completed lunch';
    }
    elseif($Execute2){
        echo 'Successfully completed breakfast';

    }
    else{
        echo 'failed';
    }

}
?>
