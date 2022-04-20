<!-- Left Sidebar -->
<div id="sidebar" class="sidebar">
    <div class="menu-left-part">
        {{-- <div class="search-holder">
            <label>
                <input type="search" class="search-field" placeholder="Type here to search..." value="" name="s"
                    title="Search for:">
            </label>
        </div> --}}
        <div class="site-info-holder">
            <h1 class="site-title">Babatunde <br> Eric O.</h1>
            <p class="site-description">
                A self-motivated and creative individual with flair for web development
            </p>
        </div>
        <nav id="header-main-menu">
            <ul class="main-menu sm sm-clean">
                <li><a href="{{ route('index') }}" class="current">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('projects_scroll') }}">Projects' Scroll</a></li>
                <li><a href="{{ route('contact_us') }}">Contact</a></li>
                <li><a href="{{ route('gallery') }}">Gallery</a></li>
            </ul>
        </nav>
        <footer>
            <div class="footer-info">
                <a href="#">Subscribe to news letter <i class="fa fa-spinner fa-1x fa-pulse"></i></a><br>

                © 2022 BABATUNDE ERIC OLATUNJI.
            </div>
        </footer>
    </div>
    <div class="menu-right-part">
        <div class="logo-holder">
            <a href="{{ route('index') }}">
                <img src="{{ asset('images/bbt-logo.png') }}" alt="Suppablog WP">
            </a>
        </div>
        
        <div class="toggle-holder">
            <div id="toggle">
                <div class="menu-line"></div>
            </div>
        </div>
        <div class="social-holder">
            <div class="social-list">
                <a href="https://twitter.com/@ericOlatun"><i class="fa fa-twitter"></i></a>
                <a href="https://web.facebook.com/profile.php?id=100057364735731"><i class="fa fa-facebook-square"></i></a>
                <a href="https://github.com/tech-911"><i class="fa fa-git-square"></i></a>
                <a href="https://www.linkedin.com/in/babatunde-olatunji-474905200/"><i class="fa fa-linkedin-square"></i></a>

            </div>
        </div>
        <div class="fixed scroll-top" style="display: block;"><i class="fa fa-caret-square-o-up" aria-hidden="true"></i></div>
    </div>
    <div class="clear"></div>
</div>
