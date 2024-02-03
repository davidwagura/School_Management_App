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
                <th>ClassTeacher</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($forms as $form)
                <tr>
                    <td>{{ $form->id }}</td>
                    <td>{{ $form->name }}</td>
                    <td>{{ $form->class_teacher }}</td>
                </tr> 
        @endforeach
        </table>
    </div>
    <td>
        <form action="{{route('form.delete', ['form' => $form ])}}" method="post">
            @csrf
            @method('delete')

            <input type="submit" value="delete"/>
        </form>
    </td>
    <td>
        <a href="{{ route('form.edit', ['form' => $form ]) }}">Edit</a>
    </td>  
    <div>
        <a href="{{ route('form.add') }}">Add a new student</a>
    </div>
  
</body>
</html>