<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>create a product</h1>
    {{--display validation error messages to the user. It checks if there are any validation errors and then lists them  --}}
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    {{-- submit button store route --}}
    <form method="POST" action="{{ route('urinproduct.store') }}">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="dbtcname" placeholder="Name" />
        </div>
        <br>
        <div>
            <label>Qty</label>
            <input type="text" name="dbtcqty" placeholder="Qty" />
        </div>
        <br>
        <div>
            <label>Price</label>
            <input type="text" name="dbtcprice" placeholder="Price" />
        </div>
        <br>
        <div>
            <label>Description</label>
            <input type="text" name="dbtcdescription" placeholder="Description" />
        </div>
        <br>
        <div>
            <input type="submit" value="Save a New Product" />
        </div>
    </form>
</body>
</html>
