<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
          <li class="nav-item">
                <a class="nav-link text-light {{Request::is('dashbaord') ? 'active' :''}}" aria-current="page" href="/menu">
                  Menu   
                </a>
          </li>
          <li class="nav-item">
                <a  class="nav-link text-light {{Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/tempatduduk">          
                  Tempat Duduk
            </a>   
          <li class="nav-item">
                <a  class="nav-link text-light {{Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/pesanan">  
            Pesanan
            </a>  
          <li class="nav-item">
                <a  class="nav-link text-light {{Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/transaksi">     
            Transaksi
            </a>  
          </li>
      </ul>  
    </div>
</nav>
