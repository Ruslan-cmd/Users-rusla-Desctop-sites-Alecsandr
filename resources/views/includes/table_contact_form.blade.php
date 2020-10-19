<head> <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js')}}" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<div class="col-md-6" id="contact_table_form">
    @if ($errors->any())
        @foreach ($errors->all() as $message)
            <p class="error" style="color:red;margin-bottom:10px">
                {{$message}}
            </p>
        @endforeach
    @endif
    <div class="get-touch-form" >
        @if (session('Contact_status'))
            <p class="success" id="reserv_success_msg">{{session('Contact_status')}}</p>
        @endif
        <form method="post" action="{{route('contact_form')}}">
            @csrf
            <input name="name" type="text" placeholder="Ваше имя" value="{{old('name')}}">
            <input class="last" name="email" type="text" placeholder="Ваше email" value="{{old('email')}}">
            <textarea   name="message" rows="20" cols="45" placeholder="Ваше обращение"></textarea>
            <input type="submit" value="Отправить">
        </form>
    </div>
</div>
