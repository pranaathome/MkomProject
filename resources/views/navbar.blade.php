<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed"
                data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1"
                aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/') }}">MkomProjectApp</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        <!-- Navbar Link -->
        <ul class="nav navbar-nav">

            {{-- Profil --}}
            @if (Auth::check())
                @if (!empty($halaman) && $halaman == 'profile')
                    <li class="active">
                        <a href="{{ route('profile.index') }}">Profil<span class="sr-only">(current)</span></a>
                    </li>
                @else
                    <li>
                        <a href="{{ route('profile.index') }}">Profil</a>
                    </li>
                @endif
            @endif

            {{-- Mahasiswa --}}
            @if (Auth::check() && Auth::user()->level == 'mahasiswa')
                @if (!empty($halaman) && $halaman == 'user')
                    <li class="active">
                        <a href="{{ url('user') }}">Surat Online<span class="sr-only">(current)</span></a>
                    </li>
                @else
                    <li>
                        <a href="{{ url('user') }}">Surat Online</a>
                    </li>
                @endif
            @endif


            {{-- Dosen --}}
            @if (Auth::check() && Auth::user()->level == 'admin')
                @if (!empty($halaman) && $halaman == 'ketua')
                    <li class="active">
                        <a href="{{ route('ketua.index') }}">Dosen<span class="sr-only">(current)</span></a>
                    </li>
                @else
                    <li>
                        <a href="{{ route('ketua.index') }}">Dosen</a>
                    </li>
                @endif
            @endif

            {{-- Pengesah --}}
            @if (Auth::check() && Auth::user()->level == 'admin')
                @if (!empty($halaman) && $halaman == 'ketua')
                    <li class="active">
                        <a href="{{ route('pengesah.index') }}">Pengesah<span class="sr-only">(current)</span></a>
                    </li>
                @else
                    <li>
                        <a href="{{ route('pengesah.index') }}">Pengesah</a>
                    </li>
                @endif
            @endif


            {{-- Tempat --}}
            @if (Auth::check() && Auth::user()->level == 'admin')
                @if (!empty($halaman) && $halaman == 'ketua')
                    <li class="active">
                        <a href="#">Tempat<span class="sr-only">(current)</span></a>
                    </li>
                @else
                    <li>
                        <a href="#">Tempat</a>
                    </li>
                @endif
            @endif

        </ul> <!-- / Navbar Link -->


        <!-- Link Login / Logout -->
        <ul class="nav navbar-nav navbar-right">
            @if (Auth::check())
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->username }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif
        </ul><!-- /.logout link -->


        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    </nav>



