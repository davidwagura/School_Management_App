
@extends('welcome')

@section('content')
    <h1 class="mt-20 text-center font-bold">
        <u>
            Fill the form below:
        </u>
    </h1>
    <div class="create-inputs flex justify-center items-center">
        <form class="flex flex-col space-y-4 ..." action="{{ route('teacher.store') }}" method="post">
            @csrf
            @method('post')
                <label class="mr-2" for="first_name">First Name:</label>
                <input class="border rounded px-2 py-1" type="text" name="first_name">

                <label class="mr-2" for="last_name">Last Name:</label>
                <input class="border rounded px-2 py-1" type="text" name="last_name">

                <label class="mr-2" for="gender">Gender:</label>
                <input class="border rounded px-2 py-1" type="text" name="gender">

                <label class="mr-2" for="work_number">Work Number:</label>
                <input class="border rounded px-2 py-1" type="text" name="work_number"><br>

            <button class="bg-blue-500 hover:bg-blue-700 h-8 px-4 mt-4 border border-blue-700 rounded pr-4" type="submit">Submit</button>
        </form>
    </div>
@endsection