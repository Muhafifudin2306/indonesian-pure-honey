<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('home') }}" class="app-brand-link">
            <img src="assets-user/img/logo.png" class="w-100">
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ request()->routeIs('home') ? 'active' : '' }}">
            <a href="{{ route('home') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Layouts -->
        <li
            class="menu-item {{ request()->routeIs('indexOne') ? 'active' : '' }} {{ request()->routeIs('indexSeo') ? 'active' : '' }} {{ request()->routeIs('indexHeader') ? 'active' : '' }} {{ request()->routeIs('indexContact') ? 'active' : '' }} {{ request()->routeIs('indexSponsor') ? 'active' : '' }} {{ request()->routeIs('indexAbout') ? 'active' : '' }} {{ request()->routeIs('indexTeam') ? 'active' : '' }} {{ request()->routeIs('indexValue') ? 'active' : '' }} {{ request()->routeIs('indexProduct') ? 'active' : '' }} {{ request()->routeIs('indexVideo') ? 'active' : '' }}  {{ request()->routeIs('indexBlog') ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">CMS</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('indexSeo') ? 'active' : '' }}">
                    <a href="{{ route('indexSeo') }}" class="menu-link">
                        <div data-i18n="Without menu">SEO</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('indexHeader') ? 'active' : '' }}">
                    <a href="{{ route('indexHeader') }}" class="menu-link">
                        <div data-i18n="Without menu">Header</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('indexOne') ? 'active' : '' }}">
                    <a href="{{ route('indexOne') }}" class="menu-link">
                        <div data-i18n="Without menu">Hero</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('indexContact') ? 'active' : '' }}">
                    <a href="{{ route('indexContact') }}" class="menu-link">
                        <div data-i18n="Without menu">Contact</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('indexProduct') ? 'active' : '' }}">
                    <a href="{{ route('indexProduct') }}" class="menu-link">
                        <div data-i18n="Without menu">Product</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('indexAbout') ? 'active' : '' }}">
                    <a href="{{ route('indexAbout') }}" class="menu-link">
                        <div data-i18n="Without menu">About Us</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('indexValue') ? 'active' : '' }}">
                    <a href="{{ route('indexValue') }}" class="menu-link">
                        <div data-i18n="Without menu">Key Value</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('indexTeam') ? 'active' : '' }}">
                    <a href="{{ route('indexTeam') }}" class="menu-link">
                        <div data-i18n="Without menu">Team</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('indexSponsor') ? 'active' : '' }}">
                    <a href="{{ route('indexSponsor') }}" class="menu-link">
                        <div data-i18n="Without menu">Sponsor</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('indexVideo') ? 'active' : '' }}">
                    <a href="{{ route('indexVideo') }}" class="menu-link">
                        <div data-i18n="Without menu">Video</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('indexBlog') ? 'active' : '' }}">
                    <a href="{{ route('indexBlog') }}" class="menu-link">
                        <div data-i18n="Without menu">Blog</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('indexMap') ? 'active' : '' }}">
                    <a href="{{ route('indexMap') }}" class="menu-link">
                        <div data-i18n="Without menu">Map</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('indexFooter') ? 'active' : '' }}">
                    <a href="{{ route('indexFooter') }}" class="menu-link">
                        <div data-i18n="Without menu">Footer</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
