<header>
    <div class="container">
        <nav class="navbar d-flex align-items-center justify-content-between">
            <a class="navbar_logo" href="{{route('home.page')}}">
                <img src="{{asset('img/logo.png')}}" alt="Logo">
            </a>
            <ul class="nav_links align-items-center gap-5 d-none d-lg-flex">
                <li>
                    <a class="nav_link" href="{{route('home.page')}}">Home</a>
                </li>
                <li>
                    <a class="nav_link" href="{{route('all.post')}}">Posts</a>
                </li>
                <li>
                    <a class="nav_link" href="{{route('about.page')}}">About</a>
                </li>
                <li>
                    <a class="nav_link" href="{{route('contact.page')}}">Contact</a>
                </li>
            </ul>
            <div class="d-flex align-items-center gap-4">
                <div class="nav_search d-none d-md-flex align-items-center">
                    <input type="text" placeholder="Search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <div class="nav_btns gap-2 d-none d-lg-flex">
                    <a href="#">
                        <img src="{{asset('img/post/author/author-1.jpg')}}" alt="Image">
                    </a>
                    <ul class="profile-popup">
                        <li>
                            <a href="{{route('user.profile')}}">{{auth()->user()->name}}</a>
                        </li>
                        <li>
                            <a href="#">Logout</a>
                        </li>
                    </ul>
                </div>
                <button class="hamburger d-lg-none">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
            {{-- Mobile Menu --}}
            <div class="mobile-menu d-flex flex-column gap-4">
                <button class="mobile-menu-close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <ul class="mobile_nav">
                    <li>
                        <a href="{{route('home.page')}}">Home</a>
                    </li>
                    <li>
                        <a href="#">Posts</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
                <div class="d-flex flex-column gap-3">
                    <div class="nav_btns gap-2 d-flex">
                        <a href="#">
                            <img src="{{asset('img/post/author/author-1.jpg')}}" alt="Image">
                        </a>
                    </div>
                    <div class="nav_search d-flex align-items-center">
                        <input type="text" placeholder="Search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>