<x-layouts.app>
    <h2>Reset Password</h2>

    @if(session('status'))
        <div class="">
            {{ session('status') }}
        </div>
    @endif

    <form action="/reset-password" method="post">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email', $request->email) }}" autofocus>
        </div>
        @error('email')<p>{{ $message }}</p>@enderror

        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>

        <div>
            <label for="password_confirmation">Password Confirmation</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
        </div>
        @error('password')<p>{{ $message }}</p>@enderror

        <div>
            <button type="submit">Reset Password</button>
        </div>
    </form>
</x-layouts.app>


