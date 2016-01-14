<div class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://www.panamericano.mx">Pan Americano</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li @if(Route::is('home')) class="active" @endif><a href="{{ route('home') }}">Inicio</a>
                    </li>
                </ul>
                 @include('layout/login')
            </div>
            <!-- /.nav-collapse -->
        </div>
        <!-- /.container -->
    </div>