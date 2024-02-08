
@extends('welcome') 
  

@section('content') 
    <h1>
    <div class="text-right pr-8 mt-4 mb-2">
        <button class="bg-blue-500 hover:bg-blue-700 text-white mt-16 font-bold py-2 px-4 border border-blue-700 rounded">
            <a href="{{ route('form.add') }}">Add New Form</a>
        </button>
    </div>
    </h1>
    <div  class="overflow-x-auto">
        <table class="table-auto min-w-full text-center grid grid-cols-auto place-content-center ...">
            <tr class="px-4 py-3">
                <th class="pl-6">Id</th>
                <th class="pl-6">Name</th>
                <th class="pl-6">ClassTeacher</th>
                <th class="pl-6">Delete</th>
                <th class="pl-6">Edit</th>
                </tr>
            @foreach ($form as $form)
                <tr class="px-4 py-2">
                    <td >{{ $form->id }}</td>
                    <td>{{ $form->name }}</td>
                    <td>{{ $form->class_teacher }}</td>
                    <td>
                        <div>
                            <button class="bg-red-500 hover:bg-red-300 h-8 px-4 mt-0 rounded pr-4">
                                <form class="text-white" action="{{route('form.delete', ['form' => $form ])}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="delete"/>
                                </form>
                            </button>
                        </div>
                    </td>
                    <td class="text-white">
                        <div>
                            <button class="bg-blue-500 hover:bg-blue-700 h-8 px-4 mt-0 rounded pr-4">
                                <a href="{{ route('form.edit', ['form' => $form ]) }}">Edit</a>
                            </button>
                        </div>
                    </td>  
                
                </tr> 
        @endforeach
        </table>
    </div>
  
@endsection