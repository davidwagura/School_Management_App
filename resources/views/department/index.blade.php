  

    @extends('welcome') 
  

    @section('content') 
    <h1>
        <u>
            Edit your information here:
        </u>
    </h1>
    <div>
        <table  class="overflow-x-auto">
            <tr>
                <th class="px-4 py-3">Id</th>
                <th class="px-4 py-3">Name</th>
                <th class="px-4 py-3">Patron</th>
                <th class="px-4 py-3">Edit</th>
                <th class="px-4 py-3">Delete</th>
            </tr>
            @foreach ($department as $department)
                <tr>
                    <td class="px-4 py-3">{{ $department->id }}</td>
                    <td class="px-4 py-3">{{ $department->name }}</td>
                    <td class="px-4 py-3">{{ $department->patron }}</td>
                    <td class="px-4 py-3">
                        <form action="{{route('department.delete', ['department' => $department ])}}" method="delete">
                            @csrf
                            @method('delete')
                
                            <input type="submit" value="delete"/>
                        </form>
                    </td>
                    <td class="px-4 py-3">
                        <a href="{{ route('department.edit', ['department' => $department ]) }}">Edit</a>
                    </td>  
                
                </tr> 
        @endforeach
        </table>
    </div>
    <div>
        <a href="{{ route('department.add') }}">Add a new department</a>
    </div>
     

    @endsection 