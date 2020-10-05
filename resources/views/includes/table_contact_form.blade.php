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
            <input name="name" type="text"  value="{{old('name', '')}}">
            <input class="last" name="email" type="text" value="{{old('email','')}}">
            <textarea   name="message" rows="1" cols="1" placeholder="Ваше обращение"></textarea>
            <input type="submit" value="Отправить">
        </form>
    </div>
</div>
