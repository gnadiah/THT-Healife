<?php
session_start();

if (!isset($_SESSION['valid'])) {
  header("Location:
  index.php");
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="BMR.css" />
</head>

<body>
  <center>
    <div class="bmr-calculator">
      <h2>BMR Calculator</h2>
      <div class="controls">
        <form action="" method="post">
          <h3>Age (10 - 100)</h3>
          <input type="text" id="age" value="0" name="age" />

          <div class="gender">
            <h3>Gender</h3>
            <input type="radio" id="male" value="male" name="gender" checked />
            <label for="male">Male</label>
            <input type="radio" id="female" value="female" name="gender" />
            <label for="female">Female</label>
          </div>

          <div class="height">
            <h3>Height</h3>
            <input type="text" id="height" value="0" name="height" />
            <div class="unit">cm</div>
          </div>

          <div class="weight">
            <h3>Weight</h3>
            <input type="text" id="weight" value="0" name="weight" />
            <div class="unit">kg</div>
          </div>
          <button class="Calculate-btn" type="submit" name="submit" value="submit"style="background: #FF4742; border: 1px solid #FF4742;border-radius: 6px;
  box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
font-size: 16px;
  font-weight: 800;
  line-height: 16px;
  min-height: 40px;
  outline: 0;
  padding: 12px 14px;
  text-align: center;
  text-rendering: geometricprecision;
  text-transform: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: middle;">Calculate & Save</button>
        </form>
      </div>

      <?php
      include ("../../../php/config.php");
      function calculateBMR($weight, $height, $age, $gender)
      {
        if ($gender == "male") {
          $bmr = 88.362 + (13.397 * $weight) + (4.799 * $height) - (5.677 * $age);
        } else {
          $bmr = 447.593 + (9.247 * $weight) + (3.098 * $height) - (4.330 * $age);
        }
        return round($bmr, 2);
      }

      if (isset($_POST['submit'])) {
        $id = $_SESSION["id"];
        $weight = $_POST["weight"];
        $height = $_POST["height"];
        $age = $_POST["age"];
        $gender = $_POST["gender"];
        $bmr = calculateBMR($weight, $height, $age, $gender);
        $res = mysqli_query($con, "SELECT * FROM health_index WHERE User_id='$id' AND Type_index='bmr'");
        $row = mysqli_fetch_assoc($res);

        if (is_array($row) && !empty($row)) {
          $update = mysqli_query($con, "UPDATE health_index SET Value_index='$bmr' WHERE User_id='$id' AND Type_index='bmr'");
        } else {
          $insert = mysqli_query($con, "INSERT INTO health_index (User_id, Type_index, Value_index) VALUES ('$id', 'bmr','$bmr')");
        }
        echo "<div class='result'>

          <div class='result-message'>
            <span class='calories'>$bmr</span> Calories/day
          </div>
        </div>";
      }
      ?>
      <div class="error-message">
        <p>Please enter all the details correctly.</p>
      </div>
    </div>
  </center>
  <form>
    <br />
    <br />
    
    <center>
    <a href="../../../category.html"><box style="background: #FF4742; border: 1px solid #FF4742;border-radius: 6px;
  box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
font-size: 16px;
  font-weight: 800;
  line-height: 16px;
  min-height: 40px;
  outline: 0;
  padding: 12px 14px;
  text-align: center;
  text-rendering: geometricprecision;
  text-transform: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: middle;">Back</box></a>
  </center>
  </form>
  <!-- <script src="main.js"></script> -->
</body>

</html>