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
                <label for="name">First Name:</label>
                <input type="text" name="first-name" value="{{ $student->$first-name }}">
    
                <label for="name">Last Name:</label>
                <input type="text" name="last-name" value="{{ $student->$last-name }}">
    
                <label for="name">Gender:</label>
                <input type="text" name="gender" value="{{ $student->$gender }}">
    
                <label for="name">Class:</label>
                <input type="text" name="form" value="{{ $student->$form }}">
    
                <label for="name">Admission Number:</label>
                <input type="number" name="admission-number" value="{{ $student->$admission-number }}">
    
                <label for="name">Home County:</label>
                <input type="text" name="home-county" value="{{ $student->$home-county }}">
    
                <label for="name">Date Of Birth:</label>
                <input type="text" name="date-of-birth" value="{{ $student->$date-of-birth }}">
    
                <input type="submit" value="Update">
            </div>
        </form>
    </div>
</body>
</html>