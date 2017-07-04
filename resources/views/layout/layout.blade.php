<!DOCTYPE html>
<html>
<head>
	<title>My contact list</title>
	@yield('head')
</head>
<body>
	<nav id="background-color" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu" aria-expanded="false">
                    <span class="sr-only ">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="background-color" class="navbar-brand" href="{{URL::route('start')}}">My contact list</a>
            </div>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                    <i class="icon-star">
                        
                    </i>
                    <a id="background-color" href="{{URL::route('add_contact')}}">Add</a>
                    </li>
                    <li>
                        <a id="background-color" href="{{URL::route('update_contact')}}">Update</a>
                    </li>
                    <li>
                        <a id="background-color" href="{{URL::route('delete_contact')}}">Delete</a>
                    </li>
                </ul>
            </div>
        </div>
</nav>
<h1>-</h1>
	@yield('contact')
</body>
</html>