<form action="{{ route('common.contact')}}" method="post">
    @csrf
    {{-- 'old' prints the last value for the following field in case some information is missing on validation --}}
    <input name="name" type="text" placeholder="Name" class="black-border" value="{{ old('name')}}">
    @if ($errors->has('name'))
        <span class="warning">{{$errors->first('name')}}</span>
    @else
    <br>
    @endif
    <input name="phone" type="text" placeholder="Phone" class="black-border" value="{{ old('phone')}}">
    @if ($errors->has('phone'))
    <span class="warning">{{$errors->first('phone')}}</span>
    @else
        <br>
    @endif
    <input name="email" type="text" placeholder="Email" class="black-border" value="{{ old('email')}}">
    @if ($errors->has('email'))
    <span class="warning">{{$errors->first('email')}}</span>
    @else
        <br>
    @endif

    <select name="contact_reason_id" class="black-border">
        <option value="">Reason</option>
        {{-- creating <option> for <select> with DB data --}}
        @foreach ($contact_reason as $key => $value)
        <option value="{{$key}}"{{ old('contact_reason_id') == $key ? 'selected' : ''}}>{{$value}}</option>

        @endforeach

    </select>
    @if ($errors->has('contact_reason_id'))
        <span class="warning">{{$errors->first('contact_reason_id')}}</span>
    @endif
    <br>
    <textarea name="message" class="black-border" placeholder="Type your text here">{{ old('message')}}</textarea>
    @if ($errors->has('message'))
    <span class="warning">{{$errors->first('message')}}</span>
    @endif
    <br>
    <button type="submit" class="black-border">SEND</button>
</form>



