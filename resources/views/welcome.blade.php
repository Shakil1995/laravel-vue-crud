<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}" />
    <title>Vue Laravel</title>
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
</head>
<body>
    <div id="app">
        {{-- <div class="container"> 
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse">
                    <div class="navbar-nav">
                        <router-link to="/" class="nav-item nav-link">Products List</router-link>
                        <router-link to="/create" class="nav-item nav-link">Create Product</router-link>
                    </div>
                </div>
            </nav>
            <router-view> </router-view>
        </div> --}}
    </div>

    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>
</html>