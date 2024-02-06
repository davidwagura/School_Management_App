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
        <u>Edit county details:</u>
    </h1>
    <div>
        <form action="{{ route('county.update', ['county' => $county]) }}" method="post">
            @csrf
            @method('put')
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" value="{{ $county->name }}">
    
                <label for="county_code">Last Name:</label>
                <input type="text" name="county_code" value="{{ $county->county_code }}">
        
                <input type="submit" value="Update">
            </div>
        </form>
    </div>
</body>
</html>