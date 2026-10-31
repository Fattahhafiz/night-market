@extends('layouts.app')

@section('content')

<section class="relative overflow-hidden bg-night-950 text-cream-50">
    <div class="pointer-events-none absolute -top-32 right-0 h-96 w-96 rounded-full bg-ember-500/15 blur-3xl" aria-hidden="true"></div>
    <div class="pointer-events-none absolute -bottom-40 -left-32 h-96 w-96 rounded-full bg-indigo-500/15 blur-3xl" aria-hidden="true"></div>

    <div class="string-lights h-5" aria-hidden="true"></div>

    <div class="relative mx-auto max-w-6xl px-4 pb-24 pt-16 sm:px-6 sm:pb-32 sm:pt-24 lg:px-8">
        <div class="max-w-2xl">
            <span class="inline-flex items-center gap-2 rounded-full border border-ember-400/30 bg-ember-400/10 px-4 py-1.5 text-sm font-medium text-ember-300">
                <span class="relative flex h-2 w-2">
                    <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-ember-400 opacity-60"></span>
                    <span class="relative inline-flex h-2 w-2 rounded-full bg-ember-400"></span>
                </span>
                Open daily · 4 PM – midnight
            </span>

            <h1 class="mt-6 font-display text-5xl font-semibold leading-[1.05] tracking-tight sm:text-6xl lg:text-7xl">
                Taste the <span class="text-ember-400">Night</span>
            </h1>

            <p class="mt-6 max-w-xl text-lg leading-relaxed text-cream-100/70">
                From sizzling woks to sweet bubble tea, our night market brings the
                neighbourhood together every evening. Come hungry, leave happy.
            </p>

            <div class="mt-9 flex flex-wrap items-center gap-4">
                <a href="#food" class="rounded-full bg-ember-500 px-7 py-3 text-base font-semibold text-night-950 transition hover:bg-ember-400">
                    Explore the food
                </a>
                <a href="#hours" class="rounded-full border border-cream-100/25 px-7 py-3 text-base font-semibold text-cream-50 transition hover:border-cream-100/60 hover:bg-white/5">
                    Opening hours
                </a>
            </div>
        </div>

        <div class="pointer-events-none absolute right-8 top-24 hidden select-none lg:block" aria-hidden="true">
            <span class="animate-float block text-6xl drop-shadow-[0_0_25px_rgba(245,158,11,0.45)]">🏮</span>
        </div>
        <div class="pointer-events-none absolute bottom-28 right-40 hidden select-none lg:block" aria-hidden="true">
            <span class="animate-float-delayed block text-5xl drop-shadow-[0_0_20px_rgba(245,158,11,0.35)]">🏮</span>
        </div>
    </div>

    <svg class="relative block h-12 w-full text-cream-50 sm:h-16" viewBox="0 0 1440 48" preserveAspectRatio="none" aria-hidden="true">
        <path fill="currentColor" d="M0 48V28C240 8 480 8 720 28s480 20 720 0v20H0z"/>
    </svg>
</section>

<section id="about" class="scroll-mt-20 bg-cream-50 py-16 sm:py-24">
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <div class="grid items-center gap-12 lg:grid-cols-5">
            <div class="lg:col-span-3">
                <p class="text-sm font-semibold uppercase tracking-[0.2em] text-ember-600">Welcome to the market</p>
                <h2 class="mt-3 font-display text-3xl font-semibold tracking-tight text-night-900 sm:text-4xl">
                    A neighbourhood tradition after dark
                </h2>
                <p class="mt-5 text-lg leading-relaxed text-night-700/80">
                    Every evening, the streets around Jalan Mawar come alive with the smell of
                    grilled satay, fresh wok-fried noodles and sweet treats. For over a decade,
                    our night market has been where friends meet, families stroll and local
                    vendors do what they love.
                </p>
                <p class="mt-4 text-lg leading-relaxed text-night-700/80">
                    With more than a hundred stalls across five lanes, there is always
                    something new to discover. Follow your nose.
                </p>

                <ul class="mt-7 space-y-3">
                    <li class="flex items-center gap-3 text-night-800">
                        <span class="flex h-6 w-6 items-center justify-center rounded-full bg-ember-400/25 text-ember-700" aria-hidden="true">
                            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        </span>
                        Freshly cooked to order
                    </li>
                    <li class="flex items-center gap-3 text-night-800">
                        <span class="flex h-6 w-6 items-center justify-center rounded-full bg-ember-400/25 text-ember-700" aria-hidden="true">
                            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        </span>
                        Family friendly, kid approved
                    </li>
                    <li class="flex items-center gap-3 text-night-800">
                        <span class="flex h-6 w-6 items-center justify-center rounded-full bg-ember-400/25 text-ember-700" aria-hidden="true">
                            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        </span>
                        Cash and e-wallet accepted
                    </li>
                </ul>
            </div>

            <div class="space-y-4 lg:col-span-2">
                <div class="rounded-2xl border border-night-900/10 bg-white p-6 shadow-sm">
                    <p class="font-display text-4xl font-semibold text-ember-600">120+</p>
                    <p class="mt-1 text-sm font-medium text-night-700/70">Stalls under the lights</p>
                </div>
                <div class="rounded-2xl border border-night-900/10 bg-white p-6 shadow-sm">
                    <p class="font-display text-4xl font-semibold text-ember-600">40+</p>
                    <p class="mt-1 text-sm font-medium text-night-700/70">Local dishes to try</p>
                </div>
                <div class="rounded-2xl border border-night-900/10 bg-white p-6 shadow-sm">
                    <p class="font-display text-4xl font-semibold text-ember-600">2015</p>
                    <p class="mt-1 text-sm font-medium text-night-700/70">Serving the neighbourhood</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="food" class="scroll-mt-20 bg-cream-100 py-16 sm:py-24">
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-ember-600">Fan favourites</p>
            <h2 class="mt-3 font-display text-3xl font-semibold tracking-tight text-night-900 sm:text-4xl">
                Featured food
            </h2>
            <p class="mt-4 text-lg leading-relaxed text-night-700/80">
                A taste of what is sizzling at the market tonight. Every dish is cooked
                fresh while you wait.
            </p>
        </div>

        <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <article class="group rounded-2xl border border-night-900/10 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg">
                <div class="flex items-start justify-between">
                    <span class="flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br from-ember-400/25 to-ember-600/25 text-3xl transition duration-300 group-hover:scale-110" aria-hidden="true">🍢</span>
                    <span class="rounded-full bg-cream-100 px-3 py-1 text-sm font-semibold text-ember-700">$3.50</span>
                </div>
                <h3 class="mt-5 text-lg font-semibold text-night-900">Chicken Satay</h3>
                <p class="mt-2 text-sm leading-relaxed text-night-700/75">Char-grilled skewers with creamy peanut sauce and cucumber slices.</p>
                <p class="mt-4 text-xs font-semibold uppercase tracking-wider text-night-700/50">Stall A12 · Sate House</p>
            </article>

            <article class="group rounded-2xl border border-night-900/10 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg">
                <div class="flex items-start justify-between">
                    <span class="flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br from-ember-400/25 to-ember-600/25 text-3xl transition duration-300 group-hover:scale-110" aria-hidden="true">🍜</span>
                    <span class="rounded-full bg-cream-100 px-3 py-1 text-sm font-semibold text-ember-700">$4.00</span>
                </div>
                <h3 class="mt-5 text-lg font-semibold text-night-900">Bakso Noodle</h3>
                <p class="mt-2 text-sm leading-relaxed text-night-700/75">Springy beef meatballs in a rich, slow-simmered broth with greens.</p>
                <p class="mt-4 text-xs font-semibold uppercase tracking-wider text-night-700/50">Stall B04 · Wok Master</p>
            </article>

            <article class="group rounded-2xl border border-night-900/10 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg">
                <div class="flex items-start justify-between">
                    <span class="flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br from-ember-400/25 to-ember-600/25 text-3xl transition duration-300 group-hover:scale-110" aria-hidden="true">🐙</span>
                    <span class="rounded-full bg-cream-100 px-3 py-1 text-sm font-semibold text-ember-700">$5.00</span>
                </div>
                <h3 class="mt-5 text-lg font-semibold text-night-900">Takoyaki</h3>
                <p class="mt-2 text-sm leading-relaxed text-night-700/75">Crispy octopus balls topped with mayo, sauce and bonito flakes.</p>
                <p class="mt-4 text-xs font-semibold uppercase tracking-wider text-night-700/50">Stall C07 · Smoke &amp; Fire</p>
            </article>

            <article class="group rounded-2xl border border-night-900/10 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg">
                <div class="flex items-start justify-between">
                    <span class="flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br from-ember-400/25 to-ember-600/25 text-3xl transition duration-300 group-hover:scale-110" aria-hidden="true">🧋</span>
                    <span class="rounded-full bg-cream-100 px-3 py-1 text-sm font-semibold text-ember-700">$2.80</span>
                </div>
                <h3 class="mt-5 text-lg font-semibold text-night-900">Brown Sugar Boba</h3>
                <p class="mt-2 text-sm leading-relaxed text-night-700/75">Ice-cold milk tea with chewy brown sugar pearls. Sweetness on request.</p>
                <p class="mt-4 text-xs font-semibold uppercase tracking-wider text-night-700/50">Stall D02 · Sweet Corner</p>
            </article>

            <article class="group rounded-2xl border border-night-900/10 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg">
                <div class="flex items-start justify-between">
                    <span class="flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br from-ember-400/25 to-ember-600/25 text-3xl transition duration-300 group-hover:scale-110" aria-hidden="true">🥟</span>
                    <span class="rounded-full bg-cream-100 px-3 py-1 text-sm font-semibold text-ember-700">$4.50</span>
                </div>
                <h3 class="mt-5 text-lg font-semibold text-night-900">Pan-Fried Dumplings</h3>
                <p class="mt-2 text-sm leading-relaxed text-night-700/75">Golden pork dumplings with a crispy, savoury base and chilli oil.</p>
                <p class="mt-4 text-xs font-semibold uppercase tracking-wider text-night-700/50">Stall A08 · Dumpling Den</p>
            </article>

            <article class="group rounded-2xl border border-night-900/10 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg">
                <div class="flex items-start justify-between">
                    <span class="flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br from-ember-400/25 to-ember-600/25 text-3xl transition duration-300 group-hover:scale-110" aria-hidden="true">🥭</span>
                    <span class="rounded-full bg-cream-100 px-3 py-1 text-sm font-semibold text-ember-700">$3.20</span>
                </div>
                <h3 class="mt-5 text-lg font-semibold text-night-900">Mango Sticky Rice</h3>
                <p class="mt-2 text-sm leading-relaxed text-night-700/75">Sweet coconut sticky rice with ripe mango slices, served warm.</p>
                <p class="mt-4 text-xs font-semibold uppercase tracking-wider text-night-700/50">Stall E11 · Sweet Corner</p>
            </article>
        </div>
    </div>
</section>

<section id="stalls" class="scroll-mt-20 bg-night-900 py-16 text-cream-50 sm:py-24">
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-ember-400">Meet the vendors</p>
            <h2 class="mt-3 font-display text-3xl font-semibold tracking-tight sm:text-4xl">
                Featured stalls
            </h2>
            <p class="mt-4 text-lg leading-relaxed text-cream-100/70">
                The people behind the smoke and the sugar. Say hello — most stalls are
                family-run, and recipes go back generations.
            </p>
        </div>

        <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <article class="group rounded-2xl border border-white/10 bg-night-800/60 p-6 transition duration-300 hover:-translate-y-1 hover:border-ember-400/40">
                <div class="flex items-center justify-between">
                    <span class="rounded-full border border-ember-400/40 bg-ember-400/10 px-3 py-1 text-xs font-semibold tracking-wider text-ember-300">Stall A12</span>
                    <span class="text-2xl" aria-hidden="true">🏮</span>
                </div>
                <h3 class="mt-5 text-lg font-semibold">Sate House</h3>
                <p class="mt-2 text-sm leading-relaxed text-cream-100/65">Mastering the grill since 2015. Come for the satay, stay for the sambal.</p>
                <div class="mt-4 flex flex-wrap gap-2">
                    <span class="rounded-full bg-white/10 px-2.5 py-1 text-xs text-cream-100/70">Grill</span>
                    <span class="rounded-full bg-white/10 px-2.5 py-1 text-xs text-cream-100/70">Halal</span>
                    <span class="rounded-full bg-white/10 px-2.5 py-1 text-xs text-cream-100/70">Family recipe</span>
                </div>
            </article>

            <article class="group rounded-2xl border border-white/10 bg-night-800/60 p-6 transition duration-300 hover:-translate-y-1 hover:border-ember-400/40">
                <div class="flex items-center justify-between">
                    <span class="rounded-full border border-ember-400/40 bg-ember-400/10 px-3 py-1 text-xs font-semibold tracking-wider text-ember-300">Stall B04</span>
                    <span class="text-2xl" aria-hidden="true">🔥</span>
                </div>
                <h3 class="mt-5 text-lg font-semibold">Wok Master</h3>
                <p class="mt-2 text-sm leading-relaxed text-cream-100/65">High-heat wok cooking with noodles, rice and late-night comfort food.</p>
                <div class="mt-4 flex flex-wrap gap-2">
                    <span class="rounded-full bg-white/10 px-2.5 py-1 text-xs text-cream-100/70">Wok</span>
                    <span class="rounded-full bg-white/10 px-2.5 py-1 text-xs text-cream-100/70">Spicy</span>
                    <span class="rounded-full bg-white/10 px-2.5 py-1 text-xs text-cream-100/70">Vegan options</span>
                </div>
            </article>

            <article class="group rounded-2xl border border-white/10 bg-night-800/60 p-6 transition duration-300 hover:-translate-y-1 hover:border-ember-400/40">
                <div class="flex items-center justify-between">
                    <span class="rounded-full border border-ember-400/40 bg-ember-400/10 px-3 py-1 text-xs font-semibold tracking-wider text-ember-300">Stall D02</span>
                    <span class="text-2xl" aria-hidden="true">🍧</span>
                </div>
                <h3 class="mt-5 text-lg font-semibold">Sweet Corner</h3>
                <p class="mt-2 text-sm leading-relaxed text-cream-100/65">Bubble tea, shaved ice and every dessert your sweet tooth deserves.</p>
                <div class="mt-4 flex flex-wrap gap-2">
                    <span class="rounded-full bg-white/10 px-2.5 py-1 text-xs text-cream-100/70">Drinks</span>
                    <span class="rounded-full bg-white/10 px-2.5 py-1 text-xs text-cream-100/70">Desserts</span>
                    <span class="rounded-full bg-white/10 px-2.5 py-1 text-xs text-cream-100/70">Kids love it</span>
                </div>
            </article>

            <article class="group rounded-2xl border border-white/10 bg-night-800/60 p-6 transition duration-300 hover:-translate-y-1 hover:border-ember-400/40">
                <div class="flex items-center justify-between">
                    <span class="rounded-full border border-ember-400/40 bg-ember-400/10 px-3 py-1 text-xs font-semibold tracking-wider text-ember-300">Stall C07</span>
                    <span class="text-2xl" aria-hidden="true">🦐</span>
                </div>
                <h3 class="mt-5 text-lg font-semibold">Smoke &amp; Fire</h3>
                <p class="mt-2 text-sm leading-relaxed text-cream-100/65">Skewers, grilled seafood and anything that tastes better over open flame.</p>
                <div class="mt-4 flex flex-wrap gap-2">
                    <span class="rounded-full bg-white/10 px-2.5 py-1 text-xs text-cream-100/70">Grill</span>
                    <span class="rounded-full bg-white/10 px-2.5 py-1 text-xs text-cream-100/70">Seafood</span>
                    <span class="rounded-full bg-white/10 px-2.5 py-1 text-xs text-cream-100/70">Spicy</span>
                </div>
            </article>
        </div>
    </div>
</section>

<section id="hours" class="scroll-mt-20 bg-cream-50 py-16 sm:py-24">
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <div class="grid gap-10 lg:grid-cols-5">
            <div class="lg:col-span-2">
                <p class="text-sm font-semibold uppercase tracking-[0.2em] text-ember-600">Plan your visit</p>
                <h2 class="mt-3 font-display text-3xl font-semibold tracking-tight text-night-900 sm:text-4xl">
                    Opening hours
                </h2>
                <p class="mt-4 text-lg leading-relaxed text-night-700/80">
                    The gates open every evening. Kitchens usually keep serving until
                    30 minutes before closing.
                </p>

                <div class="mt-8 space-y-4">
                    <div class="flex items-start gap-4 rounded-2xl border border-night-900/10 bg-white p-5 shadow-sm">
                        <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-ember-400/25 text-xl" aria-hidden="true">📍</span>
                        <div>
                            <h3 class="font-semibold text-night-900">Find us</h3>
                            <p class="mt-0.5 text-sm text-night-700/75">Jalan Mawar No. 12, Taman Sinar — look for the lanterns.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 rounded-2xl border border-night-900/10 bg-white p-5 shadow-sm">
                        <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-ember-400/25 text-xl" aria-hidden="true">📞</span>
                        <div>
                            <h3 class="font-semibold text-night-900">Questions?</h3>
                            <p class="mt-0.5 text-sm text-night-700/75">Call <a href="tel:+60123456789" class="font-medium text-ember-700 underline decoration-ember-400/50 underline-offset-2 hover:decoration-ember-600">(60) 12-345 6789</a> or email <a href="mailto:hello@nightmarket.example" class="font-medium text-ember-700 underline decoration-ember-400/50 underline-offset-2 hover:decoration-ember-600">hello@nightmarket.example</a>.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-3">
                <div class="overflow-hidden rounded-2xl border border-night-900/10 bg-white shadow-sm">
                    <div class="border-b border-night-900/10 bg-night-900 px-6 py-4">
                        <h3 class="font-display text-lg font-semibold text-cream-50">This week</h3>
                    </div>

                    @php
                        $hours = [
                            'Monday' => '5:00 PM – 11:00 PM',
                            'Tuesday' => '5:00 PM – 11:00 PM',
                            'Wednesday' => '5:00 PM – 11:00 PM',
                            'Thursday' => '5:00 PM – 11:00 PM',
                            'Friday' => '5:00 PM – 12:00 AM',
                            'Saturday' => '5:00 PM – 12:00 AM',
                            'Sunday' => '4:00 PM – 10:00 PM',
                        ];
                        $today = date('l');
                    @endphp

                    <ul>
                        @foreach ($hours as $day => $time)
                            @php $isToday = $day === $today; @endphp
                            <li class="flex items-center justify-between px-6 py-4 {{ $isToday ? 'bg-ember-400/15' : '' }} {{ ! $loop->last ? 'border-b border-night-900/5' : '' }}">
                                <span class="flex items-center gap-3 font-medium {{ $isToday ? 'text-ember-700' : 'text-night-900' }}">
                                    {{ $day }}
                                    @if ($isToday)
                                        <span class="rounded-full bg-ember-500 px-2.5 py-0.5 text-xs font-semibold uppercase tracking-wide text-night-950">Today</span>
                                    @endif
                                </span>
                                <span class="text-sm {{ $isToday ? 'font-semibold text-ember-700' : 'text-night-700/75' }}">{{ $time }}</span>
                            </li>
                        @endforeach
                    </ul>

                    <p class="border-t border-night-900/10 bg-cream-100 px-6 py-3.5 text-sm text-night-700/70">
                        Hours may vary on public holidays. Follow us for updates.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
