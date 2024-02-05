  

@extends('welcome') 
  

@section('content') 
<h1>
    <u>
        Edit your information here:
    </u>
</h1>
<div>
    <table class="overflow-x-auto">
        <tr>
            <th class="px-4 py-3">Id</th>
            <th class="px-4 py-3">FirstName</th>
            <th>LastName</th>
            <th class="px-4 py-3">Gender</th>
            <th class="px-4 py-3">Work Number</th>
            <th class="px-4 py-3">Edit</th>
            <th class="px-4 py-3">Delete</th>
        </tr>
        @foreach ($teachers as $teacher)
            <tr>
                <td class="px-4 py-3">{{ $teacher->id }}</td>
                <td class="px-4 py-3">{{ $teacher->first_name }}</td>
                <td class="px-4 py-3">{{ $teacher->last_name }}</td>
                <td class="px-4 py-3">{{ $teacher->gender }}</td>
                <td class="px-4 py-3">{{ $teacher->work_number }}</td>
                <td class="px-4 py-3">
                    <a href="{{ route('teacher.edit', ['teacher' => $teacher ]) }}">Edit</a>
                </td>                  
                <td class="px-4 py-3">
                <form action="{{route('teacher.delete', ['teacher' => $teacher ])}}" method="post">
                @csrf
                @method('delete')
                
                <input type="submit" value="delete"/>
                </form>
                </td>
                
            </tr>                

    @endforeach
    </table>
</div>
<div>
    <a href="{{ route('teacher.add') }}">Add a new teacher</a>
</div>

@endsection