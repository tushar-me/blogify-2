<div class="side_bar">
    <div class="side_bar_logo">
        <img src="{{asset('img/logo.png')}}" alt="logo">
    </div>
    <ul class="side_bar_links">
        <li>
            <a href="{{route('dashboard.home')}}" class="side_bar_link">
                <i class="fa-solid fa-table-cells"></i>
                <p class="side_bar_link_text">Dashboard</p>
            </a>
        </li>
        <li>
            <a role="button" class="side_bar_link dropdown">
                <i class="fa-solid fa-layer-group"></i>
                <p class="side_bar_link_text">All Post</p>
            </a>
            <ul class="ps-5 dropdown-items">
                <li>
                    <a href="{{route('dashboard.pending.post')}}" class="side_bar_link">
                        <i class="fa-solid fa-clock-rotate-left"></i>
                        <p class="side_bar_link_text">Pending</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('dashboard.published.post')}}" class="side_bar_link">
                        <i class="fa-solid fa-arrow-up-right-dots"></i>
                        <p class="side_bar_link_text">Published</p>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{route('dashboard.add.post')}}" class="side_bar_link">
                <i class="fa-solid fa-pencil"></i>
                <p class="side_bar_link_text">Write a Post</p>
            </a>
        </li>
        <li>
            <a href="#" class="side_bar_link">
                <i class="fa-solid fa-cube"></i>
                <p class="side_bar_link_text">Resources</p>
            </a>
        </li>
        <li>
            <a href="#" class="side_bar_link">
                <i class="fa-regular fa-user"></i>
                <p class="side_bar_link_text">Profile</p>
            </a>
        </li>
        <li>
            <a href="#" class="side_bar_link">
                <i class="fa-solid fa-gear"></i>
                <p class="side_bar_link_text">Settings</p>
            </a>
        </li>
    </ul>
</div>