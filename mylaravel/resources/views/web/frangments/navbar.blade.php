

<div class="topnav" id="myTopnav">
    <a href="#home" class="active">teachmefood</a>
    <a href="blog.html">News</a>
    <a href="contact.html">Contact</a>
    <a href="#about">About</a>
    <a href="{{ route('register') }}">Register</a>
    <a href="{{ route('login') }}">Login</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>

    <!-- <div class="join-us">
                <button class="btn-join-us ">Publish Now !</button>
            </div> -->
</div>

<div class="navbar-2">
    <div class="row">

        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
            <div id="myOverlay" class="overlay">
                <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                <div class="overlay-content">
                    <form action="/action_page.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>

            <i class="fa fa-search" id="fa-search" onclick="openSearch()"></i>
        </div>

        <hr>

        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
            <div class="news-letter">
                <h1>NewsLetter</h1>
                <input name="email" type="text" placeholder="email">
                <button id="subscribe">subscribe</button>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
            <div class="category">
                <h4>Search by category</h4>
                <select>
                    <option value="">rice</option>
                    <option value="">beans</option>
                    <option value="">swallow</option>
                    <option value="">shawama</option>
                    <option value="">snacks</option>
                </select>
            </div>
        </div>
    </div>
</div>