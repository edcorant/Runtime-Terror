<body bgcolor="#a4afa0">
<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "insurance_match";
    
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    
    $fName = $_POST['FirstName'];
    $lInit = $_POST['LastInitial'];
    $name = $fName . " " . $lInit;
    
    $sql = "SELECT P_Name FROM Patient WHERE P_Name = '$name';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck == 1)
    {
        echo $resultCheck ." patient " . " found named " . $name . ".";
    }
    else
    {
        echo $resultCheck ." patients " . " found named " . $name . ".";
    }
?>
