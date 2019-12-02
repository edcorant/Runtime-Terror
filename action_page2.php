<body bgcolor="#a4afa0">
<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "insurance_match";
    
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    
    $patientId = $_POST['pid'];
    
    $fName = $_POST['FirstName'];
    $lInit = $_POST['LastInitial'];
    $name = $fName . " " . $lInit;
    
    $drType = $_POST['DoctorType'];
    
    $locationChosen = $_POST['Location'];
    
    $insur = $_POST['insuranceComp'];
 
    $sql = "SELECT P_id FROM Patient WHERE P_id = '$patientId';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
  
    if ($resultCheck == 1) // update patient if 1 p_id found
    {
        $sql = "UPDATE Patient SET City = '$locationChosen', P_Name = '$name', Health_Issue = '$drType' WHERE P_id = '$patientId';";
        $result = mysqli_query($conn, $sql);
        
        // updating insurance coverage
        // first remove previous instance of the relationship
        $sql = "DELETE FROM CoveredBy WHERE P_id = '$patientId';";
        $result2 = mysqli_query($conn, $sql);
        // add new CoveredBy relationship instance
        $sql = "INSERT INTO CoveredBy (`C_id`, `P_id`) VALUES ('$insur', '$patientId');";
        $result3 = mysqli_query($conn, $sql);
        
         echo "<br>" . "Patient updated.";
    }
    else
    {
        echo "<br>" . "Could not find patient ID. Patient not updated.";
    }
?>
