<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Night Market') }}</title>
    <meta name="description" content="{{ config('app.name', 'Night Market') }} — a local night market full of flavour, lights and life. Open every evening.">

    @fonts

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="bg-cream-50 font-sans text-night-900 antialiased">
    <header class="sticky top-0 z-50 border-b border-white/10 bg-night-950/85 backdrop-blur-md">
        <nav class="mx-auto flex max-w-6xl items-center justify-between gap-4 px-4 py-3 sm:px-6 lg:px-8" aria-label="Main navigation">
            <a href="#top" class="flex items-center gap-2.5">
                <span class="text-2xl leading-none" aria-hidden="true">🏮</span>
                <span class="font-display text-lg font-semibold tracking-tight text-cream-50">{{ config('app.name', 'Night Market') }}</span>
            </a>

            <ul class="hidden items-center gap-1 lg:flex">
                <li><a href="#top" class="rounded-full px-3 py-2 text-sm font-medium text-cream-100/80 transition hover:bg-white/10 hover:text-cream-50">Home</a></li>
                <li><a href="#about" class="rounded-full px-3 py-2 text-sm font-medium text-cream-100/80 transition hover:bg-white/10 hover:text-cream-50">About</a></li>
                <li><a href="#food" class="rounded-full px-3 py-2 text-sm font-medium text-cream-100/80 transition hover:bg-white/10 hover:text-cream-50">Food</a></li>
                <li><a href="#stalls" class="rounded-full px-3 py-2 text-sm font-medium text-cream-100/80 transition hover:bg-white/10 hover:text-cream-50">Stalls</a></li>
                <li><a href="#hours" class="rounded-full px-3 py-2 text-sm font-medium text-cream-100/80 transition hover:bg-white/10 hover:text-cream-50">Hours</a></li>
            </ul>

            <a href="#hours" class="hidden rounded-full bg-ember-500 px-4 py-2 text-sm font-semibold text-night-950 transition hover:bg-ember-400 lg:inline-block">Visit tonight</a>

            <button id="mobile-menu-button" type="button" class="inline-flex items-center justify-center rounded-lg p-2 text-cream-100 transition hover:bg-white/10 lg:hidden" aria-expanded="false" aria-controls="mobile-menu" aria-label="Toggle navigation menu">
                <svg data-menu-open class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 7h16M4 12h16M4 17h16"/>
                </svg>
                <svg data-menu-close class="hidden h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6l12 12M18 6L6 18"/>
                </svg>
            </button>
        </nav>

        <div id="mobile-menu" class="hidden border-t border-white/10 lg:hidden">
            <ul class="space-y-1 px-4 py-3">
                <li><a href="#top" class="block rounded-lg px-3 py-2.5 text-base font-medium text-cream-100/90 transition hover:bg-white/10 hover:text-cream-50">Home</a></li>
                <li><a href="#about" class="block rounded-lg px-3 py-2.5 text-base font-medium text-cream-100/90 transition hover:bg-white/10 hover:text-cream-50">About</a></li>
                <li><a href="#food" class="block rounded-lg px-3 py-2.5 text-base font-medium text-cream-100/90 transition hover:bg-white/10 hover:text-cream-50">Food</a></li>
                <li><a href="#stalls" class="block rounded-lg px-3 py-2.5 text-base font-medium text-cream-100/90 transition hover:bg-white/10 hover:text-cream-50">Stalls</a></li>
                <li><a href="#hours" class="block rounded-lg px-3 py-2.5 text-base font-medium text-cream-100/90 transition hover:bg-white/10 hover:text-cream-50">Hours</a></li>
                <li><a href="#hours" class="mt-2 block rounded-full bg-ember-500 px-4 py-2.5 text-center text-base font-semibold text-night-950 transition hover:bg-ember-400">Visit tonight</a></li>
            </ul>
        </div>
    </header>

    <main id="top">
        @yield('content')
    </main>

    <footer class="bg-night-950 text-cream-100">
        <div class="mx-auto max-w-6xl px-4 py-14 sm:px-6 lg:px-8">
            <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-4">
                <div class="lg:col-span-1">
                    <a href="#top" class="flex items-center gap-2.5">
                        <span class="text-2xl leading-none" aria-hidden="true">🏮</span>
                        <span class="font-display text-lg font-semibold tracking-tight text-cream-50">{{ config('app.name', 'Night Market') }}</span>
                    </a>
                    <p class="mt-4 max-w-xs text-sm leading-relaxed text-cream-100/60">
                        A local night market serving the neighbourhood since 2015. Good food, good vibes, every evening.
                    </p>
                    <div class="mt-5 flex gap-3">
                        <a href="#" class="flex h-9 w-9 items-center justify-center rounded-full border border-white/15 text-cream-100/70 transition hover:border-ember-400/60 hover:text-ember-400" aria-label="Instagram">
                            <svg class="h-4.5 w-4.5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true">
                                <rect x="3" y="3" width="18" height="18" rx="5"/>
                                <circle cx="12" cy="12" r="4"/>
                                <circle cx="17.3" cy="6.7" r="0.6" fill="currentColor" stroke="none"/>
                            </svg>
                        </a>
                        <a href="#" class="flex h-9 w-9 items-center justify-center rounded-full border border-white/15 text-cream-100/70 transition hover:border-ember-400/60 hover:text-ember-400" aria-label="Facebook">
                            <svg class="h-4.5 w-4.5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M13.5 3H16v3h-2c-.7 0-1 .3-1 1v2h3l-.5 3h-2.5v9h-3v-9H8V9h2.5V7c0-2.2 1.3-4 4-4z"/>
                            </svg>
                        </a>
                        <a href="#" class="flex h-9 w-9 items-center justify-center rounded-full border border-white/15 text-cream-100/70 transition hover:border-ember-400/60 hover:text-ember-400" aria-label="X">
                            <svg class="h-4.5 w-4.5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M4 4h3.4l4.2 5.9L16.4 4H20l-6.7 8.6L20.4 20h-3.4l-4.6-6.4L7.6 20H4l7.1-9.2L4 4z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="text-sm font-semibold uppercase tracking-wider text-cream-100/40">Explore</h3>
                    <ul class="mt-4 space-y-2.5 text-sm">
                        <li><a href="#about" class="text-cream-100/70 transition hover:text-ember-400">About the market</a></li>
                        <li><a href="#food" class="text-cream-100/70 transition hover:text-ember-400">Featured food</a></li>
                        <li><a href="#stalls" class="text-cream-100/70 transition hover:text-ember-400">Featured stalls</a></li>
                        <li><a href="#hours" class="text-cream-100/70 transition hover:text-ember-400">Opening hours</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-sm font-semibold uppercase tracking-wider text-cream-100/40">Visit</h3>
                    <ul class="mt-4 space-y-2.5 text-sm text-cream-100/70">
                        <li>Jalan Mawar No. 12,<br>Taman Sinar</li>
                        <li><a href="tel:+60123456789" class="transition hover:text-ember-400">(60) 12-345 6789</a></li>
                        <li><a href="mailto:hello@nightmarket.example" class="transition hover:text-ember-400">hello@nightmarket.example</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-sm font-semibold uppercase tracking-wider text-cream-100/40">Hours</h3>
                    <ul class="mt-4 space-y-2.5 text-sm text-cream-100/70">
                        <li class="flex justify-between gap-4"><span>Mon – Thu</span><span>5 PM – 11 PM</span></li>
                        <li class="flex justify-between gap-4"><span>Fri – Sat</span><span>5 PM – 12 AM</span></li>
                        <li class="flex justify-between gap-4"><span>Sunday</span><span>4 PM – 10 PM</span></li>
                    </ul>
                </div>
            </div>

            <div class="mt-10 flex flex-col items-center justify-between gap-2 border-t border-white/10 pt-6 text-sm text-cream-100/50 sm:flex-row">
                <p>Group 3 IIB</p>
                <p>Follow your nose. See you tonight.</p>
            </div>
        </div>
    </footer>
</body>
</html>
