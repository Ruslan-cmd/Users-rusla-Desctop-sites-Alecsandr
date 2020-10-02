<div class="col-md-6" id="contact_table_form">
    <div class="get-touch-form" >
        <p class="success_msg" id="success_msg" style="display:none">Thank You! We will contact you shortly.</p>
        <form method="post" action="{{route('contact_form')}}">
            <input name="name" type="text"  value="{{old('name' , 'Введите имя')}}">
            <input class="last" name="email" type="text" placeholder="Email" value="{{old('email' , 'Введите email')}}">
            <textarea  cols="1"  rows="1" name="name" type="text"  value="{{old('name' , 'Введите имя')}}"></textarea>
            <input type="submit" name=" " value="send message">
        </form>
    </div>
</div>
