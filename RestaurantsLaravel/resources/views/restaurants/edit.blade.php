<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Restaurant</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <h1 class="text-3xl font-bold underline text-center mb-8 mt-8">Here to edit your restaurant !</h1>
    <form action="/restaurants/edit/{{$restaurant->id}}" method="post" class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden p-6">
        @csrf
        @method('PATCH')

    <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2 text-center">Name </label>
            <input type ='text' name='name' placeholder="Name" value='{{$restaurant->name}}' class='border border-gray-300 p-2 w-full rounded-md text-center mb-2'>
    </div>
    <div class="mb-4">
            <label for="address" class="block text-gray-700 font-bold mb-2 text-center">Address </label>
            <input type ='text' name='address' placeholder="address" value='{{$restaurant->address}}'class='border border-gray-300 p-2 w-full rounded-md text-center mb-2'>
    </div>
    <div class="mb-4">
            <label for="zipCode" class="block text-gray-700 font-bold mb-2 text-center">ZipCode </label>
            <input type ='text' name='zipCode' placeholder="zipcode" value='{{$restaurant->zipCode}}'class='border border-gray-300 p-2 w-full rounded-md text-center mb-2'>
    </div>
    <div class="mb-4">
            <label for="town" class="block text-gray-700 font-bold mb-2 text-center">Town </label>
            <input type ='text' name='town' placeholder="town" value='{{$restaurant->town}}'class='border border-gray-300 p-2 w-full rounded-md text-center mb-2'>
    </div>
    <div class="mb-4">
            <label for="country" class="block text-gray-700 font-bold mb-2 text-center">Country </label>
            <input type ='text' name='country' placeholder="country" value='{{$restaurant->country}}'class='border border-gray-300 p-2 w-full rounded-md text-center mb-2'>
    </div>
    <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2 text-center">Description </label>
        <textarea type ='text' name='description' placeholder="description" class="border border-gray-300 p-2 w-full rounded-md h-40 mb-2 "> {{$restaurant->description}}</textarea>
    </div>
    <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2 text-center">Description </label>
            <input type="number" max ="10" min="0" name='review' id='review' class = "border border-gray-300 p-2 w-full rounded-md" value='{{$restaurant->review}}'>
    </div>
    <form action="/restaurants" method="get">
        <div class ="flex flex-row justify-center">
            <input type="submit" value="Save changes" class ="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-8 " ></input>
        </div>
    </form>
</div>
</form>

</body>    
</html>
