<body bgcolor="#a4afa0">
<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "insurance_match";
    
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    
    $dName = $_POST['FirstName'];
    $lName = $_POST['LastName'];
    $name = $dName . " " . $lName;

    $sql = "SELECT D_Name FROM Doctor WHERE D_Name = '$name';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck == 1)
    {
        echo $resultCheck ." doctor " . " found named " . $name . ".";
    }
    else
    {
        echo $resultCheck ." doctors " . " found named " . $name . ".";
    }
?>
