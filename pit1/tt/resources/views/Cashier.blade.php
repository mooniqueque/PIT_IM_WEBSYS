<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cashier Dashboard</title>
   
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet" />

</head>

<body>
    <!-- page -->
<main class="min-h-screen w-full bg-gray-50" x-data="layout">
    <!--Header-->
    <header>
        <nav class="bg-white border-b-2 border-blue-100 flex w-full items-center justify-between py-2.5 bg-gradient-to-b from-blue-500 via-blue-400 to-sky-300">
        <div class="text-blue-800 px-10 py-1 z-10 w-full border-blue-200">
        <div class="flex items-center justify-between py-2 text-5x1">
        <div class="font-bold text-white text-xl">NNN<span class="text-blue-800">University</span></div>
        <div class="flex items-center text-gray-500">
            <!-- Button -->
            <button class="material-icons-outlined p-2 text-white hover:text-blue-900" style="font-size: 30px">mail</button>
            <!-- Button -->
            <button class="material-icons-outlined p-2 text-white hover:text-blue-900" style="font-size: 30px">notifications</button>
        </div>
        </div>
        </nav>
    </header>

    <style>
        #sidebarGradient {
    height: 600px; /* Adjust the height value as needed */
}
    </style>
    <div class="flex text-base">
    <!-- Sidebar -->
    <aside class="flex flex-col w-64 h-screen px-5 overflow-y-auto bg-white border-r-2 border-blue-100">
    <div class="flex flex-col justify-between flex-1 mt-6">
        <nav class="-mx-3 space-y-6 ">
            <div class="space-y-3">
                <div id="sidebarGradient" class="bg-gradient-to-b from-blue-500 via-blue-400 to-sky-300 rounded-xl shadow-lg mb-6 ml-5 mr-5 px- py-4">
                <a href="#" class=" text-white hover:text-blue-900 my-4 w-full flex flex-col items-center justify-center">
                <button class="material-icons-outlined focus:outline-none" style="font-size: 3rem;">account_circle</button>
                <span class="mt-5 font-bold">Cashier</span>
                </a>

                <!--Sidebar Navigation-->
                <div class="mt-10 text-white text-sm font-semibold">
                <a href="#" class="flex items-center space-x-1 rounded-md mx-4 px-2 py-2 hover:bg-blue-600 hover:text-blue-50 active:bg-blue-600">
                <span class="bg-trasnparent p-0.5 transition-all duration-300 inline-flex items-center">
                <span class="material-icons-outlined">home</span>
                <span class="ml-2">Home</span>
                </span>
                </a>

                <a href="#" class="flex items-center space-x-1 rounded-md mx-4 px-2 py-2 hover:bg-blue-600 hover:text-blue-50">
                <span class="bg-trasnparent p-0.5 transition-all duration-300 inline-flex items-center">
                <span class="material-icons-outlined">settings</span>
                <span class="ml-2">Settings</span>
                </span>
                </a>

                <a href="#" class="flex items-center space-x-1 rounded-md mx-4 px-2 py-2 hover:bg-blue-600 hover:text-blue-50">
                <span class="bg-trasnparent p-0.5 transition-all duration-300 inline-flex items-center">
                <span class="material-icons-outlined">power_settings_new</span>
                <span class="ml-2">Logout</span>
                </span>
                </a>

                </div>
                </div>
            </div>
        </nav>
    </div>
</aside>

<!--Main Content-->
<div class="w-full ml-5">
    <div class="flex flex-row">
        <div class="bg-gradient-to-b from-blue-500 via-blue-400 to-sky-300 rounded-xl shadow-lg px-6 py-4 mt-6 mr-5 flex-grow">
            <p class="text-3xl mt-3 font-bold text-white">Dashboard / Home </p>
            <p class="mt-3 mb-3 text-base font-semibold text-indigo-900">Welcome to the cashier dashboard!</p>
        </div>
    </div>

    <div class="grid grid-cols-3 mb-3">
    <!--Admission-->
    <div class="mt-10">
    <p class="text-base font-bold text-blue-800">Cashier Admin</p>
    </div>
    </div>

    <!--Dashboard Components-->
    <div class="grid grid-cols-3 grid-rows-4 gap-6">
        <div class="h-24 col-span-2 row-span-1 bg-gradient-to-r from-blue-500 via-blue-400 to-sky-300 rounded-xl shadow-lg flex items-center justify-center">
        <a href="" class="ml-5 text-white hover:text-blue-900 w-full flex items-center">
                <span class="material-icons-outlined focus:outline-none" style="font-size: 2rem;">payments</span>
                <span class="ml-2 text-lg font-semibold">Payment Processesing</span>
            </a>
        </div>

        <div class="mr-5 col-span-1 row-span-3 bg-gradient-to-r from-blue-500 via-blue-400 to-sky-300 rounded-xl shadow-lg flex flex-col items-center justify-center">
        <a href="" class="text-white hover:text-blue-900 w-full flex flex-col items-center justify-center">
            <span class="material-icons-outlined focus:outline-none mb-2" style="font-size: 2rem;">analytics</span>
            <span class="mt-3 text-lg font-semibold text-center">Student <br>Payment Status</span>
            </a>
        </div>

        <div class="h-24 col-span-2 row-span-1 bg-gradient-to-r from-blue-500 via-blue-400 to-sky-300 rounded-xl shadow-lg flex items-center justify-center">
        <a href="" class="ml-5 text-white hover:text-blue-900 w-full flex items-center">
                <span class="material-icons-outlined focus:outline-none" style="font-size: 2rem;">credit_score</span>
                <span class="ml-2 text-lg font-semibold">Payment Confirmation</span>
            </a>
        </div>

        <div class="h-24 col-span-2 row-span-1 bg-gradient-to-r from-blue-500 via-blue-400 to-sky-300 rounded-xl shadow-lg flex items-center justify-center">
        <a href="" class="ml-5 text-white hover:text-blue-900 w-full flex items-center">
                <span class="material-icons-outlined focus:outline-none" style="font-size: 2rem;">history</span>
                <span class="ml-2 text-lg font-semibold">Payment History</span>
            </a>
        </div>
        </div>
        </div>
        </div>
            
    </div>
</div>
</div>
</div>
</body>


</html>
