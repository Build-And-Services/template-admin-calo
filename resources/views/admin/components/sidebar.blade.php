<div class="app-menu">

    <!-- Sidenav Brand Logo -->
    <a href="{{url('/admin/dashboard')}}" class="logo-box">
        <!-- Light Brand Logo -->
        <div class="logo-light">
            <img src="{{asset('assets-admin/images/logo-light.png')}}" class="logo-lg" alt="Dark logo">
            <img src="{{asset('assets-admin/images/logo-sm-light.png')}}" class="logo-sm" alt="Small logo">
        </div>

        <!-- Dark Brand Logo -->
        <div class="logo-dark">
            <img src="{{asset('assets-admin/images/logo-dark.png')}}" class="logo-lg" alt="Dark logo">
            <img src="{{asset('assets-admin/images/logo-sm.png')}}" class="logo-sm" alt="Small logo">
        </div>
    </a>



    <!--- Menu -->
    <div data-simplebar>
        <!-- User Box -->
        {{-- <div class="user-box relative text-center mt-5">
            <div>
                <button data-fc-type="dropdown" data-fc-placement="bottom" type="button" class="user-name text-[15px] font-medium mb-1.5">
                    <span class="uppercase">
                        {{\Auth::user()->name}}</button>
                    </span>
            </div>

            <p class="user-name text-sm mb-3">Admin Head</p>
        </div> --}}

        <ul class="menu" data-fc-type="accordion">
            <li class="menu-title">Dashboard</li>

            <li class="menu-item">
                <a href="{{url('/admin/dashboard')}}" class="{{ (request()->segment(2) == 'dashboard') ? 'active' : '' }} menu-link ">
                    <span class="menu-icon"><i class="mdi mdi-view-dashboard-outline"></i></span>
                    <span class="menu-text"> Dashboard </span>
                </a>
            </li>

            <li class="menu-title">Artist</li>

            <li class="menu-item">
                <a href="{{url('/admin/artist')}}" class="{{ (request()->segment(2) == 'artist') ? 'active' : '' }} menu-link">
                    <span class="menu-icon"><i class="mdi mdi-calendar-blank-outline"></i></span>
                    <span class="menu-text"> Artists </span>
                </a>
            </li>

            <li class="menu-title">Events</li>

            <li class="menu-item">
                <a href="{{url('/admin/event-category')}}" class="{{ (request()->segment(2) == 'event-category') ? 'active' : '' }} menu-link">
                    <span class="menu-icon"><i class="mdi mdi-dock-window"></i></span>
                    <span class="menu-text"> Events Category </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{url('/admin/event')}}" class="{{ (request()->segment(2) == 'event') ? 'active' : '' }} menu-link">
                    <span class="menu-icon"><i class="mdi mdi-dock-window"></i></span>
                    <span class="menu-text"> Events </span>
                </a>
            </li>

            <li class="menu-title">Tickets</li>

            <li class="menu-item">
                <a href="{{url('/admin/ticket-category')}}" class="{{ (request()->segment(2) == 'ticket-category') ? 'active' : '' }} menu-link">
                    <span class="menu-icon"><i class="mdi mdi-gift-outline"></i></span>
                    <span class="menu-text"> Tickets Category </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{url('/admin/ticket-benefit')}}" class="{{ (request()->segment(2) == 'ticket-benefit') ? 'active' : '' }} menu-link">
                    <span class="menu-icon"><i class="mdi mdi-gift-outline"></i></span>
                    <span class="menu-text"> Tickets Benefits </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{url('/admin/ticket')}}" class="{{ (request()->segment(2) == 'ticket') ? 'active' : '' }} menu-link">
                    <span class="menu-icon"><i class="mdi mdi-gift-outline"></i></span>
                    <span class="menu-text"> Tickets </span>
                </a>
            </li>

            <li class="menu-title">Orders</li>

            <li class="menu-item">
                <a href="{{url('/admin/order')}}" class="{{ (request()->segment(2) == 'order') ? 'active' : '' }} menu-link">
                    <span class="menu-icon"><i class="mdi mdi-gift-outline"></i></span>
                    <span class="menu-text"> Orders </span>
                </a>
            </li>

            <li class="menu-title">Payment</li>

            <li class="menu-item">
                <a href="{{url('/admin/payment')}}" class="{{ (request()->segment(2) == 'payment') ? 'active' : '' }} menu-link">
                    <span class="menu-icon"><i class="mdi mdi-gift-outline"></i></span>
                    <span class="menu-text"> Payment Methods </span>
                </a>
            </li>

        </ul>
    </div>
</div>
