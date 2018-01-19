<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    
 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbarmenu">
            <li class="navitem1">
                <a class="nav-link" href="/boards">Board List</a>
            </li>
            <li class="navitem1">
                <a class="nav-link" href="/comments">All Song Comments</a>
            </li>
            <li class="navitem1">
                <a class="nav-link" href="/reviews">All Game Comments</a>
            </li>
            @if( auth()->check() )
                <li class="navitem1">
                    <a href="#">Hi, {{ auth()->user()->name }}</a>
                </li>
            
                <li class="navitem1">
                    <a class="nav-link" href="/logout">Log Out</a>
                </li>
            @else
                <li class="navitem1">
                    <a class="nav-link" href="/login">Log In</a>
                </li>
                <li class="navitem1">
                    <a class="nav-link" href="/register">Register</a>
                </li>
            @endif
            
        </ul>
    </div>
</nav>


