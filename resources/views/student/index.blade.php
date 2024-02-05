@extends('welcome') 
  
@section('content') 
    <h1>
        <u>
            Edit your information here:
        </u>
    </h1>
    <div>
        <table>
            <tr>
                <th>Id</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Gender</th>
                <th>Password</th>
                <th>Adm-Number</th>
                <th>Home-County</th>
                <th>Date-Of-Birth</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->password }}</td>
                    <td>{{ $student->admission_number }}</td>
                    <td>{{ $student->home_county }}</td>
                    <td>{{ $student->date_of_birth }}</td>
                    <td>
                        <form action="{{route('student.delete', ['student' => $student ])}}" method="delete">
                            @csrf
                            @method('delete')
                
                            <input type="submit" value="delete"/>
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('student.edit', ['student' => $student ]) }}">Edit</a>
                    </td>  
                    <div>
                        <a href="{{ route('student.add') }}">Add a new student</a>
                    </div>
                </tr> 
            @endforeach
        </table>
    </div>
@endsection 