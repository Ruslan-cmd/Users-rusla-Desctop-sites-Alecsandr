<div class="booking-form">
    <p class="error" id="reserv_error" style="display:none;"></p>
    <p class="success" id="reserv_success_msg" style="display:none;">Thank You! We will contact you shortly.</p>
    <form  method="post" action="{{route('reserve-table')}}">
@csrf
<div class="col-md-6"><div class="field">
        <input name="name" type="text" value="{{ old('name') }}" required></div></div>

<div class="col-md-6"><div class="field">
        <input type="text"  placeholder="Желаемая дату" name="date" value="{{old('date')}}" required/>
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
        <select class="basic-example" name="reserv_persons" id="reserv_persons">
            <option value="">Persons</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5+</option>
        </select>
    </div></div>
<div class="col-md-6"><div class="field"><input name="reserv_email" id="reserv_email" type="text" value="Email Address" onblur="if (this.value == '') { this.value='Email Address'}" onfocus="if (this.value == 'Email Address') {this.value=''}" required></div></div>
<div class="col-md-6"><div class="field"><input name="reserv_phone" id="reserv_phone" type="text" value="Phone No" onblur="if(this.value == '') { this.value='Phone No'}" onfocus="if (this.value == 'Phone No') {this.value=''}" required ></div></div>

<input name=" " type="submit" value="Book a table" onClick="function validateReservation() {

    }
    validateReservation()">
</form>

</div>

