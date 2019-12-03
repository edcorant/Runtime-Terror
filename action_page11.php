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
    
    if ($resultCheck == 1)
    {
        // find a patient's insurance coverage
        $sql = "SELECT C_id FROM CoveredBy WHERE P_id = '$patientId';";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result))
            $patientCoverage = $row[0]; // patientCoverage now has C_id from CoveredBy
        
        $sql = "SELECT DISTINCT Doctor.D_Name, Doctor.D_id FROM Patient, Doctor, CoveredBy WHERE Doctor.Location = Patient.City AND Doctor.Specialty = Patient.Health_Issue AND Patient.P_id = '$patientId' AND Doctor.D_id IN(SELECT D_id FROM Accepts WHERE C_id = '$patientCoverage');";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
           
        while($row = mysqli_fetch_array($result))
        {
            $docName = $row[0];   // our database is populated in order to yield 1 match per patient
            $docId = $row[1];      // we know index 0 is D_Name, index 1 is D_id
        }
        
        // now insert into Sees relationship with matched doctor
        $sql = "INSERT INTO Sees (`D_id`, `P_id`) VALUES ('$docId', '$patientId');";
        $result = mysqli_query($conn, $sql);
        
        echo "Your doctor match in your city, catering to your health issue, and covered by your insurance company is " . $docName . ".";
    }
    else
    {
        echo "<br>" . "Could not find patient ID. Patient not matched.";
    }
?>
