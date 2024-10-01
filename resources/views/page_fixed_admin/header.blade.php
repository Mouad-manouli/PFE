<div class="logo_nav">
    <img src="{{asset('storage/logo1.png')}}" alt="logo" class="logo" />
    <nav>
        <menu>
            <a href="/list_company" class="{{ request()->is('list_company') ? 'active' : '' }}">Company list</a>
            <a href="/list_employee" class="{{ request()->is('list_employee') ? 'active' : '' }}">Employee list</a>
        </menu>
        <menu>
            <a href="/login" class="logout"> Logout</a>  
        </menu>
    </nav>
</div>