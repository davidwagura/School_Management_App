
@extends('welcome') 
  

@section('content') 
<h1>
<div class="text-right pr-8 mb-2">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 border border-blue-700 rounded">
        <a href="{{ route('county.add') }}">Add New County</a>
    </button>
</div>
</h1>
<div>
    <table class="table-auto min-w-full text-center">
        <tr class="px-4">
            <th>Id</th>
            <th>Name</th>
            <th>County Code</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($county as $county)
            <tr class="px-4 py-3">
                <td>{{ $county->id }}</td>
                <td>{{ $county->name }}</td>
                <td>{{ $county->county_code }}</td>
                <td>
                    <div>
                        <button class="bg-red-500 hover:bg-red-300 h-8 px-4 border rounded pr-4">

                            <form class="text-white" action="{{route('county.delete', ['county' => $county ])}}" method="delete">
                                @csrf
                                @method('delete')
                
                                <input type="submit" value="delete"/>
                            </form>
                        </button>
                    </div>
                </td>
                <td class="text-white">
                    <div>
                        <button class="bg-blue-500 hover:bg-blue-700 h-8 px-4 mt-4 rounded pr-4">
                            <a href="{{ route('county.edit', ['county' => $county ]) }}">Edit</a>
                        </button>
                    </div>
                </td>  
                
            </tr> 
        @endforeach
    </table>
</div>


@endsection 