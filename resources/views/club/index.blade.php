@extends('welcome') 
  

@section('content') 
<h1>
    <div class="font-bold text-right pr-8 mt-4 mb-2">
        <button class="bg-blue-500 mt-16 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
            <a href="{{ route('club.add') }}">Add New Club</a>
        </button>
    </div>
</h1>
<div class="overflow-x-auto">
    <table class="table-auto min-w-full text-center grid grid-cols-auto place-content-center ...">
        <tr class="px-2 py-3">
            <th>Name</th>
            <th class="pl-10">Patron</th>
            <th class="pl-10">Delete</th>
            <th>Edit</th>
        </tr>
        @foreach ($club as $club)
            <tr class="px-4 py-3">
                <td>{{ $club->name }}</td>
                <td>{{ $club->patron }}</td>
                <td>
                    <div>
                        <button class="bg-red-500 hover:bg-red-300 ml-6 h-8 px-4 mt-0 rounded pr-4">
                            <form class="text-white" {{route('club.delete', ['club' => $club ])}} method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="delete"/>
                            </form>
                        </button>
                    </div>
                </td>
                <td class="px-4 py-3 text-white">
                    <div>
                        <button class="bg-blue-500 hover:bg-blue-700 h-8  px-4 mt-0 border rounded pr-4">
                            <a href="{{ route('club.edit', ['club' => $club ]) }}">Edit</a>
                        </button>
                    </div>
                </td>  
                
            </tr> 
    @endforeach
    </table>
</div>

@endsection 