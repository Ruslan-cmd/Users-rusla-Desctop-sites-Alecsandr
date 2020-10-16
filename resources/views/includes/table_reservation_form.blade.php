<div id="reservation_table_form" class="booking-form" style="margin-top: 8em">
    @if ($errors->any())
        @foreach ($errors->all() as $message)
        <p class="error" style="color:red;margin-bottom:10px">
            {{$message}}
        </p>
        @endforeach
        @endif
    @if (session('Reservation_status'))
    <p class="success" id="reserv_success_msg">{{session('Reservation_status')}}</p>
    @endif
    <form  method="post" action="{{route('reserve-table')}} ">
    @csrf
<div class="col-md-6"><div class="field" >
        <input style="padding: 10px" name="name" type="text"   placeholder="Введите имя" value="{{old('name')}}"></div></div>

<div class="col-md-6"><div class="field">
        <input style="padding: 10px" type="text"   placeholder="Желаемая дата" name="date" value="{{old('date')}}"/>
    </div></div>

<div  style="padding: 10px" class="col-md-6"><div class="field basic-example2">
        <select  class="basic-example"  name="time_period">
            <option value="" style="padding: 10px">Выберите время</option>

            <option @if(old('time_period') === '9:00am to 12:00pm') selected @endif value="9:00am to 12:00pm">9:00 - 12:00</option>
            <option @if(old('time_period') === '12:00pm to 3:00pm') selected @endif value="12:00pm to 3:00pm">12:00 - 3:00</option>
            <option @if(old('time_period') === '3:00pm to 6:00pm') selected @endif value="3:00pm to 6:00pm">3:00 - 6:00</option>
            <option @if(old('time_period') === '6:00pm to 9:00pm') selected @endif value="6:00pm to 9:00pm">6:00 - 9:00</option>
            <option @if(old('time_period') === '9:00pm to 12:00am') selected @endif value="9:00pm to 12:00am">9:00 - 12:00</option>
        </select>
    </div></div>
<div style="padding: 10px" class="col-md-6"><div class="field">
        <select class="basic-example" name="persons_count">
            <option value="">Колличество персон</option>
            <option @if(old('persons_count') === '1') selected @endif value="1">1</option>
            <option @if(old('persons_count') === '2') selected @endif value="2">2</option>
            <option @if(old('persons_count') === '3') selected @endif value="3">3</option>
            <option @if(old('persons_count') === '4') selected @endif value="4">4</option>
            <option @if(old('persons_count') === '5') selected @endif value="5">5+</option>
        </select>
    </div></div>
<div class="col-md-6"><div class="field"><input style="padding: 10px" name="email" type="text" placeholder="Введите email" value="{{old('email')}}"></div></div>

 <div class="col-md-6">
     <div class = "field">
         <input style="padding: 10px" name="phone" type="text" placeholder="Введите телефон" value="{{old('phone')}}"></div>
 </div>


<input style="padding: 10px" type="submit" value="Забронировать">
</form>

</div>

