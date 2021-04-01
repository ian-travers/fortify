<x-layouts.app>
    <h2>Register</h2>

    <form action="/register" method="post">
        @csrf

        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" autofocus>
        </div>
        @error('name')<p>{{ $message }}</p>@enderror

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
            <label for="password_confirmation">Repeat  Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
        </div>

        <div>
            <button type="submit">Register</button>
        </div>
    </form>
</x-layouts.app>
