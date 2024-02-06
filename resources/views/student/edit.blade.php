<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
        
        label {
           text-align: center;
       }
       body {
           background-color: gray;
           text-align: center;
       }
       form {
           display: inline-block;
       }

   </style>

    <h1>
        <u>Edit student details:</u>
    </h1>
    <div class="create-inputs flex justify-center items-center">
        <form action="{{ route('student.update', ['student' => $student]) }}" method="post">
            @csrf
            @method('put')
            <div>
                <label class="mr-2" for="first_name">First Name:</label>
                <input class="border rounded px-2 py-1" type="text" name="first_name" value="{{ $student->first_name }}">
    
                <label class="mr-2" for="last_name">Last Name:</label>
                <input class="border rounded px-2 py-1" type="text" name="last_name" value="{{ $student->last_name }}">
    
                <label class="mr-2" for="gender">Gender:</label>
                <input class="border rounded px-2 py-1" type="text" name="gender" value="{{ $student->gender }}">

                <label class="mr-2" for="password">Password:</label>
                <input class="border rounded px-2 py-1" type="text" name="password" value="{{ $student->password }}">

                <label class="mr-2" for="admission_number">Admission Number:</label>
                <input class="border rounded px-2 py-1" type="number" name="admission_number" value="{{ $student->admission_number }}">
    
                <label class="mr-2" for="home_county">Home County:</label>
                <input class="border rounded px-2 py-1" type="text" name="home_county" value="{{ $student->home_county }}">
    
                <label class="mr-2" for="date_of_birth">Date Of Birth:</label>
                <input class="border rounded px-2 py-1" type="text" name="date_of_birth" value="{{ $student->date_of_birth }}"><br>
    
                <input type="submit" value="Update">
            </div>
        </form>
    </div>
</body>
</html>