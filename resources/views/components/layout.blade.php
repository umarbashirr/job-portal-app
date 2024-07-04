<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="h-full">
    <header class="shadow-sm h-16 flex items-center justify-start bg-white">
        <div class="container mx-auto px-4 flex items-center justify-between">
            <a href='/'>
                <img src="/images/logo.svg" alt="Dummy Logo">
            </a>
            <nav class="flex items-center justify-end gap-4">
                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                <x-nav-link href="/job-listings" :active="request()->is('job-listings') || request()->is('job-listings/*')">Job Listing</x-nav-link>
            </nav>
        </div>
    </header>
    {{ $slot }}
</body>

</html>
