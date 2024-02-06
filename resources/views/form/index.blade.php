
@extends('welcome') 
  

@section('content') 
    <h1>
    <div class="text-left">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
            <a href="{{ route('form.add') }}">Add a new student</a>
        </button>
    </div>
    </h1>
    <div  class="overflow-x-auto">
        <table class="table-auto min-w-full text-center">
            <tr>
                <th class="px-4 py-3">Id</th>
                <th class="px-4 py-3">Name</th>
                <th class="px-4 py-3">ClassTeacher</th>
                <th class="px-2 py-3">Delete</th>
                <th class="px-2 py-3">Edit</th>
                </tr>
            @foreach ($form as $form)
                <tr>
                    <td class="px-4 py-2">{{ $form->id }}</td>
                    <td class="px-4 py-2">{{ $form->name }}</td>
                    <td class="px-4 py-2">{{ $form->class_teacher }}</td>
                    <td class="px-4 py-2">
                        <form class="text-red-600" action="{{route('form.delete', ['form' => $form ])}}" method="post">
                            @csrf
                            @method('delete')
                
                            <input type="submit" value="delete"/>
                        </form>
                    </td>
                    <td class="px-4 py-3 text-blue-700">
                        <a href="{{ route('form.edit', ['form' => $form ]) }}">Edit</a>
                    </td>  
                
                </tr> 
        @endforeach
        </table>
    </div>
  
@endsection