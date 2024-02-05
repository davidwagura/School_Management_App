
@extends('welcome') 
  

@section('content') 
<h1>
    <u>
        Edit your information here:
    </u>
</h1>
<div>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>County Code</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($county as $county)
            <tr>
                <td>{{ $county->id }}</td>
                <td>{{ $county->name }}</td>
                <td>{{ $county->county_code }}</td>
            </tr> 
    @endforeach
    </table>
</div>
<td>
    <form action="{{route('county.delete', ['county' => $county ])}}" method="delete">
        @csrf
        @method('delete')

        <input type="submit" value="delete"/>
    </form>
</td>
<td>
    <a href="{{ route('county.edit', ['county' => $county ]) }}">Edit</a>
</td>  
<div>
    <a href="{{ route('county.add') }}">Add a new county</a>
</div>


@endsection 