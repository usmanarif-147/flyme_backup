<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                        data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
                    <span>
                        <button type="button"
                                class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                @if(auth()->user())
                    @if(auth()->user()->role == 'admin')
                        <li>
                            <a href="{{route('admin.dashboard')}}">
                                <i class="metismenu-icon pe-7s-map"></i>
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.bookings')}}">
                                <i class="metismenu-icon pe-7s-news-paper"></i>
                                Bookings
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.payment.transactions')}}">
                                <i class="metismenu-icon pe-7s-lock"></i>
                                Payment Transactions
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.pilots')}}">
                                <i class="metismenu-icon pe-7s-lock"></i>
                                Pilots
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.updated.password')}}">
                                <i class="metismenu-icon pe-7s-lock"></i>
                                Update Password
                            </a>
                        </li>
                    @endif
                    @if(auth()->user()->role == 'pilot')
                        <li>
                            <a href="{{route('pilot.dashboard')}}">
                                <i class="metismenu-icon pe-7s-map"></i>
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="{{route('pilot.bookings')}}">
                                <i class="metismenu-icon pe-7s-news-paper"></i>
                                Bookings
                            </a>
                        </li>
                        <li>
                            <a href="{{route('pilot.update.password')}}">
                                <i class="metismenu-icon pe-7s-lock"></i>
                                Update Password
                            </a>
                        </li>
                    @endif
                @endif
            </ul>
        </div>
    </div>
</div>
