<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('resources/css/app.css')
        <title>Shool Management System</title>
    </head>
    <body class="text-lg">
        <nav class="flex justify-center bg-gray-700 h-12 text-white" >
            <div class="mt-2">
                <a href="/student/create" class="pr-4">Students</a>
                <a href="/county/create" class="pr-4">County</a>
                <a href="/form/create" class="pr-4">Forms</a>
                <a href="/club/create" class="pr-4">Clubs</a>
                <a href="/teacher/create" class="pr-4">Teachers</a>
                <a href="/department/create" class="pr-4">Department</a>
            </div>

        </nav>
        <div class="justify-items-center">
            @yield('content')
        </div>
        <footer class="flex justify-center mt-4 mb-0">
            <p>&copy; 2024 School Management System. All rights reserved.</p>
        </footer>
    </body>
</html>
