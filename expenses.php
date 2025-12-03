<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <title>Expenses</title>
</head>


<body class="bg-gray-50 dark:bg-gray-900">

    <!-- NAVBAR -->
    <header class="sticky top-0 z-50 bg-white dark:bg-gray-800 shadow-sm">
        <nav class="max-w-7xl mx-auto flex items-center justify-between p-4">
            <a href="#" class="text-xl font-bold text-blue-600 dark:text-white">Spender</a>

            <div class="hidden lg:flex space-x-10">
                <a href="dashboard.php" class="text-gray-700 dark:text-gray-200 hover:text-blue-600">Dashboard</a>
                <a href="transactions.php" class="text-gray-700 dark:text-gray-200 hover:text-blue-600">Transactions</a>
                <a href="expenses.php" class="text-gray-700 dark:text-gray-200 hover:text-blue-600">Expenses</a>
                <a href="incomes.php" class="text-gray-700 dark:text-gray-200 hover:text-blue-600">Incomes</a>
                <a href="support.php" class="text-gray-700 dark:text-gray-200 hover:text-blue-600">Support</a>
            </div>

            <button onclick="logout()" class="hidden lg:block bg-blue-600 px-4 py-2 rounded-lg text-white hover:bg-blue-500 transition">
                Logout
            </button>
        </nav>
    </header>

    <!-- MAIN CONTENT -->
    <main class="max-w-6xl mx-auto mt-20 px-4">
        <div class="flex items-center justify-between mb-10">

            <p class="text-gray-600 dark:text-gray-300 text-xl">Liste des dépenses : </p>
        </div>

        <ul id="expensesTable" class="text-white items-center justify-center flex flex-row gap-4">
            <?php
                require "config/connexion.php";
                $request = "select * from expense where 1";
                $query = mysqli_query($conn, $request);
                while($rows = mysqli_fetch_assoc($query)){
                    echo "<ul>";
                    foreach($rows as $column => $content){
                        echo "<li>" . htmlspecialchars($column). " : " .htmlspecialchars($content) . "</li>";
                    }
                    echo "</ul><hr>";
                }
                
            ?>
        </ul>
    </main>


    <script src="js/forms.js"></script>
    <script src="js/auth.js"></script>
    <!-- <script src="js/validators.js"></script> -->
</body>


</html>