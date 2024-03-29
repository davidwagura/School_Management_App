@extends('welcome')

@section('content')
    <h1 class="mt-40 text-center font-bold">
        <u>
            Fill the form below:
        </u>
    </h1>
    <div class="create-inputs flex justify-center items-center">
        <form class="flex flex-col space-y-4 ..." action="{{ route('county.store') }}" method="post">
            @csrf
            @method('post')
                <label for="name" class="mr-2">Name:</label>
                <input class="border rounded px-2 py-1" type="text" name="name">

                <label for="county_code" class="mr-2">County Code:</label>
                <input class="border rounded px-2 py-1" type="text" name="county_code"><br>

                <button class="bg-blue-500 hover:bg-blue-700 h-8 px-4 mt-4 border border-blue-700 rounded pr-4"type="submit">Submit</button>
        </form>
    </div>
@endsection