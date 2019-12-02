<body bgcolor="#a4afa0">
<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "insurance_match";
    
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    
    $dSpecialty = $_POST['DoctorType'];
    
    $sql = "SELECT P_Name, D_Name FROM Patient, Doctor WHERE Patient.Health_Issue = '$dSpecialty' AND Doctor.Specialty = '$dSpecialty';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    echo "<br>" . $resultCheck . " doctor and patient matches found having specialty = " . $dSpecialty . ". <br>";
    echo "<br>";
    while($row = mysqli_fetch_array($result)) // code works; try to figure out how to print better
    {
       print_r($row);
    }
// doctor/patient join function
?>
