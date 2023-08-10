<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Product</title>
</head>
<body>

    <form method="POST" action="{{route('product.add')}}">
        @csrf
        @method('post')
        @if ($errors->any())

        @endif
        Name:
        <input type="text" name="name" placeholder="Enter name..."><br>
        @error('name')
        <div style="color: red" >{{ $message }}</div>
        @enderror
        <br><br>
        Price:
        <input type="text" name="price" placeholder="Enter price...">
        @error('price')
        <div style="color: red">{{ $message }}</div>
        @enderror
        <input type="hidden" name="_token" value="{{ csrf_token() }}" /><br><br>
        <button type="submit">Add</button>
    </form>

</body>
</html>



