<header id='top-bar' class='navbar-fixed-top animated-header'>
    <div class='container'>
        <div class='navbar-header'>
            {{-- responsive nav button --}}
            <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
            <span class='sr-only'>Toggle navigation</span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
            </button>
            {{-- /responsive nav button --}}
            
            {{-- logo --}}
            <div class='navbar-brand'>
                <a href='{{ env('APP_URL') }}' >
                    <img src='/images/carlosamores.png' alt='Carlos Salvador Amores Martínez'>
                </a>
            </div>
            {{-- /logo --}}
        </div>
        {{-- main menu --}}
        <nav class='collapse navbar-collapse navbar-right' role='navigation'>
            <div class='main-menu'>
                <ul class='nav navbar-nav navbar-right'>
                    <li><a href='{{ env('APP_URL') }}' >Home</a></li>
                    <li><a href='{{ env('APP_URL') }}/about'>About</a></li>
                    <li><a href='{{ env('APP_URL') }}/contact' >Contacto</a></li>

                    {{-- 
                    <li><a href='/about/'>About</a></li>
                    <li><a href='/conocimientos/'>Conocimientos</a></li>
                    <li><a href='/educacion/'>Educación</a></li>
                    <li><a href='/experiencia/'>Experiencia</a></li>
                    <li><a href='/contact/'>Contact</a></li>
                    --}}
                </ul>
            </div>
        </nav>
        {{-- /main nav --}}
    </div>
</header>