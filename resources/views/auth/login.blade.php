@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

@if ($errors->any())
    <p>{{ $errors->first('email') }}</p>
@endif

<h2>Login</h2>

<form method="POST" action="/login">
    @csrf
    <input name="email" type="email" placeholder="Email" required>
    <input name="password" type="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>

<p>Don't have an account? <a href="/register">Register</a></p>