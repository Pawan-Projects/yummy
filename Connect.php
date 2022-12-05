<?php
    $yourname = $_POST['yourname'];
    $youremail = $_POST['youremail'];
    $yourphone = $_POST['yourphone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $noofpeople = $_POST['noofpeople'];
    $comments = $_POST['comments'];

    //database connection
    $conn = new mysqli('localhost','root','root','bookatable');
    if ($conn->connect_error) {
        die('Connection Failed:'.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into bookatable{yourname, youremail,yourphone,date,time,noofpeople,comments}");
    $stmt=>bind_param("ssiiiis",$yourname,$youremail,$yourphone,$date,$time,$noofpeople,$comments);
    $stmt->execute();
    echo"registration successfull.....";
    $stmt->close();
    $conn->close();
    }
?>