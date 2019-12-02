<body bgcolor="#a4afa0">
<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "insurance_match";
    
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    
    $insur = $_POST['insuranceComp'];

    $sql = "SELECT COUNT(D_id) FROM Accepts WHERE C_id = '$insur';";
    $result = mysqli_query($conn, $sql);
    
    echo "<br>";
    while($row = mysqli_fetch_array($result))
        print_r($row[0]);
    echo " doctors covered by ";
    if ($insur == 0)
        echo "Aetna.";
    else if ($insur == 1)
        echo "Cigna.";
    else if ($insur == 2)
        echo "Humana.";
    else if ($insur == 3)
        echo "United.";
    else if ($insur == 4)
        echo "Medicare.";
    else if ($insur == 5)
        echo "StateFarm.";
    else if ($insur == 6)
        echo "Lifetime.";
    else if ($insur == 7)
        echo "Blue Cross Blue Shield.";
// function counts number doctors covered by one specific insurance company
?>
