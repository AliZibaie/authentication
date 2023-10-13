<form action="{{route('register')}}" method="post">
    @csrf
    <label>
        <input type="text" name="phone">
        @error('phone')
        {{$message}}
        @enderror
    </label>
    <label>
        <input type="password" name="password">
        @error('password')
        {{$message}}
        @enderror
    </label>
    <label>
        <input type="password" name="password_confirmation">
        @error("password_confirmation")
        {{$message}}
        @enderror
    </label>
    <button type="submit">register</button>
</form>
