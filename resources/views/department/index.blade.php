  

    @extends('welcome') 
  

    @section('content') 
    <h1>
    <div class="text-left">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
            <a href="{{ route('department.add') }}">Add a new department</a>
        </button>
    </div>
     

    <div>
        <table  class="overflow-x-auto text-center">
            <tr>
                <th class="px-4 py-3">Id</th>
                <th class="px-4 py-3">Name</th>
                <th class="px-4 py-3">Patron</th>
                <th class="px-2 py-3">Delete</th>
                <th class="px-2 py-3">Edit</th>
                </tr>
            @foreach ($department as $department)
                <tr>
                    <td class="px-4 py-3">{{ $department->id }}</td>
                    <td class="px-4 py-3">{{ $department->name }}</td>
                    <td class="px-4 py-3">{{ $department->patron }}</td>
                    <td class="px-4 py-3">
                        <form class="text-red-600" action="{{route('department.delete', ['department' => $department ])}}" method="delete">
                            @csrf
                            @method('delete')
                
                            <input type="submit" value="delete"/>
                        </form>
                    </td>
                    <td class="px-4 py-3 text-blue-700">
                        <a href="{{ route('department.edit', ['department' => $department ]) }}">Edit</a>
                    </td>  
                
                </tr> 
        @endforeach
        </table>
    </div>

    @endsection 