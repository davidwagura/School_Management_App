@extends('welcome') 
  

@section('content') 
<h1>
    <u>
        Edit your information here:
    </u>
</h1>
<div class="overflow-x-auto">
    <table class="table-auto min-w-full">
        <tr>
            <th class="px-2 py-3">Id</th>
            <th class="px-2 py-3">Name</th>
            <th class="px-2 py-3">Patron</th>
            <th class="px-2 py-3">Edit</th>
            <th class="px-2 py-3">Delete</th>
        </tr>
        @foreach ($club as $club)
            <tr>
                <td class="px-4 py-3">{{ $club->id }}</td>
                <td class="px-4 py-3">{{ $club->name }}</td>
                <td class="px-4 py-3">{{ $club->patron }}</td>
                <td class="px-4 py-3">
                    <form action="{{route('club.delete', ['club' => $club ])}}" method="post">
                        @csrf
                        @method('delete')
                
                        <input type="submit" value="delete"/>
                    </form>
                </td>
                <td class="px-4 py-3">
                    <a href="{{ route('club.edit', ['club' => $club ]) }}">Edit</a>
                </td>  
                
            </tr> 
    @endforeach
    </table>
</div>
<div class="font-bold">
    <a href="{{ route('club.add') }}">Add a new club</a>
</div>

@endsection 