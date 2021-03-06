<header class="MainHeader u-flex u-justifyBtw">

    <div class="MainHeader-logo">
        <img src="https://www.boolean.careers/images/common/logo.png" alt="boolean">
    </div>

    <nav class="MainHeader-nav u-flex u-alignCtr">
        <ul class="u-flex">
            <li>
                <a href="{{ route('static-page.home') }}"
                    class="@if (Request::is('/')) isActive @endif">
                    home
                </a>
            </li>
            <li><a href="#">corso</a></li>
            <li>
                <a href="{{ route('students.index') }}" 
                    class="@if (Request::is('students')) isActive @endif">
                    dopo il corso
                </a>
            </li>
            <li><a href="#">lezione gratuita</a></li>
            <li><a href="#">assumi i nostri studenti</a></li>
            <li><a href="#" class="btn ml-10">candidati ora</a></li>
        </ul>
    </nav>
    
</header>