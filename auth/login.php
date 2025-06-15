<!DOCTYPE html>
<html>
<header>
  <?php include __DIR__ . '/../pretty/header.php'; ?>
  <link rel="icon" type="image/x-icon" href="fin.png">
</header>

<?php
session_start();
?>
<body>
  <?php include __DIR__ . '/../pretty/navigation.php'; ?>
  <div class="d-flex justify-content-center align-items-center" style="height: 80vh;">
    <div class="card" style="width: 30rem;">
      <div class="card-body">
        <?php if (!empty($_SESSION['success_message'])): ?>
          <div class="alert alert-success" role="alert">
            <?php echo htmlspecialchars($_SESSION['success_message']); ?>
          </div>
          <?php unset($_SESSION['success_message']); ?>
        <?php endif; ?>
        <?php if (!empty($_SESSION['error_message'])): ?>
          <div class="alert alert-danger" role="alert">
            <?php echo htmlspecialchars($_SESSION['error_message']); ?>
          </div>
          <?php unset($_SESSION['error_message']); ?>
        <?php endif; ?>
        <h2 class="card-title text-center mb-4">Login</h2>
        <form method="POST" action="login_process.php">
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required autofocus>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <button type="submit" class="btn btn-primary w-100">login
            <i class="fa fa-chevron-right ms-2" style="font-size: 12px;"></i>

          </button>
          
        </form>
        <p class="mt-3 text-center">Don't have an account? <a href="register.php">Register here</a></p>
      </div>
    </div>
  </div>
</body>
</html>
