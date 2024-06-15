<!--begin::Aside Menu-->
                <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">

                    <!--begin::Menu Container-->
                    <div id="kt_aside_menu" class="aside-menu my-4 " data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
                        <!--begin::Menu Nav-->
                        <ul class="menu-nav ">
                            <li class="menu-item " aria-haspopup="true">
                                <a href="{{ env('APP_HOME_URL') }}{{ env('APP_ADMIN_SECTION') }}" class="menu-link "><span class="svg-icon menu-icon">
                                    <i class="fa fa-desktop" aria-hidden="true"></i>
                                    </span><span class="menu-text">Dashboard</span>
                                </a>
                            </li>
                            <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle"><span class="svg-icon menu-icon">
                                    <i class="fa fa-bandcamp" aria-hidden="true"></i>
                                    </span><span class="menu-text">Homepage</span><i class="menu-arrow"></i></a>
                                    <div class="menu-submenu "><i class="menu-arrow"></i>
                                        <ul class="menu-subnav">
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ env('APP_HOME_URL') }}{{ env('APP_ADMIN_SECTION') }}/homepage/sliders" class="menu-link "><span class="svg-icon menu-icon">
                                                    <i class="fab fa-delicious" aria-hidden="true"></i>
                                                    </span><span class="menu-text">Sliders</span>
                                                </a>
                                            </li>
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ env('APP_HOME_URL') }}{{ env('APP_ADMIN_SECTION') }}/homepage/sections" class="menu-link "><span class="svg-icon menu-icon">
                                                    <i class="fas fa-text-height" aria-hidden="true"></i>
                                                    </span><span class="menu-text">Sections</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                            </li>
                            <li class="menu-item " aria-haspopup="true">
                                <a href="{{ env('APP_HOME_URL') }}{{ env('APP_ADMIN_SECTION') }}/residences" class="menu-link "><span class="svg-icon menu-icon">
                                    <i class="fa fa-thumb-tack" aria-hidden="true"></i>
                                    </span><span class="menu-text">Residences</span>
                                </a>
                            </li>
                            <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle"><span class="svg-icon menu-icon">
                                    <i class="fa fa-bandcamp" aria-hidden="true"></i>
                                    </span><span class="menu-text">About SQ</span><i class="menu-arrow"></i></a>
                                    <div class="menu-submenu "><i class="menu-arrow"></i>
                                        <ul class="menu-subnav">
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ env('APP_HOME_URL') }}{{ env('APP_ADMIN_SECTION') }}/about-sq/sliders" class="menu-link "><span class="svg-icon menu-icon">
                                                    <i class="fab fa-delicious" aria-hidden="true"></i>
                                                    </span><span class="menu-text">Sliders</span>
                                                </a>
                                            </li>
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ env('APP_HOME_URL') }}{{ env('APP_ADMIN_SECTION') }}/about-sq/sections" class="menu-link "><span class="svg-icon menu-icon">
                                                    <i class="fas fa-text-height" aria-hidden="true"></i>
                                                    </span><span class="menu-text">Sections</span>
                                                </a>
                                            </li>
                                            <li class="menu-item " aria-haspopup="true">
                                                
                                                <a href="javascript:;" class="menu-link menu-toggle"><span class="svg-icon menu-icon">
                                                    <i class="fa fa-suitcase" aria-hidden="true"></i>
                                                    </span><span class="menu-text">SQ Office</span><i class="menu-arrow"></i>
                                                </a>
                                                <div class="menu-submenu "><i class="menu-arrow"></i>
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item " aria-haspopup="true">
                                                            <a href="{{ env('APP_HOME_URL') }}{{ env('APP_ADMIN_SECTION') }}/sq-office/sliders" class="menu-link ">
                                                                <span class="svg-icon menu-icon">
                                                                    <i class="fab fa-delicious" aria-hidden="true"></i>
                                                                </span>
                                                                <span class="menu-text">Sliders</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item " aria-haspopup="true">
                                                            <a href="{{ env('APP_HOME_URL') }}{{ env('APP_ADMIN_SECTION') }}/sq-office/sections" class="menu-link ">
                                                                <span class="svg-icon menu-icon">
                                                                    <i class="fas fa-text-height" aria-hidden="true"></i>
                                                                </span>
                                                                <span class="menu-text">Sections</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item " aria-haspopup="true">
                                                
                                                <a href="javascript:;" class="menu-link menu-toggle"><span class="svg-icon menu-icon">
                                                    <i class="fas fa-suitcase-rolling" aria-hidden="true"></i>
                                                    </span><span class="menu-text">SQ Res</span><i class="menu-arrow"></i>
                                                </a>
                                                <div class="menu-submenu "><i class="menu-arrow"></i>
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item " aria-haspopup="true">
                                                            <a href="{{ env('APP_HOME_URL') }}{{ env('APP_ADMIN_SECTION') }}/sq-res/sliders" class="menu-link ">
                                                                <span class="svg-icon menu-icon">
                                                                    <i class="fab fa-delicious" aria-hidden="true"></i>
                                                                </span>
                                                                <span class="menu-text">Sliders</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item " aria-haspopup="true">
                                                            <a href="{{ env('APP_HOME_URL') }}{{ env('APP_ADMIN_SECTION') }}/sq-res/sections" class="menu-link ">
                                                                <span class="svg-icon menu-icon">
                                                                    <i class="fas fa-text-height" aria-hidden="true"></i>
                                                                </span>
                                                                <span class="menu-text">Sections</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item " aria-haspopup="true">
                                                
                                                <a href="javascript:;" class="menu-link menu-toggle"><span class="svg-icon menu-icon">
                                                    <i class="fas fa-cubes" aria-hidden="true"></i>
                                                    </span><span class="menu-text">SQ Dome</span><i class="menu-arrow"></i>
                                                </a>
                                                <div class="menu-submenu "><i class="menu-arrow"></i>
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item " aria-haspopup="true">
                                                            <a href="{{ env('APP_HOME_URL') }}{{ env('APP_ADMIN_SECTION') }}/sq-dome/sliders" class="menu-link ">
                                                                <span class="svg-icon menu-icon">
                                                                    <i class="fab fa-delicious" aria-hidden="true"></i>
                                                                </span>
                                                                <span class="menu-text">Sliders</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item " aria-haspopup="true">
                                                            <a href="{{ env('APP_HOME_URL') }}{{ env('APP_ADMIN_SECTION') }}/sq-dome/sections" class="menu-link ">
                                                                <span class="svg-icon menu-icon">
                                                                    <i class="fas fa-text-height" aria-hidden="true"></i>
                                                                </span>
                                                                <span class="menu-text">Sections</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                            </li>
                            <li class="menu-item " aria-haspopup="true">
                                <a href="{{ env('APP_HOME_URL') }}{{ env('APP_ADMIN_SECTION') }}/metatags" class="menu-link "><span class="svg-icon menu-icon">
                                    <i class="fa fa-thumb-tack" aria-hidden="true"></i>
                                    </span><span class="menu-text">Meta Tags</span>
                                </a>
                            </li>
                            <li class="menu-item " aria-haspopup="true">
                                <a href="{{ env('APP_HOME_URL') }}{{ env('APP_ADMIN_SECTION') }}/landing-pages" class="menu-link "><span class="svg-icon menu-icon">
                                    <i class="fa fa-bookmark" aria-hidden="true"></i>
                                    </span><span class="menu-text">Landing Pages</span>
                                </a>
                            </li>
                            
                            <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle"><span class="svg-icon menu-icon">
                                    <i class="fa fa-bandcamp" aria-hidden="true"></i>
                                    </span><span class="menu-text">General</span><i class="menu-arrow"></i>
                                </a>
                                <div class="menu-submenu "><i class="menu-arrow"></i>
                                    <ul class="menu-subnav">
                                        <li class="menu-item " aria-haspopup="true">
                                            <a href="{{ env('APP_HOME_URL') }}{{ env('APP_ADMIN_SECTION') }}/general/heading-slider" class="menu-link "><span class="svg-icon menu-icon">
                                                <i class="fas fa-sliders-h" aria-hidden="true"></i>
                                                </span><span class="menu-text">Heading Sliders</span>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <!--end::Menu Nav-->
                    </div>
                    <!--end::Menu Container-->
                </div>
                <!--end::Aside Menu-->