<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="container mx-auto p-6" style="max-width: 1000px; height: 800px;">

        <h1 class="text-3xl font-bold text-center mb-8">Admission Form</h1>
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="/submitForm" method="post">
            @csrf
            <label for="Name" class="font-bold text-xl mb-4">Name</label>
            <div class="mb-4 flex flex-wrap">
                <div class="w-full md:w-1/3 pr-4 mb-4 md:mb-0">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="firstName">First Name:</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="firstName" name="firstName" type="text" placeholder="First Name" required>
                </div>
                <div class="w-full md:w-1/3 pr-4 mb-4 md:mb-0">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="middleName">Middle Name:</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="middleName" name="middleName" type="text" placeholder="Middle Name">
                </div>
                <div class="w-full md:w-1/3">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="lastName">Last Name:</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="lastName" name="lastName" type="text" placeholder="Last Name" required>
                </div>
            </div>
            <label for="birthdate" class="font-bold text-xl">Birthdate</label>
            <div class="mb-4 flex flex-wrap">
                <div class="w-full md:w-1/3 pr-4 mb-4 md:mb-0">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="month">Month:</label>
                    <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="month" name="month" required>
                        <option value="">Select Month</option>
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
                </div>
                <div class="w-full md:w-1/3 pr-4 mb-4 md:mb-0">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="day">Day:</label>
                    <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="day" name="day" required>
                        <option value="">Select Day</option>
                        @for ($i = 1; $i <= 31; $i++)
                            <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}">{{ $i }}</option>
                        @endfor
                    </select>
                </div>
                <div class="w-full md:w-1/3">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="year">Year:</label>
                    <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="year" name="year" required>
                        <option value="">Select Year</option>
                        @for ($i = 1920; $i <= 2024; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                </div>
            
             
            </div>
            <div class="mb-4 flex flex-wrap">
                <div class="w-full md:w-1/3 pr-4 mb-4 md:mb-0">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Gender:</label>
                    <div class="mt-2">
                        <input type="radio" class="form-radio h-4 w-4 text-blue-500" name="gender" id="male" value="male" required>
                        <label for="male" class="ml-2">Male</label>
                    </div>
                    <div class="mt-2">
                        <input type="radio" class="form-radio h-4 w-4 text-blue-500" name="gender" id="female" value="female" required>
                        <label for="female" class="ml-2">Female</label>
                    </div>
                </div>
                <div class="w-full md:w-1/3 pr-4 mb-4 md:mb-0">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nationality">Nationality:</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nationality" name="nationality" type="text" placeholder="Nationality" required>
                </div>
                <div class="w-full md:w-1/3">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="contactno">Contact Number:</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="contactno" name="contactno" type="text" pattern="[0-9]*" inputmode="numeric" placeholder="Contact Number" required>
                </div>
            </div>
            <label for="Address" class="font-bold text-xl">Address</label>
            <br>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="streetadd">Street Address:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="streetadd" name="streetadd" type="text" placeholder="Street Address" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="city">City:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="city" name="city" type="text" placeholder="City" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="province">Province:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="province" name="province" type="text" placeholder="Province" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="zipcode">Postal/Zipcode:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="zipcode" name="zipcode" type="text" placeholder="Postal/Zipcode" required>
            </div>
            <div class="mb-4 flex justify-between">
    <label for="emergencyContact" class="font-bold text-xl">Emergency Contact</label>
</div>
<div class="mb-4 flex justify-between">
    <div class="w-1/2 mr-2">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="emergencyName">Name:</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="emergencyName" name="emergencyName" type="text" placeholder="Emergency Contact Name" required>
    </div>
    <div class="w-1/2">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="relationship">Relationship:</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="relationship" name="relationship" type="text" placeholder="Relationship" required>
    </div>
</div>
<div class="mb-4 flex justify-between">
    <div class="w-full">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="emergencyContactNumber">Contact Number:</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="emergencyContactNumber" name="emergencyContactNumber" type="text" pattern="[0-9]*" inputmode="numeric" placeholder="Emergency Contact Number" required>
    </div>
</div>

<div class="w-full">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="schoolLa">School Last Attended:</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="schoolLastAttended" name="schoolLastAttended" type="text" pattern="[0-9]*" inputmode="schoolLastAttended" placeholder="Emergency Contact Number" required>
    </div>
    <br>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>

