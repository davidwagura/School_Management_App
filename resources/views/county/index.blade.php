
@extends('welcome') 
  

@section('content') 
<h1>
<div class="text-right pr-8 mb-2">
    <button onclick="location.href='{{ route('county.add') }}' " class="bg-blue-500 hover:bg-blue-700 mt-20 text-white h-10 font-bold px-4 border border-blue-700 rounded">
       Add New County
    </button>
</div>
</h1>
<div>
    <table class="table-auto min-w-full text-center grid grid-cols-auto place-content-center ...">
        <tr class="px-4">
            <th class="pl-6">Name</th>
            <th class="pl-6">County Code</th>
            <th class="pl-6">Delete</th>
            <th class="pl-6">Edit</th>
        </tr>
        @foreach ($county as $county)
            <tr class="pl-12">
                <td class="pl-6">{{ $county->name }}</td>
                <td class="pl-6">{{ $county->county_code }}</td>
                <td>
                    <div>
                        <button class="bg-red-500 hover:bg-red-300 mt-3 h-8 px-4 border rounded pr-4">

                            <form class="text-white" action="{{route('county.delete', ['county' => $county ])}}" method="get">
                                @csrf
                                @method('get')
                
                                <input type="submit" value="Delete"/>
                            </form>
                        </button>
                    </div>
                </td>
                <td class="text-white">
                    <div>
                        <button class="bg-blue-500 hover:bg-blue-700 mt-3 ml-3 h-8 px-4 rounded pr-4">
                            <a href="{{ route('county.edit', ['county' => $county ]) }}">Edit</a>
                        </button>
                    </div>
                </td>  
                
            </tr> 
        @endforeach
    </table>
</div>


@endsection 