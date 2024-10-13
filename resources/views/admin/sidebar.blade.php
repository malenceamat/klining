<style>
    #sidebar ul.menu-categories.ps {
        height: auto !important;
    }
</style>
<div class="sidebar-wrapper sidebar-theme">
    <nav id="sidebar">
        <div class="navbar-nav theme-brand flex-row  text-center">
            <div class="nav-logo">
                <div class="nav-item theme-logo">
                    <a href="{{route('home')}}">
                        <img src={{asset("src/assets/img/logo.svg")}} class="navbar-logo" alt="logo">
                    </a>
                </div>
                <div class="nav-item theme-text">
                    <a href="{{route('home')}}" class="nav-link">admin</a>
                </div>
            </div>
            <div class="nav-item sidebar-toggle">
                <div class="btn-toggle sidebarCollapse">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-chevrons-left">
                        <polyline points="11 17 6 12 11 7"></polyline>
                        <polyline points="18 17 13 12 18 7"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        {{--баннер--}}
            <ul class="list-unstyled menu-categories" id="accordionExample">
                <li class="menu">
                    <a href="#banner" data-bs-toggle="collapse"
                       aria-expanded="{{ (request()->routeIs('banner')) ? 'true' : 'false'}}"
                       class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="24"
                                 height="24"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="feather feather-terminal">
                                <polyline points="4 17 10 11 4 5"></polyline>
                                <line x1="12" y1="19" x2="20" y2="19"></line>
                            </svg>
                            <span> Баннер </span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="24"
                                 height="24"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled {{ (request()->routeIs('banner')) ? 'show' : ''}}"
                        id="banner" data-bs-parent="#accordionExample">
                        <li class="{{ (request()->routeIs('banner')) ? 'active' : '' }}">
                            <a href="{{route('banner')}}"> Настройка контента </a>
                        </li>
                    </ul>
                </li>
            </ul>
        {{--о нас--}}
            <ul class="list-unstyled menu-categories" id="accordionExample">
                <li class="menu">
                    <a href="#about" data-bs-toggle="collapse"
                       aria-expanded="{{ (request()->routeIs('about')) ? 'true' : 'false'}}"
                       class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="24"
                                 height="24"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="feather feather-terminal">
                                <polyline points="4 17 10 11 4 5"></polyline>
                                <line x1="12" y1="19" x2="20" y2="19"></line>
                            </svg>
                            <span> О нас </span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="24"
                                 height="24"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled {{ (request()->routeIs('about')) ? 'show' : ''}}"
                        id="about" data-bs-parent="#accordionExample">
                        <li class="{{ (request()->routeIs('about')) ? 'active' : '' }}">
                            <a href="{{route('about')}}"> Настройка контента </a>
                        </li>
                    </ul>
                </li>
            </ul>
        {{--статистика--}}
            <ul class="list-unstyled menu-categories" id="accordionExample">
                <li class="menu">
                    <a href="#statistics" data-bs-toggle="collapse"
                       aria-expanded="{{ (request()->routeIs('statistics','statistics_show')) ? 'true' : 'false'}}"
                       class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="24"
                                 height="24"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="feather feather-terminal">
                                <polyline points="4 17 10 11 4 5"></polyline>
                                <line x1="12" y1="19" x2="20" y2="19"></line>
                            </svg>
                            <span> Статистика </span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="24"
                                 height="24"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled {{ (request()->routeIs('statistics','statistics_show')) ? 'show' : ''}}"
                        id="statistics" data-bs-parent="#accordionExample">
                        <li class="{{ (request()->routeIs('statistics')) ? 'active' : '' }}">
                            <a href="{{route('statistics')}}"> Настройка контента </a>
                        </li>
                        <li class="{{ (request()->routeIs('statistics_show')) ? 'active' : '' }}">
                            <a href="{{route('statistics_show')}}"> Обзор </a>
                        </li>
                    </ul>
                </li>
            </ul>
        {{--Преимущества--}}
            <ul class="list-unstyled menu-categories" id="accordionExample">
                <li class="menu">
                    <a href="#advantages" data-bs-toggle="collapse"
                       aria-expanded="{{ (request()->routeIs('advantages','advantages_show')) ? 'true' : 'false'}}"
                       class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="24"
                                 height="24"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="feather feather-terminal">
                                <polyline points="4 17 10 11 4 5"></polyline>
                                <line x1="12" y1="19" x2="20" y2="19"></line>
                            </svg>
                            <span> Преимущества </span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="24"
                                 height="24"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled {{ (request()->routeIs('advantages','advantages_show')) ? 'show' : ''}}"
                        id="advantages" data-bs-parent="#accordionExample">
                        <li class="{{ (request()->routeIs('advantages')) ? 'active' : '' }}">
                            <a href="{{route('advantages')}}"> Настройка контента </a>
                        </li>
                        <li class="{{ (request()->routeIs('advantages_show')) ? 'active' : '' }}">
                            <a href="{{route('advantages_show')}}"> Обзор </a>
                        </li>
                    </ul>
                </li>
            </ul>
        {{--навыки--}}
            <ul class="list-unstyled menu-categories" id="accordionExample">
                <li class="menu">
                    <a href="#skills" data-bs-toggle="collapse"
                       aria-expanded="{{ (request()->routeIs('skills','skills_show')) ? 'true' : 'false'}}"
                       class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="24"
                                 height="24"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="feather feather-terminal">
                                <polyline points="4 17 10 11 4 5"></polyline>
                                <line x1="12" y1="19" x2="20" y2="19"></line>
                            </svg>
                            <span> Что предлагаем </span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="24"
                                 height="24"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled {{ (request()->routeIs('skills','skills_show')) ? 'show' : ''}}"
                        id="skills" data-bs-parent="#accordionExample">
                        <li class="{{ (request()->routeIs('skills')) ? 'active' : '' }}">
                            <a href="{{route('skills')}}"> Настройка контента </a>
                        </li>
                        <li class="{{ (request()->routeIs('skills_show')) ? 'active' : '' }}">
                            <a href="{{route('skills_show')}}"> Обзор </a>
                        </li>
                    </ul>
                </li>
            </ul>
        {{--сервисы--}}
            <ul class="list-unstyled menu-categories" id="accordionExample">
                <li class="menu">
                    <a href="#services" data-bs-toggle="collapse"
                       aria-expanded="{{ (request()->routeIs('services','services_show')) ? 'true' : 'false'}}"
                       class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="24"
                                 height="24"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="feather feather-terminal">
                                <polyline points="4 17 10 11 4 5"></polyline>
                                <line x1="12" y1="19" x2="20" y2="19"></line>
                            </svg>
                            <span> Сервисы </span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="24"
                                 height="24"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled {{ (request()->routeIs('services','services_show')) ? 'show' : ''}}"
                        id="services" data-bs-parent="#accordionExample">
                        <li class="{{ (request()->routeIs('services')) ? 'active' : '' }}">
                            <a href="{{route('services')}}"> Настройка контента </a>
                        </li>
                        <li class="{{ (request()->routeIs('services_show')) ? 'active' : '' }}">
                            <a href="{{route('services_show')}}"> Обзор </a>
                        </li>
                    </ul>
                </li>
            </ul>
        {{--Галерея--}}
            <ul class="list-unstyled menu-categories" id="accordionExample">
                <li class="menu">
                    <a href="#gallery" data-bs-toggle="collapse"
                       aria-expanded="{{ (request()->routeIs('gallery','gallery_show')) ? 'true' : 'false'}}"
                       class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="24"
                                 height="24"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="feather feather-terminal">
                                <polyline points="4 17 10 11 4 5"></polyline>
                                <line x1="12" y1="19" x2="20" y2="19"></line>
                            </svg>
                            <span> Галерея </span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="24"
                                 height="24"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled {{ (request()->routeIs('gallery','gallery_show')) ? 'show' : ''}}"
                        id="gallery" data-bs-parent="#accordionExample">
                        <li class="{{ (request()->routeIs('gallery')) ? 'active' : '' }}">
                            <a href="{{route('gallery')}}"> Настройка контента </a>
                        </li>
                        <li class="{{ (request()->routeIs('gallery_show')) ? 'active' : '' }}">
                            <a href="{{route('gallery_show')}}"> Обзор </a>
                        </li>
                    </ul>
                </li>
            </ul>
        {{--контакты--}}
            <ul class="list-unstyled menu-categories" id="accordionExample">
                <li class="menu">
                    <a href="#contacts" data-bs-toggle="collapse"
                       aria-expanded="{{ (request()->routeIs('contact_index')) ? 'true' : 'false'}}"
                       class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="24"
                                 height="24"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="feather feather-terminal">
                                <polyline points="4 17 10 11 4 5"></polyline>
                                <line x1="12" y1="19" x2="20" y2="19"></line>
                            </svg>
                            <span> Контакты </span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="24"
                                 height="24"
                                 viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled {{ (request()->routeIs('contact_index')) ? 'show' : ''}}"
                        id="contacts" data-bs-parent="#accordionExample">
                        <li class="{{ (request()->routeIs('contact_index')) ? 'active' : '' }}">
                            <a href="{{route('contact_index')}}"> Настройка контента </a>
                        </li>
                    </ul>
                </li>
            </ul>
    </nav>
</div>
