@extends('welcome') 
  
@section('content') 
    <h1 class="lex justify-center">
        <u>
        
            <b>Edit your information here:</b>
        </u>
    </h1>
    <div class="overflow-x-auto">
        <table class="table-auto min-w-full">
            <tr>
                <th class="px-4 py-3">Id</th>
                <th class="px-4 py-3">FirstName</th>
                <th class="px-4 py-3">LastName</th>
                <th class="px-4 py-3">Gender</th>
                <th class="px-4 py-3">Password</th>
                <th class="px-4 py-3">Adm-Number</th>
                <th class="px-4 py-3">Home-County</th>
                <th class="px-4 py-3">Date-Of-Birth</th>
                <th class="px-4 py-3">Edit</th>
                <th class="px-4 py-3">Delete</th>
            </tr>
            @foreach ($students as $student)
                <tr>
                    <td class="px-4 py-3">{{ $student->id }}</td>
                    <td class="px-4 py-3">{{ $student->first_name }}</td>
                    <td class="px-4 py-3">{{ $student->last_name }}</td>
                    <td class="px-4 py-3">{{ $student->gender }}</td>
                    <td class="px-4 py-3">{{ $student->password }}</td>
                    <td class="px-4 py-3">{{ $student->admission_number }}</td>
                    <td class="px-4 py-3">{{ $student->home_county }}</td>
                    <td class="px-4 py-3">{{ $student->date_of_birth }}</td>
                    <td class="px-4 py-3">
                        <form action="{{route('student.delete', ['student' => $student ])}}" method="delete">
                            @csrf
                            @method('delete')
                
                            <input type="submit" value="delete"/>
                        </form>
                    </td>
                    <td class="px-4 py-3">
                        <a href="{{ route('student.edit', ['student' => $student ]) }}">Edit</a>
                    </td>  
                </tr> 
            @endforeach
        </table>
        <div>
            <a href="{{ route('student.add') }}">Add a new student</a>
        </div>

    </div>
@endsection 