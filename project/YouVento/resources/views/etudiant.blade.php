<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouVento - Student Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <header class="bg-gradient-to-r from-green-500 to-green-700 text-white py-6">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-4">
            <h1 class="text-3xl font-bold">🎓 YouVento - Student Portal</h1>
            <nav class="space-x-4">
                <a href="#" class="hover:text-gray-200">Home</a>
                <a href="#events" class="hover:text-gray-200">Events</a>
                <a href="#resources" class="hover:text-gray-200">Resources</a>
                <a href="#registration" class="hover:text-gray-200">Register</a>
            </nav>
        </div>
    </header>

    <main class="py-10">
        <!-- Upcoming Events Section -->
        <section id="events" class="max-w-7xl mx-auto px-4 mb-10">
            <h2 class="text-2xl font-semibold mb-4">Upcoming Events</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Event Card 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300x150" alt="Event 1" class="w-full h-32 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Event Title 1</h3>
                        <p class="text-gray-600">Date: March 15, 2023</p>
                        <p class="text-gray-600">Location: Conference Room A</p>
                        <p class="text-gray-600 mt-2">Join us for an engaging discussion on emerging technologies.</p>
                        <a href="#" class="text-green-500 font-bold mt-4 block">More Details</a>
                    </div>
                </div>
                <!-- Event Card 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300x150" alt="Event 2" class="w-full h-32 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Event Title 2</h3>
                        <p class="text-gray-600">Date: March 22, 2023</p>
                        <p class="text-gray-600">Location: Auditorium B</p>
                        <p class="text-gray-600 mt-2">Participate in workshops to enhance your skills.</p>
                        <a href="#" class="text-green-500 font-bold mt-4 block">More Details</a>
                    </div>
                </div>
                <!-- Event Card 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300x150" alt="Event 3" class="w-full h-32 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Event Title 3</h3>
                        <p class="text-gray-600">Date: March 28, 2023</p>
                        <p class="text-gray-600">Location: Room 101</p>
                        <p class="text-gray-600 mt-2">Networking event with industry professionals.</p>
                        <a href="#" class="text-green-500 font-bold mt-4 block">More Details</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Resources Section -->
        <section id="resources" class="max-w-7xl mx-auto px-4 mb-10">
            <h2 class="text-2xl font-semibold mb-4">Resources for Students</h2>
            <ul class="list-disc pl-6">
                <li class="text-gray-600 mb-2">Access to online learning materials and tutorials</li>
                <li class="text-gray-600 mb-2">Links to industry-related articles and research papers</li>
                <li class="text-gray-600 mb-2">Information on internships and job opportunities</li>
                <li class="text-gray-600 mb-2">Networking opportunities through events and seminars</li>
                <li class="text-gray-600 mb-2">Guidance on academic and career planning</li>
            </ul>
        </section>

        <!-- Registration Section -->
        <section id="registration" class="max-w-7xl mx-auto px-4 mb-10">
            <h2 class="text-2xl font-semibold mb-4">Register for Events</h2>
            <form class="bg-white p-6 rounded-lg shadow-lg">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="name" class="block text-gray-600">Name</label>
                        <input type="text" id="name" class="w-full p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-green-500" required>
                    </div>
                    <div>
                        <label for="email" class="block text-gray-600">Email</label>
                        <input type="email" id="email" class="w-full p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-green-500" required>
                    </div>
                </div>
                <div class="mt-4">
                    <label for="event" class="block text-gray-600">Select Event</label>
                    <select id="event" class="w-full p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-green-500" required>
                        <option value="">Select an event</option>
                        <option value="event1">Event Title 1</option>
                        <option value="event2">Event Title 2</option>
                        <option value="event3">Event Title 3</option>
                    </select>
                </div>
                <button type="submit" class="mt-4 bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600 transition">Register</button>
            </form>
        </section>
    </main>

    <footer class="bg-gray-800 text-white py-4">
        <div class="max-w-7xl mx-auto text-center">
            <p>&copy; 2023 YouVento. All rights reserved.</p>
            <div class="flex justify-center space-x-4 mt-2">
                <a href="#" class="hover:text-gray-300"><i class="fab fa-facebook"></i></a>
                <a href="#" class="hover:text-gray-300"><i class="fab fa-twitter"></i></a>
                <a href="#" class="hover:text-gray-300"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>
</body>

</html>