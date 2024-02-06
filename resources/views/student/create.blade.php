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
    <div class="create-inputs flex justify-center items-center">
        <form action="{{ route('student.store') }}" method="post">
            @csrf

            @method('post')
            <label class="mr-2" for="first_name">First Name:</label>
            <input class="border rounded px-2 py-1" type="text" name="first_name">

            <label class="mr-2" for="last_name">Last Name:</label>
            <input class="border rounded px-2 py-1" type="text" name="last_name">

            <label class="mr-2" for="gender">Gender:</label>
            <input class="border rounded px-2 py-1" type="text" name="gender">

            <label class="mr-2" for="password">Password:</label>
            <input class="border rounded px-2 py-1" type="text" name="password">


            <label class="mr-2" for="admission_number">Admission Number:</label>
            <input class="border rounded px-2 py-1" type="number" name="admission_number">

            <label class="mr-2" for="home_county">Home County:</label>
            <input class="border rounded px-2 py-1" type="text" name="home_county">

            <label class="mr-2" for="date_of_birth">Date Of Birth:</label>
            <input class="border rounded px-2 py-1" type="text" name="date_of_birth"><br>

            <button class="bg-blue-500 hover:bg-blue-700 h-8 px-4 mt-4 border border-blue-700 rounded pr-4" type="submit">Submit</button>
        </form>
    </div>
@endsection

