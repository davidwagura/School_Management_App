@extends('welcome')

@section('content')
</head>
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
    <div class="create-inputs flex justify-center items-center">
        <form action="{{ route('club.store') }}" method="post">
            @csrf
            @method('post')
            <label for="name" class="mr-2">Name:</label>
            <input class="border rounded px-2 py-1" type="text" name="name">

            <label for="patron" class="mr-2">Patron:</label>
            <input class="border rounded px-2 py-1" type="text" name="patron"><br>

            <button class="bg-blue-500 hover:bg-blue-700 h-8 px-4 mt-4 border border-blue-700 rounded pr-4"type="submit">Submit</button>
        </form>
    </div>
@endsection