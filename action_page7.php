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
    
    foreach ($result as $key => $data){
    ?>
        <tr>
            <td><?= ++$key ?></td>:
            <td><?= $data['P_Name'] ?></td>,
            <td><?= $data['D_Name'] ?></td>
            <br>
            <td>
                <i class="fa fa-edit"></i>
                <i class="fa fa-trash"></i>
            </td>
        </tr>
    <?php }
//  patient/doctor join on location
?>
