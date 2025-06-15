<!DOCTYPE html>
<html>
<header>
  <?php include __DIR__ . '/../pretty/header.php'; ?>
  <link rel="icon" type="image/x-icon" href="fin.png">
</header>

<body>
  <?php include __DIR__ . '/../pretty/navigation.php'; ?>
  <div class="d-flex justify-content-center align-items-center" style="height: 80vh;">
    <div class="card text-center" style="width: 30rem;">
      <div class="card-body">
        <h2 class="card-title">Are you over the age of 14?</h2>
        <p class="card-text">
          <a href="login.php" class="btn btn-primary me-2">Yea!</a>
          <a href="https://google.com" class="btn btn-secondary">No!</a>
        </p> 
      </div>
    </div>
  </div>
</body>
</html>
