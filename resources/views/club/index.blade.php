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
            <th>Patron</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($club as $club)
            <tr>
                <td>{{ $club->id }}</td>
                <td>{{ $club->name }}</td>
                <td>{{ $club->patron }}</td>
            </tr> 
    @endforeach
    </table>
</div>
<td>
    <form action="{{route('club.delete', ['club' => $club ])}}" method="post">
        @csrf
        @method('delete')

        <input type="submit" value="delete"/>
    </form>
</td>
<td>
    <a href="{{ route('club.edit', ['club' => $club ]) }}">Edit</a>
</td>  
<div>
    <a href="{{ route('club.add') }}">Add a new club</a>
</div>

@endsection 