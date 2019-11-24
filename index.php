<?php
    //THIS IS THE HOMEPAGE OF OUR WEBSITE!!!!!!!!!!!!!!!!!!!!!!
    include_once 'dbh.inc.php';
?>

<!DOCTYPE html>
<html>

<h1 style="background-color: #4CAFf0;"> Insurance Matcher! </h1>
<meta charset=”UTF-8”>  <!-- //the characters we use within a website -->
<title> Insurance </title>  <!-- //This shows on the tab of the website -->

<body bgcolor="#a4afa0">
</body> <!-- //set the background color for the website -->


<!-- //makes the navigation bar -->
<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="UpdateInfo.php">Update Info</a>
  <a href="Search.php">Search</a>
  <a href="Count.php">Count</a>
  <a href="Sort.php">Sort</a>
  <a href="Match.php">Matcher</a>
</div>
    <!-- <a href="/SomeFolder/About.html">About Page</a> -->

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

<p style="border:2px solid White;"> Welcome to our page! </p >

<body>
    <form action ="action_page1.php">
        <fieldset>
            <legend> Doctors Near Me: </legend>



            <meta name="viewport" content="width=device-width, initial-scale=1">
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
            </head>
                
                
            <body>
                
                <h4>Enter your First name and Last initial:</h4>
                First Name: <input type="text" name="FirstName" value="Johnny"><br>
                Last Initial: <input type="text" name="LastName" value="A"><br>
                
                
                <h4>Doctor Needed:</h4>
                <div class="dropdown">
                <button class="dropbtn">Select one</button>
                  <div class="dropdown-content">
                    <a href="GP">General Physician</a>
                    <a href="OBGYN">Obstetrician-Gynecologist</a>
                    <a href="D">Dermatologist</a>
                    <a href="C">Cardiologist</a>
                    <a href="N">Neurologist</a>
                    <a href="O">Orthopedist</a>
                  </div>
                </div>
                
                <h4>Location closest to your residence:</h4>
                <div class="dropdown">
                <button class="dropbtn">Select one</button>
                  <div class="dropdown-content">
                    <a href="BR">Boca Raton, FL</a>
                    <a href="WPB">West Palm Beach, FL</a>
                    <a href="MIA">Miami, FL</a>
                    <a href="GAIN">Gainesville, FL</a>
                    <a href="PB">Pompano Beach, FL</a>
                    <a href="Jax">Jacksonville, FL </a>
                    <a href="ORL">Orlando, FL </a>
                    <a href="TAM">Tampa, FL </a>
                    <a href="MEL">Melbourne, FL </a>
                    <a href="TAL">Tallahassee, FL </a>
                    <a href="HOL">Hollywood, FL </a>
                  </div>
                </div>
                
                
                
                <br>
                <input type="submit" value="Submit">
            </body>


        </fieldset>
    </form>
</body>

</html>
