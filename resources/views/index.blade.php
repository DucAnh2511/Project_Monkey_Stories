<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>Product</title>
</head>
<body>
    <div class="head">
        <h1>CRUD PROJECT</h1>
    </div>
    <div class="content" >
        <div class="idP">Id</div>
        <div class="tenP">Product name</div>
        <div class="giaP">Price</div>
        <div class="suaP">Edit</div>
        <div class="xoaP">Delete</div>
    </div>
    @foreach($products as $product)
            <div class="content" >
                <div class="idP">{{$product->id}}</div>
                <div class="tenP">{{$product->name}}</div>
                <div class="giaP">{{$product->price}}</div>
                <div class="suaP">
                    <form action="{{route('product.viewEdit')}}" method="get">
                        @csrf
                        @method('put')
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <button type="submit">Edit</button>
                    </form>
                </div>

                <div class="xoaP">
                    <form action="{{route('product.delete')}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </div>
    @endforeach
    <form method="get" action="{{route('product.create')}}">
        <button class="createBT" type="submit">Create</button>
    </form>
</body>
</html>
