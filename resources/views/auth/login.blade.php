<form action="{{route('login')}}" method="post">
    @csrf
    <label>
        <input type="text" name="phone">
    </label>
    <label>
        <input type="password" name="password">
    </label>
    <button type="submit">Send</button>
</form>
@if(session('fail'))
    {{session('fail')}}
@endif
