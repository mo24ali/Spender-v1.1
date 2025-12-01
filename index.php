<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <title>Dashboard</title>
</head>

<?php

require 'php/connexion.php';

$request = "SELECT * FROM income";
$query = mysqli_query($conn, $request);

// if ($query) {
//     while ($rows = mysqli_fetch_assoc($query)) {
//         echo $rows["incomeTitle"] . "<br>";
//     }
// } else {
//     echo "Query failed!";
// }

?>


<body>

    <div class="bg-white dark:bg-gray-900">
        <header class="absolute inset-x-0 top-0 z-50">
            <nav aria-label="Global" class="flex items-center justify-between p-6 lg:px-8">
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="text-white">Spender</span>

                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button" command="show-modal" commandfor="mobile-menu"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700 dark:text-gray-200">
                        <span class="sr-only">Open main menu</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon"
                            aria-hidden="true" class="size-6">
                            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <!-- Navbar -->
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="#" class="text-sm/6 font-semibold text-gray-900 dark:text-white">Dashboard</a>
                    <a href="transactions.html" class="text-sm/6 font-semibold text-gray-900 dark:text-white">Transactions</a>
                    <a href="payments.html" class="text-sm/6 font-semibold text-gray-900 dark:text-white">Payments</a>
                    <a href="exchange.html" class="text-sm/6 font-semibold text-gray-900 dark:text-white">Exchange</a>
                    <a href="support.html" class="text-sm/6 font-semibold text-gray-900 dark:text-white">Support</a>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end" onclick="showLoginPopup()">
                    <a href="#" class="text-sm/6 font-semibold text-gray-900 dark:text-white">Log in | Register <span
                            aria-hidden="true">&rarr;</span></a>
                </div>
            </nav>
            <el-dialog>
                <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
                    <div tabindex="0" class="fixed inset-0 focus:outline-none">
                        <el-dialog-panel
                            class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10 dark:bg-gray-900 dark:sm:ring-gray-100/10">
                            <div class="flex items-center justify-between">
                                <a href="#" class="-m-1.5 p-1.5">
                                    <span class="sr-only">Your Company</span>
                                    <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600"
                                        alt="" class="h-8 w-auto dark:hidden" />
                                    <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                                        alt="" class="h-8 w-auto not-dark:hidden" />
                                </a>
                                <button type="button" command="close" commandfor="mobile-menu"
                                    class="-m-2.5 rounded-md p-2.5 text-gray-700 dark:text-gray-200">
                                    <span class="sr-only">Close menu</span>
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        data-slot="icon" aria-hidden="true" class="size-6">
                                        <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                            <div class="mt-6 flow-root">
                                <div class="-my-6 divide-y divide-gray-500/10 dark:divide-white/10">
                                    <div class="space-y-2 py-6">
                                        <a href="#"
                                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50 dark:text-white dark:hover:bg-white/5">Dashboard</a>
                                        <a href="transactions.html"
                                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50 dark:text-white dark:hover:bg-white/5">Transaction</a>
                                        <a href="payments.html"
                                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50 dark:text-white dark:hover:bg-white/5">Payments</a>
                                        <a href="exchange.html"
                                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50 dark:text-white dark:hover:bg-white/5">Exchange</a>
                                        <a href="support.html"
                                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50 dark:text-white dark:hover:bg-white/5">Support</a>
                                    </div>
                                    <div class="py-6">
                                        <a href="#"
                                            class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50 dark:text-white dark:hover:bg-white/5">Log
                                            in</a>
                                    </div>
                                </div>
                            </div>
                        </el-dialog-panel>
                    </div>
                </dialog>
            </el-dialog>
        </header>

        <div id="div-welcome" class="absolute">
                <h1
            class="text-5xl font-semibold tracking-tight text-balance text-gray-900 sm:text-7xl dark:text-white">
            Good Morning ! UserName</h1>
        </div>
        

        <div class="relative isolate px-6 pt-14 lg:px-8">
            <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                <button id="newPaymentsBtn" class="text-white bg-blue-500 rounded-2xl p-1">+ new payments</button>
                <select name="" id="filterSelect" class="rounded-2xl">
                    <option value="opt1">opt1</option>
                    <option value="opt1">opt1</option>
                    <option value="opt1">opt1</option>
                    <option value="opt1">opt1</option>
                    <option value="opt1">opt1</option>
                </select>
                <select name="what month" id="monthFilter" class="rounded-2xl">
                    <option value="" disabled selected>Select a month</option>
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
                <div class="text-left">

                    <p class="mt-8 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8 dark:text-gray-400">Anim
                        aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt
                        amet fugiat veniam occaecat.</p>

                </div>
            </div>


            <!-- login and signin popup -->

            <div id="login" class="fixed inset-0 bg-black/40 backdrop-blur-sm flex justify-center items-start sm:items-center p-2 sm:p-4 z-50 hidden">

                <form id="login-form" action="" method="POST" class="flex flex-col bg-white">
                    <label for="mail">Email : </label>
                    <input id="mail" type="text" placeholder="email" name="email">
                    <label for="pswd">password : </label>
                    <input id="pswd" type="password" placeholder="Password" name="password">
                    <button id="loginBtn" class="rounded text-center bg-blue-500 p-1 hover:bg-blue-300 transform duration-300">Log In</button>
                    <a id="registerFormPipe">Register <span
                            aria-hidden="true">&rarr;</span> </a>
                </form>

            </div>

            <div id="register" class="fixed inset-0 bg-black/40 backdrop-blur-sm flex justify-center items-start sm:items-center p-2 sm:p-4 z-60 hidden">
                <form id="register-form" action="" method="POST" class="flex flex-col ">

                </form>
            </div>

        </div>
    </div>
    <script src="js/auth.js"></script>
</body>

</html>