<x-layouts.app>

    <form action="{{ route('logout') }}" method="post">
        @csrf
        <a href="#" onclick="event.preventDefault(); this.closest('form').submit();">
            Logout
        </a>
    </form>

     <div class="">This is the logged in view</div>
</x-layouts.app>
