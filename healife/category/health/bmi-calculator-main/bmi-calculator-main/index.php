<?php
session_start();

if (!isset($_SESSION['valid'])) {
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BMI Calculator</title>
  <link rel="stylesheet" href="style.css" />
  <!-- <script src="script.js" defer></script> -->
</head>

<body>
  <div class="container">
    <h1>BMI Calculator</h1>
    <form class="calculator" action="" method="post">
      <div>
        <label for="weight">Weight (kg)</label>
        <input type="number" name="weight" id="weight" min="0" step="0.01" value="0" />
      </div>

      <div>
        <label for="height">Height (cm)</label>
        <input type="number" name="height" id="height" min="0" step="0.01" value="0" />
      </div>
      <div>
        <button type="submit" name="submit" style="margin-left: auto; margin-right: auto;">Calculate & Save</button>
      </div>
    </form>
    <?php
    include ("../../../../php/config.php");
    if (isset($_POST['submit'])) {
      $id = $_SESSION['id'];
      $weight = $_POST['weight'];
      $height = $_POST['height'] / 100;
      $bmi = $weight / ($height * $height);
      $bmi = round($bmi, 2);
      $res = mysqli_query($con, "SELECT * FROM health_index WHERE User_id = '$id' AND Type_index='bmi'") or die("Select Error");
      $row = mysqli_fetch_assoc($res);
      if (is_array($row) && !empty($row)) {
        $update = mysqli_query($con, "UPDATE health_index SET Value_index = '$bmi' WHERE User_id = '$id' AND Type_index='bmi'") or die("Update Error");
      } else {
        $insert = mysqli_query($con, "INSERT INTO health_index (User_id, Type_index, Value_index) VALUES ('$id', 'bmi','$bmi')") or die("Insert Error");
      }
      echo "
      <section class='output'>
      <h3>Your BMI is</h3>
      <p id='bmi'>0</p>
      <p id='desc'>N/A</p>
    </section>

    <section class='bmi-scale'>
      <div style='--color: var(--underweight)'>
        <h4>Underweight</h4>
        <p>&lt; 18.5</p>
      </div>

      <div style='--color: var(--normal)'>
        <h4>Normal</h4>
        <p>18.5 – 25</p>
      </div>

      <div style='--color: var(--overweight)'>
        <h4>Overweight</h4>
        <p>25 – 30</p>
      </div>

      <div style='--color: var(--obese)'>
        <h4>Obese</h4>
        <p>≥ 30</p>
      </div>
    </section>";
      echo "
      <script>
      const bmiText = document.getElementById('bmi');
      const descText = document.getElementById('desc');
      const form = document.querySelector('form');
      const bmi = $bmi;

      function interpretBMI(bmi) {
        if (bmi < 18.5) {
          return 'underweight';
        } else if (bmi < 25) {
          return 'healthy';
        } else if (bmi < 30) {
          return 'overweight';
        } else {
          return 'obese';
        }
      }
      const desc = interpretBMI(bmi);
      bmiText.textContent = bmi.toFixed(2);
      bmiText.className = desc;
      descText.innerHTML = 'You are <strong>' + desc + '</strong>';

      </script>";
    }
    ?>
    <center>
    <a href="../../../../category.html"><button style="background: #FF4742; border: 1px solid #FF4742;border-radius: 6px;
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
  vertical-align: middle;">Back</button></a>
  </center>
  </div>

</body>

</html>