<div class="vertical-menu">

<div data-simplebar class="h-100">

    <!-- User details -->
    

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title">Menu</li>

            <li>
                <a href="{{ route('dashboard')}}" class="waves-effect">
                    <i class="ri-dashboard-line"></i>
                    <span>KAEIBO ELECTRICAL MANAGEMENT SYSTEM</span>
                </a>
            </li>



            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-mail-send-line"></i>
                    <span>Home Setup</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('home.slide')}}">Home Tabs</a></li>
                
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-mail-send-line"></i>
                    <span>About Page Setup</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('about.page')}}">About Page</a></li>
                                    
                </ul>
            </li>

            <li>
             <a href="javascript: void(0);" class="has-arrow waves-effect">
                   <i class="ri-mail-send-line"></i>
                 <span>Home Scroll Setup</span>
                  </a>
              <ul class="sub-menu" aria-expanded="false">
               <li><a href="{{ route('all.portfolio') }}">All Scroll</a></li>
              <li><a href="{{ route('add.portfolio') }} ">Add Scroll</a></li>

               </ul>
              </li>


            <li class="menu-title">Pages</li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-account-circle-line"></i>
                    <span>Authentication</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('admin.logout') }}">Logout</a></li>
                    <li><a href="{{ route('admin.register') }}">Register</a></li>
                    <li><a href="{{ route('admin.recover') }}">Recover Password</a></li>
                   <!-- <li><a href="auth-lock-screen.html">Lock Screen</a></li> -->
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-profile-line"></i>
                    <span>Utility</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="pages-starter.html">Starter Page</a></li>
                    <li><a href="pages-timeline.html">Timeline</a></li>
                    <li><a href="pages-directory.html">Directory</a></li>
                    <li><a href="pages-invoice.html">Invoice</a></li>
                    <li><a href="pages-404.html">Error 404</a></li>
                    <li><a href="pages-500.html">Error 500</a></li>
                </ul>
            </li>

          




        </ul>
    </div>
    <!-- Sidebar -->
</div>
</div>