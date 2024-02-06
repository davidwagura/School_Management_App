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
        <form action="{{ route('student.store') }}" method="post">
            @csrf

            @method('post')
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name">

            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name">

            <label for="gender">Gender:</label>
            <input type="text" name="gender">

            <label for="password">Password:</label>
            <input type="text" name="password">


            <label for="admission_number">Admission Number:</label>
            <input type="number" name="admission_number">

            <label for="home_county">Home County:</label>
            <input type="text" name="home_county">

            <label for="date_of_birth">Date Of Birth:</label>
            <input type="text" name="date_of_birth"><br>

            <button type="submit">Submit</button>
        </form>
    </div>
@endsection

