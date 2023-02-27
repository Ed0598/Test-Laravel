<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurants Laravel</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <h1 class="text-3xl font-bold underline text-center mb-8 mt-8">Welcome on our Laravel list of restaurants</h1>
    <div class="flex flex-col items-center">
    @foreach ($restaurants as $restaurant)
        <div class="flex justify-center bg-white rounded-lg shadow-md p-4 mb-4 w-full md:w-2/3 lg:w-1/2 xl:w-1/3">
            <div class="w-full flex flex-col items-center">
                <h2 class="text-xl font-semibold mb-2 text-center">{{ $restaurant->name }}</h2>
                <p class="text-gray-500 text-sm mb-1">{{ $restaurant->address }}</p>
                <p class="text-gray-500 text-sm mb-1">{{ $restaurant->zipCode }} {{ $restaurant->town }}</p>
                <p class="text-gray-500 text-sm mb-2">{{ $restaurant->country }}</p>
                <p class="text-gray-700 mb-4 text-center">{{ $restaurant->description }}</p>
            </div>
            <button><a href="/restaurants/edit/{restaurant}">Edit</a></button>
        </div>
    @endforeach
    </div>
    <div class="flex justify-center">
        <form action="/restaurants/create" method="get">
            <input type="submit" name="add" id="add" value="Ajouter un restaurant" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-8 mb-8">
        </form>
    </div>
</body>

</body>

</body>
</html>

