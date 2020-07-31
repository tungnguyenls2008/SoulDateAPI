<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">

    <header>
        @include('includes.header')
    </header>

    <div id="main" class="row">

        @yield('content')
        <body >
@foreach($people as $person)
    <p>{{$person->first_name}}</p>
    <p>{{$person->last_name}}</p>
@endforeach

        </body>

    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>



