<!DOCTYPE html>
<html>

<h1 style="background-color: #4CAFf0;"> Insurance Matcher! </h1>
<meta charset=”UTF-8”>  <!-- //the characters we use within a website -->
<title> Insurance </title>  <!-- //This shows on the tab of the website -->

<body bgcolor="#a4afa0">
</body> <!-- //set the background color for the website -->


<!-- //makes the navigation bar -->
<div class="topnav">
  <a href="index.php">Home</a>
  <a href="UpdateInfo.php">Update Info</a>
  <a class="active" href="Search.php">Search</a>
  <a href="Count.php">Count</a>
  <a href="Sort.php">Sort</a>
  <a href="Match.php">Matcher</a>
</div>

<style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }

    .topnav {
      overflow: hidden;
      background-color: #333;
    }

    .topnav a {
      float: left;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }

    .topnav a.active {
      background-color: #4CAFf0;
      color: white;
    }
</style>

<style>
.dropbtn {
  background-color: #4CAFf0;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}
.dropdown {
  position: relative;
  display: inline-block;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown-content a:hover {background-color: #ddd;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>

<br>
<body>
    <form method = "post" action ="action_page4.php">
        <fieldset>
            <legend> Search for a Patient: </legend>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                Enter the first name and last initial:
                <br>
                First name:
                <br> <input type="text" name="FirstName" value="Johnny"><br>
                <br>
                Last initial:
                <br> <input type="text" name="LastInitial" value="A">
                <br> <br>
                <input type="submit" value="Submit">
                <br>

        </fieldset>
    </form>
</body>
<br>


<br>
<body>
    <form method = "post" action ="action_page5.php">
        <fieldset>
            <legend> Search for a Doctor: </legend>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                Enter the first name (including "Dr." at the start of the name) and last name:
                <br>
                First name:
                <br> <input type="text" name="FirstName" value="Dr. Johnny"><br>
                <br>
                Last name:
                <br> <input type="text" name="LastName" value="Appleseed">
                <br> <br>
                <input type="submit" value="Submit">
                <br>
        </fieldset>
    </form>
</body>
<br>


<br>
<body>
    <form method = "post" action ="action_page6.php">
        <fieldset>
            <legend> Patient and Doctor Join: </legend>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                Enter the health issue of the patients and doctors you want to join:
                <br>
                Specialty:
                <p>
                   <select name = "DoctorType">
                     <option value = "General Physician">General Physician</option>
                     <option value = "OBGYN">Obstetrician-Gynecologist</option>
                     <option value = "Dermatologist">Dermatologist</option>
                     <option value = "Cardiology">Cardiologist</option>
                      <option value = "Neurology">Neurologist</option>
                      <option value = "Orthopedic">Orthopedist</option>
                   </select>
                </p>
                <input type="submit" value="Submit">
                <br>
        </fieldset>
    </form>
</body>
<br>
                
                
<br>
<body>
    <form method = "post" action ="action_page7.php">
        <fieldset>
            <legend> Patient and Doctor Joins: </legend>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <br>
                Enter the location of the patients and doctors you want to join:
                <br>
                Places:
                <p>
                   <select name = "Location">
                     <option value = "Boca Raton, FL">Boca Raton, FL</option>
                     <option value = "West Palm Beach, FL">West Palm Beach, FL</option>
                     <option value = "Miami, FL">Miami, FL</option>
                     <option value = "Gainesville, FL">Gainesville, FL</option>
                      <option value = "Pompano Beach, FL">Pompano Beach, FL</option>
                      <option value = "Jacksonville, FL">Jacksonville, FL</option>
                    <option value = "Orlando, FL">Orlando, FL</option>
                    <option value = "Tampa, FL">Tampa, FL</option>
                    <option value = "Melbourne, FL">Melbourne, FL</option>
                    <option value = "Tallahassee, FL">Tallahassee, FL</option>
                    <option value = "Hollywood, FL">Hollywood, FL</option>
                        
                    
                   </select>
                </p>
                <input type="submit" value="Submit">
                <br>
        </fieldset>
    </form>
</body>
<br>


<?php
    
  //  echo "This text was written with PHP code!";
    
?>

</html>
