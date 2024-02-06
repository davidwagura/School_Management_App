@extends('welcome')

@section('content')
<body>
    <style>
        body {
            background-color: burlywood;
            text-align: center;
        }
        label {
            display: flex;
            text-align: center;
            
        }
        /* input {
            display: flex;
            justify-content: center;
            display: inline-block;
        } */
    </style>
    <h1>
        <u>
            Fill the form below:
        </u>
    </h1>
    <div class="create-inputs">
        <form action="{{ route('county.store') }}" method="post">
            @csrf
            @method('post')
            <label for="name">Name:</label>
            <input type="text" name="name">

            <label for="county_code">County Code:</label>
            <input type="text" name="county_code">

            <button class="bg-blue-500 hover:bg-blue-700 h-8 px-4 mt-4 border border-blue-700 rounded pr-4"type="submit">Submit</button>
        </form>
    </div>
@endsection