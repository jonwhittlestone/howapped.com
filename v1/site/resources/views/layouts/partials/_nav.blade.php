<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
        <li @if($routeName == 'home') class="active" @endif><a href="/">Home</a></li>
        <li @if($routeName == 'portfolio') class="active" @endif>
            <a href="{{URL::route('portfolio')}}">Portfolio</a>    
        </li>

        <!-- <li class="dropdown">
            <a href="/blog" class="dropdown-toggle" data-toggle="dropdown">Blog</a>    
        </li>
        <li class="dropdown">
            <a href="#contact" class="dropdown-toggle" data-toggle="dropdown">Contact</a>    
        </li> -->
        
    </ul>
    <!-- /.nav -->
</div>