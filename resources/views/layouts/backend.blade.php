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
  <x-sidebar-layout />

  <main>
    <div class="p-4 sm:ml-64 mt-3">
      {{ $slot }}
    </div>
  </main>
</body>

</html>
