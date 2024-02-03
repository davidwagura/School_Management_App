<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
        body {
            background-color: burlywood;
            text-align: center;
        }
        table {
            display: flex;
            text-align: center;
            
        }

    </style>
    <h1>
        <u>
            Edit your information here:
        </u>
    </h1>
    <div>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>County Code</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($county as $county)
                <tr>
                    <td>{{ $county->id }}</td>
                    <td>{{ $county->name }}</td>
                    <td>{{ $county->patron }}</td>
                </tr> 
        @endforeach
        </table>
    </div>
    <td>
        <form action="{{route('county.delete', ['county' => $county ])}}" method="post">
            @csrf
            @method('delete')

            <input type="submit" value="delete"/>
        </form>
    </td>
    <td>
        <a href="{{ route('club.edit', ['club' => $club ]) }}">Edit</a>
    </td>  
    <div>
        <a href="{{ route('county.add') }}">Add a new county</a>
    </div>
  
</body>
</html>