@extends('welcome') 
  

@section('content') 
<h1>
    <div class="font-bold text-left">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
            <a href="{{ route('club.add') }}">Add a new club</a>
        </button>
    </div>
</h1>
<div class="overflow-x-auto">
    <table class="table-auto min-w-full text-center">
        <tr>
            <th class="px-2 py-3">Id</th>
            <th class="px-2 py-3">Name</th>
            <th class="px-2 py-3">Patron</th>
            <th class="px-2 py-3">Delete</th>
            <th class="px-2 py-3">Edit</th>
        </tr>
        @foreach ($club as $club)
            <tr>
                <td class="px-4 py-3">{{ $club->id }}</td>
                <td class="px-4 py-3">{{ $club->name }}</td>
                <td class="px-4 py-3">{{ $club->patron }}</td>
                <td class="px-4 py-3">
                    <form class="text-red-600" {{route('club.delete', ['club' => $club ])}} method="post">
                        @csrf
                        @method('delete')
                
                        <input type="submit" value="delete"/>
                    </form>
                </td>
                <td class="px-4 py-3 text-blue-700">
                    <a href="{{ route('club.edit', ['club' => $club ]) }}">Edit</a>
                </td>  
                
            </tr> 
    @endforeach
    </table>
</div>

@endsection 