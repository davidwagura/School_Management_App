@extends('welcome') 
  
@section('content') 

    <div class="overflow-x-auto">

        <div class="flex justify-end pr-8 pt-20 mb-2">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-4 border border-blue-700 rounded pr-4">
                <a href="{{ route('student.add') }}">Add New Student</a>
            </button>
        </div>

        <table class="table-auto min-w-full text-center">
            <tr class="px-4 py-3">
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Admission Number</th>
                <th>Home County</th>
                <th>Date Of Birth</th>
                <th class="px-2 py-3">Delete</th>
                <th class="px-2 py-3">Edit</th>
                </tr>
            @foreach ($students as $student)
                <tr class="px-4 py-3">
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->admission_number }}</td>
                    <td>{{ $student->home_county }}</td>
                    <td>{{ $student->date_of_birth }}</td>
                    <td>
                        <div>
                            <button class="bg-red-500 hover:bg-red-300 h-8 px-4 mt-4 rounded pr-4">

                                <form class="text-white text-md" action="{{route('student.delete', ['student' => $student ])}}" method="delete">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="delete"/>
                                </form>
                            </button>
                        </div>    
                    </td>
                    <td>
                        <div>
                            <button class="bg-blue-500 hover:bg-blue-700 h-8 px-4 text-white text-md mt-4 rounded pr-4">
                                <a href="{{ route('student.edit', ['student' => $student ]) }}">Edit</a>
                            </button>
                        </div>
                    </td>  
                </tr> 
            @endforeach
        </table>

    </div>
@endsection 