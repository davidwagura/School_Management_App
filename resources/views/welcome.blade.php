<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('resources/css/app.css')
        <title>Shool Management System</title>
    </head>
    <body class="flex flex-col h-screen justify-top align-middle min-h-screen">
        <nav class="flex justify-center bg-gray-700  text-white h-16 p-3 text-2xl fixed top-0 w-screen" >
            <div>
                <a href="/student/index" class="pr-6">Students</a>
                <a href="/county/index" class="pr-6">County</a>
                <a href="/form/index" class="pr-6">Forms</a>
                <a href="/club/index" class="pr-6">Clubs</a>
                <a href="/teacher/index" class="pr-6">Teachers</a>
                <a href="/department/index" class="pr-6">Department</a>
            </div>
        </nav>
        <div class="justify-items-center place-content-center">
            @yield('content')
        </div>
        <footer class="flex justify-center bg-gray-700 text-white mt-60 h-12 fixed bottom-0 w-screen">
            <p class="mt-3 text-xl">&copy; 2024 School Management System. All rights reserved.</p>
        </footer>
    </body>
</html>

