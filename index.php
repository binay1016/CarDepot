<?php
session_start();
$loginError = $_SESSION['login_error'] ?? null;
$registerNotice = $_SESSION['register_success'] ?? null;
unset($_SESSION['login_error'], $_SESSION['register_success']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CarDepot | Sign In</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Work+Sans:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="stage">

  <!-- LEFT: BRAND PANEL -->
  <div class="brand-panel">
    <div>
      <div class="logo-row">
        <svg class="logo-mark" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="24" cy="24" r="23" fill="#FFFFFF" fill-opacity="0.12" stroke="#FFFFFF" stroke-width="1.5"/>
          <path d="M11 27.5L13.4 20.6C13.9 19 15.4 18 17.1 18H30.9C32.6 18 34.1 19 34.6 20.6L37 27.5" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M9.5 27.5H38.5V32C38.5 32.83 37.83 33.5 37 33.5H35C34.17 33.5 33.5 32.83 33.5 32V30.5H14.5V32C14.5 32.83 13.83 33.5 13 33.5H11C10.17 33.5 9.5 32.83 9.5 32V27.5Z" stroke="#FFFFFF" stroke-width="2" stroke-linejoin="round"/>
          <circle cx="15.5" cy="30" r="1.6" fill="#FFFFFF"/>
          <circle cx="32.5" cy="30" r="1.6" fill="#FFFFFF"/>
          <path d="M14 23.5H34" stroke="#FFFFFF" stroke-width="1.4" stroke-linecap="round"/>
        </svg>
        <div class="brand-name">Car<span>Depot</span></div>
      </div>

      <div class="tagline">Your Journey,<br><em>Our Wheels.</em></div>

      <div class="road">
        <span class="road-car">🚗</span>
      </div>
    </div>
  </div>

  <!-- RIGHT: FORM PANEL -->
  <div class="form-panel">
    <div class="form-heading">Welcome Back</div>
    <p class="form-sub">Log in to your CarDepot account to continue.</p>

    <?php if ($loginError): ?>
      <div class="error-msg show">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
        <span><?php echo htmlspecialchars($loginError); ?></span>
      </div>
    <?php endif; ?>

    <?php if ($registerNotice): ?>
      <div class="success-msg show">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
        <span><?php echo htmlspecialchars($registerNotice); ?></span>
      </div>
    <?php endif; ?>

    <!-- action + method added, everything else identical to your version -->
    <form action="login_register.php" method="post" novalidate>
      <div class="field">
        <label for="username">Username</label>
        <div class="input-wrap">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
          <input type="text" id="username" name="username" placeholder="Enter your username" autocomplete="username" required>
        </div>
      </div>

      <div class="field">
        <label for="password">Password</label>
        <div class="input-wrap">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="10" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
          <input type="password" id="password" name="password" placeholder="Enter your password" autocomplete="current-password" required>
        </div>
      </div>

      <div class="row-between">
        <label class="remember">
          <input type="checkbox" id="remember">
          Remember me
        </label>
        <a href="#" onclick="return false;">Forgot password?</a>
      </div>

      <!-- name="login" added -->
      <button type="submit" name="login" value="1" class="btn-login">Log In</button>

      <div class="auth-switch">
        <span>New here?</span>
        <a href="signup.html" class="btn-signup">Sign Up</a>
      </div>
    </form>
  </div>

</div>

</body>
</html>