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
            text-align: center;
        }
        label {
            display: flex;
            text-align: center;
            
        }
        /* input {
            display: flex;
            justify-content: center;
            display: inline-block;
        } */
    </style>
    <h1>
        <u>
            Fill the form below:
        </u>
    </h1>
    <div class="create-inputs">
        <form action="{{ route('department.store') }}" method="post">
            @csrf
            @method('post')
            <label for="name">Name:</label>
            <input type="text" name="name">

            <label for="patron">Patron:</label>
            <input type="text" name="patron">

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>