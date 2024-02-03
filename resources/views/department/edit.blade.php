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
        <form action="{{ route('club.update', ['club' => $club]) }}" method="post">
            @csrf
            @method('put')
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" value="{{ $club->name }}">
    
                <label for="patron">Last Name:</label>
                <input type="text" name="patron" value="{{ $club->patron }}">
        
                <input type="submit" value="Update">
            </div>
        </form>
    </div>
</body>
</html>