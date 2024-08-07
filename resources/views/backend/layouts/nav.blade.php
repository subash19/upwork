@section('nav')

<div class="nav">
    <div class="nav-top">
        <img src="public_html/Assets/images/faces/1a.png">
        <h4>Alex</h4>
        <p>alex@gmail.com</p>
    </div>

    <div class="navlinks">
        <div class="search-box">
            <form>
                <input type="text" class="search" placeholder="Search">
            </form>
        </div>
        <div class="menu">
            <ul>
                <li><a href="_main_layout.php?page=dashboard"><i class="glyphicon glyphicon-cloud"> </i> Dashboard</a></li>

                <li class="drop-down"><a href=""><i class="glyphicon glyphicon-user"> </i>  Users</a>
                    <ul>
                        <li><a href="_main_layout.php?page=add-user"><i class="fa fa-plus"></i> Add User</a></li>
                        <li><a href="_main_layout.php?page=users"><i class="fa fa-user"></i> Users</a></li>
                    </ul>
                </li>

                <li><a href=""><i class="glyphicon glyphicon-ice-lolly-tasted"> </i>  Slider</a></li>

                <li class="drop-down"><a href=""><i class="glyphicon glyphicon-new-window"> </i>  News</a>
                    <ul>
                        <li><a href="_main_layout.php?page=add-news"><i class="fa fa-plus"></i> Add News</a></li>
                        <li><a href="_main_layout.php?page=add-category"><i class="fa fa-plus"></i> Add News Category</a></li>
                    </ul>
                </li>
                <li><a href=""><i class="glyphicon glyphicon-globe"> </i>  Visit Site</a></li>
                <li><a href=""><i class="glyphicon glyphicon-log-out"> </i>  Log Out</a></li>
            </ul>
        </div>
    </div>

@endsection('nav')