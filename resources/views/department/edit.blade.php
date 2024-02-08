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
           margin-top: 20px;
       }
       body {
           text-align: center;
       }
       .submit {
        color: white;
        background-color: blue;
        margin-top: 20px;
       }

   </style>

    <h1>
        <u>Edit student details:</u>
    </h1>
    <div class="create-inputs flex justify-center items-center">
        <form action="{{ route('department.update', ['department' => $department]) }}" method="post">
            @csrf
            @method('put')
            <div>
                <label class="mr-2" for="name">Name:</label>
                <input class="border rounded px-2 py-1" type="text" name="name" value="{{ $department->name }}">
    
                <label class="mr-2" for="patron">Patron:</label>
                <input class="border rounded px-2 py-1" type="text" name="patron" value="{{ $department->patron }}"><br>
        
                <input class="submit" type="submit" type="submit" value="Update">
            </div>
        </form>
    </div>
</body>
</html>