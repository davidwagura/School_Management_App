<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Student's Details</title>
</head>

<body>
    <style>
        label {
           text-align: center;
           display: flex;
           justify-content: space-around;
           margin-top: 12px;
       }
       body {
           text-align: center;
       }
       select {
        width: 15%;
        height: 2rem;
       }
       input {
        height: 2rem;
       }
    </style>
    <h1>
        <u>Edit student details:</u>
    </h1>
    <div>
        <form action="{{ route('student.update', ['student' => $student]) }}" method="put">
            @csrf
            @method('put')
            <div class="create-inputs flex justify-center items-center">
                <label class="mr-2" for="first_name">First Name:</label>
                <input class="border rounded px-2 py-1" type="text" name="first_name" value="{{ $student->first_name }}">

                <label class="mr-2" for="last_name">Last Name:</label>
                <input class="border rounded px-2 py-1" type="text" name="last_name" value="{{ $student->last_name }}">

                <div>
                    <label class="text-center justify-around flex mr-2" for="gender">Gender:</label>
                    <select class="flex w-full h-8 bg-white" id="gender" name="gender">
                        <option  class="block w-full" value="male">Male</option>
                        <option  class="block w-full" value="female">Female</option>
                    </select>
                </div>

                <label class="mr-2" for="password">Password:</label>
                <input class="border rounded px-2 py-1" type="text" name="password" value="{{ $student->password }}">

                <label class="mr-2" for="admission_number">Admission Number:</label>
                <input class="border rounded px-2 py-1" type="number" name="admission_number" value="{{ $student->admission_number }}">

                <div>
                    <label class="text-center justify-around flex mr-2" for="home_county">County:</label>
                    <select class="flex w-full h-8 bg-white border" id="county" name="home_county">
                        <option  class="block w-full" value="Nyeri">Nyeri</option>
                        <option  class="block w-full" value="Murang'a">Murang'a</option>
                        <option  class="block w-full" value="Murang'a">Murang'a</option>
                        <option  class="block w-full" value="Kiambu">Kiambu</option>
                        <option  class="block w-full" value="Nakuru">Nakuru</option>
                    </select>
                </div>

                <label class="mr-2" for="date_of_birth">Date Of Birth:</label>
                <input class="border rounded px-2 py-1" type="text" name="date_of_birth" value="{{ $student->date_of_birth }}"><br>

                <input style="margin-top: 10px; background-color: blue; color: white;" type="submit" value="Update">
            </div>
        </form>
    </div>
</body>

</html>
