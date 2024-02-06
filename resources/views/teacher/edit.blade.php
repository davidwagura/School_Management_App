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
        <u>Edit teacher details:</u>
    </h1>
    <div class="create-inputs flex justify-center items-center">
        <form action="{{ route('teacher.update', ['teachers' => $teachers]) }}" method="put">
            @csrf
            @method('put')
            <div>
                <label for="first_name">First Name:</label>
                <input class="border rounded px-2 py-1" type="text" name="first_name" value="{{ $teacher->first_name }}">
    
                <label for="last_name">Last Name:</label>
                <input class="border rounded px-2 py-1" type="text" name="last_name" value="{{ $teacher->last_name }}">
    
                <label for="gender">Gender:</label>
                <input class="border rounded px-2 py-1" type="text" name="gender" value="{{ $teacher->gender }}">

                <label for="work_number">Work Number:</label>
                <input class="border rounded px-2 py-1" type="text" name="work_number" value="{{ $teacher->password }}"><br>
    
                <input type="submit" value="Update">
            </div>
        </form>
    </div>
</body>
</html>