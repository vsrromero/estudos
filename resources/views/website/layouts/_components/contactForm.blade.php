<form action="{{ route('common.contact')}}" method="post">
    @csrf
    <input name="name" type="text" placeholder="Name" class="black-border" value="{{ old('name')}}">
    <br>
    <input name="phone" type="text" placeholder="Phone" class="black-border" value="{{ old('phone')}}">
    <br>
    <input name="email" type="text" placeholder="E-mail" class="black-border" value="{{ old('email')}}">
    <br>
    <select name="contact_reason" class="black-border">
        <option value="">Main reason of contact</option>

        @foreach ($contact_reason as $key => $value)
        <option value="{{$key}}"{{ old('contact_reason') == $key ? 'selected' : ''}}>{{$value}}</option>

        @endforeach
    </select>
    <br>
    <textarea name="message" class="black-border" placeholder="Type your text here">{{ old('message')}}</textarea>
    <br>
    <button type="submit" class="black-border">SEND</button>

</form>
{{-- old prints the last value for the following field in case some information is missing on validation --}}

