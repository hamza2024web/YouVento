<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <form id="clubForm" style="display: none;" class="bg-white p-6 rounded-lg shadow-lg mt-4" method="post" action="/addClub">
            @csrf
            <h3 class="text-xl font-semibold mb-4">New Club</h3>
            <label class="block mb-2">Club Name</label>
            <input name="name" type="text" class="w-full p-2 border rounded-lg mb-4" placeholder="Enter club name">
            <label class="block mb-2">Description</label>
            <textarea name="description" class="w-full p-2 border rounded-lg mb-4" placeholder="Enter club description"></textarea>
            <label class="block mb-2">Logo</label>
            <input name="logo" type="file" class="w-full p-2 border rounded-lg mb-4" placeholder="Enter club logo">
            <label class="block mb-2">Categorie</label>
            <input name="categorie" type="text" class="w-full p-2 border rounded-lg mb-4" placeholder="Enter categorie name">
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">Add</button>
        </form>
    </section>
</body>

</html>