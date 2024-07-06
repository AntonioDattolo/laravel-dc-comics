<header class="container-fluid mb-4" style="box-shadow: 0px 0px 10px whitesmoke;  height: 75px;">
    <nav class="navbar navbar-expand-lg bg-trasparent h-100">
        <div class="container d-flex justify-content-between">
            <img class="navbar-brand col-1" src="{{URL::to('dc-logo.png')}}" style="height: 65px;width:60px">
            <div class="collapse navbar-collapse offset-2 col-9 justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="{{route("home")}}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="comic/create">ADD COMIC</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>