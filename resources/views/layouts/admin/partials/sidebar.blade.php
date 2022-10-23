<header class="main-nav">
    <div class="card-header"><h5>Hoşgeldin {{auth()->user()->name ?? 'Misafir'}}</h5></div>
    <nav>
        
        <div class="main-navbar">
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">



                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                                       
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="{{route('welcome')}}" target="_blank"><i data-feather="home"></i><span>Ana sayfa   </span></a>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title" href="{{route('sign-up')}}" target="_blank"><i data-feather="home"></i><span>Register</span></a>
                    </li>
                    
                    
                </ul>
            </div>
        </div>
    </nav>
</header>