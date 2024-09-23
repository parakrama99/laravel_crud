<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>edit a product</h1>
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
    {{-- update button  --}}
    <form method="POST" action="{{route('urinproduct.update', ['item' => $item])}}">
        @csrf
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" name="dbtcname" placeholder="Name" value="{{ $item->dbtcname }}" />
        </div>
        <br>
        <div>
            <label>Qty</label>
            <input type="text" name="dbtcqty" placeholder="Qty"   value="{{ $item->dbtcqty }}" />
        </div>
        <br>
        <div>
            <label>Price</label>
            <input type="text" name="dbtcprice" placeholder="Price"  value="{{ $item->dbtcprice }}" />
        </div>
        <br>
        <div>
            <label>Description</label>
            <input type="text" name="dbtcdescription" placeholder="Description"  value="{{ $item->dbtcdescription }}" />
        </div>
        <br>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>
</body>
</html>
