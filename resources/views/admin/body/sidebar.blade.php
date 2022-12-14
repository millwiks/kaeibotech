<div class="vertical-menu">

<div data-simplebar class="h-100">

    <!-- User details -->
    

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">


            <li class="menu-title">ADD PROFILE</li>

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

            <li class="menu-title">Menu</li>

            <li>
                <a href="{{ route('dashboard')}}" class="waves-effect">
                    <i class="ri-dashboard-line"></i>
                    <span>KAEIBO WEBSITE SYSTEM</span>
                </a>
            </li>



            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-profile-line"></i>
                    <span>Home Setup</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('home.slide')}}">Home Tabs</a></li>
                
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-profile-line"></i>
                    <span>About Page Setup</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('about.page')}}">About Page</a></li>
                                    
                </ul>
            </li>

            <li>
             <a href="javascript: void(0);" class="has-arrow waves-effect">
                   <i class="ri-profile-line"></i>
                 <span>Home Scroll Setup</span>
                  </a>
              <ul class="sub-menu" aria-expanded="false">
               <li><a href="{{ route('all.portfolio') }}">All Scroll</a></li>
              <li><a href="{{ route('add.portfolio') }} ">Add Scroll</a></li>

               </ul>
              </li>


            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-mail-send-line"></i>
                    <span>Contact Message </span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('contact.message') }}">Contact Message</a></li>


                </ul>
            </li>


            <li>
                <a href="{{ route('dashboard')}}" class="waves-effect">
                    <i class="ri-dashboard-line"></i>
                    <span>KAEIBO INVENTORY MANAGEMENT SYSTEM</span>
                </a>
            </li>
            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="mdi mdi-account-clock"></i>
                    <span>Manage Suppliers</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('supplier.all') }}">All Supplier</a></li>
    
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="mdi mdi-account-circle"></i>
                    <span>Manage Customers</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('customer.all') }}">All Customers</a></li>
    
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-mail-send-line"></i>
                    <span>Manage Units</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('unit.all') }}">All Unit</a></li>
    
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-mail-send-line"></i>
                    <span>Manage Category</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('category.all') }}">All Category</a></li>
    
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-mail-send-line"></i>
                    <span>Manage Product</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('product.all') }}">All Product</a></li>
                   
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-mail-send-line"></i>
                    <span>Manage Purchase</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('purchase.all') }}">All Purchase</a></li>
                    <li><a href="{{ route('purchase.pending') }}">Approve Purchases</a></li>
    
                </ul>
            </li>

 

          




        </ul>
    </div>
    <!-- Sidebar -->
</div>
</div>