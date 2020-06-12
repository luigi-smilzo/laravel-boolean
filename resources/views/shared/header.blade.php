<header class="MainHeader u-flex u-justifyBtw">
    <div class="MainHeader-logo">
        <img src="https://www.boolean.careers/images/common/logo.png" alt="boolean">
    </div>
    <nav class="MainHeader-nav u-flex u-alignCtr">
        <ul class="u-flex">
            <li class="{{ Request::is('/') ? 'isActive' : '' }}"><a href="{{ route('static-page.home') }}">home</a></li>
            <li><a href="#">corso</a></li>
            <li class="{{ Request::is('students') ? 'isActive' : '' }}"><a href="{{ route('static-page.home') }}"><a href="{{ route('students.index') }}">dopo il corso</a></li>
            <li><a href="#">lezione gratuita</a></li>
            <li><a href="#">assumi i nostri studenti</a></li>
            <li><a href="#">candidati ora</a></li>
        </ul>
    </nav>
</header>