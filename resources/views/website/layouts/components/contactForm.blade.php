<form action="{{ route('common.contact')}}" method="post">
    @csrf
    <input name="name" type="text" placeholder="Name" class="black-border">
    <br>
    <input name="phone" type="text" placeholder="Phone" class="black-border">
    <br>
    <input name="email" type="text" placeholder="E-mail" class="black-border">
    <br>
    <select name="reasonContact" class="black-border">
        <option value="">Main reason of contact</option>
        <option value="1">Doubt</option>
        <option value="2">Complement</option>
        <option value="3">Complaint</option>
    </select>
    <br>
    <textarea name="message" class="black-border" placeholder="Type your text here"></textarea>
    <br>
    <button type="submit" class="black-border">SEND</button>
</form>
