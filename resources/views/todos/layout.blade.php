<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> <!-- using Tailwind CSS, seems like a nice alternative to Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome Icons -->
    <title>Task Manager</title>
</head>

<body>
<div class="flex justify-center text-center pt-10 pb-10">
    <div class="w-2/4 border-2 border-indigo-100 rounded pt-4">
    @yield('content')
    </div>
</div>
</body>
</html>
