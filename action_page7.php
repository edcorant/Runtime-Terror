<body bgcolor="#a4afa0">
<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "insurance_match";
    
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    
    $dpLocation = $_POST['Location'];
    echo "<br>" . $dpLocation;
    
    $sql = "SELECT P_Name, D_Name FROM Patient, Doctor WHERE Patient.City = '$dpLocation' AND Doctor.Location = '$dpLocation';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    echo "<br>" . $resultCheck . " doctor and patient matches found having location = " . $dpLocation . ". <br>";
    echo "<br>";
    while($row = mysqli_fetch_array($result)) // code works; try to figure out how to print better
    {
       print_r($row);
    }
// printing the location of the patient/doctor join
?>
