<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
        body {
            background-color: burlywood;
        }
        label {
            display: flex;
            justify-content: center;
        }
        input {
            display: flex;
            justify-content: center;
            display: inline-block;
        }
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
            <label for="name">First Name:</label>
            <input type="text" name="first-name">

            <label for="name">Last Name:</label>
            <input type="text" name="last-name">

            <label for="name">Gender:</label>
            <input type="text" name="gender">

            <label for="name">Class:</label>
            <input type="text" name="form">

            <label for="name">Admission Number:</label>
            <input type="number" name="admission-number">

            <label for="name">Home County:</label>
            <input type="text" name="home-county">

            <label for="name">Date Of Birth:</label>
            <input type="text" name="date-of-birth">

            <button>submit</button>
        
        </form>
    </div>
</body>
</html>