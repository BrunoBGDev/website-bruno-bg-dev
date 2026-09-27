<footer class="portfolio-border border-t py-8">

    <div class="flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between">
        {{-- Copyright --}}
        <div>
            <p class="text-sm portfolio-muted">
                © {{ date('Y') }} Bruno Braga.
                Todos os direitos reservados.
            </p>

            <p class="mt-1 font-mono text-xs portfolio-muted">
                Built with Laravel & Blade
            </p>
        </div>

        {{-- Links --}}
        <div class="flex items-center gap-2">

            <a href="https://github.com/BrunoBGDev" target="_blank" rel="noopener noreferrer" aria-label="GitHub"
                class="portfolio-social-link">
                <i class="fa-brands fa-github" style="size: 1rem"></i>
            </a>

            <a href="https://www.linkedin.com/in/brunobragadev/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"
                class="portfolio-social-link">
                <i class="fa-brands fa-linkedin"></i>
            </a>

            <a href="mailto:brunobgdev@outlook.com" aria-label="Enviar e-mail"
                class="portfolio-social-link">
                <i class="fa-solid fa-at"></i>
            </a>

            <a href="#home" aria-label="Voltar ao topo"
                class="ml-2 flex h-9 items-center gap-2 rounded-full border border-white/10 px-4 text-xs portfolio-text transition hover:bg-white/5 portfolio-tech-tag hover:portfolio-muted">
                Topo

                <span aria-hidden="true">
                    ↑
                </span>
            </a>
        </div>
    </div>
</footer>
