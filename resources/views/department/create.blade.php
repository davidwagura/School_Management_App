@extends('welcome')

@section('content')
    <h1 class="mt-20 text-center font-bold">
        <u>
            Fill the form below:
        </u>
    </h1>
    <div class="create-inputs flex justify-center items-center">
        <form class="flex flex-col space-y-4 ..." action="{{ route('department.store') }}" method="post">
            @csrf
            @method('post')
                <label for="name" class="mr-2">Name:</label>
                <select class="h-8" name="name" id="name">
                    <option value="Exam Department">Exam Department</option>
                    <option value="Science Department">Science Department</option>
                    <option value="Drama Department">Drama Department</option>
                    <option value="Sports Department">Sports Department</option>
                </select>
                <label for="patron" class="mr-2">Patron:</label>
                <select class="h-8" name="patron" id="patron">
                    <option value="Mr Maina">Mr Maina</option>
                    <option value="Mr Keptoo"> Mr Keptoo</option>
                    <option value="Mrs Chebet"> Mrs Chebet</option>
                    <option value="Mrs Kamau">Mrs Kamau</option>
                </select>
                <button class="bg-blue-500 hover:bg-blue-700 h-8 px-4 mt-4 border border-blue-700 rounded pr-4" type="submit">Submit</button>
        </form>
    </div>
@endsection