<h1>Create products</h1>

<form action="/products" method="POST">
    @csrf
    Name : <input type="text" name="name"><br>
    Description : <input type="text" name="description"><br>
    Price : <input type="text" name="price"><br>
    Image Url : <input type="text" name="image_url"><br>
    <input type="submit" value="save">
</form>
