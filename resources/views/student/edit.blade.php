<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        <u>Edit student details:</u>
    </h1>
    <div>
        <form action="{{ route('student.update', ['student' => $student]) }}" method="post">
            @csrf
            @method('put')
            <div>
                <label for="first_name">First Name:</label>
                <input type="text" name="first_name" value="{{ $student->$first_name }}">
    
                <label for="last_name">Last Name:</label>
                <input type="text" name="last_name" value="{{ $student->$last_name }}">
    
                <label for="gender">Gender:</label>
                <input type="text" name="gender" value="{{ $student->$gender }}">
    
    
                <label for="admission_number">Admission Number:</label>
                <input type="number" name="admission_number" value="{{ $student->$admission_number }}">
    
                <label for="home_county">Home County:</label>
                <input type="text" name="home_county" value="{{ $student->$home_county }}">
    
                <label for="date_of_birth">Date Of Birth:</label>
                <input type="text" name="date_of_birth" value="{{ $student->$date_of_birth }}">
    
                <input type="submit" value="Update">
            </div>
        </form>
    </div>
</body>
</html>