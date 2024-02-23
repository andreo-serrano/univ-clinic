<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Appointment Approval Tab') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">Appointment Requests</h3>

            

                    <!-- Your Appointment Request Table Goes Here -->
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
                    </head>

                    <body class="bg-gray-100 font-sans">

                        <div class="container mx-auto p-8">

                            <!-- Appointment Requests Table -->
                            <table class="min-w-full bg-white border border-gray-300">
                                <thead>
                                    <tr>
                                        <th class="py-2 px-4 border-b">Appointment ID</th>
                                        <th class="py-2 px-4 border-b">Patient Type</th>
                                        <th class="py-2 px-4 border-b">Appointment Date</th>
                                        <th class="py-2 px-4 border-b">Main Complaint</th>
                                        <th class="py-2 px-4 border-b">Time Block</th>
                                        <th class="py-2 px-4 border-b">Remarks</th>
                                        <th class="py-2 px-4 border-b">Action</th>
                                        <!-- Add more columns as needed -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Example Appointment Requests (Replace with dynamic data) -->
                                    <tr>
                                        <td class="py-2 px-4 border-b">2021106881211</td>
                                        <td class="py-2 px-4 border-b">Student</td>
                                        <td class="py-2 px-4 border-b">12/11/2023</td>
                                        <td class="py-2 px-4 border-b">I am having a problem with my arm</td>
                                        <td class="py-2 px-4 border-b">1:00 PM</td>
                                        <td class="py-2 px-4 border-b">Pending</td>
                                        <td class="py-2 px-4 border-b">
                                            <button class="bg-blue-500 text-white py-1 px-2 rounded-md">Accept</button>
                                            <br>
                                            <button class="bg-red-500 text-white py-1 px-2 rounded-md">Cancel</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-4 border-b">2021106881212</td>
                                        <td class="py-2 px-4 border-b">Employee</td>
                                        <td class="py-2 px-4 border-b">12/12/2023</td>
                                        <td class="py-2 px-4 border-b">Fever and cough</td>
                                        <td class="py-2 px-4 border-b">3:30 PM</td>
                                        <td class="py-2 px-4 border-b">Pending</td>
                                        <td class="py-2 px-4 border-b">
                                            <button class="bg-blue-500 text-white py-1 px-2 rounded-md">Accept</button>
                                            <br>
                                            <button class="bg-red-500 text-white py-1 px-2 rounded-md">Cancel</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="py-2 px-4 border-b">2021106881213</td>
                                        <td class="py-2 px-4 border-b">2021106881213</td>
                                        <td class="py-2 px-4 border-b">12/13/2023</td>
                                        <td class="py-2 px-4 border-b">I am currently experiencing headache</td>
                                        <td class="py-2 px-4 border-b">1:00 PM</td>
                                        <td class="py-2 px-4 border-b">Pending</td>
                                        <td class="py-2 px-4 border-b">
                                            <button class="bg-blue-500 text-white py-1 px-2 rounded-md">Accept</button>
                                            <br>
                                            <button class="bg-red-500 text-white py-1 px-2 rounded-md">Cancel</button>
                                        </td>
                                    </tr>
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                            <!-- End of Appointment Requests Table -->

                        </div>

                    </body>
                    <!-- End of Appointment Request Table -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
