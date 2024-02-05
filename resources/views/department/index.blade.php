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
                <th>Patron</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($department as $department)
                <tr>
                    <td>{{ $department->id }}</td>
                    <td>{{ $department->name }}</td>
                    <td>{{ $department->patron }}</td>
                </tr> 
        @endforeach
        </table>
    </div>
    <td>
        <form action="{{route('department.delete', ['department' => $department ])}}" method="delete">
            @csrf
            @method('delete')

            <input type="submit" value="delete"/>
        </form>
    </td>
    <td>
        <a href="{{ route('department.edit', ['department' => $department ]) }}">Edit</a>
    </td>  
    <div>
        <a href="{{ route('department.add') }}">Add a new department</a>
    </div>
  
</body>
</html>