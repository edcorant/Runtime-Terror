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
  <a class="active" href="UpdateInfo.php">Update Info</a>
  <a href="Search.php">Search</a>
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

<br>
<body>
    <form method="post" action ="action_page2.php">
        <fieldset>
            <legend> Update Patient: </legend>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                Enter your given patient id and update your information:
                <br> <input type="text" name="pid" value="(Enter numbers only)"><br><br>

                First name: <input type="text" name="FirstName" value="Johnny"><br>
                Last initial: <input type="text" name="LastInitial" value="A"><br>

            <h4>Doctor Needed:</h4>
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

            <h4>Location closest to your residence:</h4>
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
            
            <h4> Choose insurance company: </h4>
            <p>
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
            </p>
            <input type="submit" value="Submit">
            <br>
                
            
        </fieldset>
    </form>
</body>

<br>

<body>
    <form method="post" action ="action_page3.php">
        <fieldset>
            <legend> Remove Patient: </legend>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                Enter the patient id of the patient to remove:
                <br> <input type="text" name="pid" value="(Enter numbers only)">
                <br>
                <br>
                <input type="submit" value="Submit">
                <br>
        </fieldset>
    </form>
</body>
<br>

</html>
