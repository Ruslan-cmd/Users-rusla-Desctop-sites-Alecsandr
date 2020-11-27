<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js')}}"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('/docs/4.0/assets/img/favicons/favicon.ico')}}">

    <title>Album example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('../../dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('album.css')}}" rel="stylesheet">
</head>

<body>
<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Администрационная панель</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('events')}}">Предстоящие и прошедшие события<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('main_page')}}">Бронирование и обратная связь<span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('menu_page')}}">Меню ресторана</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{route('menu_page')}}">Корзина продуктов <span
                            class="badge badge-secondary">{{cart()->getCount()}}</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

</header>

<main role="main">
    <div style="margin-top:10em;display: block; margin-left:25%;">
    <div class="row">
                <h1>Счетчик до самого актуального события</h1>
    </div>

    <ul id="example" style="display: flex; flex-direction: row;list-style-type: none">
        <li><span class="days">{{$eventData['untilDays']}}</span>
            <p class="days_text">Days</p></li>
        <li class="seperator">:</li>
        <li><span class="hours">{{$eventData['untilHours']}}</span>
            <p class="hours_text">Hours</p></li>
        <li class="seperator">:</li>
        <li><span class="minutes">{{$eventData['untilMinutes']}}</span>
            <p class="minutes_text">Minutes</p></li>
        <li class="seperator">:</li>
        <li><span class="seconds">{{$eventData['untilSeconds']}}</span>
            <p class="seconds_text">Seconds</p></li>
    </ul>

    <div class="event-detail">
        <div class="row">
            <div class="col-md-8">
                <div class="event-text">
                    <h6>{{$eventData['title']}}</h6>
                    <span><i class="icon-clock"></i>
                        {{$eventData['date']}} / {{$eventData['time_start']}} - {{$eventData['time_end']}}
                    </span>
                </div>
            </div>

        </div>
    </div>
    </div>
    <div class="album py-5 bg-light">
        <div class="container">
            <p style="font-size:4em">Предстоящие события</p>
            <div class="row">
                @foreach($events as $event)

                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                 data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail"
                                 alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">{{$event->title}}</p>
                                <p class="card-text">Организатор мероприятия: {{$event->organizer}}</p>
                                <p class="card-text">Дата события: {{$event->date}}</p>
                                <p class="card-text">Стоимость: {{$event->price}} рублей</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <p style="font-size:4em">События, которые прошли</p>
            <div class="row">
                @foreach($events1 as $event)

                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                 data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail"
                                 alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">{{$event->title}}</p>
                                <p class="card-text">Организатор мероприятия: {{$event->organizer}}</p>
                                <p class="card-text">Дата события: {{$event->date}}</p>
                                <p class="card-text">Стоимость: {{$event->price}} рублей</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            {{($events1->render())}}
        </div>
    </div>

</main>

<footer class="text-muted">
    <div class="container">
        <p class="float-right">
            <a href="#">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a
                href="{{asset('../../getting-started/')}}">getting started guide</a>.</p>
    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('https://code.jquery.com/jquery-3.2.1.slim.min.js')}}"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="{{asset('../../assets/js/vendor/jquery-slim.min.js')}}"><\/script>')</script>
<script src="{{asset('../../assets/js/vendor/popper.min.js')}}"></script>
<script src="{{asset('../../dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('../../assets/js/vendor/holder.min.js')}}"></script>
</body>
</html>
