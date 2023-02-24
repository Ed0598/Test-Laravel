<form action="/restaurants/create" method="post">
    @csrf
    <!-- @if($errors->has('name'))
        <small class ='error'>{{$error->first('name')}}</small>
        @endif -->
    <label for="name">Name of the Restaurant </label>
    <input type="text" name='name' id='name'>
    <label for="address">Address of the Restaurant </label>
    <input type="text" name='address' id='address'>
    <label for="zipCode">Zip Code of the Restaurant </label>
    <input type="text" name='zipCode' id='zipCode'>
    <label for="town">Town of the Restaurant </label>
    <input type="text" name='town' id='town'>
    <label for="country">Country of the Restaurant </label>
    <input type="text" name='country' id='country'>
    <label for="description">Description of the Restaurant </label>
    <input type="text" name='description' id='description'>
    <label for="review">Review of the Restaurant </label>
    <input type="text" name='review' id='review'>
    <input type="submit" value="Submit"></input>
</form>