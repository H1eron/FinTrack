@extends('layouts.app')

@section('title', 'FinTrack - Personal Finance Tracker')

@section('content')
    {{-- Navbar --}}
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/80 dark:bg-[#1A1A1A]/80 backdrop-blur-md border-b border-border-soft">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                {{-- Logo --}}
                <a href="/" class="flex items-center shrink-0">
                    <img src="{{ asset('images/logo-dark.png') }}" alt="FinTrack" class="block dark:hidden h-9 sm:h-10 w-auto">
                    <img src="{{ asset('images/logo-light.png') }}" alt="FinTrack" class="hidden dark:block h-9 sm:h-10 w-auto">
                </a>

                {{-- Nav Links --}}
                <div class="hidden md:flex items-center gap-8">
                    <a href="#fitur" class="text-text-secondary dark:text-text-muted hover:text-brand-green transition text-sm font-medium">Fitur</a>
                    <a href="#tentang" class="text-text-secondary dark:text-text-muted hover:text-brand-green transition text-sm font-medium">Tentang</a>
                    <a href="#mulai" class="text-text-secondary dark:text-text-muted hover:text-brand-green transition text-sm font-medium">Mulai</a>
                </div>

                {{-- Right section --}}
                <div class="flex items-center gap-2 sm:gap-3">
                    {{-- Theme Toggle --}}
                    <button id="theme-toggle" type="button" class="w-9 h-9 flex items-center justify-center rounded-lg text-text-muted hover:text-text-main hover:bg-surface-soft dark:hover:text-text-main dark:hover:bg-surface-soft transition" aria-label="Toggle theme">
                        {{-- Moon (shown in light mode) --}}
                        <svg class="block dark:hidden w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                        </svg>
                        {{-- Sun (shown in dark mode) --}}
                        <svg class="hidden dark:block w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </button>

                    {{-- Auth Buttons --}}
                    <a href="/login" class="text-text-muted hover:text-text-main dark:hover:text-text-main transition text-sm font-medium px-3 py-2">Masuk</a>
                    <a href="/register" class="bg-brand-green hover:bg-brand-green-hover text-brand-black transition text-sm font-semibold px-4 sm:px-5 py-2 rounded-lg whitespace-nowrap">Daftar Gratis</a>
                </div>
            </div>
        </div>
    </nav>

    {{-- Hero Section --}}
    <section class="min-h-[90vh] pt-20 pb-14 lg:pt-24 lg:pb-16 flex items-center relative overflow-hidden" id="mulai">
        {{-- Background Decoration --}}
        <div class="absolute inset-0 pointer-events-none">
            {{-- Light: dark blobs at low opacity --}}
            <div class="block dark:hidden absolute top-1/4 left-1/4 w-96 h-96 bg-[rgba(17,24,39,0.08)] rounded-full blur-3xl"></div>
            <div class="block dark:hidden absolute bottom-1/4 right-1/4 w-80 h-80 bg-[rgba(17,24,39,0.06)] rounded-full blur-3xl"></div>
            {{-- Dark: green glow blobs --}}
            <div class="hidden dark:block absolute top-1/4 left-1/4 w-96 h-96 bg-[rgba(29,185,84,0.16)] rounded-full blur-3xl"></div>
            <div class="hidden dark:block absolute bottom-1/4 right-1/4 w-80 h-80 bg-[rgba(29,185,84,0.10)] rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                {{-- Hero Text --}}
                <div class="text-center lg:text-left">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight text-text-main">
                        Kelola Keuangan Pribadi dengan <span class="text-brand-green">Lebih Mudah</span>
                    </h1>
                    <p class="mt-6 text-lg text-text-secondary leading-relaxed max-w-xl">
                        FinTrack membantu Anda mencatat pemasukan, mengatur pengeluaran, merencanakan budget bulanan,
                        dan melihat ringkasan keuangan pribadi secara real-time. Semua dalam satu dashboard yang sederhana dan powerful.
                    </p>
                    <div class="mt-8 flex flex-wrap gap-4 justify-center lg:justify-start">
                        <a href="/register" class="bg-brand-green hover:bg-brand-green-hover text-brand-black font-semibold px-8 py-3.5 rounded-xl transition shadow-lg shadow-brand-green/25">
                            Mulai Sekarang
                        </a>
                        <a href="#fitur" class="border border-border-soft hover:border-brand-green/50 text-text-muted hover:text-text-main dark:hover:text-text-main font-medium px-8 py-3.5 rounded-xl transition">
                            Lihat Fitur
                        </a>
                    </div>
                </div>

                {{-- Preview Dashboard Card --}}
                <div class="relative">
                    <div class="bg-card border border-border-soft rounded-2xl shadow-xl overflow-hidden">
                        {{-- Card Header --}}
                        <div class="px-6 py-4 border-b border-border-soft flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full bg-red-500"></span>
                                <span class="w-3 h-3 rounded-full bg-yellow-500"></span>
                                <span class="w-3 h-3 rounded-full bg-brand-green"></span>
                            </div>
                            <img src="{{ asset('images/logo-dark.png') }}" alt="FinTrack" class="block dark:hidden h-5">
                            <img src="{{ asset('images/logo-light.png') }}" alt="FinTrack" class="hidden dark:block h-5">
                        </div>

                        {{-- Card Body --}}
                        <div class="p-6 space-y-6">
                            {{-- Saldo --}}
                            <div>
                                <p class="text-sm text-text-muted">Saldo Saat Ini</p>
                                <p class="text-3xl font-bold text-text-main">Rp 12.450.000</p>
                            </div>

                            {{-- Pemasukan & Pengeluaran --}}
                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-card border border-border-soft rounded-xl p-4">
                                    <p class="text-xs text-text-muted">Total Pemasukan</p>
                                    <p class="text-lg font-semibold text-brand-green">+Rp 8.200.000</p>
                                </div>
                                <div class="bg-card border border-border-soft rounded-xl p-4">
                                    <p class="text-xs text-text-muted">Total Pengeluaran</p>
                                    <p class="text-lg font-semibold text-expense">-Rp 5.750.000</p>
                                </div>
                            </div>

                            {{-- Budget Bulanan --}}
                            <div>
                                <div class="flex justify-between text-sm mb-2">
                                    <span class="text-text-muted">Budget Bulanan</span>
                                    <span class="text-text-main">Rp 4.200.000 / Rp 6.000.000</span>
                                </div>
                                <div class="w-full bg-surface rounded-full h-2.5">
                                    <div class="bg-brand-green h-2.5 rounded-full" style="width: 70%"></div>
                                </div>
                            </div>

                            {{-- Transaksi Terbaru --}}
                            <div>
                                <p class="text-sm font-medium text-text-main mb-3">Transaksi Terbaru</p>
                                <div class="space-y-3">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-3">
                                            <span class="w-8 h-8 bg-brand-green/20 rounded-lg flex items-center justify-center text-brand-green text-sm">+</span>
                                            <div>
                                                <p class="text-sm text-text-main">Gaji Bulanan</p>
                                                <p class="text-xs text-text-muted">Hari ini</p>
                                            </div>
                                        </div>
                                        <span class="text-sm font-medium text-brand-green">+Rp 4.500.000</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-3">
                                            <span class="w-8 h-8 bg-expense/20 rounded-lg flex items-center justify-center text-expense text-sm">-</span>
                                            <div>
                                                <p class="text-sm text-text-main">Belanja Bulanan</p>
                                                <p class="text-xs text-text-muted">Kemarin</p>
                                            </div>
                                        </div>
                                        <span class="text-sm font-medium text-expense">-Rp 850.000</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-3">
                                            <span class="w-8 h-8 bg-expense/20 rounded-lg flex items-center justify-center text-expense text-sm">-</span>
                                            <div>
                                                <p class="text-sm text-text-main">Makan Siang</p>
                                                <p class="text-xs text-text-muted">2 hari lalu</p>
                                            </div>
                                        </div>
                                        <span class="text-sm font-medium text-expense">-Rp 45.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Floating badge --}}
                    <div class="absolute -top-3 -right-3 bg-brand-green text-brand-black text-xs font-bold px-3 py-1.5 rounded-full shadow-lg">
                        Preview
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Fitur Section --}}
    <section class="py-20 relative bg-section" id="fitur">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-text-main">Fitur Unggulan</h2>
                <p class="mt-4 text-text-muted text-lg max-w-2xl mx-auto">
                    Semua yang Anda butuhkan untuk mengelola keuangan pribadi dalam satu tempat.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                {{-- Card 1 --}}
                <div class="bg-card border border-border-soft rounded-2xl p-6 shadow-sm hover:shadow-md hover:border-brand-green/30 hover:bg-card-hover transition group">
                    <div class="w-12 h-12 bg-brand-green/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-brand-green/20 transition">
                        <svg class="w-6 h-6 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-text-main mb-2">Catat Transaksi</h3>
                    <p class="text-sm text-text-muted">Catat pemasukan dan pengeluaran dengan cepat. Kategorikan transaksi Anda untuk lebih teratur.</p>
                </div>

                {{-- Card 2 --}}
                <div class="bg-card border border-border-soft rounded-2xl p-6 shadow-sm hover:shadow-md hover:border-brand-green/30 hover:bg-card-hover transition group">
                    <div class="w-12 h-12 bg-brand-green/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-brand-green/20 transition">
                        <svg class="w-6 h-6 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-text-main mb-2">Pantau Budget</h3>
                    <p class="text-sm text-text-muted">Atur budget bulanan untuk setiap kategori dan pantau sisa anggaran secara real-time.</p>
                </div>

                {{-- Card 3 --}}
                <div class="bg-card border border-border-soft rounded-2xl p-6 shadow-sm hover:shadow-md hover:border-brand-green/30 hover:bg-card-hover transition group">
                    <div class="w-12 h-12 bg-brand-green/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-brand-green/20 transition">
                        <svg class="w-6 h-6 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-text-main mb-2">Analisis Keuangan</h3>
                    <p class="text-sm text-text-muted">Lihat grafik dan laporan keuangan yang membantu Anda memahami pola pengeluaran.</p>
                </div>

                {{-- Card 4 --}}
                <div class="bg-card border border-border-soft rounded-2xl p-6 shadow-sm hover:shadow-md hover:border-brand-green/30 hover:bg-card-hover transition group">
                    <div class="w-12 h-12 bg-brand-green/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-brand-green/20 transition">
                        <svg class="w-6 h-6 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-text-main mb-2">Riwayat Transaksi</h3>
                    <p class="text-sm text-text-muted">Akses riwayat transaksi lengkap dengan filter dan pencarian yang mudah digunakan.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Tentang Section --}}
    <section class="py-20 relative bg-surface" id="tentang">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl sm:text-4xl font-bold text-text-main">
                        Kenapa <span class="text-brand-green">FinTrack</span>?
                    </h2>
                    <p class="mt-6 text-text-muted leading-relaxed">
                        FinTrack hadir untuk membantu Anda mengambil kendali penuh atas keuangan pribadi.
                        Dengan antarmuka yang intuitif dan fitur yang lengkap, kami percaya siapapun bisa
                        mengelola keuangan dengan lebih baik.
                    </p>
                    <ul class="mt-8 space-y-4">
                        <li class="flex items-start gap-3">
                            <span class="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-3.5 h-3.5 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </span>
                            <span class="text-text-muted">Mudah digunakan, cocok untuk pemula maupun profesional</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-3.5 h-3.5 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </span>
                            <span class="text-text-muted">Data tersimpan aman dan real-time</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-6 h-6 bg-brand-green/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-3.5 h-3.5 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </span>
                            <span class="text-text-muted">Gratis digunakan, tanpa biaya tersembunyi</span>
                        </li>
                    </ul>
                </div>
                <div class="bg-card border border-border-soft rounded-2xl p-8 shadow-sm">
                    <div class="grid grid-cols-2 gap-6 text-center">
                        <div>
                            <p class="text-3xl font-bold text-brand-green">10K+</p>
                            <p class="text-sm text-text-muted mt-1">Pengguna Aktif</p>
                        </div>
                        <div>
                            <p class="text-3xl font-bold text-brand-green">50K+</p>
                            <p class="text-sm text-text-muted mt-1">Transaksi Dicatat</p>
                        </div>
                        <div>
                            <p class="text-3xl font-bold text-brand-green">100%</p>
                            <p class="text-sm text-text-muted mt-1">Gratis</p>
                        </div>
                        <div>
                            <p class="text-3xl font-bold text-brand-green">#1</p>
                            <p class="text-sm text-text-muted mt-1">Finance Tracker</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold text-text-main">
                Siap Mengatur Keuangan Anda?
            </h2>
            <p class="mt-4 text-text-muted text-lg">
                Mulai gratis sekarang dan lihat perbedaannya dalam pengelolaan keuangan Anda.
            </p>
            <div class="mt-8">
                <a href="/register" class="bg-brand-green hover:bg-brand-green-hover text-brand-black font-semibold px-8 py-3.5 rounded-xl transition shadow-lg shadow-brand-green/25 inline-block">
                    Mulai Sekarang — Gratis
                </a>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="bg-section border-t border-border-soft py-8">
        <div class="mx-auto flex max-w-7xl flex-col items-center justify-center gap-3 px-6 text-center">
            <a href="/" class="inline-flex items-center">
                <img src="{{ asset('images/logo-dark.png') }}" alt="FinTrack" class="h-9 w-auto dark:hidden">
                <img src="{{ asset('images/logo-light.png') }}" alt="FinTrack" class="hidden h-9 w-auto dark:block">
            </a>
            <p class="text-sm text-text-muted">&copy; 2026 FinTrack. Personal Finance Tracker.</p>
        </div>
    </footer>

    {{-- Theme Toggle Script --}}
    <script>
        document.getElementById('theme-toggle')?.addEventListener('click', function() {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            }
        });
    </script>
@endsection
