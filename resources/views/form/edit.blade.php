<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        <u>Edit form details:</u>
    </h1>
    <div>
        <form action="{{ route('form.update', ['form' => $form]) }}" method="post">
            @csrf
            @method('put')
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" value="{{ $form->name }}">
    
                <label for="last_name">Last Name:</label>
                <input type="text" name="last_name" value="{{ $form->class_teacher }}">
        
                <input type="submit" value="Update">
            </div>
        </form>
    </div>
</body>
</html>