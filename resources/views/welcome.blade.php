<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Noah Fawwas Dzakki Wibowo — Portfolio</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}?v=2">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon.png') }}?v=2">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}?v=2">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}?v=2">

        <!-- Fonts: Manrope -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="is-loading bg-[#f8f8f8] text-[#333333] font-sans antialiased overflow-x-hidden">
        {{-- Branded Loading Screen --}}
        <div
            id="page-loader"
            role="status"
            aria-live="polite"
            aria-label="Loading Noah Fawwas Portfolio"
            class="loader-overlay fixed inset-0 z-[100] flex flex-col items-center justify-center bg-[#f8f8f8] overflow-hidden"
        >
            {{-- Animated Design-Matched Particle Canvas --}}
            <canvas
                id="loader-particles"
                aria-hidden="true"
                class="pointer-events-none absolute inset-0 size-full"
            ></canvas>

            {{-- Subtle ambient shapes matching landing page palette (#ffdab9 peach & #f5fae1 footer cream) --}}
            <div aria-hidden="true" class="pointer-events-none absolute -top-24 -right-24 size-[340px] sm:size-[460px] rounded-full bg-[#ffdab9]/45 blur-3xl loader-orb"></div>
            <div aria-hidden="true" class="pointer-events-none absolute -bottom-28 -left-24 size-[340px] sm:size-[480px] rounded-full bg-[#f5fae1] blur-3xl loader-orb-delayed"></div>

            {{-- Floating Design-Matched Skill Bubbles (placed cleanly outside center safe zone) --}}
            <div aria-hidden="true" class="pointer-events-none hidden md:flex absolute inset-0 items-center justify-center px-6">
                <div class="relative w-full max-w-[1060px] h-[460px]">
                    <div class="absolute left-[2%] top-[10%] flex items-center gap-2.5 px-3.5 py-2 rounded-full bg-white/85 backdrop-blur-sm shadow-[0_6px_24px_-6px_rgba(0,0,0,0.08)] border border-[#ffdab9]/60 loader-float-card" style="--float-delay: 0s;">
                        <span class="size-[32px] rounded-full bg-[rgba(255,218,185,0.45)] flex items-center justify-center p-1.5">
                            <img src="{{ asset('images/figma/f576a.png') }}" alt="" class="size-full object-contain -scale-y-100 rotate-180">
                        </span>
                        <span class="font-bold text-[13px] text-[#333333]">Front End</span>
                    </div>

                    <div class="absolute right-[2%] top-[14%] flex items-center gap-2.5 px-3.5 py-2 rounded-full bg-white/85 backdrop-blur-sm shadow-[0_6px_24px_-6px_rgba(0,0,0,0.08)] border border-[#ffdab9]/60 loader-float-card" style="--float-delay: 0.7s;">
                        <span class="size-[32px] rounded-full bg-[rgba(255,218,185,0.45)] flex items-center justify-center p-1.5">
                            <img src="{{ asset('images/figma/af9e2.png') }}" alt="" class="size-full object-contain">
                        </span>
                        <span class="font-bold text-[13px] text-[#333333]">UI / UX</span>
                    </div>

                    <div class="absolute left-[2%] bottom-[8%] flex items-center gap-2.5 px-3.5 py-2 rounded-full bg-white/85 backdrop-blur-sm shadow-[0_6px_24px_-6px_rgba(0,0,0,0.08)] border border-[#ffdab9]/60 loader-float-card" style="--float-delay: 1.3s;">
                        <span class="size-[32px] rounded-full bg-[rgba(255,218,185,0.45)] flex items-center justify-center p-1.5">
                            <img src="{{ asset('images/figma/fd9b9.png') }}" alt="" class="size-full object-contain">
                        </span>
                        <span class="font-bold text-[13px] text-[#333333]">Photography</span>
                    </div>

                    <div class="absolute right-[3%] bottom-[10%] flex items-center gap-2 px-3.5 py-2 rounded-full bg-[#f5fae1]/90 backdrop-blur-sm shadow-[0_6px_24px_-6px_rgba(0,0,0,0.06)] border border-[#333333]/10 loader-float-card" style="--float-delay: 1.8s;">
                        <img src="{{ asset('images/figma/e6f77.svg') }}" alt="" class="size-[12px]">
                        <span class="font-semibold text-[12px] text-[#333333]">Portfolio 2026</span>
                    </div>
                </div>
            </div>

            {{-- Center Branded Stack --}}
            <div id="loader-content" class="relative z-10 flex flex-col items-center px-6 text-center transition-all duration-500 ease-[cubic-bezier(0.22,1,0.36,1)]">
                {{-- Signature Figma Timeline Ring Emblem with Concentric Dashed Orbits --}}
                <div class="relative flex items-center justify-center size-[116px] loader-fade-up" style="--loader-delay: 60ms;">
                    <span aria-hidden="true" class="absolute inset-0 rounded-full border border-dashed border-[#333333]/20 loader-spin-reverse"></span>
                    <span aria-hidden="true" class="absolute inset-[14px] rounded-full border-2 border-[#ffdab9]/80 loader-pulse-ring"></span>
                    <img
                        src="{{ asset('images/figma/35152.svg') }}"
                        alt=""
                        width="58"
                        height="58"
                        class="relative z-10 size-[58px] loader-spin-slow"
                    >
                    <img
                        src="{{ asset('images/figma/49c9d.svg') }}"
                        alt=""
                        width="26"
                        height="26"
                        class="absolute z-20 right-[18px] bottom-[16px] size-[26px] loader-ring-bob"
                    >
                </div>

                {{-- Masked Name Reveal --}}
                <div class="mt-6 overflow-hidden">
                    <p class="font-bold text-[34px] sm:text-[46px] leading-tight text-black tracking-[-0.02em] loader-text-rise">
                        Noah Fawwas
                    </p>
                </div>
                <p class="mt-1.5 font-medium text-[14px] sm:text-[16px] text-[#888888] loader-fade-up" style="--loader-delay: 200ms;">
                    UI/UX Designer &amp; Front End Developer
                </p>

                {{-- Peach-to-Ink Progress Bar matching Header/Button tokens --}}
                <div class="mt-8 w-[260px] sm:w-[320px] loader-fade-up" style="--loader-delay: 280ms;">
                    <div class="h-[9px] w-full rounded-full bg-[rgba(255,218,185,0.45)] overflow-hidden shadow-inner">
                        <div
                            id="loader-bar"
                            style="transform: scaleX(0);"
                            class="h-full w-full origin-left rounded-full bg-linear-to-r from-[#f7b982] via-[#e59866] to-[#333333]"
                        ></div>
                    </div>
                    <div class="mt-3 flex items-center justify-between text-[13px] font-semibold text-[#888888]">
                        <span id="loader-status" class="transition-opacity duration-300">Crafting interface...</span>
                        <span id="loader-percent" class="tabular-nums text-[#333333]">0%</span>
                    </div>
                </div>
            </div>

            {{-- Trailing Peach Curtain Edge (echoes the #ffdab9 header bar as the loader exits upward) --}}
            <div
                id="loader-curtain-accent"
                aria-hidden="true"
                class="pointer-events-none absolute bottom-0 left-0 right-0 h-[14px] bg-[#ffdab9]"
            ></div>
        </div>

        {{-- Top Scroll Progress Bar --}}
        <div class="fixed top-0 left-0 right-0 z-50 h-[3px] bg-transparent pointer-events-none">
            <div
                id="scroll-progress"
                style="transform: scaleX(0);"
                class="h-full w-full origin-left bg-linear-to-r from-[#ffdab9] via-[#f2b580] to-[#333333] transition-transform duration-150 ease-out"
            ></div>
        </div>

        {{-- Header --}}
        <header data-reveal="up" class="w-full pt-6 sm:pt-10 lg:pt-[55px] px-4 sm:px-8 lg:px-[70px]">
            <nav
                aria-label="Primary Navigation"
                class="mx-auto max-w-[1300px] h-[72px] sm:h-[90px] lg:h-[111px] bg-[#ffdab9] rounded-[15px] flex items-center justify-center px-4"
            >
                <ul id="nav-links" class="relative flex items-center justify-center gap-6 sm:gap-12 lg:gap-[60px] text-[16px] sm:text-[20px] lg:text-[24px] font-bold leading-normal text-[#333333]">
                    <span
                        id="nav-indicator"
                        aria-hidden="true"
                        class="pointer-events-none absolute -bottom-1.5 left-0 h-[3px] rounded-full bg-[#333333] opacity-0 transition-all duration-500 ease-[cubic-bezier(0.22,1,0.36,1)]"
                    ></span>
                    <li>
                        <a href="#about" data-nav-link class="nav-link inline-block py-1 transition-all duration-300 ease-out hover:-translate-y-0.5 hover:opacity-75 active:scale-95 whitespace-nowrap">About Me</a>
                    </li>
                    <li>
                        <a href="#experience" data-nav-link class="nav-link inline-block py-1 transition-all duration-300 ease-out hover:-translate-y-0.5 hover:opacity-75 active:scale-95 whitespace-nowrap">Experience</a>
                    </li>
                    <li>
                        <a href="#portfolio" data-nav-link class="nav-link inline-block py-1 transition-all duration-300 ease-out hover:-translate-y-0.5 hover:opacity-75 active:scale-95 whitespace-nowrap">Portfolio</a>
                    </li>
                </ul>
            </nav>
        </header>

        <main>
            {{-- Hero / About Me Section --}}
            <section id="about" class="mx-auto max-w-[1440px] px-6 sm:px-12 lg:px-[96px] pt-10 sm:pt-16 lg:pt-[90px]">
                <div class="flex flex-col-reverse lg:flex-row lg:items-start lg:justify-between gap-12 lg:gap-10">
                    {{-- Left Column --}}
                    <div class="flex flex-col items-start lg:max-w-[506px] w-full">
                        {{-- Status Bar --}}
                        <div data-reveal="up" data-reveal-delay="60" class="inline-flex items-center justify-center gap-[18px] px-[12px] py-[10px] rounded-[24px] bg-[rgba(152,251,152,0.3)] backdrop-blur-[4px]">
                            <img
                                src="{{ asset('images/figma/e6f77.svg') }}"
                                alt=""
                                width="26"
                                height="26"
                                class="size-[26px] shrink-0 block"
                            >
                            <span class="font-bold text-[15px] sm:text-[18px] leading-normal text-[#333333] whitespace-nowrap">
                                AVAILABLE FOR WORK
                            </span>
                        </div>

                        {{-- Hero Heading --}}
                        <h1 data-reveal="up" data-reveal-delay="140" class="mt-6 lg:mt-[30px] font-bold text-[36px] sm:text-[48px] lg:text-[64px] leading-[1.28] lg:leading-[1.36] text-black max-w-[474px]">
                            Hi, I’m Noah Fawwas Dzakki Wibowo
                        </h1>

                        {{-- Bio --}}
                        <p data-reveal="up" data-reveal-delay="220" class="mt-6 lg:mt-[30px] font-normal text-[15px] sm:text-[16px] leading-[1.45] text-[#888888] text-justify max-w-[506px]">
                            I’m a student of Telkom University Purwokerto majoring in Information Systems. Trained in developing User Interface that is intuitive, responsive, and user experience oriented. Focused on design solutions that are not only visually appealing but also improve user efficiency and satisfaction in using digital products.
                        </p>

                        {{-- Scroll Down --}}
                        <a
                            href="#experience"
                            data-reveal="up"
                            data-reveal-delay="300"
                            class="mt-8 lg:mt-[56px] inline-flex items-center gap-[5px] text-[16px] font-normal leading-normal text-[#333333] hover:opacity-75 transition-opacity"
                        >
                            <span>Scroll down</span>
                            <img
                                src="{{ asset('images/figma/f9eeb.svg') }}"
                                alt=""
                                width="20"
                                height="18"
                                class="w-[20px] h-[18px] shrink-0 block animate-gentle-float"
                            >
                        </a>
                    </div>

                    {{-- Right Column: Profile + Socials --}}
                    <div class="flex flex-col items-center lg:items-end shrink-0 w-full lg:w-auto">
                        <div id="hero-profile" class="w-full max-w-[340px] sm:max-w-[400px] lg:w-[431px] will-change-transform">
                            <div data-reveal="scale" data-reveal-delay="120" class="w-full aspect-square rounded-[25px] overflow-hidden">
                                <img
                                    src="{{ asset('images/figma/df5a5.png') }}"
                                    alt="Noah Fawwas Dzakki Wibowo"
                                    class="size-full object-cover block"
                                >
                            </div>
                        </div>

                        {{-- Social Icons --}}
                        <div data-reveal="up" data-reveal-delay="260" class="mt-8 lg:mt-[44px] lg:mr-[13px] flex items-center justify-center gap-5 sm:gap-8 lg:gap-[38px]">
                            <a
                                href="https://www.instagram.com/skyravens12/"
                                target="_blank"
                                rel="noopener noreferrer"
                                aria-label="Instagram"
                                class="bg-[rgba(255,218,185,0.4)] hover:bg-[rgba(255,218,185,0.75)] transition-colors rounded-[33px] size-[56px] sm:size-[66px] p-[10px] sm:p-[11px] flex items-center justify-center shrink-0"
                            >
                                <span class="relative block size-[36px] sm:size-[44px] overflow-hidden">
                                    <img
                                        src="{{ asset('images/figma/37855.png') }}"
                                        alt="Instagram"
                                        class="absolute left-[-5.26%] top-[-5.26%] max-w-none size-[110.53%]"
                                    >
                                </span>
                            </a>
                            <a
                                href="https://github.com/SkyRavens12"
                                target="_blank"
                                rel="noopener noreferrer"
                                aria-label="GitHub"
                                class="bg-[rgba(255,218,185,0.4)] hover:bg-[rgba(255,218,185,0.75)] transition-colors rounded-[33px] size-[56px] sm:size-[66px] p-[10px] sm:p-[11px] flex items-center justify-center shrink-0"
                            >
                                <img
                                    src="{{ asset('images/figma/b3e2d.png') }}"
                                    alt="GitHub"
                                    class="size-[36px] sm:size-[44px] object-cover block"
                                >
                            </a>
                            <a
                                href="https://www.linkedin.com/in/noah-fawwas-dzakki-wibowo-682042242/"
                                target="_blank"
                                rel="noopener noreferrer"
                                aria-label="LinkedIn"
                                class="bg-[rgba(255,218,185,0.4)] hover:bg-[rgba(255,218,185,0.75)] transition-colors rounded-[33px] size-[56px] sm:size-[66px] p-[10px] sm:p-[11px] flex items-center justify-center shrink-0"
                            >
                                <img
                                    src="{{ asset('images/figma/98997.png') }}"
                                    alt="LinkedIn"
                                    class="size-[36px] sm:size-[44px] object-cover block"
                                >
                            </a>
                            <a
                                href="https://dribbble.com/NoahFawwas"
                                target="_blank"
                                rel="noopener noreferrer"
                                aria-label="Dribbble"
                                class="bg-[rgba(255,218,185,0.4)] hover:bg-[rgba(255,218,185,0.75)] transition-colors rounded-[33px] size-[56px] sm:size-[66px] p-[10px] sm:p-[11px] flex items-center justify-center shrink-0"
                            >
                                <img
                                    src="{{ asset('images/figma/47529.png') }}"
                                    alt="Dribbble"
                                    class="size-[36px] sm:size-[44px] object-cover block"
                                >
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            {{-- My Experience Section --}}
            <section id="experience" class="mx-auto max-w-[1440px] px-6 sm:px-12 lg:px-[96px] pt-20 sm:pt-28 lg:pt-[155px]">
                <h2 data-reveal="up" class="font-bold text-[32px] sm:text-[36px] lg:text-[40px] leading-normal text-[#333333] text-center">
                    My Experience
                </h2>

                @php
                    $experiences = [
                        [
                            'org' => 'Organization, Student Association',
                            'place' => 'Telkom University Purwokerto',
                            'period' => 'Dec 2025 - Now',
                            'dot' => 'images/figma/35152.svg',
                            'line' => 'images/figma/f3d3a.png',
                            'lineHeight' => 'h-[199px]',
                            'role' => 'Human Resource',
                            'desc' => 'Led internal talent management, committee recruitment, and member engagement initiatives within the Information Systems Student Association (HMSI). Coordinated selection processes for flagship student events (Pemira SI, Makrab) while fostering a collaborative organizational culture through bonding and appreciation programs (Pelepasan Internship HMSI).',
                            'orgWidth' => 'lg:max-w-[317px]',
                            'roleOffset' => '',
                        ],
                        [
                            'org' => 'Organization, KSR',
                            'place' => 'Telkom University Purwokerto',
                            'period' => 'Nov 2025 - Now',
                            'dot' => 'images/figma/35152.svg',
                            'line' => 'images/figma/bec8d.png',
                            'lineHeight' => 'h-[192px]',
                            'role' => 'Communication And Information',
                            'desc' => 'Spearheaded visual communication, graphic design, and event documentation for the Red Cross Volunteer Unit (KSR PMI) at Telkom University Purwokerto. Produced cohesive publication assets and photography coverage for major volunteer initiatives and competitions, ensuring clear public messaging and strong brand consistency across digital platforms.',
                            'orgWidth' => 'lg:max-w-[317px]',
                            'roleOffset' => '',
                        ],
                        [
                            'org' => 'Organization, EKSISTEL',
                            'place' => null,
                            'period' => 'Oct 2022 - Aug 2024',
                            'dot' => 'images/figma/49c9d.svg',
                            'line' => 'images/figma/bec8d.png',
                            'lineHeight' => 'h-[192px]',
                            'role' => 'Content Creator',
                            'desc' => 'Contributed to visual documentation, event photography, and digital media production for SMK Telkom Purwokerto\'s student publication team (Eksistel). Covered school-wide events and edited visual assets for social media channels, building a strong foundation in visual storytelling and cross-team coordination.',
                            'orgWidth' => 'lg:max-w-[317px]',
                            'roleOffset' => '',
                        ],
                        [
                            'org' => 'Internship, Everest Project',
                            'place' => null,
                            'period' => 'Apr 2023 - Sept 2023',
                            'dot' => 'images/figma/49c9d.svg',
                            'line' => 'images/figma/978a2.png',
                            'lineHeight' => 'h-[128px]',
                            'role' => 'UI/UX Designer, Website Dev, Digital Market Research',
                            'desc' => 'Completed a multidisciplinary internship in Yogyakarta contributing across UI/UX design, web development, and digital market research. Designed responsive web and mobile landing pages, built web solutions with Laravel, and analyzed TikTok Shop market trends using Kalodata to support data-informed product and campaign decisions.',
                            'orgWidth' => 'lg:max-w-[362px]',
                            'roleOffset' => '',
                        ],
                    ];
                @endphp

                <div class="mt-12 lg:mt-[114px] flex flex-col">
                    @foreach ($experiences as $index => $exp)
                        <div class="grid grid-cols-[48px_1fr] lg:grid-cols-[minmax(0,564px)_48px_minmax(0,1fr)] gap-x-5 lg:gap-x-0 items-stretch">
                            {{-- Desktop Left: Organization & Dates --}}
                            <div data-reveal="left" data-reveal-delay="{{ $index * 90 }}" class="hidden lg:flex flex-col gap-[10px] items-start {{ $exp['orgWidth'] }} pb-12">
                                <h3 class="font-bold text-[28px] leading-normal text-[#333333] text-justify w-full">
                                    {{ $exp['org'] }}
                                </h3>
                                @if ($exp['place'])
                                    <p class="font-medium text-[20px] leading-normal text-[#888888] w-full">
                                        {{ $exp['place'] }}
                                    </p>
                                @endif
                                <p class="font-medium text-[20px] leading-normal text-[#888888] w-full">
                                    {{ $exp['period'] }}
                                </p>
                            </div>

                            {{-- Center Timeline Column (Left column on mobile) --}}
                            <div class="flex flex-col items-center">
                                <img
                                    src="{{ asset($exp['dot']) }}"
                                    alt=""
                                    width="48"
                                    height="48"
                                    data-reveal="pop"
                                    data-reveal-delay="{{ $index * 90 + 60 }}"
                                    class="size-[48px] shrink-0 block"
                                >
                                <div class="flex-1 flex justify-center w-full min-h-[80px] lg:min-h-[120px]">
                                    <img
                                        src="{{ asset($exp['line']) }}"
                                        alt=""
                                        width="1"
                                        class="w-[1px] h-full object-fill block"
                                    >
                                </div>
                            </div>

                            {{-- Right Column: Role & Description (includes Org/Dates on mobile) --}}
                            <div data-reveal="right" data-reveal-delay="{{ $index * 90 + 110 }}" class="lg:pl-[130px] {{ $loop->last ? 'pb-6 lg:pb-8' : 'pb-14 lg:pb-16' }} {{ $exp['roleOffset'] }}">
                                {{-- Mobile-only Organization & Dates --}}
                                <div class="flex flex-col gap-1 mb-3 lg:hidden">
                                    <h3 class="font-bold text-[20px] sm:text-[24px] leading-normal text-[#333333]">
                                        {{ $exp['org'] }}
                                    </h3>
                                    @if ($exp['place'])
                                        <p class="font-medium text-[15px] sm:text-[17px] leading-normal text-[#888888]">
                                            {{ $exp['place'] }}
                                        </p>
                                    @endif
                                    <p class="font-medium text-[15px] sm:text-[17px] leading-normal text-[#888888]">
                                        {{ $exp['period'] }}
                                    </p>
                                </div>

                                <div class="flex flex-col gap-3 lg:gap-[15px] items-start lg:max-w-[400px]">
                                    <h4 class="font-bold text-[22px] sm:text-[25px] lg:text-[28px] leading-normal text-[#333333] w-full">
                                        {{ $exp['role'] }}
                                    </h4>
                                    <p class="font-medium text-[16px] sm:text-[18px] lg:text-[20px] leading-normal text-[#888888] text-justify w-full">
                                        {{ $exp['desc'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

            {{-- My Skills Section --}}
            <section id="skills" class="mx-auto max-w-[1440px] px-6 sm:px-12 lg:px-[96px] pt-20 sm:pt-28 lg:pt-[110px]">
                <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-12 lg:gap-10">
                    {{-- Left Heading & Description --}}
                    <div data-reveal="left" class="flex flex-col gap-[10px] items-start lg:max-w-[506px] w-full">
                        <h2 class="font-bold text-[32px] sm:text-[36px] lg:text-[40px] leading-normal text-[#333333] w-full">
                            My Skills
                        </h2>
                        <p class="font-medium text-[16px] sm:text-[18px] lg:text-[20px] leading-normal text-[#888888] text-justify w-full">
                            A multidisciplinary blend of web development, interface design, and visual arts—focused on building clean, user-centered experiences.
                        </p>
                    </div>

                    {{-- Right Skills List --}}
                    @php
                        $skills = [
                            [
                                'title' => 'Front End',
                                'desc' => 'Building responsive, interactive, and clean web interfaces using modern web technologies like HTML, CSS, JavaScript, and Laravel.',
                                'icon' => 'images/figma/f576a.png',
                                'iconClass' => '-scale-y-100 rotate-180',
                            ],
                            [
                                'title' => 'UI UX',
                                'desc' => 'esigning intuitive user flows, wireframes, and cohesive visual interfaces in Figma with a focus on usability and minimal aesthetics.',
                                'icon' => 'images/figma/af9e2.png',
                                'iconClass' => '',
                            ],
                            [
                                'title' => 'Photography',
                                'desc' => 'Capturing portraits, events, and street moments with attention to lighting, composition, and post-processing in Lightroom and Photoshop.',
                                'icon' => 'images/figma/fd9b9.png',
                                'iconClass' => '',
                            ],
                        ];
                    @endphp

                    <div class="flex flex-col gap-9 lg:gap-[38px] w-full lg:w-[400px] lg:mr-[106px] lg:mt-[27px]">
                        @foreach ($skills as $index => $skill)
                            <div data-reveal="right" data-reveal-delay="{{ $index * 110 }}" class="group flex flex-col">
                                <div class="flex items-start gap-6 lg:gap-[27px]">
                                    <div class="size-[48px] sm:size-[55px] shrink-0 flex items-center justify-center transition-transform duration-300 ease-out group-hover:-translate-y-1 group-hover:scale-105">
                                        <img
                                            src="{{ asset($skill['icon']) }}"
                                            alt="{{ $skill['title'] }}"
                                            class="size-full object-cover block {{ $skill['iconClass'] }}"
                                        >
                                    </div>
                                    <div class="flex flex-col gap-[10px] items-start flex-1 max-w-[318px]">
                                        <h3 class="font-bold text-[24px] sm:text-[28px] leading-normal text-[#333333] w-full">
                                            {{ $skill['title'] }}
                                        </h3>
                                        <p class="font-medium text-[15px] sm:text-[16px] leading-normal text-[#888888] text-justify w-full">
                                            {{ $skill['desc'] }}
                                        </p>
                                    </div>
                                </div>

                                {{-- Horizontal Dashed Divider (exact Figma asset rotated -90deg) --}}
                                <div class="mt-8 lg:mt-[36px] relative h-[2px] w-full overflow-hidden flex items-center justify-center">
                                    <div class="-rotate-90 flex-none h-[396.5px] w-[1px]">
                                        <img
                                            src="{{ asset('images/figma/c0de1.png') }}"
                                            alt=""
                                            width="1"
                                            height="397"
                                            class="block max-w-none size-full"
                                        >
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            {{-- Credentials & Beyond Section --}}
            @php
                $certMeta = [
                    '01-sap-hr050-hcm.png' => [
                        'title' => 'SAP HR050 — Human Capital Management',
                        'eyebrow' => 'CERTIFICATE / JUN 9, 2026',
                        'lead' => 'Certificate of Accomplishment from the SAP University Partnership Program at Telkom University.',
                        'subtitle' => 'Business Processes in Human Capital Management.',
                        'desc' => 'Completed the SAP HR050 course covering enterprise HR workflows and business processes in Human Capital Management. Issued by PT. Harfan Tri Megah (EDUGATE) / SAP Partner (ID: 550190133).',
                        'actionUrl' => asset('certificates/01-sap-hr050-hcm.pdf'),
                        'actionLabel' => 'View certificate PDF',
                    ],
                    '02-cisco-ccnav7-itn.png' => [
                        'title' => 'CCNAv7 — Introduction to Networks',
                        'eyebrow' => 'CERTIFICATE / AUG 21, 2024',
                        'lead' => 'Cisco Networking Academy credential covering core networking, routing, switching, and security.',
                        'subtitle' => 'Networking fundamentals & configuration.',
                        'desc' => 'Completed through SMK Telkom Sandhy Putra Purwokerto. Covers configuring switches and routers, IPv4/IPv6 addressing schemes, Ethernet and OSI layers, network security best practices, and troubleshooting.',
                        'actionUrl' => asset('certificates/02-cisco-ccnav7-itn.pdf'),
                        'actionLabel' => 'View certificate PDF',
                    ],
                    '03-pcap-python-essentials.png' => [
                        'title' => 'PCAP — Programming Essentials in Python',
                        'eyebrow' => 'CERTIFICATE / FEB 7, 2024',
                        'lead' => 'Statement of Achievement provided by Cisco Networking Academy in collaboration with OpenEDG Python Institute.',
                        'subtitle' => 'Core Python & Object-Oriented Programming.',
                        'desc' => 'Covers universal programming concepts, data structures, algorithms, standard library modules, file handling, generators/iterators, and OOP fundamentals in Python 3.',
                        'actionUrl' => asset('certificates/03-pcap-python-essentials.pdf'),
                        'actionLabel' => 'View certificate PDF',
                    ],
                    '04-aws-academy-cloud-foundations.png' => [
                        'title' => 'AWS Academy — Cloud Foundations',
                        'eyebrow' => 'CERTIFICATE / JAN 26, 2024',
                        'lead' => 'AWS Academy Graduate Certificate of Completion (20 hours) with verified Credly digital badge.',
                        'subtitle' => 'Cloud architecture & AWS core services.',
                        'desc' => 'Completed 20 hours of foundational cloud training covering AWS architecture, core cloud services, security, pricing, and cloud deployment models. Verified digital badge available on Credly.',
                        'actionUrl' => 'https://www.credly.com/go/gtK9B5Di',
                        'actionLabel' => 'Verify Credly badge',
                    ],
                ];

                $certDir = public_path('images/certificates');
                $certFiles = is_dir($certDir)
                    ? collect(glob($certDir . '/*.{jpg,jpeg,png,webp,JPG,JPEG,PNG,WEBP}', GLOB_BRACE) ?: [])
                        ->map(function ($path) use ($certMeta) {
                            $file = basename($path);
                            $fallbackName = ucwords(str_replace(['-', '_'], ' ', pathinfo($path, PATHINFO_FILENAME)));
                            $meta = $certMeta[$file] ?? [];
                            return [
                                'src' => asset('images/certificates/' . $file),
                                'alt' => $meta['title'] ?? $fallbackName,
                                'title' => $meta['title'] ?? $fallbackName,
                                'eyebrow' => $meta['eyebrow'] ?? 'CERTIFICATE / CREDENTIAL',
                                'lead' => $meta['lead'] ?? 'Verified certificate and achievement from continuous learning and participation.',
                                'subtitle' => $meta['subtitle'] ?? 'Credential Highlight',
                                'desc' => $meta['desc'] ?? 'Documented certification demonstrating hands-on growth across design, technology, and community involvement.',
                                'actionUrl' => $meta['actionUrl'] ?? asset('images/certificates/' . $file),
                                'actionLabel' => $meta['actionLabel'] ?? 'View certificate',
                            ];
                        })
                        ->values()
                        ->all()
                    : [];
            @endphp

            <section id="credentials" class="mx-auto max-w-[1440px] px-6 sm:px-12 lg:px-[96px] pt-20 lg:pt-[90px]">
                <h2 data-reveal="up" class="font-bold text-[32px] sm:text-[36px] lg:text-[40px] leading-normal text-[#333333]">
                    Credentials &amp; Beyond
                </h2>

                <div
                    id="credentials-grid"
                    data-lightbox-group="CREDENTIALS"
                    class="mt-6 lg:mt-[24px] -mx-4 px-4 pt-3 pb-8 flex gap-6 lg:gap-[24px] overflow-x-auto snap-x snap-mandatory scroll-smooth no-scrollbar cursor-grab active:cursor-grabbing"
                >
                    @if (count($certFiles) > 0)
                        @foreach ($certFiles as $index => $cert)
                            <div
                                data-reveal="scale"
                                data-reveal-delay="{{ min($index, 3) * 90 }}"
                                class="shrink-0 w-[86%] sm:w-[72%] lg:w-[calc(50%-12px)] snap-start"
                            >
                                <article
                                    data-lightbox-item
                                    data-src="{{ $cert['src'] }}"
                                    data-title="{{ $cert['title'] }}"
                                    data-eyebrow="{{ $cert['eyebrow'] }}"
                                    data-lead="{{ $cert['lead'] }}"
                                    data-subtitle="{{ $cert['subtitle'] }}"
                                    data-desc="{{ $cert['desc'] }}"
                                    data-action-url="{{ $cert['actionUrl'] }}"
                                    data-action-label="{{ $cert['actionLabel'] }}"
                                    tabindex="0"
                                    role="button"
                                    aria-label="Inspect {{ $cert['title'] }}"
                                    class="showcase-card cursor-pointer relative w-full aspect-[612/436] rounded-[10px] overflow-hidden bg-white select-none focus:outline-none focus-visible:ring-2 focus-visible:ring-[#333333]"
                                >
                                    <img
                                        src="{{ $cert['src'] }}"
                                        alt="{{ $cert['alt'] }}"
                                        draggable="false"
                                        class="absolute inset-0 size-full object-contain bg-white p-2 block"
                                    >
                                </article>
                            </div>
                        @endforeach
                    @else
                        {{-- Certificate Card 1 Placeholder --}}
                        <div data-reveal="scale" data-reveal-delay="80" class="shrink-0 w-[86%] sm:w-[72%] lg:w-[calc(50%-12px)] snap-start">
                            <article class="showcase-card relative w-full aspect-[612/436] rounded-[10px] overflow-hidden bg-linear-to-br from-white via-[#fdfcf8] to-[#f5fae1] flex flex-col items-center justify-center p-8 text-center select-none">
                                <span class="size-[68px] rounded-full bg-[rgba(255,218,185,0.45)] flex items-center justify-center p-3.5">
                                    <img
                                        src="{{ asset('images/figma/35152.svg') }}"
                                        alt=""
                                        draggable="false"
                                        class="size-full object-contain block"
                                    >
                                </span>
                                <p class="mt-4 font-bold text-[20px] text-[#333333]">Certificate 01</p>
                                <p class="mt-1 font-medium text-[14px] text-[#888888] max-w-[300px]">
                                    Add certificate images to <code class="text-[#333333]">public/images/certificates/</code>
                                </p>
                            </article>
                        </div>

                        {{-- Certificate Card 2 Placeholder --}}
                        <div data-reveal="scale" data-reveal-delay="180" class="shrink-0 w-[86%] sm:w-[72%] lg:w-[calc(50%-12px)] snap-start">
                            <article class="showcase-card relative w-full aspect-[612/436] rounded-[10px] overflow-hidden bg-linear-to-br from-white via-[#fffaf5] to-[#ffdab9]/35 flex flex-col items-center justify-center p-8 text-center select-none">
                                <span class="size-[68px] rounded-full bg-[rgba(255,218,185,0.45)] flex items-center justify-center p-3.5">
                                    <img
                                        src="{{ asset('images/figma/49c9d.svg') }}"
                                        alt=""
                                        draggable="false"
                                        class="size-full object-contain block"
                                    >
                                </span>
                                <p class="mt-4 font-bold text-[20px] text-[#333333]">Certificate 02</p>
                                <p class="mt-1 font-medium text-[14px] text-[#888888] max-w-[300px]">
                                    Add certificate images to <code class="text-[#333333]">public/images/certificates/</code>
                                </p>
                            </article>
                        </div>
                    @endif
                </div>

                {{-- Credentials Horizontal Scroll Arrow Controls --}}
                <div class="mt-4 lg:mt-[20px] flex items-center justify-end">
                    <div class="flex items-center gap-6 lg:gap-[52px] mr-2 lg:mr-[56px]">
                        <button
                            id="credentials-prev"
                            type="button"
                            aria-label="Scroll credentials left"
                            class="bg-[#f8f8f8] hover:bg-white transition-colors rounded-full size-[44px] shadow-[0px_0px_6px_rgba(0,0,0,0.25)] flex items-center justify-center cursor-pointer"
                        >
                            <span class="rotate-90 block">
                                <img
                                    src="{{ asset('images/figma/1bb0b.svg') }}"
                                    alt=""
                                    width="24"
                                    height="24"
                                    class="size-[24px] block"
                                >
                            </span>
                        </button>
                        <button
                            id="credentials-next"
                            type="button"
                            aria-label="Scroll credentials right"
                            class="bg-[#f8f8f8] hover:bg-white transition-colors rounded-full size-[44px] shadow-[0px_0px_6px_rgba(0,0,0,0.25)] flex items-center justify-center cursor-pointer"
                        >
                            <span class="-rotate-90 block">
                                <img
                                    src="{{ asset('images/figma/1bb0b.svg') }}"
                                    alt=""
                                    width="24"
                                    height="24"
                                    class="size-[24px] block"
                                >
                            </span>
                        </button>
                    </div>
                </div>
            </section>

            {{-- My Latest Works Section --}}
            @php
                $latestWorks = [
                    [
                        'src' => asset('images/figma/78313.png'),
                        'alt' => 'Vault — MyCloud Dashboard UI Design',
                        'imgClass' => 'absolute inset-0 size-full object-cover block',
                        'title' => 'Vault — MyCloud Dashboard',
                        'eyebrow' => 'LATEST WORK / UI DESIGN',
                        'lead' => 'Cloud storage dashboard designed for clear file organization, storage insights, and effortless daily workflows.',
                        'subtitle' => 'Clean visual hierarchy.',
                        'desc' => 'Designed with categorized storage cards, visual capacity indicators, quick file previews, and a distraction-free sidebar to help users manage documents, media, and team files efficiently.',
                        'actionLabel' => 'Open full image',
                    ],
                    [
                        'src' => asset('images/figma/5ca2c.png'),
                        'alt' => 'Azure Sphere Real Estate Website UI Design',
                        'imgClass' => 'absolute left-0 top-[-0.1%] w-full h-[332.03%] max-w-none block',
                        'title' => 'Azure Sphere — Real Estate Web',
                        'eyebrow' => 'LATEST WORK / WEB DESIGN',
                        'lead' => 'Modern property discovery landing page focused on intuitive search, architectural imagery, and seamless browsing.',
                        'subtitle' => 'Responsive property showcase.',
                        'desc' => 'Crafted with a crisp hero search bar, curated property highlights, and balanced editorial spacing so prospective buyers can explore homes with clarity and confidence.',
                        'actionLabel' => 'Open full image',
                    ],
                ];

                $extraWorksDir = public_path('images/works');
                if (is_dir($extraWorksDir)) {
                    foreach (glob($extraWorksDir . '/*.{jpg,jpeg,png,webp,JPG,JPEG,PNG,WEBP}', GLOB_BRACE) ?: [] as $workPath) {
                        $name = ucwords(str_replace(['-', '_'], ' ', pathinfo($workPath, PATHINFO_FILENAME)));
                        $latestWorks[] = [
                            'src' => asset('images/works/' . basename($workPath)),
                            'alt' => $name,
                            'imgClass' => 'absolute inset-0 size-full object-cover block',
                            'title' => $name,
                            'eyebrow' => 'LATEST WORK / UI & WEB',
                            'lead' => 'Selected interface and digital product work crafted with user-centered design principles.',
                            'subtitle' => 'Design & Implementation',
                            'desc' => 'Focused on intuitive usability, responsive layout structure, and clean visual consistency.',
                            'actionLabel' => 'Open full image',
                        ];
                    }
                }
            @endphp

            <section id="portfolio" class="mx-auto max-w-[1440px] px-6 sm:px-12 lg:px-[96px] pt-20 lg:pt-[90px]">
                <h2 data-reveal="up" class="font-bold text-[32px] sm:text-[36px] lg:text-[40px] leading-normal text-[#333333]">
                    My Latest Works
                </h2>

                <div
                    id="portfolio-grid"
                    data-lightbox-group="LATEST WORKS"
                    class="mt-6 lg:mt-[24px] -mx-4 px-4 pt-3 pb-8 flex gap-6 lg:gap-[24px] overflow-x-auto snap-x snap-mandatory scroll-smooth no-scrollbar cursor-grab active:cursor-grabbing"
                >
                    @foreach ($latestWorks as $index => $work)
                        <div
                            data-reveal="scale"
                            data-reveal-delay="{{ min($index, 3) * 90 }}"
                            class="shrink-0 w-[86%] sm:w-[72%] lg:w-[calc(50%-12px)] snap-start"
                        >
                            <article
                                data-lightbox-item
                                data-src="{{ $work['src'] }}"
                                data-title="{{ $work['title'] }}"
                                data-eyebrow="{{ $work['eyebrow'] }}"
                                data-lead="{{ $work['lead'] }}"
                                data-subtitle="{{ $work['subtitle'] }}"
                                data-desc="{{ $work['desc'] }}"
                                data-action-label="{{ $work['actionLabel'] }}"
                                tabindex="0"
                                role="button"
                                aria-label="Inspect {{ $work['title'] }}"
                                class="showcase-card cursor-pointer relative w-full aspect-[612/436] rounded-[10px] overflow-hidden bg-white select-none focus:outline-none focus-visible:ring-2 focus-visible:ring-[#333333]"
                            >
                                <img
                                    src="{{ $work['src'] }}"
                                    alt="{{ $work['alt'] }}"
                                    draggable="false"
                                    class="{{ $work['imgClass'] }}"
                                >
                            </article>
                        </div>
                    @endforeach
                </div>

                {{-- Horizontal Scroll Arrow Controls --}}
                <div class="mt-4 lg:mt-[20px] flex items-center justify-end">
                    <div class="flex items-center gap-6 lg:gap-[52px] mr-2 lg:mr-[56px]">
                        <button
                            id="portfolio-prev"
                            type="button"
                            aria-label="Scroll works left"
                            class="bg-[#f8f8f8] hover:bg-white transition-colors rounded-full size-[44px] shadow-[0px_0px_6px_rgba(0,0,0,0.25)] flex items-center justify-center cursor-pointer"
                        >
                            <span class="rotate-90 block">
                                <img
                                    src="{{ asset('images/figma/1bb0b.svg') }}"
                                    alt=""
                                    width="24"
                                    height="24"
                                    class="size-[24px] block"
                                >
                            </span>
                        </button>
                        <button
                            id="portfolio-next"
                            type="button"
                            aria-label="Scroll works right"
                            class="bg-[#f8f8f8] hover:bg-white transition-colors rounded-full size-[44px] shadow-[0px_0px_6px_rgba(0,0,0,0.25)] flex items-center justify-center cursor-pointer"
                        >
                            <span class="-rotate-90 block">
                                <img
                                    src="{{ asset('images/figma/1bb0b.svg') }}"
                                    alt=""
                                    width="24"
                                    height="24"
                                    class="size-[24px] block"
                                >
                            </span>
                        </button>
                    </div>
                </div>
            </section>

            {{-- My Photography Section --}}
            @php
                $photoMeta = [
                    'photo-01-cat.jpg' => [
                        'title' => 'Garden Tabby Portrait',
                        'eyebrow' => 'PHOTOGRAPHY / PORTRAIT',
                        'lead' => 'Natural-light outdoor portrait capturing quiet curiosity framed by fresh garden foliage.',
                        'subtitle' => 'Depth & natural tones.',
                        'desc' => 'Shot with soft foreground framing and shallow depth of field to highlight texture, expression, and rich natural greens.',
                    ],
                    'photo-02-lamp.jpg' => [
                        'title' => 'Minimalist Streetlight & Sky',
                        'eyebrow' => 'PHOTOGRAPHY / MINIMAL',
                        'lead' => 'Clean geometric silhouette rising above sunlit foliage against a soft teal afternoon sky.',
                        'subtitle' => 'Composition & color.',
                        'desc' => 'Focused on balanced negative space, crisp architectural lines, and a calm film-inspired color grade.',
                    ],
                ];

                $photoDir = public_path('images/photography');
                $photoFiles = is_dir($photoDir)
                    ? collect(glob($photoDir . '/*.{jpg,jpeg,png,webp,JPG,JPEG,PNG,WEBP}', GLOB_BRACE) ?: [])
                        ->map(function ($path) use ($photoMeta) {
                            $file = basename($path);
                            $fallbackTitle = ucwords(str_replace(['-', '_'], ' ', pathinfo($path, PATHINFO_FILENAME)));
                            $meta = $photoMeta[$file] ?? [];
                            return [
                                'src' => asset('images/photography/' . $file),
                                'alt' => $meta['title'] ?? $fallbackTitle,
                                'imgClass' => 'absolute inset-0 size-full object-cover block',
                                'title' => $meta['title'] ?? $fallbackTitle,
                                'eyebrow' => $meta['eyebrow'] ?? 'PHOTOGRAPHY / GALLERY',
                                'lead' => $meta['lead'] ?? 'Captured moment focusing on natural light, framing, and storytelling.',
                                'subtitle' => $meta['subtitle'] ?? 'Visual storytelling.',
                                'desc' => $meta['desc'] ?? 'Part of my personal photography collection exploring everyday light, candid subjects, and color grading.',
                                'actionLabel' => 'Open full photo',
                            ];
                        })
                        ->values()
                        ->all()
                    : [];
            @endphp

            <section id="photography" class="mx-auto max-w-[1440px] px-6 sm:px-12 lg:px-[96px] pt-20 lg:pt-[90px]">
                <h2 data-reveal="up" class="font-bold text-[32px] sm:text-[36px] lg:text-[40px] leading-normal text-[#333333]">
                    My Photography
                </h2>

                <div
                    id="photography-grid"
                    data-lightbox-group="PHOTOGRAPHY"
                    class="mt-6 lg:mt-[24px] -mx-4 px-4 pt-3 pb-8 flex gap-6 lg:gap-[24px] overflow-x-auto snap-x snap-mandatory scroll-smooth no-scrollbar cursor-grab active:cursor-grabbing"
                >
                    @if (count($photoFiles) > 0)
                        @foreach ($photoFiles as $index => $photo)
                            <div
                                data-reveal="scale"
                                data-reveal-delay="{{ min($index, 3) * 90 }}"
                                class="shrink-0 w-[86%] sm:w-[72%] lg:w-[calc(50%-12px)] snap-start"
                            >
                                <article
                                    data-lightbox-item
                                    data-src="{{ $photo['src'] }}"
                                    data-title="{{ $photo['title'] }}"
                                    data-eyebrow="{{ $photo['eyebrow'] }}"
                                    data-lead="{{ $photo['lead'] }}"
                                    data-subtitle="{{ $photo['subtitle'] }}"
                                    data-desc="{{ $photo['desc'] }}"
                                    data-action-label="{{ $photo['actionLabel'] }}"
                                    tabindex="0"
                                    role="button"
                                    aria-label="Inspect {{ $photo['title'] }}"
                                    class="showcase-card cursor-pointer relative w-full aspect-[612/436] rounded-[10px] overflow-hidden bg-white select-none focus:outline-none focus-visible:ring-2 focus-visible:ring-[#333333]"
                                >
                                    <img
                                        src="{{ $photo['src'] }}"
                                        alt="{{ $photo['alt'] }}"
                                        draggable="false"
                                        class="{{ $photo['imgClass'] }}"
                                    >
                                </article>
                            </div>
                        @endforeach
                    @else
                        {{-- Photography Card 1 Placeholder --}}
                        <div data-reveal="scale" data-reveal-delay="80" class="shrink-0 w-[86%] sm:w-[72%] lg:w-[calc(50%-12px)] snap-start">
                            <article class="showcase-card relative w-full aspect-[612/436] rounded-[10px] overflow-hidden bg-linear-to-br from-white via-[#fdfcf8] to-[#f5fae1] flex flex-col items-center justify-center p-8 text-center select-none">
                                <span class="size-[68px] rounded-full bg-[rgba(255,218,185,0.45)] flex items-center justify-center p-4">
                                    <img
                                        src="{{ asset('images/figma/fd9b9.png') }}"
                                        alt=""
                                        draggable="false"
                                        class="size-full object-contain block"
                                    >
                                </span>
                                <p class="mt-4 font-bold text-[20px] text-[#333333]">Photography 01</p>
                                <p class="mt-1 font-medium text-[14px] text-[#888888] max-w-[280px]">
                                    Add photos to <code class="text-[#333333]">public/images/photography/</code>
                                </p>
                            </article>
                        </div>

                        {{-- Photography Card 2 Placeholder --}}
                        <div data-reveal="scale" data-reveal-delay="180" class="shrink-0 w-[86%] sm:w-[72%] lg:w-[calc(50%-12px)] snap-start">
                            <article class="showcase-card relative w-full aspect-[612/436] rounded-[10px] overflow-hidden bg-linear-to-br from-white via-[#fffaf5] to-[#ffdab9]/35 flex flex-col items-center justify-center p-8 text-center select-none">
                                <span class="size-[68px] rounded-full bg-[rgba(255,218,185,0.45)] flex items-center justify-center p-4">
                                    <img
                                        src="{{ asset('images/figma/fd9b9.png') }}"
                                        alt=""
                                        draggable="false"
                                        class="size-full object-contain block"
                                    >
                                </span>
                                <p class="mt-4 font-bold text-[20px] text-[#333333]">Photography 02</p>
                                <p class="mt-1 font-medium text-[14px] text-[#888888] max-w-[280px]">
                                    Add photos to <code class="text-[#333333]">public/images/photography/</code>
                                </p>
                            </article>
                        </div>
                    @endif
                </div>

                {{-- Photography Horizontal Scroll Arrow Controls --}}
                <div class="mt-4 lg:mt-[20px] flex items-center justify-end">

                    <div class="flex items-center gap-6 lg:gap-[52px] mr-2 lg:mr-[56px]">
                        <button
                            id="photography-prev"
                            type="button"
                            aria-label="Previous photography"
                            class="bg-[#f8f8f8] hover:bg-white transition-colors rounded-full size-[44px] shadow-[0px_0px_6px_rgba(0,0,0,0.25)] flex items-center justify-center cursor-pointer"
                        >
                            <span class="rotate-90 block">
                                <img
                                    src="{{ asset('images/figma/1bb0b.svg') }}"
                                    alt=""
                                    width="24"
                                    height="24"
                                    class="size-[24px] block"
                                >
                            </span>
                        </button>
                        <button
                            id="photography-next"
                            type="button"
                            aria-label="Next photography"
                            class="bg-[#f8f8f8] hover:bg-white transition-colors rounded-full size-[44px] shadow-[0px_0px_6px_rgba(0,0,0,0.25)] flex items-center justify-center cursor-pointer"
                        >
                            <span class="-rotate-90 block">
                                <img
                                    src="{{ asset('images/figma/1bb0b.svg') }}"
                                    alt=""
                                    width="24"
                                    height="24"
                                    class="size-[24px] block"
                                >
                            </span>
                        </button>
                    </div>
                </div>
            </section>

            {{-- Contact Me Section --}}
            <section id="contact" class="mx-auto max-w-[1440px] px-6 sm:px-12 lg:px-[96px] pt-20 sm:pt-28 lg:pt-[130px] pb-20 lg:pb-[105px]">
                <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-12 lg:gap-10">
                    {{-- Left Intro --}}
                    <div data-reveal="left" class="flex flex-col gap-[13px] items-start lg:max-w-[318px] w-full">
                        <p class="font-medium text-[20px] sm:text-[24px] leading-normal text-[#333333] w-full">
                            Contact Me
                        </p>
                        <h2 class="font-bold text-[32px] sm:text-[36px] lg:text-[40px] leading-normal text-[#333333] w-full">
                            Get in touch
                        </h2>
                        <p class="font-medium text-[15px] sm:text-[16px] leading-normal text-[#888888] text-justify w-full">
                            Have a project in mind or want to collaborate? Feel free to drop a message.
                        </p>
                    </div>

                    {{-- Right Form --}}
                    <form
                        id="contact-form"
                        action="{{ route('contact.send') }}"
                        method="POST"
                        data-reveal="right"
                        data-reveal-delay="120"
                        class="w-full lg:w-[609px] flex flex-col gap-10 lg:gap-[48px]"
                        novalidate
                    >
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 sm:gap-x-[21px] sm:gap-y-[48px]">
                            {{-- Full Name --}}
                            <div class="flex flex-col gap-[10px]">
                                <input
                                    type="text"
                                    name="full_name"
                                    required
                                    placeholder="Full Name"
                                    aria-label="Full Name"
                                    class="w-full bg-transparent text-[16px] font-medium text-[#333333] placeholder:text-[#888888] focus:outline-none"
                                >
                                <img
                                    src="{{ asset('images/figma/f00de.svg') }}"
                                    alt=""
                                    class="w-full h-[1px] block"
                                >
                            </div>

                            {{-- Email Adress --}}
                            <div class="flex flex-col gap-[10px]">
                                <input
                                    type="email"
                                    name="email"
                                    required
                                    placeholder="Email Adress"
                                    aria-label="Email Address"
                                    class="w-full bg-transparent text-[16px] font-medium text-[#333333] placeholder:text-[#888888] focus:outline-none"
                                >
                                <img
                                    src="{{ asset('images/figma/f00de.svg') }}"
                                    alt=""
                                    class="w-full h-[1px] block"
                                >
                            </div>

                            {{-- Phone Number --}}
                            <div class="flex flex-col gap-[10px]">
                                <input
                                    type="tel"
                                    name="phone"
                                    required
                                    placeholder="Phone Number"
                                    aria-label="Phone Number"
                                    class="w-full bg-transparent text-[16px] font-medium text-[#333333] placeholder:text-[#888888] focus:outline-none"
                                >
                                <img
                                    src="{{ asset('images/figma/f00de.svg') }}"
                                    alt=""
                                    class="w-full h-[1px] block"
                                >
                            </div>

                            {{-- Subject --}}
                            <div class="flex flex-col gap-[10px]">
                                <input
                                    type="text"
                                    name="subject"
                                    required
                                    placeholder="Subject"
                                    aria-label="Subject"
                                    class="w-full bg-transparent text-[16px] font-medium text-[#333333] placeholder:text-[#888888] focus:outline-none"
                                >
                                <img
                                    src="{{ asset('images/figma/f00de.svg') }}"
                                    alt=""
                                    class="w-full h-[1px] block"
                                >
                            </div>
                        </div>

                        {{-- Your Message in Here --}}
                        <div class="flex flex-col gap-[8px]">
                            <textarea
                                name="message"
                                rows="1"
                                required
                                placeholder="Your Message in Here"
                                aria-label="Your Message in Here"
                                class="w-full bg-transparent text-[16px] font-medium leading-normal text-[#333333] placeholder:text-[#888888] focus:outline-none resize-none overflow-hidden"
                            ></textarea>
                            <img
                                src="{{ asset('images/figma/271a6.svg') }}"
                                alt=""
                                class="w-full h-[1px] block"
                            >
                        </div>

                        <div class="flex flex-col items-start gap-3">
                            <button
                                id="contact-submit"
                                type="submit"
                                class="bg-[#ffdab9] hover:brightness-95 active:scale-95 disabled:opacity-60 disabled:cursor-not-allowed transition-all h-[55px] w-[165px] rounded-[10px] flex items-center justify-center font-semibold text-[18px] text-[#333333] cursor-pointer"
                            >
                                Send Message
                            </button>
                            <p id="contact-feedback" class="hidden text-[15px] font-medium" role="status" aria-live="polite"></p>
                        </div>
                    </form>
                </div>
            </section>
        </main>

        {{-- Footer --}}
        <footer class="w-full bg-[#f5fae1] border-t border-[#333333]/10">
            <div class="mx-auto max-w-[1440px] px-6 sm:px-12 lg:px-[96px] pt-10 lg:pt-12 pb-8">
                <div class="grid grid-cols-1 md:grid-cols-[1.25fr_auto_1fr] gap-8 lg:gap-12 items-start">
                    {{-- Left: Brand, Bio & Resume --}}
                    <div data-reveal="up" class="flex flex-col items-start max-w-[460px]">
                        <h2 class="font-bold text-[26px] sm:text-[30px] leading-tight text-[#333333]">
                            Noah Fawwas
                        </h2>
                        <p class="mt-3 font-normal text-[14px] sm:text-[15px] leading-[1.6] text-[#888888] text-justify">
                            I’m a student of Telkom University Purwokerto majoring in Information Systems. Trained in developing User Interface that is intuitive, responsive, and user experience oriented.
                        </p>
                        <a
                            href="#about"
                            class="mt-5 bg-[#ffdab9] hover:brightness-95 active:scale-95 transition-all h-[44px] px-5 rounded-[10px] inline-flex items-center justify-center font-semibold text-[15px] text-[#333333] whitespace-nowrap"
                        >
                            My Resume
                        </a>
                    </div>

                    {{-- Subtle Vertical Divider --}}
                    <div aria-hidden="true" class="hidden md:block w-[1px] self-stretch bg-[#333333]/15"></div>

                    {{-- Right: Compact Contact Details --}}
                    <div data-reveal="up" data-reveal-delay="100" class="flex flex-col items-start">
                        <h2 class="font-bold text-[18px] sm:text-[20px] leading-normal text-[#333333]">
                            Contact Me
                        </h2>

                        <dl class="mt-4 space-y-3 text-[14px] sm:text-[15px]">
                            <div class="flex flex-col sm:flex-row sm:items-baseline sm:gap-2">
                                <dt class="font-bold text-[#333333] sm:min-w-[74px]">Email:</dt>
                                <dd>
                                    <a href="mailto:noahdzakki12@gmail.com" class="font-medium text-[#333333]/85 hover:text-black hover:underline break-all">
                                        noahdzakki12@gmail.com
                                    </a>
                                </dd>
                            </div>
                            <div class="flex flex-col sm:flex-row sm:items-baseline sm:gap-2">
                                <dt class="font-bold text-[#333333] sm:min-w-[74px]">Phone:</dt>
                                <dd>
                                    <a href="tel:+6285156267914" class="font-medium text-[#333333]/85 hover:text-black hover:underline">
                                        +62 851-5626-7914
                                    </a>
                                </dd>
                            </div>
                            <div class="flex flex-col sm:flex-row sm:items-baseline sm:gap-2">
                                <dt class="font-bold text-[#333333] sm:min-w-[74px]">Address:</dt>
                                <dd class="font-medium text-[#333333]/85">
                                    Indonesia, Central Java, Banyumas
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>

                {{-- Compact Bottom Bar: Copyright & Socials --}}
                <div class="mt-8 pt-6 border-t border-[#333333]/15 flex flex-col-reverse sm:flex-row items-center justify-between gap-4">
                    <p class="text-[13px] font-medium text-[#888888] text-center sm:text-left">
                        &copy; {{ date('Y') }} Noah Fawwas Dzakki Wibowo. All rights reserved.
                    </p>

                    <div class="flex items-center gap-3.5">
                        <a
                            href="https://www.instagram.com/skyravens12/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Instagram"
                            class="bg-[rgba(255,218,185,0.45)] hover:bg-[rgba(255,218,185,0.85)] hover:-translate-y-0.5 transition-all rounded-full size-[42px] p-[9px] flex items-center justify-center shrink-0"
                        >
                            <span class="relative block size-[24px] overflow-hidden">
                                <img
                                    src="{{ asset('images/figma/37855.png') }}"
                                    alt="Instagram"
                                    class="absolute left-[-5.26%] top-[-5.26%] max-w-none size-[110.53%]"
                                >
                            </span>
                        </a>
                        <a
                            href="https://github.com/SkyRavens12"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="GitHub"
                            class="bg-[rgba(255,218,185,0.45)] hover:bg-[rgba(255,218,185,0.85)] hover:-translate-y-0.5 transition-all rounded-full size-[42px] p-[9px] flex items-center justify-center shrink-0"
                        >
                            <img
                                src="{{ asset('images/figma/b3e2d.png') }}"
                                alt="GitHub"
                                class="size-[24px] object-cover block"
                            >
                        </a>
                        <a
                            href="https://www.linkedin.com/in/noah-fawwas-dzakki-wibowo-682042242/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="LinkedIn"
                            class="bg-[rgba(255,218,185,0.45)] hover:bg-[rgba(255,218,185,0.85)] hover:-translate-y-0.5 transition-all rounded-full size-[42px] p-[9px] flex items-center justify-center shrink-0"
                        >
                            <img
                                src="{{ asset('images/figma/98997.png') }}"
                                alt="LinkedIn"
                                class="size-[24px] object-cover block"
                            >
                        </a>
                        <a
                            href="https://dribbble.com/NoahFawwas"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Dribbble"
                            class="bg-[rgba(255,218,185,0.45)] hover:bg-[rgba(255,218,185,0.85)] hover:-translate-y-0.5 transition-all rounded-full size-[42px] p-[9px] flex items-center justify-center shrink-0"
                        >
                            <img
                                src="{{ asset('images/figma/47529.png') }}"
                                alt="Dribbble"
                                class="size-[24px] object-cover block"
                            >
                        </a>
                    </div>
                </div>
            </div>
        </footer>

        {{-- Framed Full-Image Lightbox Modal (Credentials, Latest Works, Photography) --}}
        <div
            id="gallery-lightbox"
            role="dialog"
            aria-modal="true"
            aria-hidden="true"
            aria-labelledby="lightbox-title"
            class="lightbox-backdrop fixed inset-0 z-[120] flex items-center justify-center p-3 sm:p-6 lg:p-8 bg-[#1f1f1f]/45 backdrop-blur-md"
        >
            <div class="lightbox-frame w-full max-w-[1160px] max-h-[92vh] rounded-[18px] bg-[#f8f8f8] border border-[#333333]/15 shadow-[0_32px_80px_-20px_rgba(0,0,0,0.3)] overflow-hidden flex flex-col">
                {{-- Modal Top Bar --}}
                <div class="flex items-center justify-between px-5 sm:px-7 py-3.5 border-b border-[#333333]/12 bg-[#ffdab9]/40">
                    <span id="lightbox-frame-counter" class="font-bold text-[12px] tracking-[0.16em] uppercase text-[#333333]/85 tabular-nums">
                        FRAME 01 / 01
                    </span>
                    <button
                        id="lightbox-close"
                        type="button"
                        aria-label="Close preview"
                        class="size-[36px] rounded-[10px] border border-[#333333]/15 bg-[#f8f8f8] hover:bg-[#ffdab9] active:scale-95 transition-all flex items-center justify-center text-[#333333] cursor-pointer"
                    >
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true">
                            <path d="M3.5 3.5L12.5 12.5M12.5 3.5L3.5 12.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                        </svg>
                    </button>
                </div>

                {{-- Modal Main Split Body --}}
                <div class="grid grid-cols-1 lg:grid-cols-[1.48fr_1fr] flex-1 min-h-0 overflow-y-auto lg:overflow-hidden">
                    {{-- Left: Full Image Stage --}}
                    <div class="bg-[#f3f2ee] p-5 sm:p-7 flex flex-col min-h-[280px] lg:min-h-[460px]">
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-[13px] font-medium text-[#888888]">Full image</span>
                            <button
                                id="lightbox-zoom"
                                type="button"
                                class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-[10px] border border-[#333333]/15 bg-white hover:bg-[#ffdab9]/45 active:scale-95 transition-all text-[13px] font-semibold text-[#333333] cursor-pointer"
                            >
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="2"/>
                                    <path d="M20 20L16.2 16.2M11 8V14M8 11H14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                                <span id="lightbox-zoom-label">Zoom</span>
                            </button>
                        </div>

                        <div
                            id="lightbox-stage"
                            class="flex-1 flex items-center justify-center overflow-auto rounded-[12px] bg-white/80 border border-[#333333]/10 p-3 sm:p-4 min-h-[240px] max-h-[56vh]"
                        >
                            <img
                                id="lightbox-image"
                                src=""
                                alt=""
                                class="lightbox-stage-img max-h-full max-w-full object-contain rounded-[8px] cursor-zoom-in select-none"
                            >
                        </div>
                    </div>

                    {{-- Right: Details Panel --}}
                    <div class="bg-[#f5fae1] lg:border-l border-t lg:border-t-0 border-[#333333]/12 p-6 sm:p-8 flex flex-col justify-center gap-4 lg:overflow-y-auto">
                        <p id="lightbox-eyebrow" class="font-bold text-[12px] tracking-[0.14em] uppercase text-[#888888]">
                            LATEST WORK
                        </p>
                        <h3 id="lightbox-title" class="font-bold text-[26px] sm:text-[32px] leading-[1.2] text-[#333333]">
                            Title
                        </h3>
                        <p id="lightbox-lead" class="font-medium text-[15px] sm:text-[16px] leading-[1.6] text-[#555555]">
                            Lead description.
                        </p>

                        <div class="pt-1">
                            <h4 id="lightbox-subtitle" class="font-bold text-[15px] text-[#333333]">
                                Highlights
                            </h4>
                            <p id="lightbox-desc" class="mt-2 font-normal text-[14px] sm:text-[15px] leading-[1.65] text-[#666666]">
                                Detailed description.
                            </p>
                        </div>

                        <a
                            id="lightbox-external"
                            href="#"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="mt-3 inline-flex items-center gap-2 font-bold text-[14px] text-[#333333] border-b-2 border-[#ffdab9] hover:border-[#333333] pb-1.5 w-fit transition-colors"
                        >
                            <span id="lightbox-action-label">Open full image</span>
                            <svg width="14" height="14" viewBox="0 0 16 16" fill="none" aria-hidden="true">
                                <path d="M4.5 11.5L11.5 4.5M11.5 4.5H6M11.5 4.5V10" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- Modal Bottom Bar --}}
                <div class="flex items-center justify-between px-5 sm:px-7 py-3.5 border-t border-[#333333]/12 bg-[#f8f8f8]">
                    <span id="lightbox-footer-label" class="font-bold text-[12px] tracking-[0.16em] uppercase text-[#888888]">
                        NOAH FAWWAS / GALLERY
                    </span>

                    <div class="flex items-center gap-2.5">
                        <button
                            id="lightbox-prev"
                            type="button"
                            aria-label="Previous frame"
                            class="size-[38px] rounded-[10px] border border-[#333333]/15 bg-white hover:bg-[#ffdab9] active:scale-95 transition-all flex items-center justify-center text-[#333333] cursor-pointer"
                        >
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true">
                                <path d="M10.5 3.5L6 8L10.5 12.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <button
                            id="lightbox-next"
                            type="button"
                            aria-label="Next frame"
                            class="size-[38px] rounded-[10px] border border-[#333333]/15 bg-white hover:bg-[#ffdab9] active:scale-95 transition-all flex items-center justify-center text-[#333333] cursor-pointer"
                        >
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true">
                                <path d="M5.5 3.5L10 8L5.5 12.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
