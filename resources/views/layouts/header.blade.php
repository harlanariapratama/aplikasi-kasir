<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        @php
            $words = explode(' ', $setting->nama_perusahaan);
            $word  = '';
            foreach ($words as $w) {
                $word .= $w[0];
            }
        @endphp
        <span class="logo-mini">{{ $word }}</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>{{ $setting->nama_perusahaan }}</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar">

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="user-footer">

                        <a href="#" class="dropdown-toggle bg-red" data-toggle="dropdown"
                            onclick="$('#logout-form').submit()">Keluar</a>

                </li>
            </li>
        </ul>

        </div>
            <ul class="nav navbar-nav">
                    <li class="dropdown  user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="hidden-xs">{{ auth()->user()->name }}</span>
                    </a>
                </li>
            </ul>

    </nav>
</header>


<form action="{{ route('logout') }}" method="post" id="logout-form" style="display: none;">
    @csrf
</form>
