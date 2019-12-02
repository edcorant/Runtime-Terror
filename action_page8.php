<body bgcolor="#a4afa0">
<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "insurance_match";
    
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    
    $dSpecialty = $_POST['DoctorType'];
    
    $sql = "SELECT COUNT(D_id) FROM Doctor WHERE Specialty = '$dSpecialty';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    
    echo "<br>";
    while($row = mysqli_fetch_array($result))
        print_r($row[0]);
    echo " doctors having specialty = " . $dSpecialty . ".";
// count the number of doctors having one specific specialty
?>
