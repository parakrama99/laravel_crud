<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>product list</h1>
    <div>
        {{-- product updated/deleted succesfully! message --}}
        <div>
            @if(session()->has('success'))
                <div>
                    {{session('success')}}
                </div>
            @endif
        </div>
    </div>
    <div>
        <form action="{{ route('dashboard') }}" method="get">
            <button type="submit" class="inline-block px-4 py-2 text-white bg-blue-500 hover:bg-blue-600 rounded">
                Back to dashboard
            </button>
        </form>
    </div>

    <br>
    <div>
        {{-- create a product button --}}
            <div>
                <a href="{{route('urinproduct.create')}}">
                    <button type="button">Create a Product</button>
                </a>
            </div>
            <br>
        <table border = 1>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Description</th>
                    {{-- edit --}}
                    <th>Edit</th>
                    {{-- delete --}}
                    <th>Delete</th>
            </tr>
            @foreach($allitems as $item )
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->dbtcname}}</td>
                <td>{{$item->dbtcqty}}</td>
                <td>{{$item->dbtcprice}}</td>
                <td>{{$item->dbtcdescription}}</td>
                {{-- edit --}}
                <td>
                    <form action="{{ route('urinproduct.edit', ['item' => $item]) }}" method="GET">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </td>

                <td>
                    {{-- delete --}}
                    <form method="post" action="{{route('urinproduct.delete', ['item' => $item])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" />
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
