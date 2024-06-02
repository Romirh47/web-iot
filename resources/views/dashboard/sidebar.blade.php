<style>
    /* CSS untuk menyembunyikan panah */
    .iq-arrow-right {
       display: none;
    }
</style>

<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
       <a href="index.html">
          <img src="images/logo.png" class="img-fluid" alt="">
          <span>IOT</span>
       </a>
       <div class="iq-menu-bt align-self-center">
          <div class="wrapper-menu">
             <div class="line-menu half start"></div>
             <div class="line-menu"></div>
             <div class="line-menu half end"></div>
          </div>
       </div>
    </div>
    <div id="sidebar-scrollbar">
       <nav class="iq-sidebar-menu">
          <ul id="iq-sidebar-toggle" class="iq-menu">
             <li class="iq-menu-title"><i class="ri-separator"></i><span>Main</span></li>
             <li class="{{ request()->url() == route('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class="iq-waves-effect active"><i class="ri-home-4-line"></i><span>Dashboard</span></a>
             </li>
             <li>
                <a href="#sensor" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pencil-ruler-line"></i><span>Sensor</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="sensor" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                   <li><a href="#">Temperature</a></li>
                   <li><a href="#">Humidity</a></li>
                   <li><a href="#">Soil Moisture</a></li>
                   <li><a href="#">Intensity</a></li>
                </ul>
             </li>
             <li>
                <a href="#aktuator" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pencil-ruler-line"></i><span>Aktuator</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="aktuator" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                   <li><a href="#">Pompa</a></li>
                   <li><a href="#">Lampu</a></li>
                </ul>
             </li>
             <li class="{{ request()->url() == route('user.index') ? 'active' : '' }}">
                <a href="{{ route('user.index') }}" class="iq-waves-effect active"><i class="ri-user-line"></i><span>User</span></a>
             </li>
          </ul>
       </nav>
       <div class="p-3"></div>
    </div>
</div>
