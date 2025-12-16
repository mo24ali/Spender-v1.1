<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>

    <script src="js/forms.js"></script>
    <script src="js/auth.js"></script>
    <!-- <script src="js/validators.js"></script> -->
    <title>Expenses</title>
</head>


<body class="bg-gray-50 dark:bg-gray-900 dark:text-white">
    <?php
    session_start();

    ?>
    <!-- NAVBAR -->
    <header class="sticky top-0 z-50 bg-white dark:bg-gray-800 shadow-sm opacity-0 translate-y-[-50px]" id="navbar">
        <nav class="max-w-7xl mx-auto flex items-center justify-between p-4">
            <a href="index.php" class="text-2xl font-bold text-blue-600 dark:text-white">Spender</a>
            <div class="hidden lg:flex space-x-10">
                <a href="dashboard.php" class="text-gray-700 dark:text-gray-200 hover:text-blue-600 transition">Dashboard</a>
                <a href="transactions.php" class="text-gray-700 dark:text-gray-200 hover:text-blue-600 transition">Transactions</a>
                <a href="expenses.php" class="text-gray-700 dark:text-gray-200 hover:text-blue-600 transition">Expenses</a>
                <a href="incomes.php" class="text-gray-700 dark:text-gray-200 hover:text-blue-600 transition">Incomes</a>
                <a href="support.php" class="text-gray-700 dark:text-gray-200 hover:text-blue-600 transition">Support</a>
            </div>
            <a href="auth/logout.php">
                <button id="" class="bg-blue-600 px-4 py-2 rounded-lg text-white hover:bg-blue-500 transition">
                    Logout
                </button>
            </a>
        </nav>
    </header>
    
    <!-- MAIN CONTENT -->
    <main class="max-w-6xl mx-auto mt-20 px-4">
        <div class="flex flex-col mb-10 space-y-4">
            <p class="text-gray-700 dark:text-gray-300 text-xl font-semibold">Liste des Transactions:</p>

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                

                <!-- Filters Form -->
                <form class="flex flex-col sm:flex-row items-center gap-2" method="get">
                    <select id="expenseMonth" name="expenseMonth"
                        class="bg-gray-700 text-white px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                        <option value="" disabled selected>Filter by Month</option>
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>

                    <select id="expenseCategory" name="expenseCategory"
                        class="bg-gray-700 text-white px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                        <option value="" disabled selected>Filter by Category</option>
                        <option value="food">Food</option>
                        <option value="transport">Transport</option>
                        <option value="bills">Bills</option>
                        <option value="shopping">Shopping</option>
                        <option value="health">Health</option>
                        <option value="entertainment">Entertainment</option>
                        <option value="other">Other</option>
                    </select>
                    Sort by price:
                    <input type="checkbox" placeholder="sort by price" name="priceFilter">
                    <button type="submit"
                        class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-500 transition duration-200">
                        Apply
                    </button>
                </form>
            </div>
        </div>



        <table class="w-full text-sm text-left rtl:text-right text-body border border-default rounded-lg overflow-hidden">
            <thead class="bg-neutral-secondary-soft border-b border-default">
                <tr>
                    <th class="px-6 py-3 font-medium"></th>
                    
                </tr>
            </thead>

            <tbody>
                <?php
                require "config/connexion.php";
                $userId = $_SESSION['user_id'];
                
                ?>
            </tbody>
        </table>



    </main>
    <!-- ADD EXPENSE MODAL -->



    <script>
        // GSAP Animations

        // Navbar slide-in
        gsap.to("#navbar", {
            duration: 1,
            y: 0,
            opacity: 1,
            ease: "power2.out"
        });
    </script>

  
</body>


</html>