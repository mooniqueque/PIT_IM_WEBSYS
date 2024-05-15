<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body>
<div class="bg-gradient-to-b from-sky-500 via-cyan-300 to-sky-100 min-h-screen">
    <div class="fixed bg-white text-blue-800 px-10 py-1 z-10 w-full">
        <div class="flex items-center justify-between py-1 text-5x1">
            <div class="font-bold text-blue-900 text-xl">NNN<span class="text-blue-500">University</span></div>
            <div class="flex items-center text-sky-600">
                <span class="material-icons-outlined p-2" style="font-size: 30px">search</span>
                <span class="material-icons-outlined p-2" style="font-size: 30px">notifications</span>
            </div>
        </div>
    </div>

    <!--sidebar here-->
  
    <div class="flex flex-row pt-24 px-10 pb-4 h-screen">
        <div class="w-2/12 mr-6">
            <div class="bg-white rounded-xl shadow-lg mb-6 px-6 py-4 h-[640px] w-[220px]">
                <button class="flex flex-col items-center justify-center bg-white text-sky-600 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    <span class="material-icons-outlined text-5xl">account_circle</span>
                    <p class="mt-2 text-lg text-sky-600 mb-4">Welcome, Ami!</p>
                </button>

                <div class="w-full border-t border-gray-200 mb-2"></div>

                <a href="" class="inline-block text-sky-600   hover:text-white hover:bg-cyan-400 my-4 w-full p-2 mb-1 rounded-lg">
                    <span class="material-icons-outlined float-left pr-2">face</span>
                    Profile
                </a>

                <a href="" class="inline-block text-sky-600  hover:text-white hover:bg-cyan-400 my-4 w-full p-2 mb-1 rounded-lg">
                    <span class="material-icons-outlined float-left pr-2">dashboard</span>
                    Home
                </a>

                <a href="" class="inline-block text-sky-600  hover:text-white hover:bg-cyan-400 my-4 w-full p-2 mb-[2px] rounded-lg">
                    <span class="material-icons-outlined float-left pr-2">settings</span>
                    Settings
                </a>

                <a href="" class="inline-block text-sky-600  hover:text-white  hover:bg-red-400 my-4 w-full p-2 mt-[235px] rounded-lg">
                    <span class="material-icons-outlined float-left pr-2">power_settings_new</span>
                    Log out
                </a>
            </div>
        </div>

        <!--body-->
        
        <div class="">
            <div class="flex flex-col">
                <div class="bg-no-repeat bg-white border rounded-xl w-[975px] mr-2 ml-2 p-5" style="background-image: url(https://previews.dropbox.com/p/thumb/AAvyFru8elv-S19NMGkQcztLLpDd6Y6VVVMqKhwISfNEpqV59iR5sJaPD4VTrz8ExV7WU9ryYPIUW8Gk2JmEm03OLBE2zAeQ3i7sjFx80O-7skVlsmlm0qRT0n7z9t07jU_E9KafA9l4rz68MsaZPazbDKBdcvEEEQPPc3TmZDsIhes1U-Z0YsH0uc2RSqEb0b83A1GNRo86e-8TbEoNqyX0gxBG-14Tawn0sZWLo5Iv96X-x10kVauME-Mc9HGS5G4h_26P2oHhiZ3SEgj6jW0KlEnsh2H_yTego0grbhdcN1Yjd_rLpyHUt5XhXHJwoqyJ_ylwvZD9-dRLgi_fM_7j/p.png?fv_content=true&size_mode=5); background-position: 90% center;">
                    <p class="text-5xl font-bold text-sky-600">Dashboard/Home</p>
                    <span class="text-xl text-sky-600 inline-block rounded-full mt-1 px-1 py-1">Hello, Student!</span>
                </div>
                <div class="mt-10">
                    <p class="font-bold text-white text-lg ml-2">Admission</p>
                </div>
                <div class="flex flex-row ml-2">
                    <div class="bg-white border rounded-xl w-[200px] h-[180px] mt-4 p-6">
                        <button class="flex flex-col items-center justify-center bg-white text-sky-600 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            <span class="material-icons-outlined text-5xl">account_circle</span>
                            <p class="mt-2 text-lg text-sky-600 mb-4">Welcome, Ami!</p>
                        </button>
                    </div>
                    <div class="bg-white border rounded-xl w-[200px] mx-[58px] mt-4 p-6">
                        <!-- Your content here -->
                    </div>
                    <div class="bg-white border rounded-xl w-[200px] mx-2 mt-4 p-4">
                        <!-- Your content here -->
                    </div>
                    <div class="bg-white border rounded-xl w-[200px] mx-10 mt-4 p-6">
                        <!-- Your content here -->
                    </div>
                </div>

                <div class="flex flex-row ml-2 mt-12">
                    <div class="bg-white border rounded-xl w-[200px] h-[180px] mt-4 p-6">
                    </div>
                    <div class="bg-white border rounded-xl w-[200px] mx-[58px] mt-4 p-6">
                        <!-- Your content here -->
                    </div>
                    <div class="bg-white border rounded-xl w-[200px] mx-2 mt-4 p-4">
                        <!-- Your content here -->
                    </div>
                    <div class="bg-white border rounded-xl w-[200px] mx-10 mt-4 p-6">
                        <!-- Your content here -->
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</body>
</html>
