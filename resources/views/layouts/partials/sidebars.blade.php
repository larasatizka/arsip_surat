<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
               <!--  <img src="{{ asset('/template') }}/images/user.png" width="48" height="48" alt="User" /> -->
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></div>
                <div class="email"></div>
                {{--<div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                         <li role="separator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li> 
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ URL::to('logout') }}"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>--}}
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
               
                <li>
                    <a href="{{ URL::to('/surat') }}">
                        <i class="material-icons">star</i>
                        <span>Arsip</span>
                    </a>
                </li>
                <li>
                    <a href="{{ URL::to('/about') }}">
                        <i class="material-icons">info</i>
                        <span>About</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; {{ date('Y') }} <a href="javascript:void(0);">Arsip Surat</a>.
            </div>
            {{-- <div class="version">
                <b>Version: </b> 1.0.5
            </div> --}}
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>