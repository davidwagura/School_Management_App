
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
    <div class="create-inputs">
        <form action="{{ route('teacher.store') }}" method="post">
            @csrf
            @method('post')
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name">

            <label for="last_
            name">Last Name:</label>
            <input type="text" name="last_name">

            <label for="gender">Gender:</label>
            <input type="text" name="gender">

            <label for="work_number">Work Number:</label>
            <input type="text" name="work_number">

            <button class="bg-blue-500 hover:bg-blue-700 h-8 px-4 mt-4 border border-blue-700 rounded pr-4" type="submit">Submit</button>
        </form>
    </div>
@endsection