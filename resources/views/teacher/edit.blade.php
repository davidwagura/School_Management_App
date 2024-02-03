<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        <u>Edit teacher details:</u>
    </h1>
    <div>
        <form action="{{ route('teacher.update', ['teacher' => $teacher]) }}" method="post">
            @csrf
            @method('put')
            <div>
                <label for="first_name">First Name:</label>
                <input type="text" name="first_name" value="{{ $teacher->first_name }}">
    
                <label for="last_name">Last Name:</label>
                <input type="text" name="last_name" value="{{ $teacher->last_name }}">
    
                <label for="gender">Gender:</label>
                <input type="text" name="gender" value="{{ $teacher->gender }}">

                <label for="work_number">Work Number:</label>
                <input type="text" name="work_number" value="{{ $teacher->password }}">
    
                <input type="submit" value="Update">
            </div>
        </form>
    </div>
</body>
</html>