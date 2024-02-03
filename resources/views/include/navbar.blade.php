<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{url("/")}}">Laravel 10.X</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{url("/")}}">Home</a></li>
            <li><a href="{{url("/about")}}">About</a></li>
            <li><a href="{{url("/services")}}">Services</a></li>
            <ul class="nav navbar-nav navbar-right">
            <li><a href="{{url("/add")}}">New product</a></li>
            </ul>
        </ul>
    </div>
</nav>
