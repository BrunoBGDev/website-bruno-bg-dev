<section
    id="skills"
    class="py-24 lg:py-32"
>
    {{-- Cabeçalho --}}
    <div class="max-w-2xl">
        <span
            class="font-mono text-sm uppercase tracking-[0.2em] text-portfolio-blue"
        >
            03 / {{ __('skills.section') }}
        </span>

        <h2
            class="mt-4 text-4xl font-semibold tracking-[-0.03em] sm:text-5xl portfolio-text"
        >
            {{ __('skills.title') }}
        </h2>

        <p
            class="mt-5 text-base leading-7 text-portfolio-muted sm:text-lg"
        >
            {{ __('skills.description') }}
        </p>
    </div>

    {{-- Categorias --}}
    <div class="mt-12 grid gap-4 md:grid-cols-2">

        {{-- Backend --}}
        <div
            class="portfolio-card rounded-2xl p-6"
        >
            <div class="flex items-center justify-between">

                <h3 class="text-xl font-semibold portfolio-text">
                    {{ __('skills.backend.title') }}
                </h3>

                <span
                    class="font-mono text-xs portfolio-muted"
                >
                    01
                </span>

            </div>

            <p
                class="mt-2 text-sm leading-6 text-portfolio-muted"
            >
                {{ __('skills.backend.description') }}
            </p>

            <div class="mt-6 flex flex-wrap gap-2">

                <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                    PHP
                </span>

                <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                    Laravel
                </span>

                <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                    Livewire
                </span>

                <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                    JavaScript
                </span>

                <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                    C
                </span>

                <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                    RESTful APIs
                </span>

                <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                    Event-driven Architecture
                </span>

            </div>
        </div>

        {{-- Frontend --}}
        <div
            class="portfolio-card rounded-2xl p-6"
        >
            <div class="flex items-center justify-between">

                <h3 class="text-xl font-semibold portfolio-text">
                    {{ __('skills.frontend.title') }}
                </h3>

                <span
                    class="font-mono text-xs portfolio-muted"
                >
                    02
                </span>

            </div>

            <p
                class="mt-2 text-sm leading-6 text-portfolio-muted"
            >
                {{ __('skills.frontend.description') }}
            </p>

            <div class="mt-6 flex flex-wrap gap-2">

                <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                    ReactJS
                </span>

                <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                    JavaScript
                </span>

                <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                    Livewire
                </span>

                <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                    HTML
                </span>

                <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                    CSS
                </span>

                <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                    Bootstrap
                </span>

            </div>
        </div>

        {{-- Database --}}
        <div
            class="portfolio-card rounded-2xl p-6"
        >
            <div class="flex items-center justify-between">

                <h3 class="text-xl font-semibold portfolio-text">
                    {{ __('skills.database.title') }}
                </h3>

                <span
                    class="font-mono text-xs portfolio-muted"
                >
                    03
                </span>

            </div>

            <p
                class="mt-2 text-sm leading-6 text-portfolio-muted"
            >
                {{ __('skills.database.description') }}
            </p>

            <div class="mt-6 flex flex-wrap gap-2">

                <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                    PostgreSQL
                </span>

                <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                    SQL
                </span>

            </div>
        </div>

        {{-- Infrastructure --}}
        <div
            class="portfolio-card rounded-2xl p-6"
        >
            <div class="flex items-center justify-between">

                <h3 class="text-xl font-semibold portfolio-text">
                    {{ __('skills.infrastructure.title') }}
                </h3>

                <span
                    class="font-mono text-xs portfolio-muted"
                >
                    04
                </span>

            </div>

            <p
                class="mt-2 text-sm leading-6 text-portfolio-muted"
            >
                {{ __('skills.infrastructure.description') }}
            </p>

            <div class="mt-6 flex flex-wrap gap-2">

                <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                    AWS
                </span>

                <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                    Docker
                </span>

                <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                    Git
                </span>

                <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                    GitLab
                </span>

                <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                    CI/CD
                </span>

                <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                    RabbitMQ
                </span>

                <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                    Jira
                </span>

                <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                    CLI
                </span>

                <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                    Linux
                </span>

                <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                    Windows
                </span>

                <span class="portfolio-tech-tag rounded-full px-3 py-1 text-xs">
                    macOS
                </span>

            </div>
        </div>

    </div>
</section>
