<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a Product</h1>
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.store')}}">
        @csrf
        @method('post')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder=" Enter Name"/>
        </div>
        <div>
            <label for="qty">Qty</label>
            <input type="number" name="qty" id="qty" placeholder="Enter Qty"/>
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="price" placeholder="Enter price"/>
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" id="description" placeholder=" Enter Description"/>
        </div>
        <div>
            <input type="submit" value="Save a New product"/>
        </div>
    </form>
</body>
</html>
