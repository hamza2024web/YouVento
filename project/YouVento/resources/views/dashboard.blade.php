<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouVento Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script>
         function toggleForm() {
            var form = document.getElementById("clubForm");
            if (form.style.display === "none") {
                form.style.display = "block";
            } else {
                form.style.display = "none";
            }
        }
    </script>
</head>

<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <aside class="bg-gradient-to-b from-green-600 to-green-800 text-white w-64 min-h-screen p-6">
            <h1 class="text-2xl font-bold text-center mb-6">YouVento</h1>
            <nav>
                <ul class="space-y-4">
                    <li><a href="#" class="flex items-center space-x-2 hover:bg-green-700 p-2 rounded-lg transition"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li><a href="#events" class="flex items-center space-x-2 hover:bg-green-700 p-2 rounded-lg transition"><i class="fas fa-calendar-alt"></i><span>Events</span></a></li>
                    <li><a href="#clubs" class="flex items-center space-x-2 hover:bg-green-700 p-2 rounded-lg transition"><i class="fas fa-users"></i><span>Clubs</span></a></li>
                    <li><a href="#users" class="flex items-center space-x-2 hover:bg-green-700 p-2 rounded-lg transition"><i class="fas fa-users"></i><span>Users</span></a></li>
                    <li><a href="#analytics" class="flex items-center space-x-2 hover:bg-green-700 p-2 rounded-lg transition"><i class="fas fa-chart-line"></i><span>Analytics</span></a></li>
                    <li><a href="#logout" class="flex items-center space-x-2 hover:bg-red-600 p-2 rounded-lg transition"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8">
            <h2 class="text-3xl font-semibold mb-6">Dashboard Overview</h2>

            <!-- Upcoming Events Section -->
            <section id="events" class="mb-8">
                <h2 class="text-2xl font-semibold mb-4">Upcoming Events</h2>
                <button class="mb-4 bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">Add Event</button>
                <form id="eventForm" style="display: none;" class="bg-white p-6 rounded-lg shadow-lg mt-4">
                    <h3 class="text-xl font-semibold mb-4">New Club</h3>
                    <label class="block mb-2">Club Name</label>
                    <input type="text" class="w-full p-2 border rounded-lg mb-4" placeholder="Enter club name">
                    <label class="block mb-2">Description</label>
                    <textarea class="w-full p-2 border rounded-lg mb-4" placeholder="Enter club description"></textarea>
                    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">Submit</button>
                </form>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <ul class="space-y-4">
                        <li class="flex justify-between items-center border-b pb-2">
                            <div>
                                <h3 class="text-lg font-semibold">Event Title 1</h3>
                                <p class="text-gray-600">Date: March 15, 2023</p>
                            </div>
                            <span class="text-green-600 font-bold">View</span>
                        </li>
                    </ul>
                </div>
            </section>

            <!-- Clubs Section -->
            <section id="clubs" class="mb-8">
                <h2 class="text-2xl font-semibold mb-4">Clubs</h2>
                <button class="mb-4 bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition" onclick="toggleForm()">Add Club</button>
                <form id="clubForm" style="display: none;" class="bg-white p-6 rounded-lg shadow-lg mt-4" method="post" action="/addClub">
                    <h3 class="text-xl font-semibold mb-4">New Club</h3>
                    <label class="block mb-2">Club Name</label>
                    <input type="text" class="w-full p-2 border rounded-lg mb-4" placeholder="Enter club name">
                    <label class="block mb-2">Description</label>
                    <textarea class="w-full p-2 border rounded-lg mb-4" placeholder="Enter club description"></textarea>
                    <label class="block mb-2">Logo</label>
                    <input type="file" class="w-full p-2 border rounded-lg mb-4" placeholder="Enter club logo">
                    <label class="block mb-2">Categorie</label>
                    <input type="text" class="w-full p-2 border rounded-lg mb-4" placeholder="Enter categorie name">
                    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">Add</button>
                </form>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <p class="text-gray-600">Manage and create new clubs here.</p>
                </div>
            </section>
        </main>
    </div>
</body>

</html>
