<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @routes
    <script src="{{ mix('js/app.js') }}" defer></script>
    
    @inertiaHead
</head>
<body class="font-sans antialiased">
    @inertia

    <!-- Componente Vue.js -->
    <div id="app">
        <!-- O componente Welcome será renderizado aqui -->
        <welcome></welcome>
    </div>

    <!-- Script para inicializar o aplicativo Vue.js -->
    <script>
        // Registre o componente Welcome.vue globalmente
        Vue.component('welcome', require('./components/Welcome.vue').default);

        // Inicialize o aplicativo Vue.js
        const app = new Vue({
            el: '#app'
        });
    </script>
</body>
</html>
