<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="@auth /user @else / @endauth">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

     @auth
       <li class="nav-item active">
        <a class="nav-link" href="/user/post/create">Create your post <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
              Logout
          </a>    
          <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
      </li>
      
     @else 
      <li class="nav-item active">
        <a class="nav-link" href="/login">Login <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/register">Register</a>
      </li>
      @endauth
    </ul>
      
   
    
  </div>
</nav>