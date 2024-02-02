<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        <u>
            Edit your information here:
        </u>
    </h1>
    <div>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Gender</th>
                <th>Class</th>
                <th>Adm-Number</th>
                <th>Home-County</th>
                <th>Date-Of-Birth</th>
            </tr>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->$id }}</td>
                    <td>{{ $student->$first-name }}</td>
                    <td>{{ $student->$gender }}</td>
                    <td>{{ $student->$class }}</td>
                    <td>{{ $student->$admission-number }}</td>
                    <td>{{ $student->$home-county }}</td>
                    <td>{{ $student->$date-of-birth }}</td>
                </tr> 
                <form action="{{ route('student.delete', ['student' => $student]) }}" method="post">
                    @csrf
                    @method('delete')

                    <input type="submit" value="delete"/>
                </form>
            </td>
            <td>
                <a href="{{ route('student.edit', ['student' => $student]) }}">Edit</a>
            </td>    
        </tr>
        @endforeach
        </table>
    </div>
    <div>
        <a href="{{ route('student.add') }}">New student</a>
    </div>
</body>
</html>