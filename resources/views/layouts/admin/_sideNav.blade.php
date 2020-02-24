<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <i class="ti-shield menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-post" aria-expanded="false" aria-controls="ui-basic">
                <i class="ti-palette menu-icon"></i>
                <span class="menu-title">Posts</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-post">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('post.create')}}">Create New Post</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('post.index')}}">List Of Post</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
