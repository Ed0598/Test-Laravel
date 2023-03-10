<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>restaurants Laravel</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <h1 class="text-3xl font-bold underline text-center mb-8 mt-8">Create your restaurant</h1>
    <form action="/restaurants/create" method="post" class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden p-6">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2 text-center">Name </label>
            <input type="text" name='name' id='name' class="border border-gray-300 p-2 w-full rounded-md text-center">
            @error('name')
                <div class="text-red-500 text-sm mt-1 text-center font-bold">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="address" class="block text-gray-700 font-bold mb-2 text-center">Address </label>
            <input type="text" name='address' id='address' class="border border-gray-300 p-2 w-full rounded-md text-center">
            @error('address')
                <div class="text-red-500 text-sm mt-1 text-center font-bold">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="zipCode" class="block text-gray-700 font-bold mb-2 text-center">Zip Code </label>
            <input type="text" name='zipCode' id='zipCode' class="border border-gray-300 p-2 w-full rounded-md text-center" >
            @error('zipCode')
                <div class="text-red-500 text-sm mt-1 text-center font-bold">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="town" class="block text-gray-700 font-bold mb-2 text-center">Town </label>
            <input type="text" name='town' id='town' class="border border-gray-300 p-2 w-full rounded-md text-center" >
            @error('town')
                <div class="text-red-500 text-sm mt-1 text-center font-bold">{{ $message }}</div>
            @enderror
        </div>
       
        <div class="mb-4">
            <label for="country" class="block text-gray-700 font-bold mb-2 text-center">Country </label>
            <input type="text" name="country" id="country" class="border border-gray-300 p-2 w-full rounded-md text-center">
            @error('country')
            <div class="text-red-500 text-sm mt-1 text-center font-bold">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2 text-center">Description </label>
            <textarea name="description" id="description" class="border border-gray-300 p-2 w-full rounded-md h-40"></textarea>
            @error('description')
            <div class="text-red-500 text-sm mt-1 text-center font-bold">{{ $message }}</div>
            @enderror
        </div>
        <label for="review" class="block text-gray-700 font-bold mb-2 text-center">Review </label>
        <input type="number" max ="10" min="0" name='review' id='review' class = "border border-gray-300 p-2 w-full rounded-md">
        @error('review')
            <div class="text-red-500 text-sm mt-1 text-center font-bold">{{ $message }}</div>
        @enderror
    <div class ="flex flex-row justify-center">
        <input type="submit" value="Submit" class ="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-8 " ></input>
    </div>
    </form>
</div>
    
</body>
</html>
