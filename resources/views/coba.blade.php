<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login/Register</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .transition-transform {
      transition: transform 0.5s ease-in-out;
    }
  </style>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">

  <div class="relative w-full max-w-md bg-white shadow-lg rounded-lg overflow-hidden">
    <!-- Slider Container -->
    <div id="slider" class="flex w-[200%] transition-transform">
      <!-- Login Form -->
      <div class="w-1/2 p-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Login</h2>
        <form id="login-form">
          <div class="mb-4">
            <label for="login-email" class="block text-gray-600 mb-2">Email</label>
            <input id="login-email" type="email" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
          </div>
          <div class="mb-4">
            <label for="login-password" class="block text-gray-600 mb-2">Password</label>
            <input id="login-password" type="password" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
          </div>
          <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">
            Login
          </button>
        </form>
        <p class="mt-4 text-sm text-center">
          Belum punya akun? 
          <button id="show-register" class="text-blue-500 hover:underline">Daftar</button>
        </p>
      </div>

      <!-- Register Form -->
      <div class="w-1/2 p-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Register</h2>
        <form id="register-form">
          <div class="mb-4">
            <label for="register-name" class="block text-gray-600 mb-2">Nama Lengkap</label>
            <input id="register-name" type="text" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-500">
          </div>
          <div class="mb-4">
            <label for="register-email" class="block text-gray-600 mb-2">Email</label>
            <input id="register-email" type="email" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-500">
          </div>
          <div class="mb-4">
            <label for="register-password" class="block text-gray-600 mb-2">Password</label>
            <input id="register-password" type="password" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-500">
          </div>
          <button type="submit" class="w-full bg-green-500 text-white p-2 rounded hover:bg-green-600">
            Register
          </button>
        </form>
        <p class="mt-4 text-sm text-center">
          Sudah punya akun? 
          <button id="show-login" class="text-green-500 hover:underline">Login</button>
        </p>
      </div>
    </div>
  </div>

  <script>
    const slider = document.getElementById("slider");
    const showRegister = document.getElementById("show-register");
    const showLogin = document.getElementById("show-login");

    showRegister.addEventListener("click", () => {
      slider.style.transform = "translateX(-50%)";
    });

    showLogin.addEventListener("click", () => {
      slider.style.transform = "translateX(0)";
    });
  </script>

</body>
</html>
