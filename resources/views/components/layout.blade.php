<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header class="border-b h-16 flex items-center justify-start">
        <div class="container mx-auto px-4 flex items-center justify-between">
            <a href='/'>
                <img src="/images/logo.svg" alt="Dummy Logo">
            </a>
            <nav class="flex items-center justify-end gap-4">
                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                <x-nav-link href="/job-listings" :active="request()->is('job-listings')">Job Listing</x-nav-link>
            </nav>
        </div>
    </header>
    {{ $slot }}
</body>

</html>
