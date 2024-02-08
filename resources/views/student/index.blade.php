@extends('welcome') 
  
@section('content') 

    <div class="overflow-x-auto">

        <div class="flex justify-end pr-8 pt-20 mb-2">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 -m-18 border border-blue-700 rounded pr-4 fixed ">
                <a href="{{ route('student.add') }}">Add New Student</a>
            </button>
        </div>

        <table class="table-auto min-w-full text-center justify-around border-separate mt-12 grid grid-cols-auto place-content-center ...">
            <tr class="pl-6">
                <th class="pl-6">First Name</th>
                <th class="pl-6">Last Name</th>
                <th class="pl-6">Gender</th>
                <th class="pl-6">Admission Number</th>
                <th class="pl-6">Home County</th>
                <th class="pl-10">Date Of Birth</th>
                <th class="pl-6">Delete</th>
                <th class="pl-6">Edit</th>
                </tr>
            @foreach ($students as $student)
                <tr class="px-4 py-3">
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
                                    <input type="submit" value="Delete"/>
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