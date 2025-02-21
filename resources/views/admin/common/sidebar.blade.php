<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                                <span data-feather="home"></span>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('category') ? 'active' : '' }}" href="/category">
                                <span data-feather="file"></span>
                                Category
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('product')?'active' : ''}}" href="/product">
                                <span data-feather="shopping-cart"></span>
                                Product In
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('product-out')?'active' : ''}}" href="/product-out">
                                <span data-feather="users"></span>
                                Product Out
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="bar-chart-2"></span>
                                Reports
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="layers"></span>
                                Integrations
                            </a>
                        </li>
                    </ul>

                    <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Saved reports</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Current month
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Last quarter
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://codepen.io/kalvincalimag/pen/BaepLXb">
                                <span data-feather="file-text"></span>
                                Social engagement
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://themewagon.github.io/material_able/index.html">
                                <span data-feather="file-text"></span>
                                dashboard link
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('useradd')}}">
                                <span data-feather="file-text"></span>
                                Add New User
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('logout')}}">
                                <span data-feather="file-text"></span>
                               Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>