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
// doctor/patient join on specialty
?>
