<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    @foreach (getMenus() as $menu)
                        <li class="nav-item">
                            {{-- <a class="nav-link active" href="dashboard.html">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a> --}}

                            <a class="nav-link" data-bs-toggle="collapse" href="#horizontal-menu-{!!str_replace(' ', '-', $menu->name)!!}" role="button" aria-expanded="false" aria-controls="horizontal-menu-{!!str_replace(' ', '-', $menu->name)!!}">
                                <i class="{{ $menu->icon }}"></i>
                                <span class="item-name">{{ $menu->name }}</span>
                                <i class="right-icon">
                                    <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </i>
                            </a>
                            <ul class="sub-nav collapse" id="horizontal-menu-{!!str_replace(' ', '-', $menu->name)!!}" data-bs-parent="#sidebar-menu">
                                @foreach ($menu->sub as $item)
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ url($item->url) }}">
                                            <i class="{{$item->icon}}"></i>
                                        {{-- <i class="sidenav-mini-icon"> H </i> --}}
                                        <span class="item-name"> {{ ($item->name) }} </span>
                                        </a>
                                        {{-- <ul class="sub-nav nav-sm flex-column">
                                            @foreach ($item->sub as $sub)
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ url($sub->url) }}">
                                                        <span class="item-name"> {{ $sub->name }} </span>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul> --}}
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</nav>
