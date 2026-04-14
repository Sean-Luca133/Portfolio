<x-favicon/>
<title>{{isset($title)? "Portfolio - $title":"Portfolio" }}</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>

@vite(['resources/css/app.css', 'resources/js/app.js'])
@stack('styles')
</head>
<body class="bg-dusty-olive-50 relative">
<x-port_quest.navbar/>
<div class="md:mx-5 mx-2">
    {{$slot}}
</div>
<div class="absolute bottom-0 w-[100%]">
    <x-port_quest.footer/>
</div>
@stack('scripts')
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
