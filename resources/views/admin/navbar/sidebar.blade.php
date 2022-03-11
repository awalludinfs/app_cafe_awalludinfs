<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
          <li class="nav-item">
                <a class="nav-link text-light {{Request::is('dashbaord') ? 'active' :''}}" aria-current="page" href="/adminmenu">
                 Menu   
                </a>
          </li>
          <li class="nav-item">
                <a  class="nav-link text-light {{Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/admintempatduduk">

                Tempat Duduk
            </a>   
          {{-- <li class="nav-item">
                <a  class="nav-link text-light {{Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/adminpesanan">  
                Pesanan
            </a>   --}}
            <li class="nav-item">
                  <a  class="nav-link text-light {{Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/admindatapegawai">     
               Data Pegawai
              </a>  
            </li>
            <li class="nav-item">
                  <a  class="nav-link text-light {{Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/adminuser ">     
                      Data Users      
              </a>  
            </li>
          <li class="nav-item">
                <a  class="nav-link text-light {{Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/adminlaporantransaksi">     
               Laporan  Transaksi
            </a>  
          </li>
      </ul>  
    </div>
</nav>
