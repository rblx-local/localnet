<!DOCTYPE html>
<html>
<header>
  <?php include 'pretty/header.php'; ?>
  <link rel="icon" type="image/x-icon" href="fin.png">
</header>

<body>
  <?php include 'pretty/navigation.php'; ?>
  <div class="jumbotron text-center" style="position: relative;">
    <canvas id="particle-canvas" style="position: absolute; top: 0; left: 0; width: 100%; height: 400px; z-index: 0;"></canvas>
    <div class="container" style="position: relative; z-index: 1;">
      <img src="/Images/logos/rocknet.png" class="img-responsive mx-auto d-block" style="max-width: 300px; max-height: 200px;" alt="RockNet"/>
      <br>
      <h2>You have succesfully setup a new Instance!</h2>
      <h2><a href="auth\proceed.php">Proceed with registration</a></h2>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-4 text-center well well-lg">
        <h4>flexible setup.</h4>
        <p>you can setup it with your nose!</p>
      </div>
      <div class="col-md-4 text-center well well-lg">
        <h4>roblox rip-off at your hands.</h4>
        <p>you can abuse your admin powers!</p>
      </div>
      <div class="col-md-4 text-center well well-lg">
        <h4>give your users a nice stipend.</h4>
        <p>okay?</p>
      </div>
    </div>
  </div>
</body>
</html>
