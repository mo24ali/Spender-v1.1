<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <title>Dashboard</title>
</head>

<?php
// session_start();
// if (!isset($_SESSION["loggedIn"])) {
//     header("Location: index.php");
//     exit();
// }
?>


<body class="bg-gray-50 dark:bg-gray-900">

    <!-- NAVBAR -->
    <header class="sticky top-0 z-50 bg-white dark:bg-gray-800 shadow-sm">
        <nav class="max-w-7xl mx-auto flex items-center justify-between p-4">
            <a href="#" class="text-xl font-bold text-blue-600 dark:text-white">Spender</a>

            <div class="hidden lg:flex space-x-10">
                <a href="#" class="text-gray-700 dark:text-gray-200 hover:text-blue-600">Dashboard</a>
                <a href="transactions.php" class="text-gray-700 dark:text-gray-200 hover:text-blue-600">Transactions</a>
                <a href="payments.php" class="text-gray-700 dark:text-gray-200 hover:text-blue-600">Payments</a>
                <a href="exchange.php" class="text-gray-700 dark:text-gray-200 hover:text-blue-600">Exchange</a>
                <a href="support.php" class="text-gray-700 dark:text-gray-200 hover:text-blue-600">Support</a>
            </div>

            <button onclick="showLoginPopup()" class="hidden lg:block bg-blue-600 px-4 py-2 rounded-lg text-white hover:bg-blue-500 transition">
                Login / Register
            </button>
        </nav>
    </header>

    <!-- MAIN CONTENT -->
    <main class="max-w-6xl mx-auto mt-20 px-4">
        <div class="flex items-center justify-between mb-10">

            <button id="newPaymentsBtn" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-500 transition">
                + New Payment
            </button>

            <div class="flex space-x-4">
                <select id="filterSelect" class="rounded-lg px-3 py-2 border dark:bg-gray-800 dark:text-white">
                    <option value="opt1">Option 1</option>
                    <option value="opt2">Option 2</option>
                </select>

                <select id="monthFilter" class="rounded-lg px-3 py-2 border dark:bg-gray-800 dark:text-white">
                    <option disabled selected>Select month</option>
                    <option value="01">January</option>
                    <option value="02">February</option>
                </select>
            </div>
        </div>

        <p class="text-gray-600 dark:text-gray-300 text-xl">No data available yet — start by adding new payments.</p>
    </main>

    <!-- LOGIN MODAL -->
    <div id="login" class="fixed inset-0 bg-black/40 backdrop-blur-sm flex justify-center items-center z-50 hidden">
        <form class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg w-80 space-y-4"
              action="form_handlers/loginFormHandler.php" method="POST">

            <h2 class="text-xl font-bold text-center dark:text-white">Login</h2>

            <input type="text" name="emailLog" class="w-full p-2 rounded-lg border dark:bg-gray-900 dark:text-white"
                   placeholder="Email">

            <input type="password" name="passwordLog" class="w-full p-2 rounded-lg border dark:bg-gray-900 dark:text-white"
                   placeholder="Password">

            <button class="w-full bg-blue-600 hover:bg-blue-500 text-white py-2 rounded-lg transition">
                Log In
            </button>

            <a id="registerFormPipe" class="text-blue-600 hover:underline text-center cursor-pointer block">
                Create an account →
            </a>
        </form>
    </div>

    <!-- REGISTER MODAL -->
    <div id="register" class="fixed inset-0 bg-black/40 backdrop-blur-md flex justify-center items-center z-50 hidden">
        <form class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg w-96 space-y-4"
              action="form_handlers/registerFormHandler.php" method="POST">

            <h2 class="text-xl font-bold text-center dark:text-white">Register</h2>

            <input type="text" name="lastname" placeholder="Lastname"
                   class="w-full p-2 rounded-lg border dark:bg-gray-900 dark:text-white">

            <input type="text" name="firstname" placeholder="Firstname"
                   class="w-full p-2 rounded-lg border dark:bg-gray-900 dark:text-white">

            <input type="text" name="emailRegister" placeholder="Email"
                   class="w-full p-2 rounded-lg border dark:bg-gray-900 dark:text-white">

            <input type="password" name="passwordRegister" placeholder="Password"
                   class="w-full p-2 rounded-lg border dark:bg-gray-900 dark:text-white">

            <input type="password" placeholder="Confirm Password"
                   class="w-full p-2 rounded-lg border dark:bg-gray-900 dark:text-white">

            <button class="w-full bg-blue-600 hover:bg-blue-500 text-white py-2 rounded-lg transition">
                Register
            </button>
        </form>
    </div>

    <script src="js/auth.js"></script>
    <script src="js/validators.js"></script>
</body>


</html>