{{-- Se è loggato e admin --}}
@guest
    <h5>sono guest</h5>
    <a href="{{ route('login') }}">Login</a>
    <a href="{{ route('register') }}">Register</a>
@endguest
    
@auth
    <h2>Sono loggato e ho ruolo {{ $current_user->role_id }}, Nome ruolo: {{ $current_user->role->role_name }}</h2>

    {{-- Logout Button --}}
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>

    {{-- Se hai ruolo 1 vedi il bottone "Admin Dashboard" --}}
    @if ($current_user->role_id == 1)
        <a href="{{ route('admin.home') }}" target="_blank" rel="noopener noreferrer">Admin Dashboard</a>
    @endif
@endauth