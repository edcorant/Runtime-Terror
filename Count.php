<!DOCTYPE html>
<html>

<h1 style="background-color: #4CAFf0;"> Insurance Matcher </h1>
<meta charset=”UTF-8”>  <!-- //the characters we use within a website -->
<title> Insurance </title>  <!-- //This shows on the tab of the website -->

<body bgcolor="#a4afa0">
</body> <!-- //set the background color for the website -->


<!-- //makes the navigation bar -->
<div class="topnav">
  <a href="index.php">Home</a>
  <a href="UpdateInfo.php">Update Info</a>
  <a href="Search.php">Search</a>
  <a class="active" href="Count.php">Count</a>
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
        <form method = "post" action ="action_page8.php">
            <fieldset>
                <legend> Count the number of doctors </legend>
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    Having one specific specialty:
                    <br>
                   
                    <p>
                       <select name = "DoctorType">
                         <option value = "General Physician">General Physician</option>
                         <option value = "OBGYN">Obstetrician-Gynecologist</option>
                         <option value = "Dermatology">Dermatologist</option>
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
    <body>
        <form method = "post" action ="action_page9.php">
            <fieldset>
                <legend> Count the number of doctors </legend>
                    <meta name="viewport" content="width=device-width, initial-scale=1">
            Covered by one specific insurance company:
              <br>
              <select name = "insuranceComp">
                <option value = "0">Aetna</option>
                <option value = "1">Cigna</option>
                <option value = "2">Humana</option>
                <option value = "3">United</option>
                 <option value = "4">Medicare</option>
                 <option value = "5">StateFarm</option>
                <option value = "6">Lifetime</option>
                <option value = "7">Blue Cross Blue Shield</option>
              </select>
                <br> <br>
              <input type="submit" value="Submit">
              <br>
            </fieldset>
        </form>
    </body>
    <br>

</html>
