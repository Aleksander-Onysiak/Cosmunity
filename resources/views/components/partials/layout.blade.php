<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Cosmunity') }}</title>

    @vite(['resources/scss/style.scss'])
</head>

<body class="app">

<header class="app__top-bar">

    <div class="app__user">
        <x-partials.user />
    </div>

    <div class="app__nav">
        <x-partials.top-nav />
    </div>

</header>

<div class="app__layout">

    <aside class="app__sidebar">
        <x-partials.side-nav />
    </aside>

    <main class="app__content">
        {{ $slot }}
    </main>

    <aside class="app__aside">
        Aside
    </aside>

</div>


</body>
</html>
