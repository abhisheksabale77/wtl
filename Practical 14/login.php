<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $remember = isset($_POST['remember']);

    $_SESSION['username'] = $username;

    if ($remember) {
        setcookie("username", $username, time() + (86400 * 7), "/"); // 7 days
    }

    header("Location: welcome.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Tailwind CSS CDN -->
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-semibold text-center text-gray-700 mb-6">Login</h2>
        
        <form method="POST" action="" class="space-y-4">
          
            <div>
                <label for="username" class="block text-gray-600">Username</label>
                <input type="text" name="username" id="username" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>
            
            <div class="flex items-center">
                <input type="checkbox" name="remember" id="remember" class="h-4 w-4 text-blue-500 focus:ring-blue-500">
                <label for="remember" class="ml-2 text-gray-600">Remember Me</label>
            </div>
            
            <button type="submit" class="w-full py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none">Login</button>
        </form>

        <div class="mt-4 text-center">
            <p class="text-gray-500">Don't have an account? <a href="register.php" class="text-blue-600 hover:text-blue-700">Sign up</a></p>
        </div>
    </div>

</body>
</html>
