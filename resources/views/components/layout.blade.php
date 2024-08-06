<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Listings</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-black text-white mx-40 pb-20">

    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div><a href="/">Logo</a></div>
            <div class="space-x-6 font-bold">
                <a href="{{ route('home') }}">Jobs</a>
                <a href="" class="pointer-events-none text-white/30">Careers</a>
                <a href="" class="pointer-events-none text-white/30">Salaries</a>
                <a href="{{ route('companies') }}">Companies</a>
            </div>
            @auth()
            <div class="space-x-6 flex">
                <a href="/jobs/create">Post a job</a>
                <form action="/logout" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Logout</button>
                </form>
            </div>
            @endauth

            @guest()
                <div class="space-x-6 font-bold">
                    <a href="/register">Sign Up</a>
                    <a href="/login">Login</a>
                </div>
            @endguest
        </nav>

        <main class="mt-10 max-x-[960px] mx-auto">
            {{ $slot }}
        </main>
    </div>

</body>
</html>
