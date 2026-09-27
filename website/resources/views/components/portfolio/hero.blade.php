<section
    id="home"
    class="relative flex min-h-[calc(100vh-100px)] items-center"
>
    <div class="grid w-full items-center gap-12 py-16 lg:grid-cols-2 lg:gap-16 lg:py-20">

        {{-- Conteúdo --}}
        <div class="max-w-2xl">

            {{-- Status --}}
            <div
                class="mb-6 inline-flex items-center gap-2 portfolio-badge rounded-full border px-4 py-2 text-sm portfolio-text backdrop-blur-sm"
            >
                <span
                    class="h-2 w-2 rounded-full bg-portfolio-green shadow-[0_0_12px_rgba(34,197,94,0.8)]"
                ></span>

                <span>
                    Disponível para oportunidades
                </span>
            </div>

            {{-- Título --}}
            <h1
                class="text-5xl font-semibold leading-[0.95] tracking-[-0.04em] sm:text-6xl lg:text-7xl portfolio-text"
            >
                Bruno Braga.
                <br>

                <span class="text-portfolio-blue">
                    Full Stack Developer.
                </span>
            </h1>

            {{-- Descrição --}}
            <p
                class="mt-7 max-w-xl text-base leading-7 text-portfolio-muted sm:text-lg"
            >
                Desenvolvedor Full Stack focado na construção de
                aplicações web escaláveis, com experiência em Laravel,
                React e AWS.
            </p>

            {{-- Ações --}}
            <div class="mt-8 flex flex-wrap items-center gap-4">

                <x-portfolio.social-links />

                <a
                    href="#contact"
                    class=" portfolio-text inline-flex items-center gap-2 rounded-full bg-portfolio-orange transition hover:-translate-y-0.5 px-6 py-3 text-sm font-semibold transition duration-300 hover:-translate-y-0.5 hover:bg-orange-500"
                >
                    Entrar em contato

                    <span aria-hidden="true">
                        →
                    </span>
                </a>

            </div>

        </div>

        {{-- Janela de código --}}
        <div class="hidden lg:block">

            <div
                class="overflow-hidden rounded-2xl border border-white/10 bg-[#08080d]/80 shadow-2xl shadow-purple-950/20 backdrop-blur-xl"
            >

                {{-- Header da janela --}}
                <div
                    class="flex items-center gap-2 border-b border-white/10 px-5 py-4"
                >
                    <span class="h-3 w-3 rounded-full bg-red-400/80"></span>
                    <span class="h-3 w-3 rounded-full bg-yellow-400/80"></span>
                    <span class="h-3 w-3 rounded-full bg-green-400/80"></span>

                    <span class="ml-3 font-mono text-xs text-white/30">
                        bruno.php
                    </span>
                </div>

                {{-- Código --}}
                <div class="overflow-x-auto p-6 font-mono text-sm leading-7">

                    <div>
                        <span class="text-purple-400">class</span>
                        <span class="text-blue-400">Developer</span>
                    </div>

                    <div class="pl-4">
                        <span class="text-purple-400">public</span>
                        <span class="text-white">string</span>
                        <span class="text-white">$name</span>
                        <span class="text-white">=</span>
                        <span class="text-green-400">'Bruno Braga'</span>
                        <span class="text-white">;</span>
                    </div>

                    <div class="pl-4">
                        <span class="text-purple-400">public</span>
                        <span class="text-white">array</span>
                        <span class="text-white">$stack</span>
                        <span class="text-white">=</span>
                        <span class="text-white">[</span>
                    </div>

                    <div class="pl-8">
                        <span class="text-green-400">'Laravel'</span>
                        <span class="text-white">,</span>
                    </div>

                    <div class="pl-8">
                        <span class="text-green-400">'React'</span>
                        <span class="text-white">,</span>
                    </div>

                    <div class="pl-8">
                        <span class="text-green-400">'PostgreSQL'</span>
                        <span class="text-white">,</span>
                    </div>

                    <div class="pl-8">
                        <span class="text-green-400">'AWS'</span>
                    </div>

                    <div class="pl-4">
                        <span class="text-white">];</span>
                    </div>

                    <div class="mt-4">
                        <span class="text-purple-400">public function</span>
                        <span class="text-blue-400">build</span>
                        <span class="text-white">(): </span>
                        <span class="text-white">string</span>
                    </div>

                    <div class="pl-4">
                        <span class="text-white">{</span>
                    </div>

                    <div class="pl-8">
                        <span class="text-purple-400">return</span>
                        <span class="text-green-400">
                            'scalable solutions'
                        </span>
                        <span class="text-white">;</span>
                    </div>

                    <div class="pl-4">
                        <span class="text-white">}</span>
                    </div>

                    <div>
                        <span class="text-white">}</span>
                    </div>

                </div>

            </div>

        </div>

    </div>

    {{-- Indicador de scroll --}}
    <a
        href="#about"
        aria-label="Ir para a seção Sobre mim"
        class="absolute bottom-6 left-1/2 -translate-x-1/2 portfolio-muted transition hover:portfolio-text"
    >
        <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6 animate-bounce"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="m19 9-7 7-7-7"
            />
        </svg>
    </a>

</section>
