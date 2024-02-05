
@extends('welcome') 
  

@section('content') 
<h1>
    <u>
        Edit your information here:
    </u>
</h1>
<div>
    <table class="overflow-x-auto">
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
                    <form action="{{route('county.delete', ['county' => $county ])}}" method="delete">
                        @csrf
                        @method('delete')
                
                        <input type="submit" value="delete"/>
                    </form>
                </td>
                <td class="px-4 py-3">
                    <a href="{{ route('county.edit', ['county' => $county ]) }}">Edit</a>
                </td>  
                
            </tr> 
    @endforeach
    </table>
</div>
<div>
    <a href="{{ route('county.add') }}">Add a new county</a>
</div>


@endsection 