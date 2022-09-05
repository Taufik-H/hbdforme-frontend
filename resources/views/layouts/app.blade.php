<!DOCTYPE html >
<html lang="en" style="background-color:#E5E7EB">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>
    <div class="w-full h-full bg-gray-200">

        {{-- if the header is nothing then disable it --}}
        @isset($header)
        {{$header}}
        @endisset
        {{-- the content slot --}}
        {{$slot}}
    
        {{-- if the footer is nothing then disable it --}}
        @isset($footer)
        {{$footer}}
        @endisset
    </div>
    @livewireScripts
</body>
</html>
