
@extends('welcome') 
  

@section('content') 
<h1>
<div class="text-left">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
        <a href="{{ route('county.add') }}">Add a new county</a>
    </button>
</div>
</h1>
<div>
    <table class="overflow-x-auto text-center">
        <tr>
            <th class="px-4 py-3">Id</th>
            <th class="px-4 py-3">Name</th>
            <th class="px-4 py-3">County Code</th>
            <th class="px-4 py-3">Edit</th>
            <th class="px-4 py-3">Delete</th>
        </tr>
        @foreach ($county as $county)
            <tr>
                <td class="px-4 py-3">{{ $county->id }}</td>
                <td class="px-4 py-3">{{ $county->name }}</td>
                <td class="px-4 py-3">{{ $county->county_code }}</td>
                <td class="px-4 py-3">
                    <form class="text-red-600" action="{{route('county.delete', ['county' => $county ])}}" method="delete">
                        @csrf
                        @method('delete')
                
                        <input type="submit" value="delete"/>
                    </form>
                </td>
                <td class="px-4 py-3 text-blue-700">
                    <a href="{{ route('county.edit', ['county' => $county ]) }}">Edit</a>
                </td>  
                
            </tr> 
    @endforeach
    </table>
</div>


@endsection 