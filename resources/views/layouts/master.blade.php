<html>
<head>
    <title>Symfony - @yield('title')</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css')  }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')  }}">
</head>
<body>

<div class="container-fluid">

    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Queue App</h1>
        </div>
    </div>

    @yield('content')

</div>
<script type="text/javascript" src="{{ asset('js/jquery-1.12.4.min.js')  }}"></script>
<script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js')  }}"></script>
<script type="text/javascript" src="{{ asset('js/firmstep.js')  }}"></script>
</body>
</html>