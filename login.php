<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Redirect if already logged in
if (isset($_SESSION['admin'])) {
    header("Location: dashlogin.php");
    exit;
}

include "db.php";

$error = "";

if (isset($_POST['login'])) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Sanitize & validate username (case-sensitive, 5-20 letters/numbers only)
    $username = trim($username);
    if (!preg_match('/^[a-zA-Z0-9_]{5,20}$/', $username)) {
        $error = "Invalid username format. Use 5–20 letters and numbers only.";
    } else {
        // Recreate mixture with submitted password
        $pepper = "Qk9QShG44EeM3sNxQ1qvKFRFR";
        $mixture = $pepper . $password . $pepper;

        // Query DB
        $stmt = $conn->prepare("SELECT password FROM admins WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($storedHash);
            $stmt->fetch();

            // Verify mixture against stored hash
            if (password_verify($mixture, $storedHash)) {
                $_SESSION['admin'] = $username;
                header("Location: dashboard.php");
                exit;
            } else {
                $error = "Invalid credentials";
            }
        } else {
            $error = "Invalid credentials";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login | Sanggunian ng Bongabon</title>
  <link rel="icon" type="image/x-icon" href="assets/icon.png" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <script>
    // Block invalid characters in username (only letters & numbers)
    function validateUsernameInput(event) {
      const regex = /^[a-zA-Z0-9_]$/;
      const key = String.fromCharCode(event.which);
      if (!regex.test(key)) {
        event.preventDefault();
        return false;
      }
      return true;
    }
  </script>
</head>
<body class="h-screen flex items-center justify-center font-sans p-4 bg-cover bg-center bg-fixed" style="background-image: url('assets/bg.jpg');">

  <div class="rounded-lg shadow-2xl flex flex-col md:flex-row w-full max-w-5xl mx-auto overflow-hidden">
    <div class="flex-1 p-8 md:p-12 flex items-center justify-center">
      <div class="w-full max-w-sm">
        <div class="text-center mb-6">
          <img src="assets/icon.png" alt="Company Logo" class="h-16 w-16 mx-auto md:hidden object-contain"/>
          <h1 class="text-4xl font-bold text-white mt-4">Login</h1>
          <p class="text-white mt-2">Access your admin panel</p>
        </div>

        <?php if (!empty($error)): ?>
          <p class="mb-4 text-red-600 text-center font-semibold"><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>

        <form method="POST" action="">
          <div class="mb-4 relative">
            <label for="username" class="block text-white text-sm mb-2">Username</label>
            <div class="relative">
              <i class="fas fa-user absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
              <input
                type="text"
                id="username"
                name="username"
                class="w-full pl-12 pr-4 py-2 text-white bg-indigo-500/10 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                placeholder="Enter your username"
                pattern="^[a-zA-Z0-9_]{5,20}$"
                minlength="5"
                maxlength="20"
                required
                onkeypress="return validateUsernameInput(event)"
              />
            </div>
          </div>

          <div class="mb-6 relative">
            <label for="password" class="block text-white text-sm mb-2">Password</label>
            <div class="relative">
              <i class="fas fa-lock absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
              <input
                type="password"
                id="password"
                name="password"
                class="w-full pl-12 pr-4 py-2 text-white bg-indigo-500/10 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                placeholder="Enter your password"
                required
              />
            </div>
          </div>

          <button
            type="submit"
            name="login"
            class="w-full bg-blue-600 text-white py-3 px-4 rounded-lg font-semibold hover:bg-blue-700 transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
          >
            Login
          </button>
           <p class="text-white text-center mt-4">
            <a href="register.php" class="text-blue-400 hover:underline">Register Account</a>
          </p>
        </form>
      </div>
    </div>
    
    <div class="hidden md:flex flex-1 items-center justify-center bg-gray-200/5 rounded-r-lg">
      <img src="assets/icon.png" alt="Company Logo" class="w-full h-full object-contain p-8"/>
    </div>
  </div>
</body>
</html>
