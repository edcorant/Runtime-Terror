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
  <a href="Search.php">Search</a>
  <a href="Count.php">Count</a>
  <a class="active" href="Sort.php">Sort</a>
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
        <form method = "post" action ="action_page10.php">
            <fieldset>
                <legend> Sort Patients </legend>
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    Sort all patients in the database alphabetically seen by one specific doctor:
                    <br>
            
                    First name of doctor (including "Dr." at the start of the name):
                    <br> <input type="text" name="FirstName" value="Dr. Johnny"><br>
                    <br>
                    Last name of doctor:
                    <br> <input type="text" name="LastName" value="Appleseed">
                    <br> <br>

                    <input type="submit" value="Sort">
                    <br>
            </fieldset>
        </form>
    </body>
<br>

</html>
