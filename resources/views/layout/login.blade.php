<div class="list-group">
    <ul class="nav navbar-nav navbar-right">
        @if (Auth::guest())
        <li @if(Route::is('auth/login')) class="active" @endif><a href="{{ url('/auth/login') }}">Login</a></li>
        <li  @if(Route::is('admin.users.create')) class="active" @endif><a href="{{ url('/admin/users/create') }}">Registro</a></li>
        @else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
            </ul>
        </li>
        @endif
    </ul>                  
</div> 

