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
           background-color: gray;
           text-align: center;
       }

   </style>

    <h1>
        <u>Edit county details:</u>
    </h1>
    <div class="create-inputs flex justify-center items-center">
        <form action="{{ route('county.update', ['county' => $county]) }}" method="post">
            @csrf
            @method('put')
            <div>
                <label class="mr-2" for="name">Name:</label>
                <input class="border rounded px-2 py-1" class="border rounded px-2 py-1" type="text" name="name" value="{{ $county->name }}">
    
                <label class="mr-2" for="county_code">County Code:</label>
                <input type="text" name="county_code" value="{{ $county->county_code }}"><br>
        
                <input class="bg-blue-500 hover:bg-blue-700 h-8 px-4 mt-4 border border-blue-700 rounded pr-4" type="submit" type="submit" value="Update">
            </div>
        </form>
    </div>
</body>
</html>