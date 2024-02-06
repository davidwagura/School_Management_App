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
        <form action="{{ route('form.store') }}" method="post">
            @csrf
            @method('post')
            <label for="name">Name:</label>
            <input type="text" name="name">

            <label for="class_teacher">Class Teacher:</label>
            <input type="text" name="class_teacher">

            <button type="submit">Submit</button>
        </form>
    </div>
@endsection