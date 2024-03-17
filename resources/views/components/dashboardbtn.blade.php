{{-- Se è loggato e admin --}}
@guest
    <h5>sono guest</h5>
    <a href="/login">Login</a>
    <a href="/register">Register</a>
@endguest
    
@auth
    <h2>Sono loggato e ho ruolo 1</h2>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>

    {{-- Se hai ruolo 1 vedi il bottone "Admin Dashboard" --}}
    @if ($user == 1)
        <a href="{{ route('admin.home') }}" target="_blank" rel="noopener noreferrer">Admin Dashboard</a>
    @endif
@endauth