<section
    id="contact"
    class="portfolio-card rounded-3xl"
>
    <div
        class="relative overflow-hidden rounded-3xl border border-white/10 bg-white/[0.02] p-6 sm:p-10 lg:p-14"
    >

        {{-- Glow --}}
        <div
            class="pointer-events-none absolute -right-32 -top-32 h-80 w-80 rounded-full bg-purple-600/10 blur-3xl"
        ></div>

        <div
            class="pointer-events-none absolute -bottom-32 -left-32 h-80 w-80 rounded-full bg-blue-600/10 blur-3xl"
        ></div>

        <div class="relative grid gap-12 lg:grid-cols-[0.8fr_1.2fr] lg:gap-20">

            {{-- Informações --}}
            <div>

                <span
                    class="font-mono text-sm uppercase tracking-[0.2em] text-portfolio-blue"
                >
                    05 / Contact
                </span>

                <h2
                    class="mt-4 text-4xl font-semibold tracking-[-0.03em] sm:text-5xl portfolio-text"
                >
                    Vamos conversar.
                </h2>

                <p
                    class="mt-6 max-w-md text-base leading-7 text-portfolio-muted sm:text-lg"
                >
                    Tem um projeto, uma oportunidade ou simplesmente quer
                    trocar uma ideia? Envie uma mensagem.
                </p>

                {{-- Informações de contato --}}
                <div class="mt-10 space-y-5">

                    <div>
                        <span
                            class="font-mono text-xs uppercase tracking-wider portfolio-muted"
                        >
                            Email
                        </span>

                        <a
                            href="mailto:brunobgdev@outlook.com"
                            class="portfolio-tech-tag rounded-full px-2 py-3 text-xs"
                        >
                            brunobgdev@outlook.com
                        </a>
                    </div>

                    <div>
                        <span
                            class="font-mono text-xs uppercase tracking-wider portfolio-muted"
                        >
                            Localização
                        </span>

                        <p class="mt-1 text-base portfolio-muted">
                            Brasil · Remote
                        </p>
                    </div>

                    <div>
                        <span
                            class="font-mono text-xs uppercase tracking-wider portfolio-muted"
                        >
                            Disponibilidade
                        </span>

                        <div class="mt-2 flex items-center gap-2">

                            <span
                                class="h-2 w-2 rounded-full bg-portfolio-green shadow-[0_0_10px_rgba(34,197,94,0.8)]"
                            ></span>

                            <span class="text-sm portfolio-text">
                                Disponível para oportunidades
                            </span>

                        </div>
                    </div>

                </div>

            </div>

            {{-- Formulário --}}
            <div>

                <form
                    action="{{ route('contact.store') }}"
                    method="POST"
                    class="space-y-5"
                >

                    @csrf

                    {{-- Nome --}}
                    <div>

                        <label
                            for="name"
                            class="mb-2 block text-sm font-medium portfolio-text"
                        >
                            Nome
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Seu nome"
                            class="portfolio-input rounded-xl px-4 py-3"
                        >

                    </div>

                    {{-- Email --}}
                    <div>

                        <label
                            for="email"
                            class="mb-2 block text-sm font-medium portfolio-text"
                        >
                            Email
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="seu@email.com"
                            class="portfolio-input rounded-xl px-4 py-3"
                        >

                    </div>

                    {{-- Assunto --}}
                    <div>

                        <label
                            for="subject"
                            class="mb-2 block text-sm font-medium portfolio-text"
                        >
                            Assunto
                        </label>

                        <input
                            type="text"
                            id="subject"
                            name="subject"
                            placeholder="Sobre o que você gostaria de conversar?"
                            class="portfolio-input rounded-xl px-4 py-3"
                        >

                    </div>

                    {{-- Mensagem --}}
                    <div>

                        <label
                            for="message"
                            class="mb-2 block text-sm font-medium portfolio-text"
                        >
                            Mensagem
                        </label>

                        <textarea
                            id="message"
                            name="message"
                            rows="6"
                            placeholder="Escreva sua mensagem..."
                            class="portfolio-input rounded-xl px-4 py-3"
                        ></textarea>

                    </div>

                    {{-- Botão --}}
                    <button style="cursor: pointer"
                        type="submit"
                        class="inline-flex w-full items-center justify-center gap-2 rounded-xl portfolio-text bg-portfolio-orange px-6 py-3.5 text-sm font-semibold transition duration-300 hover:-translate-y-0.5 hover:bg-orange-500"
                    >
                        Enviar mensagem

                        <span aria-hidden="true">
                            →
                        </span>
                    </button>

                </form>

            </div>

        </div>

    </div>
</section>
