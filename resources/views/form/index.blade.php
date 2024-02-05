
@extends('welcome') 
  

@section('content') 
    <h1>
        <u>
            Edit your information here:
        </u>
    </h1>
    <div  class="overflow-x-auto">
        <table class="table-auto min-w-full">
            <tr>
                <th class="px-4 py-3">Id</th>
                <th class="px-4 py-3">Name</th>
                <th class="px-4 py-3">ClassTeacher</th>
                <th class="px-4 py-3">Edit</th>
                <th class="px-4 py-3">Delete</th>
            </tr>
            @foreach ($form as $form)
                <tr>
                    <td class="px-4 py-2">{{ $form->id }}</td>
                    <td class="px-4 py-2">{{ $form->name }}</td>
                    <td class="px-4 py-2">{{ $form->class_teacher }}</td>
                    <td class="px-4 py-2">
                        <form action="{{route('form.delete', ['form' => $form ])}}" method="post">
                            @csrf
                            @method('delete')
                
                            <input type="submit" value="delete"/>
                        </form>
                    </td>
                    <td class="px-4 py-3">
                        <a href="{{ route('form.edit', ['form' => $form ]) }}">Edit</a>
                    </td>  
                
                </tr> 
        @endforeach
        </table>
    </div>
    <div>
        <a href="{{ route('form.add') }}">Add a new student</a>
    </div>
  
@endsection