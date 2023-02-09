<!-- Left Side Of Navbar -->
<ul class="navbar-nav me-auto">
    <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}"> {{__('Website')}} </a>
    </li>
    @foreach($menu as $item)
    <li class="nav-item ">
        <a href="{{route($item['route'])}}" class="nav-link @if($item['active']) active @endif">{{$item['title']}}</a>
    </li>
    @endforeach
</ul>

<!-- Right Side Of Navbar -->
<ul class="navbar-nav ms-auto">
    <!-- Authentication Links -->
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('admin.logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </li>
</ul>