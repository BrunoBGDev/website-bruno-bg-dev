<section id="about" class="py-24 lg:py-32">
    <div class="grid gap-12 lg:grid-cols-[0.8fr_1.2fr] lg:gap-20">
        <div>
            <span class="font-mono text-sm uppercase tracking-[0.2em] text-portfolio-blue">
                01 / {{ __('about.section') }}
            </span>

            <h2 class="mt-4 text-4xl font-semibold tracking-[-0.03em] sm:text-5xl portfolio-text">
                {{ __('about.title') }}
            </h2>
        </div>

        <div class="max-w-3xl">
            <p class="text-xl leading-8 portfolio-muted sm:text-2xl sm:leading-9">
                {{ __('about.paragraph_1') }}
            </p>

            <p class="mt-6 text-base leading-7 text-portfolio-muted sm:text-lg">
                {{ __('about.paragraph_2') }}
            </p>

            <p class="mt-6 text-base leading-7 text-portfolio-muted sm:text-lg">
                {{ __('about.paragraph_3') }}
            </p>

            <div class="mt-10 grid gap-4 sm:grid-cols-3">
                <div class="portfolio-card rounded-2xl p-6">
                    <span class="font-mono text-xs uppercase tracking-wider text-portfolio-muted">
                        {{ __('about.stats.experience.label') }}
                    </span>

                    <p class="mt-2 text-2xl font-semibold portfolio-text">
                        5+ {{ __('about.stats.experience.value') }}
                    </p>
                </div>

                <div class="portfolio-card rounded-2xl p-6">
                    <span class="font-mono text-xs uppercase tracking-wider text-portfolio-muted">
                        {{ __('about.stats.specialty.label') }}
                    </span>

                    <p class="mt-2 text-2xl font-semibold portfolio-text">
                        {{ __('about.stats.specialty.value') }}
                    </p>
                </div>

                <div class="portfolio-card rounded-2xl p-6">
                    <span class="font-mono text-xs uppercase tracking-wider text-portfolio-muted">
                        {{ __('about.stats.focus.label') }}
                    </span>

                    <p class="mt-2 text-2xl font-semibold portfolio-text">
                        {{ __('about.stats.focus.value') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
