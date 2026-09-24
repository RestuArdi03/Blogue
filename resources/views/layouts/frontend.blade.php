<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>{{ isset($title) && $title ? "Blogue - $title" : 'Blogue' }}</title>
</head>

<body>
  <x-navbar-layout />

  <main class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      {{ $slot }}
    </div>
  </main>
</body>

</html>
