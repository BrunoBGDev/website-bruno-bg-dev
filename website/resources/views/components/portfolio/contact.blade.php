<section id="contact" class="portfolio-card rounded-3xl">
    <div class="relative overflow-hidden rounded-3xl border border-white/10 bg-white/[0.02] p-6 sm:p-10 lg:p-14">
        <div class="pointer-events-none absolute -right-32 -top-32 h-80 w-80 rounded-full bg-purple-600/10 blur-3xl"></div>

        <div class="pointer-events-none absolute -bottom-32 -left-32 h-80 w-80 rounded-full bg-blue-600/10 blur-3xl"></div>

        <div class="relative grid gap-12 lg:grid-cols-[0.8fr_1.2fr] lg:gap-20">
            <div>

                <span class="font-mono text-sm uppercase tracking-[0.2em] text-portfolio-blue">
                    05 / {{ __('contact.section') }}
                </span>

                <h2 class="mt-4 text-4xl font-semibold tracking-[-0.03em] sm:text-5xl portfolio-text">
                    {{ __('contact.title') }}
                </h2>

                <p class="mt-6 max-w-md text-base leading-7 text-portfolio-muted sm:text-lg">
                    {{ __('contact.description') }}
                </p>

                <div class="mt-10 space-y-5">

                    <div>
                        <span class="font-mono text-xs uppercase tracking-wider portfolio-muted">
                            {{ __('contact.email.label') }}
                        </span>

                        <a href="mailto:brunobgdev@outlook.com" class="portfolio-tech-tag rounded-full px-2 py-3 text-xs">
                            brunobgdev@outlook.com
                        </a>
                    </div>

                    <div>
                        <span class="font-mono text-xs uppercase tracking-wider portfolio-muted">
                            {{ __('contact.location.label') }}
                        </span>

                        <p class="mt-1 text-base portfolio-muted">
                            Brasil · Remote
                        </p>
                    </div>

                    <div>
                        <span class="font-mono text-xs uppercase tracking-wider portfolio-muted">
                            {{ __('contact.availability.label') }}
                        </span>

                        <div class="mt-2 flex items-center gap-2">
                            <span class="h-2 w-2 rounded-full bg-portfolio-green shadow-[0_0_10px_rgba(34,197,94,0.8)]"></span>

                            <span class="text-sm portfolio-text">
                                {{ __('contact.availability.value') }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                @if (session('success'))
                    <div class="mb-5 rounded-xl border border-green-500/20 bg-green-500/10 px-4 py-3 text-sm text-green-400"
                        role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-5 rounded-xl border border-red-500/20 bg-red-500/10 px-4 py-3 text-sm text-red-400"
                        role="alert">
                        {{ __('contact.messages.validation_error') }}
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST" class="space-y-5">
                    @csrf

                    <div>

                        <label for="name" class="mb-2 block text-sm font-medium portfolio-text">
                            {{ __('contact.form.name.label') }}
                        </label>

                        <input type="text" id="name" name="name" value="{{ old('name') }}"
                            placeholder="{{ __('contact.form.name.placeholder') }}" class="portfolio-input rounded-xl px-4 py-3">

                        @error('name')
                            <p class="mt-2 text-sm text-red-400">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    <div>

                        <label for="email" class="mb-2 block text-sm font-medium portfolio-text">
                            {{ __('contact.form.email.label') }}
                        </label>

                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                            placeholder="{{ __('contact.form.email.placeholder') }}" class="portfolio-input rounded-xl px-4 py-3">

                        @error('email')
                            <p class="mt-2 text-sm text-red-400">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    <div>

                        <label for="subject" class="mb-2 block text-sm font-medium portfolio-text">
                            {{ __('contact.form.subject.label') }}
                        </label>

                        <input type="text" id="subject" name="subject" value="{{ old('subject') }}"
                            placeholder="{{ __('contact.form.subject.placeholder') }}" class="portfolio-input rounded-xl px-4 py-3">

                        @error('subject')
                            <p class="mt-2 text-sm text-red-400">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    <div>

                        <label for="message" class="mb-2 block text-sm font-medium portfolio-text">
                            {{ __('contact.form.message.label') }}
                        </label>

                        <textarea id="message" name="message" rows="6"
                            placeholder="{{ __('contact.form.message.placeholder') }}" class="portfolio-input rounded-xl px-4 py-3">
                        {{ old('message') }}
                        </textarea>

                        @error('message')
                            <p class="mt-2 text-sm text-red-400">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    {{-- Botão --}}
                    <button style="cursor: pointer" type="submit"
                        class="inline-flex w-full items-center justify-center gap-2 rounded-xl portfolio-text bg-portfolio-orange px-6 py-3.5 text-sm font-semibold transition duration-300 hover:-translate-y-0.5 hover:bg-orange-500">
                        {{ __('contact.form.submit') }}

                        <span aria-hidden="true">
                            →
                        </span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
