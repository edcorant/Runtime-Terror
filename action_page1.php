<body bgcolor="#a4afa0">
<?php

    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "insurance_match";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    
    // inserting into Patient
    $fName = $_POST['FirstName'];
    $lInit = $_POST['LastInitial'];
    $name = $fName . " " . $lInit;
    
    $drType = $_POST['DoctorType'];

    $locationChosen = $_POST['Location'];
    
    $sql = "SELECT * FROM Patient;"; // finding the next P_id
    $result = mysqli_query($conn, $sql); // use auto increment next time
    $nextPid = mysqli_num_rows($result);
    
    $sql = "INSERT INTO Patient (`City`, `P_id`, `P_Name`, `Health_Issue`) VALUES ('$locationChosen', '$nextPid', '$name', '$drType');";
    $result2 = mysqli_query($conn, $sql);
   
    // inserting into CoveredBy
    $insur = $_POST['insuranceComp'];
    $sql = "INSERT INTO CoveredBy (`C_id`, `P_id`) VALUES ('$insur', '$nextPid');";
    $result3 = mysqli_query($conn, $sql);
    
    echo "Patient has been inserted. Your unique patient ID is ";
    echo $nextPid;
    echo ". Keep this for your records.";
    
?>
