<section
    id="projects"
    class="py-24 lg:py-32"
>

    <div class="flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between">
        <div class="max-w-2xl">
            <span
                class="font-mono text-sm uppercase tracking-[0.2em] text-portfolio-blue"
            >
                04 / {{ __('projects.section') }}
            </span>

            <h2
                class="mt-4 text-4xl font-semibold tracking-[-0.03em] sm:text-5xl portfolio-text"
            >
                {{ __('projects.title') }}
            </h2>

            <p
                class="mt-5 text-base leading-7 text-portfolio-muted sm:text-lg"
            >
                {{ __('projects.description') }}
            </p>
        </div>
    </div>

    <div class="mt-12 grid gap-6 lg:grid-cols-2">
        <article
            class="group overflow-hidden rounded-3xl border border-white/10 bg-white/[0.02] transition duration-500 hover:-translate-y-1 hover:border-white/20 hover:bg-white/[0.04]"
        >
            <div
                class="relative flex aspect-[16/9] items-center justify-center overflow-hidden border-b border-white/10 bg-gradient-to-br from-purple-950/40 via-[#09090f] to-blue-950/30"
            >
                <div
                    class="absolute h-40 w-40 rounded-full bg-purple-600/20 blur-3xl transition duration-500 group-hover:scale-150"
                ></div>

                <div class="relative text-center">

                    <span
                        class="font-mono text-xs uppercase tracking-[0.3em] text-white/30"
                    >
                        {{ __('projects.project_label') }}
                    </span>

                    <h3
                        class="mt-2 text-3xl font-semibold text-white/90"
                    >
                        Temisio
                    </h3>

                </div>

                <span
                    class="absolute right-5 top-5 font-mono text-xs text-white/30"
                >
                    01
                </span>
            </div>

            <div class="p-6 sm:p-8">
                <div class="flex items-start justify-between gap-4">
                    <div>
                        <h3 class="text-2xl font-semibold portfolio-text">
                            Temisio
                        </h3>

                        <p class="mt-2 text-sm text-portfolio-muted">
                            {{ __('projects.temisio.description') }}
                        </p>
                    </div>

                    <a
                        href="https://github.com/BrunoBGDev/Temisio-APP"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="{{ __('projects.temisio.link_label') }}"
                        class="portfolio-muted transition hover:text-portfolio-text"
                    >
                        ↗
                    </a>
                </div>

                <div class="mt-6 flex flex-wrap gap-2">
                    <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                        Laravel
                    </span>

                    <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                        Livewire
                    </span>

                    <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                        PostgreSQL
                    </span>

                    <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                        Tailwind CSS
                    </span>
                </div>
            </div>
        </article>

        <article
            class="group overflow-hidden rounded-3xl border border-white/10 bg-white/[0.02] transition duration-500 hover:-translate-y-1 hover:border-white/20 hover:bg-white/[0.04]"
        >
            <div
                class="relative flex aspect-[16/9] items-center justify-center overflow-hidden border-b border-white/10 bg-gradient-to-br from-blue-950/40 via-[#09090f] to-purple-950/30"
            >
                <div
                    class="absolute h-40 w-40 rounded-full bg-blue-600/20 blur-3xl transition duration-500 group-hover:scale-150"
                ></div>
                <div class="relative text-center">

                    <span
                        class="font-mono text-xs uppercase tracking-[0.3em] text-white/30"
                    >
                        {{ __('projects.project_label') }}
                    </span>

                    <h3
                        class="mt-2 text-3xl font-semibold text-white/90"
                    >
                        so_long
                    </h3>

                </div>

                <span
                    class="absolute right-5 top-5 font-mono text-xs text-white/30"
                >
                    02
                </span>
            </div>

            <div class="p-6 sm:p-8">
                <div class="flex items-start justify-between gap-4">
                    <div>
                        <h3 class="text-2xl font-semibold portfolio-text">
                            so_long
                        </h3>

                        <p class="mt-2 text-sm text-portfolio-muted">
                            {{ __('projects.so_long.description') }}
                        </p>
                    </div>

                    <a
                        href="https://github.com/BrunoBGDev/so_long"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="{{ __('projects.so_long.link_label') }}"
                        class="portfolio-muted transition hover:text-portfolio-text"
                    >
                        ↗
                    </a>
                </div>

                <div class="mt-6 flex flex-wrap gap-2">
                    <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                        C
                    </span>

                    <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                        MiniLibX
                    </span>

                    <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                        Makefile
                    </span>
                </div>
            </div>
        </article>

        <article
            class="group overflow-hidden rounded-3xl border border-white/10 bg-white/[0.02] transition duration-500 hover:-translate-y-1 hover:border-white/20 hover:bg-white/[0.04]"
        >

            <div
                class="relative flex aspect-[16/9] items-center justify-center overflow-hidden border-b border-white/10 bg-gradient-to-br from-green-950/20 via-[#09090f] to-blue-950/30"
            >

                <div
                    class="absolute h-40 w-40 rounded-full bg-green-600/10 blur-3xl transition duration-500 group-hover:scale-150"
                ></div>

                <div class="relative text-center">

                    <span
                        class="font-mono text-xs uppercase tracking-[0.3em] text-white/30"
                    >
                        {{ __('projects.project_label') }}
                    </span>

                    <h3
                        class="mt-2 text-3xl font-semibold text-white/90"
                    >
                        Casal Piscineiro
                    </h3>

                </div>

                <span
                    class="absolute right-5 top-5 font-mono text-xs text-white/30"
                >
                    03
                </span>
            </div>

            <div class="p-6 sm:p-8">
                <div class="flex items-start justify-between gap-4">
                    <div>
                        <h3 class="text-2xl font-semibold portfolio-text">
                            Casal Piscineiro
                        </h3>

                        <p class="mt-2 text-sm text-portfolio-muted">
                            {{ __('projects.casal_piscineiro.description') }}
                        </p>
                    </div>

                    <a
                        href="https://github.com/BrunoBGDev/web-site-casal-piscineiro"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="{{ __('projects.casal_piscineiro.link_label') }}"
                        class="portfolio-muted transition hover:text-portfolio-text"
                    >
                        ↗
                    </a>
                </div>

                <div class="mt-6 flex flex-wrap gap-2">
                    <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                        {{ __('projects.casal_piscineiro.status') }}
                    </span>
                </div>
            </div>
        </article>

        <article
            class="group overflow-hidden rounded-3xl border border-white/10 bg-white/[0.02] transition duration-500 hover:-translate-y-1 hover:border-white/20 hover:bg-white/[0.04]"
        >

            <div
                class="relative flex aspect-[16/9] items-center justify-center overflow-hidden border-b border-white/10 bg-gradient-to-br from-orange-950/20 via-[#09090f] to-purple-950/30"
            >
                <div
                    class="absolute h-40 w-40 rounded-full bg-orange-600/10 blur-3xl transition duration-500 group-hover:scale-150"
                ></div>

                <div class="relative text-center">
                    <span
                        class="font-mono text-xs uppercase tracking-[0.3em] text-white/30"
                    >
                        {{ __('projects.project_label') }}
                    </span>

                    <h3
                        class="mt-2 text-3xl font-semibold text-white/90"
                    >
                        Portfolio
                    </h3>
                </div>

                <span
                    class="absolute right-5 top-5 font-mono text-xs text-white/30"
                >
                    04
                </span>
            </div>

            <div class="p-6 sm:p-8">
                <div class="flex items-start justify-between gap-4">
                    <div>
                        <h3 class="text-2xl font-semibold portfolio-text">
                            Personal Portfolio
                        </h3>

                        <p class="mt-2 text-sm text-portfolio-muted">
                            {{ __('projects.portfolio.description') }}
                        </p>
                    </div>

                    <a
                        href="https://github.com/BrunoBGDev/website-bruno-bg-dev"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="{{ __('projects.portfolio.link_label') }}"
                        class="portfolio-muted transition hover:text-portfolio-text"
                    >
                        ↗
                    </a>
                </div>

                <div class="mt-6 flex flex-wrap gap-2">
                    <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                        Laravel
                    </span>

                    <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                        Blade
                    </span>

                    <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                        Tailwind CSS
                    </span>
                </div>
            </div>
        </article>
    </div>
</section>
