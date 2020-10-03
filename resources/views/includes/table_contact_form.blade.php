<div class="col-md-6" id="contact_table_form">
    <div class="get-touch-form" >
        @if (session('Contact_status'))
            <p class="success" id="reserv_success_msg">{{session('Contact_status')}}</p>
        @endif
        <form method="post" action="{{route('contact_form')}}">
            @csrf
            <input name="name" type="text"  value="{{old('name', 'Введите имя')}}">
            <input class="last" name="email" type="text"  value="{{old('email','Введите почту')}}">
            <textarea  cols="1"  rows="1" name="name" placeholder="Ваше обращение"></textarea>
            <input type="submit" name=" " value="send message">
        </form>
    </div>
</div>
