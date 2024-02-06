  

@extends('welcome') 
  

@section('content') 
<h1>
    <div class="text-right pr-8 mt-4 mb-2">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
            <a href="{{ route('teacher.add') }}">Add New Teacher</a>
        </button>
    </div>
</h1>
<div>
    <table class="overflow-x-auto text-center">
        <tr>
            <th>Id</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Gender</th>
            <th>Work Number</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        @foreach ($teachers as $teacher)
            <tr class="px-4 py-3">
                <td>{{ $teacher->id }}</td>
                <td>{{ $teacher->first_name }}</td>
                <td>{{ $teacher->last_name }}</td>
                <td>{{ $teacher->gender }}</td>
                <td>{{ $teacher->work_number }}</td>
                <td class="text-white">
                    <div>
                        <button class="bg-red-500 hover:bg-red-300 h-8 px-4 mt-4 rounded pr-4">
                            <a href="{{ route('teacher.edit', ['teacher' => $teacher ]) }}">Edit</a>
                        </button>
                    </div>
                </td>                  
                <td class="text-white">
                    <div>
                        <button class="bg-blue-500 hover:bg-blue-700 h-8 px-4 mt-4 rounded pr-4">
                            <form action="{{route('teacher.delete', ['teacher' => $teacher ])}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="delete"/>
                        </button>
                    </div>
                </td>
            </tr>                

    @endforeach
    </table>
</div>

@endsection