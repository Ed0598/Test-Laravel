<form action="/restaurants/edit/{{$restaurant->id}}" method="post">
    @csrf
    @method('PATCH')
<input type ='text' name='name' placeholder="Name" value='{{$restaurant->restaurant}}'>
<input type="submit" value="Yeah">

</form>