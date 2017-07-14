<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>
        <div class="wrapper">
            <nav class="navbar navbar-fixed-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 no-left">
                            <div class="navbar-header">
                                <h4>x86 Instructions</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="{{ route('instructions') }}">Instructions</a>
                                </li>
                                <li>
                                    <a href="#">Hex Opcodes</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <div class="body">
            @yield('content')
        </div>

        {{-- Scripts --}}
        <script src='{{ mix('js/app.js') }}'></script>
    </body>
</html>
