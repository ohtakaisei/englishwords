<header class="mb-4">
    
<div class="alert alert-info text-center mb-0 rounded-0 alert-dismissible fade show">
                <a href="#">ブログもぜひ見てください！</a>
                <button class="close" data-dismiss="alert">
                    &times;
                </button>
            </div>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark"> 
        <a class="navbar-brand" href="/">English Word</a>
         
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item">{!! link_to_route('signup.get', 'Signup', [], ['class' => 'nav-link']) !!}</li>
                    <li class="nav-item"><a href="#" class="nav-link">Login</a></li>
                </ul>
        </div>
    </nav>
</header>