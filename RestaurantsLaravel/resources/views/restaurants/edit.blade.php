<form action="/restaurants/edit/{{$restaurant->id}}" method="post">
    @csrf
    @method('PATCH')
<input type ='text' name='name' placeholder="Name" value='{{$restaurant->name}}'>
<input type ='text' name='address' placeholder="address" value='{{$restaurant->address}}'>
<input type ='text' name='zipCode' placeholder="zipcode" value='{{$restaurant->zipCode}}'>
<input type ='text' name='town' placeholder="town" value='{{$restaurant->town}}'>
<input type ='text' name='country' placeholder="country" value='{{$restaurant->country}}'>
<input type ='text' name='description' placeholder="description" value='{{$restaurant->description}}'>
<input type ='text' name='review' placeholder="review" value='{{$restaurant->review}}'>
<input type="submit" value="Change">


</form>