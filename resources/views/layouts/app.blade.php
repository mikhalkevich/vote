<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <link href="media/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://canvasjs.com/assets/css/jquery-ui.1.11.2.min.css" rel="stylesheet" />
    <script>
        window.onload = function () {

// Construct options first and then pass it as a parameter
            var options1 = {
                animationEnabled: true,
                title: {
                    text: ""
                },
                data: [{
                    type: "column", //change it to line, area, bar, pie, etc
                    legendText: "Try Resizing with the handle to the bottom right",
                    showInLegend: true,
                    dataPoints: [
                        { y: 10 },
                        { y: 6 },
                        { y: 14 },
                        { y: 12 },
                        { y: 19 },
                        { y: 14 },
                        { y: 26 }
                    ]
                }]
            };

            $("#resizable").resizable({
                create: function (event, ui) {
                    //Create chart.
                    $("#chartContainer1").CanvasJSChart(options1);
                },
                resize: function (event, ui) {
                    //Update chart size according to its container size.
                    $("#chartContainer1").CanvasJSChart().render();
                }
            });

        }
    </script>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand top" href="{{ url('/') }}">
            Честные выборы
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Все кандидаты</a>
                </li>
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Вход</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Регистрация</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Выход
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
@yield('content')
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery-ui.1.11.2.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
</body>
</html>
