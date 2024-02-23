<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome Nurse') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">Our Inter-university news for health!</h3>

                    <!-- Your Announcement-->

                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Announcement Form</title>
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
                    </head>

                    <body class="bg-gray-100 font-sans">

                        <div class="container mx-auto p-8">
                            <h1 class="text-3xl font-semibold mb-4">Announcement Form</h1>

                            <!-- Announcement Form -->
                            <form action="#" method="post" class="max-w-md bg-white p-6 rounded-md shadow-md">
                                <!-- Announcement Title -->
                                <div class="mb-4">
                                    <label for="announcementTitle" class="block text-gray-600">Announcement Title</label>
                                    <input type="text" name="announcementTitle" id="announcementTitle"
                                        class="form-input mt-1 block w-full" required>
                                </div>

                                <!-- Announcement Date -->
                                <div class="mb-4">
                                    <label for="announcementDate" class="block text-gray-600">Announcement Date</label>
                                    <input type="date" name="announcementDate" id="announcementDate"
                                        class="form-input mt-1 block w-full" required>
                                </div>

                                <!-- Announcement Details -->
                                <div class="mb-4">
                                    <label for="announcementDetails" class="block text-gray-600">Announcement Details</label>
                                    <textarea name="announcementDetails" id="announcementDetails"
                                        class="form-textarea mt-1 block w-full" rows="4" required></textarea>
                                </div>

                                <!-- Doctor's Name -->
                                <div class="mb-4">
                                    <label for="provider" class="block text-gray-600">Provider (optiona)</label>
                                    <input type="text" name="doctorName" id="provider" class="form-input mt-1 block w-full" required>
                                </div>

                                <!-- Submit Button -->
                                <div>
                                    <button type="submit"
                                        class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                                        Submit Announcement
                                    </button>
                                </div>
                            </form>
                        </div>

                    </body>
                    
                    <!-- Your Announcement -->
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
