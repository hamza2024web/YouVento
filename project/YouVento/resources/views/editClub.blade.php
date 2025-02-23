<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Club</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-br from-green-100 to-blue-200 min-h-screen flex items-center justify-center">
    <section class="w-full max-w-3xl">
        <form id="clubForm" class="bg-white p-8 rounded-3xl shadow-2xl transition-transform transform hover:scale-105" method="post" action="{{route('clubs.update',$club->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h3 class="text-3xl font-extrabold text-center text-gray-800 mb-8">Update Club</h3>

            <div class="mb-6">
                <label class="block text-lg font-medium text-gray-700 mb-2" for="name">Club Name</label>
                <input name="name" type="text" id="name" value="{{$club->name}}" class="w-full p-3 border-2 border-gray-300 rounded-xl focus:outline-none focus:border-green-500" placeholder="Enter club name" required>
            </div>

            <div class="mb-6">
                <label class="block text-lg font-medium text-gray-700 mb-2" for="description">Description</label>
                <textarea name="description" id="description" value="{{$club->description}}" class="w-full p-3 border-2 border-gray-300 rounded-xl focus:outline-none focus:border-green-500" placeholder="Enter club description" rows="4" required>{{$club->description}}</textarea>
            </div>

            <div class="mb-6">
                <label class="block text-lg font-medium text-gray-700 mb-2" for="logo">Logo</label>
                <input name="logo" type="file" id="logo" value="{{$club->logo}}" class="w-full p-3 border-2 border-gray-300 rounded-xl focus:outline-none focus:border-green-500" required>
            </div>

            <div class="mb-8">
                <label class="block text-lg font-medium text-gray-700 mb-2" for="categorie">Categorie</label>
                <input name="categorie" type="text" id="categorie" value="{{$club->categorie}}" class="w-full p-3 border-2 border-gray-300 rounded-xl focus:outline-none focus:border-green-500" placeholder="Enter categorie name" required>
            </div>

            <div class="flex justify-center">
                <button type="submit" class="bg-gradient-to-r from-green-500 to-green-700 text-white text-lg font-semibold px-8 py-3 rounded-xl hover:from-green-600 hover:to-green-800 transition-transform transform hover:scale-110">Update Club</button>
            </div>
        </form>
    </section>
</body>

</html>
