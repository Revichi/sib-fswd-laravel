<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{route('dashboard.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            @if(Auth::user()->role->name == 'User')
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"></div>
                                Produk
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('produk.index')}}">Daftar Produk</a>
                                </nav>
                            </div>
                            @endif
                            @if(Auth::user()->role->name == 'Admin' || Auth::user()->role->name == 'Staff' )
                            <a class="nav-link" href="{{route('slider.index')}}">
                                <div class="sb-nav-link-icon"></div>
                                Slider
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"></div>
                                Produk
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('brands.index')}}">Brand</a>
                                    <a class="nav-link" href="{{route('category.index')}}">Kategori</a>
                                    <a class="nav-link" href="{{route('produk.index')}}">Daftar Produk</a>
                                </nav>
                            </div>
                            @endif
                            @if(Auth::user()->role->name == 'Admin')
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePengguna" aria-expanded="false" aria-controls="collapsePengguna">
                                    <div class="sb-nav-link-icon"></div>
                                    Pengguna
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapsePengguna" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="{{route('role.index')}}">Role</a>
                                        <a class="nav-link" href="{{route('user.index')}}">User</a>
                                    </nav>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        {{ Auth::user()->name }}({{ Auth::user()->role->name}})
                    </div>
                </nav>