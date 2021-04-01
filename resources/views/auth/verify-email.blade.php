<x-layouts.app>
    <h2>Verify Email</h2>

    <p>Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we
        just emailed to you? If you didn\'t receive the email, we will gladly send you another.</p>

    @if (session('status') == 'verification-link-sent')
        <div>A new verification link has been sent to the email address you provided during registration.</div>
    @endif

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <div>
            <button type="submit">Resend Verification Email</button>
        </div>
    </form>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <div>
            <button type="submit">Logout</button>
        </div>
    </form>
</x-layouts.app>


