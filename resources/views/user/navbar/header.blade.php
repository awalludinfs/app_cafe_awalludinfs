<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/kasir"><img src="/img/logo.png" width="40px" height="40px">KASIR CAFE AWALLUDIN</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    {{-- <input class="form-control form-control-light w-90" type="text" placeholder="Search" aria-label="Search">s --}}
         <form action="{{route('logout')}}" method="post">
            @csrf
             <button  type="sumbit" class="bg-dark border-0 text-light"> Logout <span data-feather="log-out"></span> </button>
        </form>     
      </a>     
    </nav>
  </header>

