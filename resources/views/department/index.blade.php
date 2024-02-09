  

    @extends('welcome') 
  

    @section('content')
    <div class="text-right pr-8 mt-4">
        <button class="bg-blue-500 hover:bg-blue-700 mt-20 text-white h-10 font-bold px-4 border border-blue-700 rounded">
            <a href="{{ route('department.add') }}">Add New Department</a>
        </button>
    </div>
 
    <h1>
    <div class="overflow-x-auto">
        <table class="table-auto min-w-full text-center mt-6  grid grid-cols-auto place-content-center ...">
            <tr class="px-2 -3">
                <th>Name</th>
                <th class="pl-6">Patron</th>
                <th class="pl-6">Delete</th>
                <th class="pl-6">Edit</th>
                <th class="pl-6">View</th>
                </tr>
            @foreach ($department as $department)
                <tr class="px-4 -3">
                    <td class="pl-6">{{ $department->name }}</td>
                    <td class="pl-4">{{ $department->patron }}</td>
                    <td>
                        <div>
                            <button class="bg-red-500 hover:bg-red-300 h-8 px-4 mt-2 ml-10 rounded pr-4">
                                <form class="text-white" action="{{route('department.delete', ['department' => $department ])}}" method="delete">
                                    @csrf
                                    @method('delete')
                
                                    <input type="submit" value="delete"/>
                                 </form>
                            </button>
                        </div>
                    </td>
                    <td class="text-white">
                        <div>
                            <button class="bg-blue-500 hover:bg-blue-700 h-8 px-4 ml-10 mt-2 rounded pr-4">
                                <a href="{{ route('department.edit', ['department' => $department ]) }}">Edit</a>
                            </button>
                        </div>
                    </td>
                    <td class="text-white">
                        <div>
                            <button onclick="location.href='{{ route('department.view', ['department' => $department]) }}" class="bg-blue-500 hover:bg-blue-700 h-8 px-4 ml-10 mt-2 rounded pr-4">
                                View
                            </button>
                        </div>
                    </td>  
  
                
                </tr> 
            @endforeach
        </table>
    </div>

    @endsection 