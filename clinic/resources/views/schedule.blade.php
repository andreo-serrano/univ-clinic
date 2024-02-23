<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Schedule') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">Schedule</h3>

                    <!-- Your Appointment Request Table Goes Here -->


                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Schedule Calendar</title>
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.css" />
                        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.js"></script>
                    </head>

                    <body class="bg-gray-100">

                        <div class="container mx-auto p-8">
                            <h1 class="text-3xl font-semibold mb-4">Schedule Calendar</h1>

                            <!-- Calendar Container -->
                            <div id="calendar"></div>

                        </div>

                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                // Your booking data
                                var bookedDates = ['2023-12-11', '2023-12-12', '2023-12-13'];

                                // Initialize FullCalendar
                                $('#calendar').fullCalendar({
                                    header: {
                                        left: 'prev,next today',
                                        center: 'title',
                                        right: 'month,basicWeek,basicDay'
                                    },
                                    events: bookedDates.map(date => ({
                                        title: 'Booked',
                                        start: date,
                                        color: 'red' // You can customize the color for booked days
                                    }))
                                });
                            });
                        </script>

                    </body>

                    <!-- End of Appointment Request Table -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
