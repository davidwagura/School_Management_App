  

    @extends('welcome') 
  

    @section('content') 
    <h1>
    <div class="text-right pr-8 mt-4 mb-2">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold -2 px-4 border border-blue-700 rounded">
            <a href="{{ route('department.add') }}">Add New Department</a>
        </button>
    </div>
    <div>
        <table  class="overflow-x-auto text-center">
            <tr class="px-4 -3">
                <th>Id</th>
                <th>Name</th>
                <th>Patron</th>
                <th>Delete</th>
                <th>Edit</th>
                </tr>
            @foreach ($department as $department)
                <tr class="px-4 -3">
                    <td>{{ $department->id }}</td>
                    <td>{{ $department->name }}</td>
                    <td>{{ $department->patron }}</td>
                    <td>
                        <div>
                            <button class="bg-blue-500 hover:bg-blue-700 h-8 px-4 mt-4 border border-blue-700 rounded pr-4">
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
                            <button class="bg-blue-500 hover:bg-blue-700 h-8 px-4 mt-4 border border-blue-700 rounded pr-4">
                                <a href="{{ route('department.edit', ['department' => $department ]) }}">Edit</a>
                            </button>
                        </div>
                    </td>  
                
                </tr> 
            @endforeach
        </table>
    </div>

    @endsection 