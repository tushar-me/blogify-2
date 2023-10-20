<div class="top_bar">
    <ul class="top_bar_items">
        <li>
            <div class="top_bar_items-search">
                <input type="search" name="search" id="search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </li>
        <li>
            <a href="#" class="top_bar_items-notification">
                <i class="fa-regular fa-bell"></i>
            </a>
        </li>
        <li>
            <div class="top_bar_items-profile">
                <img src="{{asset('img/post/author/author.png')}}">
            </div>
        </li>
    </ul>
    <div class="color-popup">
        <button class="color-popup-toggle">
            <i class="fa-solid fa-gear"></i>
        </button>
        <div class="color-popup-items">
            <p>Customize Sidebar Color</p>
            <div class="colors">
                <div class="color purple" data-value="#890ef2"></div>
                <div class="color pink" data-value="#ff80ed"></div>
                <div class="color green" data-value="#00939d"></div>
                <div class="color red" data-value="#bc131f"></div>
                <div class="color blue" data-value="#00529c"></div>
                <div class="color yellow" data-value="#f5ab0c"></div>
                {{-- <div class="color picker" onclick="pickColor();">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" preserveAspectRatio="xMinYMin">
                <path fill="#444444" d="M30.828 1.172c-1.562-1.562-4.095-1.562-5.657 0l-5.379 5.379-3.793-3.793-4.243 4.243 3.326 3.326-14.754 14.754c-0.252 0.252-0.358 0.592-0.322 0.921h-0.008v5c0 0.552 0.448 1 1 1h5c0 0 0.083 0 0.125 0 0.288 0 0.576-0.11 0.795-0.329l14.754-14.754 3.326 3.326 4.243-4.243-3.793-3.793 5.379-5.379c1.562-1.562 1.562-4.095 0-5.657zM5.409 30h-3.409v-3.409l14.674-14.674 3.409 3.409-14.674 14.674z"></path>
                </svg>
                </div> --}}
            </div>
            {{-- <input id="colorpicker" type="color" /> --}}
        </div>
    </div>
</div>