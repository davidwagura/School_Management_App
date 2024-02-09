  

@extends('welcome') 
  

@section('content') 
<h1>
    <div class="text-right pr-8 mt-4 mb-2">
        <button onclick="location.href='{{ route('teacher.add') }}' " class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-16 border border-blue-700 rounded">
            Add New Teacher
        </button>
    </div>
</h1>
<div>
    <table class="table-auto min-w-full text-center grid grid-cols-auto place-content-center ...">
        <tr>
            <th class="pl-6">FirstName</th>
            <th class="pl-6">LastName</th>
            <th class="pl-6">Gender</th>
            <th class="pl-6">Work Number</th>
            <th class="pl-6">Delete</th>
            <th class="pl-6">Edit</th>

        </tr>
        @foreach ($teachers as $teacher)
            <tr class="px-4 py-3">
                <td>{{ $teacher->first_name }}</td>
                <td>{{ $teacher->last_name }}</td>
                <td>{{ $teacher->gender }}</td>
                <td>{{ $teacher->work_number }}</td>
                <td class="text-white">
                    <div>
                        <button class="bg-red-500 hover:bg-blue-700 ml-7 h-8 px-4 mt-2 pl-5 rounded pr-4">
                            <form action="{{route('teacher.delete', ['teacher' => $teacher ])}}" method="post">
                                @csrf
                                @method('get')
                                <input type="submit" value="Delete"/>
                        </button>
                    </div>
                </td>

                <td class="text-white">
                    <div>
                        <button class="bg-blue-500 hover:bg-red-300 h-8 ml-6 px-4 mt-2 rounded pr-4">
                            <a href="{{ route('teacher.edit', ['teacher' => $teacher ]) }}">Edit</a>
                        </button>
                    </div>
                </td>                  
            </tr>                

    @endforeach
    </table>
</div>

@endsection