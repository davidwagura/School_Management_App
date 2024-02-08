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
           display: flex;
           justify-content: space-around;
        }
       body {
           text-align: center;
        }
       label {
            margin-top: 20px;
        }
       .submit {
            margin-top: 20px;
            background-color: blue;
            color: white;
        }

   </style>

    <h1>
        <u>Edit club details:</u>
    </h1>
    <div class="create-inputs flex justify-center items-center">
        <form action="{{ route('club.update', ['club' => $club]) }}" method="post">
            @csrf
            @method('put')
            <div>
                <label class="mr-2" for="name">Name:</label>
                <input class="border rounded px-2 py-1" type="text" name="name" value="{{ $club->name }}">
    
                <label class="mr-2" for="patron">Patron:</label>
                <input class="border rounded px-2 py-1" type="text" name="patron" value="{{ $club->patron }}"><br>
        
                <input class="submit" type="submit" type="submit" value="Update">
            </div>
        </form>
    </div>
</body>
</html>