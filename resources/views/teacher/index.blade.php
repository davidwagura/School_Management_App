  

@extends('welcome') 
  

@section('content') 
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
            <th>Work Number</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($teachers as $teacher)
            <tr>
                <td>{{ $teacher->id }}</td>
                <td>{{ $teacher->first_name }}</td>
                <td>{{ $teacher->last_name }}</td>
                <td>{{ $teacher->gender }}</td>
                <td>{{ $teacher->work_number }}</td>

    @endforeach
    </table>
</div>
<td>
    <form action="{{route('teacher.delete', ['teacher' => $teacher ])}}" method="delete">
        @csrf
        @method('delete')

        <input type="submit" value="delete"/>
    </form>
</td>
<td>
    <a href="{{ route('teacher.edit', ['teacher' => $teacher ]) }}">Edit</a>
</td>                  
</tr> 
<td>
<form action="{{route('teacher.delete', ['teacher' => $teacher ])}}" method="post">
@csrf
@method('delete')

<input type="submit" value="delete"/>
</form>
</td>
<td>
<a href="{{ route('teacher.edit', ['teacher' => $teacher ]) }}">Edit</a>
</td>  

<div>
    <a href="{{ route('teacher.add') }}">Add a new teacher</a>
</div>

@endsection