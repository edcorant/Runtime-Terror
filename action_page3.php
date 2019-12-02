<body bgcolor="#a4afa0">
<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "insurance_match";
    
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    
    $patientId = $_POST['pid'];
    
    $sql = "SELECT P_id FROM Patient WHERE P_id = '$patientId';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    
    if ($resultCheck == 1){
        // before deleting patient, must delete covered by and sees relationships
        // delete from CoveredBy
        $sql = "DELETE FROM CoveredBy WHERE P_id = '$patientId';";
        $result = mysqli_query($conn, $sql);
        // delete from Sees
        $sql = "DELETE FROM Sees WHERE P_id = '$patientId';";
        $result2 = mysqli_query($conn, $sql);
        // delete patient
        $sql = "DELETE FROM Patient WHERE P_id = '$patientId';";
        $result3 = mysqli_query($conn, $sql);
        
        echo "<br>" . "Patient removed.";
    }
    else{
         echo "<br>" . "Could not find Patient ID. Patient not removed.";
    }
?>
