
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>CRUD Product</title>
</head>
<body>
<div class="head">
    <h1>EDIT DATA</h1>
</div>
<form method="POST" action="{{route('product.edit')}}">
    @csrf
    Name:
    <input type="hidden" name="id" value = {{$product->id}}>
    <input type="text" name="name" value="{{$product->name}}"><br><br>
    Price:
    <input type="text" name="price" value="{{$product->price}}" ><br><br>
    <button type="submit" class="createBT">Update</button>
</form>

</body>
</html>



