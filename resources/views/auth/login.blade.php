<x-layouts.app>
    <h2>Login</h2>

    <form action="/login" method="post">
        @csrf

        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" >
        </div>
        @error('email')<p>{{ $message }}</p>@enderror

        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" >
        </div>
        @error('password')<p>{{ $message }}</p>@enderror

        <div>
            <input type="checkbox" id="remember" name="remember">
            <label for="remember">Remember Me</label>
        </div>

        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</x-layouts.app>

