
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js')}}" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('events')}}">Предстоящие и прошедшие события<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('main_page')}}">Бронирование и обратная связь<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('menu_page')}}">Меню ресторана</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{route('menu_page')}}">Корзина продуктов <span class="badge badge-secondary">{{cart()->getCount()}}</span></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<main role="main" style="margin-top: 5%">
    @if(session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
           {{session('status')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
    <p style="font-size:4em;margin-top: 30px">Меню ресторана</p>
    @foreach($specialSections as $specialSection)
        <p style="font-size:3em;color:blue">{{$specialSection->name_of_main_section}}</p>
        @foreach($specialSection->dishes as $dish)
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                    <div class="col-md-4" >
                        <div class="card mb-4 box-shadow">
                            <div class="card-body">
                                <p class="card-text"></p>
                                <p class="card-text">Блюдо: {{$dish->dish}}</p>
                                <p class="card-text">Стоимость блюда: {{$dish->price}} $ </p>
                                <span class="tags">
                                    @foreach($dish->menuSections as $section)
                                        {{$section->section}}  @if (!$loop->last) / @endif
                                    @endforeach
                                    </span>
                                <br>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <form action="{{route('cart.add', $dish)}}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-outline-secondary">Добавить в корзину</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
            @endforeach
    </div>
@endforeach
</main>

<footer class="text-muted">
    <div class="container">
        <p class="float-right">
            <a href="#">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="{{asset('../../getting-started/')}}">getting started guide</a>.</p>
    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('https://code.jquery.com/jquery-3.2.1.slim.min.js')}}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="{{asset('../../assets/js/vendor/jquery-slim.min.js')}}"><\/script>')</script>
<script src="{{asset('../../assets/js/vendor/popper.min.js')}}"></script>
<script src="{{asset('../../dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('../../assets/js/vendor/holder.min.js')}}"></script>
</body>
</html>


