@include('header')
<form>
<input type="text" name="username" value="">
<input type="text" name="password" value="">
<a href="{{ url('/register') }}">register?</a>
<input type="submit">
</form>

@include('footer')
