
<div id="reservation_table_form" >
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
    <form method="post" action="{{route('reserve-table')}} ">
        @csrf
        <div>
            <input style="padding: 10px" name="name" type="text" placeholder="Введите имя" value="{{old('name')}}">
        </div>

        <div>
            <input style="padding: 10px" type="text" placeholder="Желаемая дата" name="date" value="{{old('date')}}"/>
        </div>

        <div style="padding: 10px">
            <select  style="
display: block;
font-size: 16px;
font-family: sans-serif;
font-weight: 700;
color: #444;
line-height: 1.3;
padding: .6em 1.4em .5em .8em; width: 10%;height: 80px;
max-width: 100%;
box-sizing: border-box;
margin: 0;
border: 1px solid #aaa;
 box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
border-radius: .5em;
 background-color: #fff;
background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'), linear-gradient(to bottom, #ffffff 0%,#e5e5e5 100%);
background-repeat: no-repeat, repeat;
background-position: right .7em top 50%, 0 0;
background-size: .65em auto, 100%;
       }" name="time_period">
                <option value="" style="padding: 10px">Выберите время</option>

                <option @if(old('time_period') === '9:00am to 12:00pm') selected @endif value="9:00am to 12:00pm">9:00 -
                    12:00
                </option>
                <option @if(old('time_period') === '12:00pm to 3:00pm') selected @endif value="12:00pm to 3:00pm">12:00
                    - 3:00
                </option>
                <option @if(old('time_period') === '3:00pm to 6:00pm') selected @endif value="3:00pm to 6:00pm">3:00 -
                    6:00
                </option>
                <option @if(old('time_period') === '6:00pm to 9:00pm') selected @endif value="6:00pm to 9:00pm">6:00 -
                    9:00
                </option>
                <option @if(old('time_period') === '9:00pm to 12:00am') selected @endif value="9:00pm to 12:00am">9:00 -
                    12:00
                </option>
            </select>
        </div>
        <div style="padding: 10px">
            <select
                style="
display: block;
font-size: 16px;
font-family: sans-serif;
font-weight: 700;
color: #444;
line-height: 1.3;
padding: .6em 1.4em .5em .8em; width: 10%;height: 80px;
max-width: 100%;
box-sizing: border-box;
margin: 0;
border: 1px solid #aaa;
 box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
border-radius: .5em;
 background-color: #fff;
background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'), linear-gradient(to bottom, #ffffff 0%,#e5e5e5 100%);
background-repeat: no-repeat, repeat;
background-position: right .7em top 50%, 0 0;
background-size: .65em auto, 100%;
       }" name="persons_count">
                <option value="">Колличество персон</option>
                <option @if(old('persons_count') === '1') selected @endif value="1">1</option>
                <option @if(old('persons_count') === '2') selected @endif value="2">2</option>
                <option @if(old('persons_count') === '3') selected @endif value="3">3</option>
                <option @if(old('persons_count') === '4') selected @endif value="4">4</option>
                <option @if(old('persons_count') === '5') selected @endif value="5">5+</option>
            </select>
        </div>
        <div><input style="padding: 10px" name="email" type="text" placeholder="Введите email" value="{{old('email')}}">
        </div>

        <div>

            <input style="padding: 10px" name="phone" type="text" placeholder="Введите телефон"
                   value="{{old('phone')}}"></div>
        <input style="
display: block;
font-size: 16px;
font-family: sans-serif;
font-weight: 700;
color: #444;
line-height: 1.3;
padding: .6em 1.4em .5em .8em; width: 10%;height: 80px;
max-width: 100%;
box-sizing: border-box;
margin: 0;
border: 1px solid #aaa;
 box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
border-radius: .5em;
 background-color: #fff;

       }" type="submit" value="Забронировать">
    </form>

</div>

