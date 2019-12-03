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
    
    $sql = "SELECT D_id FROM Doctor WHERE D_Name = '$name';"; // finding doctor D_id
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck == 0)
        echo "Doctor not found.";
    
    while($row = mysqli_fetch_array($result))
        $dID = $row[0];
   
    if ($resultCheck != 0){
    $sql = "SELECT P_Name FROM Patient WHERE P_Name IN (SELECT P_Name FROM Sees, Patient WHERE D_id = '$dID' AND Patient.P_id = Sees.P_id) ORDER BY P_Name ASC;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
        if($resultCheck != 0){
    echo "Patients in the database seen by " . $name . " sorted in alphabetical order: <br>";
    foreach ($result as $key => $data){
    ?>
        <tr>
            <td><?= $data['P_Name'] ?></td>
            <br>
            <td>
                <i class="fa fa-edit"></i>
                <i class="fa fa-trash"></i>
            </td>
        </tr>
    <?php }
        }
        else
        echo "No patients in the database seen by " . $name . ".";
        }
// Sort function; find all patients seen by one doctor and sort alphabetically
?>
