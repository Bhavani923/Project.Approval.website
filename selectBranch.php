<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>select branch</title>
    <link rel="stylesheet" href="selectBranch.css?v=<?php echo time(); ?>">
  </head>
  <body>
    <div class="container">
      <h1>SUBMIT  PROJECT  DETAILS</h1>

      <div class="select-box">
        <div class="options-container">
          <div class="option">
            <input type="radio" class="radio" id="cse" name="category"/>
            <label for="cse">Computer Science and Engineering</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="ece" name="category" />
            <label for="ece">Electronics Engineering</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="eee" name="category" />
            <label for="eee">Electrical and Electronics Engineering</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="ce" name="category" />
            <label for="ce">Civil Engineering</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="bme" name="category" />
            <label for="bme">Bio-Medical Engineering</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="ice" name="category" />
            <label for="ice">Instrumentation and Control Engineering</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="me" name="category" />
            <label for="me">Mechanical Engineering</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="phe" name="category" />
            <label for="phe">Pharmaceutical Engineering</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="ae" name="category" />
            <label for="ae">Aeronautical Engineering</label>
          </div>
        </div>

        <div class="selected">
          <h2>SELECT BRANCH</h2>
        </div>
      </div>
    </div>

    <!--review boxes-->
 

   <!-- contents-->
  <div class="quotes">
    <div class="card">
      <div class="box box1">
        <h3>REVIEW -1</h3>
        <p>CLICK HERE TO SUBMIT </p>
        <a href="review1up.php" class="btn">Submit Project</a>
      </div>
      <div class="bg"></div>
    </div>
    <div class="card">
      <div class="box box2">
        <h3>REVIEW -2</h3>
        <p>CLICK HERE TO SUBMIT </p>
        <a href="review1up.php" class="btn">Submit Project</a>
      </div>
      <div class="bg"></div>
    </div>


    <script src="selectBranch.js "></script>
  </body>
</html>