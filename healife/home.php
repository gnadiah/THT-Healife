<?php
session_start();

include ("php/config.php");
if (!isset($_SESSION['valid'])) {
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/style.css">
  <title>Health dashboard</title>
  <!-- 
    - primary meta tag
  -->
  <title>Healife - The Best Program to Enroll for Healthcare</title>
  <meta name="title" content="EduWeb - The Best Program to Enroll for Exchange">
  <meta name="description" content="This is an education html template made by codewithsadee">
  <style>
    /*	
  Table Responsive
  ===================
  Author: https://github.com/pablorgarcia
 */

    @charset "UTF-8";
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

    body {
      font-family: 'Open Sans', sans-serif;
      font-weight: 300;
      line-height: 1.42em;
      color: #A7A1AE;
      background-color: #185875;
    }

    h1 {
      font-size: 3em;
      font-weight: 400;
      line-height: 1em;
      text-align: center;
      color: #DC6B19;
    }

    h2 {
      font-size: 1em;
      font-weight: 300;
      text-align: center;
      display: block;
      line-height: 1em;
      padding-bottom: 2em;
      color: #FB667A;
    }

    h2 a {
      font-weight: 700;
      text-transform: uppercase;
      color: #FB667A;
      text-decoration: none;
    }

    .blue {
      color: #FB667A;
    }

    .yellow {
      color: #FFF842;
    }
    p {
      color: black;
      font-size: 18px;
      font-weight: 400;
    }
    .container th h1 {
      font-weight: bold;
      font-size: 1em;
      text-align: center;
      color: greenyellow;
    }

    .container td {
      font-weight: 500;
      font-size: 40px;
      text-align: center;
      -webkit-box-shadow: 0 2px 2px -2px #0E1119;
      -moz-box-shadow: 0 2px 2px -2px #0E1119;
      box-shadow: 0 2px 2px -2px #0E1119;
      color: blue;
      }

    .container {
      text-align: left;
      overflow: hidden;
      width: 80%;
      margin: 0 auto;
      display: table;
      padding: 0 0 8em 0;
    }

    .container td,
    .container th {
      padding-bottom: 2%;
      padding-top: 2%;
      padding-left: 2%;
    }

    /* Background-color of the odd rows */
    .container tr:nth-child(odd) {
      background-color: #FDFFC2;
    }

    /* Background-color of the even rows */
    .container tr:nth-child(even) {
      background-color: #FFEAE3;
    }

    .container th {
      background-color: #1F2739;
    }

    .container td:first-child {
      color: #FB667A;
    }

    .container tr:hover {
      background-color: #464A52;
      -webkit-box-shadow: 0 6px 6px -6px #0E1119;
      -moz-box-shadow: 0 6px 6px -6px #0E1119;
      box-shadow: 0 6px 6px -6px #0E1119;
    }

    .container td:hover {
      background-color: #FFF842;
      color: red;
      font-weight: bold;
      font-size: 50px;

      box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
      transform: translate3d(6px, -6px, 0);

      transition-delay: 0s;
      transition-duration: 0.4s;
      transition-property: all;
      transition-timing-function: line;
    }

    @media (max-width: 800px) {

      .container td:nth-child(4),
      .container th:nth-child(4) {
        display: none;
      }
    }
  </style>
  <!-- 
    - favicon
  -->
  <link rel="icon" type="image/x-icon" href="./assets/images/red-heart-icon-png-2.png">
  <!-- 
  
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;800&family=Poppins:wght@400;500&display=swap"
    rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-bg.svg">
  <link rel="preload" as="image" href="./assets/images/AI-in-Healthcare.jpg">
  <link rel="preload" as="image" href="./assets/images/Wordpress-featured-images-48-1672795987342.jpg">
  <link rel="preload" as="image" href="./assets/images/pho-thong-nang-khieu-logo.png">
  <link rel="preload" as="image" href="./assets/images/hero-shape-2.png">

</head>

<body>
  <div class="nav">
    <a href="#" class="logo">
      <img src="./assets/images/red-heart-icon-png-2.png" width="80" height="80" alt="Healife logo">

    </a>
    <span style="color: red">
      <h1>HEALIFE | System for healthcare</h1>
    </span>

    <div class="right-links">

      <?php

      $id = $_SESSION['id'];
      $query = mysqli_query($con, "SELECT*FROM users WHERE Id=$id");

      while ($result = mysqli_fetch_assoc($query)) {
        $res_Uname = $result['Username'];
        $res_Email = $result['Email'];
        $res_Age = $result['Age'];
        $res_id = $result['Id'];
      }

      echo "<a href='edit.php?Id=$res_id'>Change Profile</a>";
      ?>

      <a href="php/logout.php"> <button class="btn">Log Out</button> </a>

    </div>
  </div>
  <main>

    <div class="main-box top">
      <div class="top">
        <div class="box">
          <p>Hello <b style="color:red;"><?php echo $res_Uname ?></b>, Welcome</p>
        </div>
        <!-- <div class="box" style="padding-top:0px; padding-bottom:-8px;   padding-left:8px;padding-right:8px;">

          </div> -->
        <a href="category.html"> <button class="btn"
            style="color:yellow; font-weight:400; font-size:30px; height:90%;">CHỨC NĂNG </button> </a>

        <div class="box">
          <p>Your email is <b style="color: green;"><?php echo $res_Email ?></b>.</p>
        </div>
      </div>
      <div class="bottom">
        <div class="box">
          <p>And you are <b style="color:blue;"><?php echo $res_Age ?> years old</b>.</p>
        </div>
      </div>
    </div>
  </main>
  <br>
  <br>

  <section>
    <center>
      <h1><span class="blue">&lt;</span>Dashboard<span class="blue">&gt;</span> <span class="yellow">Health index</pan>
      </h1>

      <table class="container">
        <thead style="border">
          <tr>
            <th>
              <h1>ID</h1>
            </th>
            <th>
              <h1>Health index's type</h1>
            </th>
            <th>
              <h1>Result</h1>
            </th>
          </tr>
        </thead>
        <tbody>
          <?php
          $query = mysqli_query($con, "SELECT * FROM health_index WHERE User_id=$id");
          $rows = array();

          while ($row = mysqli_fetch_assoc($query)) {
            $rows[] = $row;
          }

          for ($i = 0; $i < count($rows); $i++) {
            $id = $i + 1;
            $type = strtoupper($rows[$i]["Type_index"]);
            $value = $rows[$i]["Value_index"];
            echo "
            <tr>
            <td>$id</td>
            <td>$type</td>
            <td>$value</td>
            <td></td>
          </tr>
          ";
          }
          ?>
        </tbody>
      </table>
    </center>
  </section>
</body>

</html>