<header
    class="relative z-50 flex justify-center"
    x-data="{ mobileMenuOpen: false }"
>
    <nav
        class="portfolio-navbar portfolio-transition w-full rounded-2xl border p-1.5 shadow-2xl shadow-black/20 backdrop-blur-xl sm:w-auto sm:rounded-full"
    >

        {{-- Navbar principal --}}
        <div class="flex items-center justify-between gap-1">

            {{-- Brand --}}
            <a
                href="#home"
                class="portfolio-text px-4 py-2 text-sm font-semibold"
            >
                Bruno Braga
            </a>

            {{-- Navegação desktop --}}
            <div class="hidden items-center sm:flex">

                <a
                    href="#home"
                    class="portfolio-nav-link rounded-full px-4 py-2 text-sm"
                >
                    {{ __('nav.home') }}
                </a>

                <a
                    href="#about"
                    class="portfolio-nav-link flex items-center gap-1 rounded-full px-3 py-2 text-sm"
                >
                    {{ __('nav.about') }}
                </a>

                <a
                    href="#projects"
                    class="portfolio-nav-link flex items-center gap-1 rounded-full px-3 py-2 text-sm"
                >
                    {{ __('nav.projects') }}
                </a>

                <a
                    href="#contact"
                    class="portfolio-nav-link flex items-center gap-1 rounded-full px-3 py-2 text-sm"
                >
                    {{ __('nav.contact') }}
                </a>

            </div>

            {{-- Controles desktop --}}
            <div class="hidden items-center sm:flex">

                <div
                    class="portfolio-border mx-1 h-6 w-px border-l"
                ></div>

                <button
                    type="button"
                    id="theme-toggle"
                    aria-label="Ativar modo claro"
                    class="portfolio-icon-button flex h-10 w-10 items-center justify-center rounded-full"
                >
                    <i id="theme-toggle-icon" class="fa-solid fa-sun"></i>
                </button>

                <div class="relative">
                    <button
                        type="button"
                        id="language-toggle"
                        class="portfolio-nav-link flex items-center gap-1 rounded-full px-3 py-2 text-sm"
                        aria-expanded="false"
                    >
                        {{ app()->getLocale() === 'en' ? 'EN' : 'PT-BR' }}

                        <i class="fa-solid fa-chevron-down text-[10px]"></i>
                    </button>

                    <div
                        id="language-menu"
                        class="portfolio-language-menu absolute right-0 top-full z-50 mt-2 hidden min-w-32 rounded-xl border p-1 shadow-xl backdrop-blur-xl"
                    >
                        <a
                            href="{{ url('/pt-br') }}"
                            class="portfolio-nav-link block rounded-lg px-3 py-2 text-sm"
                        >
                            PT-BR
                        </a>

                        <a
                            href="{{ url('/en') }}"
                            class="portfolio-nav-link block rounded-lg px-3 py-2 text-sm"
                        >
                            English
                        </a>
                    </div>
                </div>

            </div>

            {{-- Botão mobile --}}
            <button
                type="button"
                id="mobile-menu-button"
                class="flex h-10 w-10 items-center justify-center rounded-full portfolio-text  transition hover:bg-white/5 sm:hidden"
                aria-label="Abrir menu"
                aria-expanded="false"
                aria-controls="mobile-menu"
            >
                <i
                    id="mobile-menu-icon"
                    class="fa-solid fa-bars"
                ></i>
            </button>

        </div>

        {{-- Menu mobile --}}
        <div
            id="mobile-menu"
            class="portfolio-border hidden border-t px-2 pb-2 pt-3 sm:hidden"
        >

            <div class="flex flex-col gap-1">

                <a
                    href="#home"
                    class="portfolio-nav-link rounded-xl px-4 py-3 text-sm"
                >
                    Home
                </a>

                <a
                    href="#projects"
                    class="mobile-menu-link rounded-xl px-4 py-3 text-sm text-portfolio-muted transition hover:bg-white/5 hover:portfolio-text"
                >
                    Projects
                </a>

                <a
                    href="#about"
                    class="mobile-menu-link rounded-xl px-4 py-3 text-sm text-portfolio-muted transition hover:bg-white/5 hover:portfolio-text"
                >
                    About
                </a>

                <a
                    href="#contact"
                    class="mobile-menu-link rounded-xl px-4 py-3 text-sm text-portfolio-muted transition hover:bg-white/5 hover:portfolio-text"
                >
                    Contact
                </a>

            </div>

        </div>

    </nav>
</header>
