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
                    <li><a href="/dashboard" class="flex items-center space-x-2 hover:bg-green-700 p-2 rounded-lg transition"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li><a href="#events" class="flex items-center space-x-2 hover:bg-green-700 p-2 rounded-lg transition"><i class="fas fa-calendar-alt"></i><span>Events</span></a></li>
                    <li><a href="/clubs" class="flex items-center space-x-2 hover:bg-green-700 p-2 rounded-lg transition"><i class="fas fa-users"></i><span>Clubs</span></a></li>
                    <li><a href="#users" class="flex items-center space-x-2 hover:bg-green-700 p-2 rounded-lg transition"><i class="fas fa-users"></i><span>Users</span></a></li>
                    <li><a href="#analytics" class="flex items-center space-x-2 hover:bg-green-700 p-2 rounded-lg transition"><i class="fas fa-chart-line"></i><span>Analytics</span></a></li>
                    <li><a href="#logout" class="flex items-center space-x-2 hover:bg-red-600 p-2 rounded-lg transition"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a></li>
                </ul>
            </nav>
        </aside>
        <section class="flex-1 p-6">
            <h2 class="text-3xl font-semibold mb-6">Club Overview</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($clubs as $club)
                <div class="bg-white shadow-xl rounded-3xl overflow-hidden transition-transform transform hover:scale-105 hover:shadow-2xl">
                    <img src="{{$club->logo}}" alt="Club Image" class="w-full h-56 object-cover">
                    <div class="p-8">
                        <h3 class="text-3xl font-bold text-gray-800 mb-4">{{$club->name}}</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">{{$club->description}}</p>
                        <div class="flex items-center justify-between text-gray-700 mb-6">
                            <span class="flex items-center space-x-2"><i class="fas fa-layer-group"></i><span>{{$club->categorie}}</span></span>
                            <span class="text-sm text-gray-500">{{ now()->format('Y') }}</span>
                        </div>
                        <a href="#" class="inline-block bg-gradient-to-r from-green-500 to-green-700 text-white px-6 py-3 rounded-xl hover:from-green-600 hover:to-green-800 transition">View Club</a>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>
</body>

</html>