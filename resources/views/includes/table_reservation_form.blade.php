<div class="booking-form">
    <p class="error" id="reserv_error" style="display:none;"></p>
    <p class="success" id="reserv_success_msg" style="display:none;">Спасибо! Мы свяэемся с вами как можно скорее...</p>
    <form  method="post" action="{{route('reserve-table')}}">
@csrf
<div class="col-md-6"><div class="field">
        <input name="name" type="text" placeholder="Имя" value="{{/*введенные в поле значения не теряются*/ old('name') }}" required></div></div>

<div class="col-md-6"><div class="field">
        <input type="text"  placeholder="Желаемая дата" name="date" value="{{old('date')}}" required/>
    </div></div>

<div class="col-md-6"><div class="field basic-example2">
        <select class="basic-example"  name="time_period">
            <option value="">Выберите время</option>

            <option @if(old('time_period') === '9:00am to 12:00pm') selected @endif value="9:00am to 12:00pm">9:00 - 12:00</option>
            <option @if(old('time_period') === '12:00pm to 3:00pm') selected @endif value="12:00pm to 3:00pm">12:00 - 3:00</option>
            <option @if(old('time_period') === '3:00pm to 6:00pm') selected @endif value="3:00pm to 6:00pm">3:00 - 6:00</option>
            <option @if(old('time_period') === '6:00pm to 9:00pm') selected @endif value="6:00pm to 9:00pm">6:00 - 9:00</option>
            <option @if(old('time_period') === '9:00pm to 12:00am') selected @endif value="9:00pm to 12:00am">9:00 - 12:00</option>
        </select>
    </div></div>
<div class="col-md-6"><div class="field">
        <select class="basic-example" name="persons_count">
            <option value="">Колличество персон</option>
            <option @if(old('persons_count') === '1') selected @endif value="1">1</option>
            <option @if(old('persons_count') === '2') selected @endif value="2">2</option>
            <option @if(old('persons_count') === '3') selected @endif value="3">3</option>
            <option @if(old('persons_count') === '4') selected @endif value="4">4</option>
            <option @if(old('persons_count') === '5') selected @endif value="5">5+</option>
        </select>
    </div></div>
<div class="col-md-6"><div class="field"><input name="email" type="text" placeholder="Email" value="{{old('email')}}" required ></div></div>

 <div class="col-md-6">
     <div class = "field">
         <input name="phone" type="text" placeholder="Телефон" value="{{old('phone')}}" required></div>
 </div>


<input type="submit" value="Забронировать">
</form>

</div>

