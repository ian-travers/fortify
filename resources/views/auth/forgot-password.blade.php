<x-layouts.app>
    <h2>Forgot Password</h2>

    @if(session('status'))
        <div class="">
            {{ session('status') }}
        </div>
    @endif

    <form action="/forgot-password" method="post">
        @csrf

        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" autofocus>
        </div>
        @error('email')<p>{{ $message }}</p>@enderror

        <div>
            <button type="submit">Email Password Reset Link</button>
        </div>
    </form>
</x-layouts.app>


