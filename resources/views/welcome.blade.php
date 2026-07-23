<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ratu Portfolio</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/letter R.png') }}">
</head>
<script>
const navbar = document.getElementById("navbar");
const logo = document.getElementById("logo");

window.addEventListener("scroll", () => {

    if (window.scrollY > 80) {

        navbar.classList.remove(
            "w-[86%]",
            "py-5",
            "top-5"
        );

        navbar.classList.add(
            "w-[74%]",
            "py-3",
            "top-3",
            "shadow-2xl"
        );

        logo.classList.remove(
            "w-14",
            "h-14",
            "text-2xl"
        );

        logo.classList.add(
            "w-11",
            "h-11",
            "text-xl"
        );

    } else {

        navbar.classList.remove(
            "w-[74%]",
            "py-3",
            "top-3",
            "shadow-2xl"
        );

        navbar.classList.add(
            "w-[86%]",
            "py-5",
            "top-5"
        );

        logo.classList.remove(
            "w-11",
            "h-11",
            "text-xl"
        );

        logo.classList.add(
            "w-14",
            "h-14",
            "text-2xl"
        );

    }

});
</script>

<body class="bg-[#FDF7F6] font-[Poppins] overflow-x-hidden">

    {{-- Background Blur --}}
    <div class="absolute inset-0 -z-10 overflow-hidden">

        <div class="absolute w-[650px] h-[650px] bg-[#9C1F38]/15 rounded-full blur-[140px] top-[-180px] left-[-180px]">
        </div>

        <div
            class="absolute w-[700px] h-[700px] bg-[#C87B7B]/20 rounded-full blur-[180px] bottom-[-250px] right-[-180px]">
        </div>

        <div class="absolute w-[450px] h-[450px] bg-[#ffffff] rounded-full blur-[120px] top-[20%] left-[35%]"></div>

    </div>


    {{-- NAVBAR --}}
    <header>
        <div class="max-w-7xl mx-auto px-6">

            <nav id="navbar" class="fixed top-5 left-1/2 -translate-x-1/2
    w-[80%]
    bg-white/80
    backdrop-blur-xl
    rounded-full
    shadow-xl
    px-5
    py-4
    grid grid-cols-3 items-center
    transition-all duration-500
    z-50">
                {{-- Logo --}}
                <div class="flex items-center">
                    <div id="logo"
                        class="w-14 h-14 rounded-full bg-[#7B0D23] flex items-center justify-center text-white text-2xl font-bold transition-all duration-500">
                        R
                    </div>
                </div>

                {{-- Menu --}}
                <ul class="hidden lg:flex justify-center items-center">

                    <li>
                        <a href="#"
                            class="text-black px-8 py-3 rounded-full font-semibold hover:bg-[#7B0D23] hover:text-white duration-300">
                            Home
                        </a>
                    </li>

                    <li><a href="#about"
                            class="text-black px-8 py-3 rounded-full font-semibold hover:bg-[#7B0D23] hover:text-white duration-300">About</a>
                    </li>
                    <li><a href="#skills"
                            class="text-black px-8 py-3 rounded-full font-semibold hover:bg-[#7B0D23] hover:text-white duration-300">Skills</a>
                    </li>
                    <li><a href="#projects"
                            class="text-black px-8 py-3 rounded-full font-semibold hover:bg-[#7B0D23] hover:text-white duration-300">Projects</a>
                    </li>
                    <li><a href="#education"
                            class="text-black px-8 py-3 rounded-full font-semibold hover:bg-[#7B0D23] hover:text-white duration-300">Education</a>
                    </li>
                    <li><a href="#contact"
                            class="text-black px-8 py-3 rounded-full font-semibold hover:bg-[#7B0D23] hover:text-white duration-300">Contact</a>
                    </li>

                </ul>

                <div></div>

            </nav>

        </div>
    </header>
    {{-- HERO --}}
    <section class="max-w-7xl mx-auto px-6 lg:px-10 pt-44 pb-24 min-h-screen">

        <div class="grid lg:grid-cols-2 items-center gap-16">

            {{-- LEFT --}}
            <div>

                {{-- Title --}}
                <h1 class="text-6xl lg:text-6xl font-extrabold leading-tight text-[#2B1E1E]">

                    Hi, I'm

                    <br>

                    <span class="text-[#7B0D23]">
                        Ratu Farelia
                    </span>

                </h1>

                {{-- Subtitle --}}
                <p class="text-black mt-7 text-lg leading-8 max-w-xl">

                    Software Engineering Student
                    at IDN Polytechnic

                    Passionate about building modern web
                    and mobile applications.
                </p>

                {{-- Button --}}
                <div class="flex gap-5 mt-10">

                    <!-- 1. Tombol CV (misal file CV disimpan di folder public/assets/cv-ratu.pdf) -->
                    <a href="{{ asset('images/cv-ratu.pdf') }}" target="_blank"
                        class="border border-[#7B0D23] text-[#7B0D23] px-8 py-4 rounded-full font-semibold hover:bg-[#7B0D23] hover:text-white duration-300">
                        Cv
                    </a>

                    <!-- 2. Tombol Contact (Akan scroll otomatis ke section id="contact" di bawah) -->
                    <a href="https://wa.me/62895626736885?text=Halo%20Ratu,%20saya%20tertarik%20dengan%20portofolio%20kamu!"
                        target="_blank"
                        class="border border-[#7B0D23] text-[#7B0D23] px-8 py-4 rounded-full font-semibold hover:bg-[#7B0D23] hover:text-white duration-300">
                        Contact Me
                    </a>

                </div>

                {{-- Stats --}}
                <div class="flex gap-12 mt-16">

                    <div>

                        <h2 class="text-4xl font-bold text-[#7B0D23]">
                            4+
                        </h2>

                        <p class="text-black mt-2">
                            Projects
                        </p>

                    </div>

                    <div>

                        <h2 class="text-4xl font-bold text-[#7B0D23]">
                            1+
                        </h2>

                        <p class="text-black mt-2">
                            Year Learning
                        </p>

                    </div>

                    <div>

                        <h2 class="text-4xl font-bold text-[#7B0D23]">
                            70%
                        </h2>

                        <p class="text-black mt-2">
                            Passion
                        </p>

                    </div>

                </div>

            </div>


            {{-- RIGHT --}}
            <div class="relative flex justify-center items-center">

                {{-- Background Blur --}}
                <div class="absolute w-[550px] h-[550px] bg-[#a31735]/15 rounded-full blur-[120px]"></div>

                {{-- Circle --}}
                <div class="relative w-[430px] h-[430px]">

                    <div class="absolute inset-0 rounded-full border-[3px] border-white/70"></div>

                    <div class="absolute inset-4 rounded-full border border-white/40"></div>

                    <img src="{{ asset('images/acuuu.png') }}" alt="Profile"
                        class="absolute left-1/2 -translate-x-1/2 bottom-[-60px] w-[270px] object-contain z-20">

                </div>

                {{-- Available --}}
                <div class="absolute bottom-2 left-1/2 -translate-x-1/2 bg-white rounded-full shadow-xl px-8 py-4 z-30">

                    <span class="text-gray-700 text-sm font-medium">
                        Software Engineering Student
                        <div class="absolute w-[550px] h-[550px] bg-[#a31735]/15 rounded-full blur-[120px]"></div>

                    </span>



                </div>

            </div>

        </div>


    </section>
    {{-- ================= ABOUT ================= --}}
    <section id="about" class="relative py-32">

        {{-- Blur Background --}}
        <div class="absolute inset-0 -z-10 overflow-hidden">

            <div class="absolute w-[650px] h-[650px] bg-[#9C1F38]/10 rounded-full blur-[180px] left-[-250px] top-20">
            </div>

            <div class="absolute w-[500px] h-[500px] bg-[#C87B7B]/15 rounded-full blur-[150px] right-[-120px] bottom-0">
            </div>

        </div>

        <div class="max-w-7xl mx-auto px-5 lg:px-10 mt-16 mb-36">

            {{-- Badge --}}
            <div class="text-center">

                <span class="uppercase tracking-[5px] text-[#7B1E3A] font-semibold">

                    ABOUT ME

                </span>

            </div>

            {{-- Title --}}
            <h2 class="text-center text-5xl font-bold text-[#3A0E18] mt-3">

                A Short Introduction

            </h2>

            <div class="w-24 h-1 bg-[#7B0D23] mx-auto rounded-full mt-6"></div>

            {{-- Card --}}
            <div
                class="mt-12 max-w-5xl mx-auto bg-white/70 backdrop-blur-xl rounded-[35px] p-10 shadow-xl border border-white">



                <p class="text-black leading-9 text-lg">

                    Hi! I'm Ratu, a third-semester Software Engineering student at IDN Polytechnic with a passion for
                    web
                    and mobile development. I enjoy building modern, responsive, and user-friendly applications using
                    HTML, CSS, PHP, Laravel, Tailwind CSS, MySQL, Flutter, and Dart. Through academic and personal
                    projects, I continue to improve my technical and problem-solving skills. I am currently seeking an
                    internship opportunity to gain hands-on experience and grow as a software developer.

                    {{-- Stats --}}
                <div class="grid md:grid-cols-3 gap-6 mt-14">

                    {{-- Card 1 --}}
                    <div class="bg-white rounded-3xl p-8 shadow-lg text-center hover:-translate-y-2 duration-300">

                        <h3 class="text-5xl font-extrabold text-[#7B0D23]">

                            4+

                        </h3>

                        <p class="mt-4 text-black">

                            Projects Built

                        </p>

                    </div>

                    {{-- Card 2 --}}
                    <div class="bg-white rounded-3xl p-10 shadow-lg text-center hover:-translate-y-2 duration-300">

                        <h3 class="text-5xl font-extrabold text-[#7B0D23]">

                            5+

                        </h3>

                        <p class="mt-4 text-black">

                            Technologies

                        </p>

                    </div>

                    {{-- Card 3 --}}
                    <div class="bg-white rounded-3xl p-10 shadow-lg text-center hover:-translate-y-2 duration-300">

                        <h3 class="text-5xl font-extrabold text-[#7B0D23]">

                            2025

                        </h3>

                        <p class="mt-4 text-black">

                            Started Journey

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- ===================== Skills ===================== -->
    <!-- ===================== Skills ===================== -->
    <section id="skills" class="relative py-20 px-6 bg-[#F8F2F2] overflow-hidden">

        <!-- Background Blur -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute w-[400px] h-[400px] bg-[#C98A97]/25 blur-[120px] rounded-full top-0 left-10"></div>
            <div class="absolute w-[400px] h-[400px] bg-[#D9B2BA]/25 blur-[120px] rounded-full bottom-0 right-0"></div>
        </div>

        <div class="max-w-6xl mx-auto">

            <!-- Heading -->
            <div class="text-center mb-12">

                <p class="uppercase tracking-[4px] text-[#7B1E3A] font-semibold">
                    My Skills
                </p>

                <h2 class="text-4xl font-bold text-[#3A0E18] mt-2">
                    Tools I Work With
                </h2>

                <div class="w-20 h-1 bg-[#7B1E3A] rounded-full mx-auto mt-4"></div>

            </div>

            <!-- Cards -->
            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-6">

                <!-- Frontend -->
                <div
                    class="bg-white rounded-3xl p-6 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition duration-300">

                    <div
                        class="w-14 h-14 rounded-full bg-[#7B1E3A] text-white flex items-center justify-center text-xl mb-5">
                        &lt;/&gt;
                    </div>

                    <h3 class="text-2xl font-bold text-[#4A1021] mb-4">
                        Frontend
                    </h3>

                    <div class="flex flex-wrap gap-2">
                        <span class="border rounded-full px-3 py-1.5 text-sm">HTML</span>
                        <span class="border rounded-full px-3 py-1.5 text-sm">CSS</span>
                        <span class="border rounded-full px-3 py-1.5 text-sm">Tailwind</span>
                    </div>

                </div>

                <!-- Backend -->
                <div
                    class="bg-white rounded-3xl p-6 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition duration-300">

                    <div
                        class="w-14 h-14 rounded-full bg-[#7B1E3A] text-white flex items-center justify-center text-xl mb-5">
                        🖥
                    </div>

                    <h3 class="text-2xl font-bold text-[#4A1021] mb-4">
                        Backend
                    </h3>

                    <div class="flex flex-wrap gap-2">
                        <span class="border rounded-full px-3 py-1.5 text-sm">PHP</span>
                        <span class="border rounded-full px-3 py-1.5 text-sm">Laravel</span>
                    </div>

                </div>

                <!-- Mobile -->
                <div
                    class="bg-white rounded-3xl p-6 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition duration-300">

                    <div
                        class="w-14 h-14 rounded-full bg-[#7B1E3A] text-white flex items-center justify-center text-xl mb-5">
                        📱
                    </div>

                    <h3 class="text-2xl font-bold text-[#4A1021] mb-4">
                        Mobile
                    </h3>

                    <div class="flex flex-wrap gap-2">
                        <span class="border rounded-full px-3 py-1.5 text-sm">Flutter</span>
                        <span class="border rounded-full px-3 py-1.5 text-sm">Dart</span>
                    </div>

                </div>

                <!-- Database -->
                <div
                    class="bg-white rounded-3xl p-6 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition duration-300">

                    <div
                        class="w-14 h-14 rounded-full bg-[#7B1E3A] text-white flex items-center justify-center text-xl mb-5">
                        🗄
                    </div>

                    <h3 class="text-2xl font-bold text-[#4A1021] mb-4">
                        Database
                    </h3>

                    <div class="flex flex-wrap gap-2">
                        <span class="border rounded-full px-3 py-1.5 text-sm">MySQL</span>
                    </div>

                </div>

                <!-- Tools -->
                <div
                    class="bg-white rounded-3xl p-6 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition duration-300">

                    <div
                        class="w-14 h-14 rounded-full bg-[#7B1E3A] text-white flex items-center justify-center text-xl mb-5">
                        🛠
                    </div>

                    <h3 class="text-2xl font-bold text-[#4A1021] mb-4">
                        Tools
                    </h3>

                    <div class="flex flex-wrap gap-2">
                        <span class="border rounded-full px-3 py-1.5 text-sm">Git</span>
                        <span class="border rounded-full px-3 py-1.5 text-sm">GitHub</span>
                        <span class="border rounded-full px-3 py-1.5 text-sm">VS Code</span>
                        <span class="border rounded-full px-3 py-1.5 text-sm">Postman</span>
                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- ===================== Projects ===================== -->
    <section id="projects" class="relative py-20 px-6 bg-[#F8F2F2] overflow-hidden">

        <!-- Background Blur -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute w-[400px] h-[400px] bg-[#C98A97]/20 blur-[120px] rounded-full top-0 left-0"></div>
            <div class="absolute w-[400px] h-[400px] bg-[#D9B2BA]/20 blur-[120px] rounded-full bottom-0 right-0"></div>
        </div>

        <div class="max-w-6xl mx-auto">

            <!-- Heading -->
            <div class="text-center mb-12">

                <p class="uppercase tracking-[4px] text-[#7B1E3A] font-semibold">
                    My Projects
                </p>

                <h2 class="text-4xl font-bold text-[#3A0E18] mt-2">
                    Featured Projects
                </h2>

                <div class="w-20 h-1 bg-[#7B1E3A] rounded-full mx-auto mt-4"></div>

            </div>

            <!-- Cards -->
            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-6">

                <!-- Project 1: Juragan99 Meat Store -->
                <div
                    class="bg-white rounded-[28px] overflow-hidden shadow-lg hover:shadow-2xl hover:-translate-y-2 transition duration-300 flex flex-col justify-between">
                    <!-- Main Content Area (Mengisi ruang secara fleksibel) -->
                    <div class="flex flex-col flex-1 justify-between p-0">
                        <div>
                            <!-- Header Gambar Project 1 -->
                            <div class="h-48 relative overflow-hidden">
                                <img src="{{ asset('images/jurangan.png') }}" alt="Juragan99 Meat Store"
                                    class="w-full h-full object-cover" />
                                <span
                                    class="absolute bottom-5 left-5 bg-black/40 backdrop-blur-md text-white text-sm px-4 py-2 rounded-full">
                                    Semester 1
                                </span>
                            </div>

                            <div class="p-6 pb-0">
                                <h3 class="text-2xl font-bold text-[#4A1021] mb-3">
                                    Juragan99 Meat Store
                                </h3>

                                <p class="text-gray-700 leading-8 text-base">
                                    E-commerce website for fresh meat products with interactive recipe portal, shopping
                                    cart, payment simulation, and admin dashboard.
                                </p>
                            </div>
                        </div>

                        <!-- Tags Badge (Sejajar di semua card) -->
                        <div class="p-6 pt-4">
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="bg-[#F8E9EC] text-[#7B1E3A] px-3 py-1.5 rounded-full text-sm">Laravel</span>
                                <span class="bg-[#F8E9EC] text-[#7B1E3A] px-3 py-1.5 rounded-full text-sm">Tailwind
                                    CSS</span>
                                <span class="bg-[#F8E9EC] text-[#7B1E3A] px-3 py-1.5 rounded-full text-sm">MySQL</span>
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Link GitHub -->
                    <div class="px-6 pb-6 pt-0">
                        <a href="https://github.com/ratufarelia-arch/website-daging-sapi-ayam" target="_blank"
                            class="inline-flex items-center justify-center gap-2 w-full px-4 py-2.5 text-sm font-semibold text-white bg-[#6F132A] hover:bg-[#4A1021] rounded-full shadow-md hover:shadow-lg transition duration-200">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z" />
                            </svg>
                            View Code
                        </a>
                    </div>
                </div>

                <!-- Project 2: NewsUp -->
                <div
                    class="bg-white rounded-[28px] overflow-hidden shadow-lg hover:shadow-2xl hover:-translate-y-2 transition duration-300 flex flex-col justify-between">
                    <!-- Main Content Area -->
                    <div class="flex flex-col flex-1 justify-between p-0">
                        <div>
                            <!-- Header Gambar Project 2 -->
                            <div class="h-48 relative overflow-hidden">
                                <img src="{{ asset('images/newsup.png') }}" alt="NewsUp"
                                    class="w-full h-full object-cover" />
                                <span
                                    class="absolute bottom-5 left-5 bg-black/40 backdrop-blur-md text-white text-sm px-4 py-2 rounded-full">
                                    Semester 2
                                </span>
                            </div>

                            <div class="p-6 pb-0">
                                <h3 class="text-2xl font-bold text-[#4A1021] mb-3">
                                    NewsUp
                                </h3>

                                <p class="text-gray-700 leading-8 text-base">
                                    A cross-platform mobile news app built with Flutter featuring real-time news
                                    updates, category filtering, detailed article views, and dynamic REST API
                                    integration.
                                </p>
                            </div>
                        </div>

                        <!-- Tags Badge (Sejajar di semua card) -->
                        <div class="p-6 pt-4">
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="bg-[#F8E9EC] text-[#7B1E3A] px-3 py-1.5 rounded-full text-sm">Flutter</span>
                                <span class="bg-[#F8E9EC] text-[#7B1E3A] px-3 py-1.5 rounded-full text-sm">Dart</span>
                                <span class="bg-[#F8E9EC] text-[#7B1E3A] px-3 py-1.5 rounded-full text-sm">REST
                                    API</span>
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Link GitHub -->
                    <div class="px-6 pb-6 pt-0">
                        <a href="https://github.com/ratufarelia-arch/project-newsup-ratufarelia.git" target="_blank"
                            class="inline-flex items-center justify-center gap-2 w-full px-4 py-2.5 text-sm font-semibold text-white bg-[#6F132A] hover:bg-[#4A1021] rounded-full shadow-md hover:shadow-lg transition duration-200">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z" />
                            </svg>
                            View Code
                        </a>
                    </div>
                </div>

                <!-- Project 3: Mindmate -->
                <div
                    class="bg-white rounded-[28px] overflow-hidden shadow-lg hover:shadow-2xl hover:-translate-y-2 transition duration-300 flex flex-col justify-between">
                    <!-- Main Content Area -->
                    <div class="flex flex-col flex-1 justify-between p-0">
                        <div>
                            <!-- Header Gambar Project 3 -->
                            <div class="h-48 relative overflow-hidden">
                                <img src="{{ asset('images/mindmaze.png') }}" alt="Mindmate"
                                    class="w-full h-full object-cover" />
                                <span
                                    class="absolute bottom-5 left-5 bg-black/40 backdrop-blur-md text-white text-sm px-4 py-2 rounded-full">
                                    Personal Website
                                </span>
                            </div>

                            <div class="p-6 pb-0">
                                <h3 class="text-2xl font-bold text-[#4A1021] mb-3">
                                    Mindmate
                                </h3>

                                <p class="text-gray-700 leading-8 text-base">
                                    Mindmate – A gamified task & mood tracker that turns daily habits into visual
                                    progress.
                                </p>
                            </div>
                        </div>

                        <!-- Tags Badge (Sejajar di semua card) -->
                        <div class="p-6 pt-4">
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-[#F8E9EC] text-[#7B1E3A] px-3 py-1.5 rounded-full text-sm">HTML</span>
                                <span class="bg-[#F8E9EC] text-[#7B1E3A] px-3 py-1.5 rounded-full text-sm">CSS</span>
                                <span
                                    class="bg-[#F8E9EC] text-[#7B1E3A] px-3 py-1.5 rounded-full text-sm">Laravel</span>
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Link GitHub -->
                    <div class="px-6 pb-6 pt-0">
                        <a href="https://github.com/ratufarelia-arch/landingpage-mindmate.git" target="_blank"
                            class="inline-flex items-center justify-center gap-2 w-full px-4 py-2.5 text-sm font-semibold text-white bg-[#6F132A] hover:bg-[#4A1021] rounded-full shadow-md hover:shadow-lg transition duration-200">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z" />
                            </svg>
                            View Code
                        </a>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- ===================== Education ===================== -->
    <!-- ===================== Education ===================== -->
    <section id="education" class="relative py-20 px-6 bg-[#F8F2F2] overflow-hidden">

        <!-- Background Blur -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute w-[380px] h-[380px] bg-[#C98A97]/25 blur-[110px] rounded-full top-10 left-10"></div>
            <div class="absolute w-[380px] h-[380px] bg-[#D8B1B8]/25 blur-[110px] rounded-full bottom-0 right-0"></div>
        </div>

        <div class="max-w-6xl mx-auto">

            <!-- Heading -->
            <div class="text-center mb-12">

                <p class="uppercase tracking-[4px] text-[#7B1E3A] font-semibold">
                    Journey
                </p>

                <h2 class="text-4xl font-bold text-[#3A0E18] mt-2">
                    Education & Experience
                </h2>

                <div class="w-20 h-1 bg-[#7B1E3A] rounded-full mx-auto mt-4"></div>

            </div>

            <div class="grid lg:grid-cols-2 gap-6">

                <!-- Education -->
                <div class="bg-white rounded-[28px] p-8 shadow-lg hover:shadow-2xl transition duration-300">

                    <div class="flex items-center gap-3 mb-6">

                        <div
                            class="w-14 h-14 rounded-full bg-[#7B1E3A] flex items-center justify-center text-white text-xl">
                            🎓
                        </div>

                        <h3 class="text-2xl font-bold text-[#4A1021]">
                            Education
                        </h3>

                    </div>

                    <div class="flex">

                        <!-- Timeline -->
                        <div class="flex flex-col items-center mr-5">

                            <div class="w-3.5 h-3.5 rounded-full bg-[#7B1E3A]"></div>

                            <div class="w-[2px] h-32 bg-[#E8C7CF] mt-2"></div>

                        </div>

                        <!-- Content -->
                        <div>

                            <span class="text-[#7B1E3A] font-semibold text-sm">
                                2025 – Present
                            </span>

                            <h4 class="text-2xl font-bold text-[#3A0E18] mt-2">
                                Politeknik IDN Bogor
                            </h4>

                            <p class="text-black mt-2 leading-7">
                                Bachelor of Applied Software Engineering
                                <br>
                                (Teknik Rekayasa Perangkat Lunak)
                            </p>

                        </div>

                    </div>

                </div>

                <!-- Experience -->
                <div class="bg-white rounded-[28px] p-8 shadow-lg hover:shadow-2xl transition duration-300">

                    <div class="flex items-center gap-3 mb-6">

                        <div
                            class="w-14 h-14 rounded-full bg-[#7B1E3A] flex items-center justify-center text-white text-xl">
                            💼
                        </div>

                        <h3 class="text-2xl font-bold text-[#4A1021]">
                            Experience
                        </h3>

                    </div>

                    <div class="flex">

                        <!-- Timeline -->
                        <div class="flex flex-col items-center mr-5">

                            <div class="w-3.5 h-3.5 rounded-full bg-[#7B1E3A]"></div>

                            <div class="w-[2px] h-40 bg-[#E8C7CF] mt-2"></div>

                        </div>

                        <!-- Content -->
                        <div>

                            <span class="text-[#7B1E3A] font-semibold text-sm">
                                2025 – Present
                            </span>

                            <h4 class="text-2xl font-bold text-[#3A0E18] mt-2">
                                Software Engineering Intern
                            </h4>

                            <p class="text-black mt-3 leading-7">
                                Currently participating in an internship while
                                developing Laravel, Flutter, Tailwind CSS, PHP,
                                and MySQL projects. Experienced in building
                                responsive web applications and collaborating
                                within a development team.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- ===================== Contact ===================== -->
    <section id="contact" class="relative py-20 px-6 bg-[#F8F2F2] overflow-hidden">

        <!-- Background Blur -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute w-[380px] h-[380px] bg-[#C98A97]/25 blur-[110px] rounded-full top-0 left-20"></div>
            <div class="absolute w-[380px] h-[380px] bg-[#D9B5BC]/25 blur-[110px] rounded-full bottom-0 right-10"></div>
        </div>

        <div class="max-w-6xl mx-auto">

            <!-- Heading -->
            <div class="text-center mb-12">

                <p class="uppercase tracking-[4px] text-[#7B1E3A] font-semibold">
                    Contact
                </p>

                <h2 class="text-4xl font-bold text-[#3A0E18] mt-2">
                    Let's Build Something Together
                </h2>

                <div class="w-20 h-1 bg-[#7B1E3A] rounded-full mx-auto mt-4"></div>

            </div>

            <div class="grid lg:grid-cols-2 gap-8">

                <!-- Left -->
                <div class="flex flex-col gap-6">
                    <!-- Mengganti space-y-6 dengan flex & gap lebih aman untuk link -->

                    <!-- Email -->
                    <a href="mailto:ratufarelia@gmail.com" class="block">
                        <!-- Ditambah class="block" -->
                        <div
                            class="bg-white rounded-[28px] p-5 shadow-lg flex items-center gap-4 hover:shadow-xl hover:-translate-y-1 transition duration-300">
                            <div
                                class="w-14 h-14 rounded-full bg-[#7B1E3A] text-white flex items-center justify-center text-xl">
                                ✉️
                            </div>
                            <div>
                                <p class="uppercase text-xs text-gray-500">Email</p>
                                <h4 class="font-semibold text-lg text-[#4A1021]">
                                    ratufarelia@gmail.com
                                </h4>
                            </div>
                        </div>
                    </a>

                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/in/ratu-farelia-putri-zasmine-b82715371/" target="_blank"
                        class="block">
                        <!-- Ditambah class="block" -->
                        <div
                            class="bg-white rounded-[28px] p-5 shadow-lg flex items-center gap-4 hover:shadow-xl hover:-translate-y-1 transition duration-300">
                            <div
                                class="w-14 h-14 rounded-full bg-[#7B1E3A] text-white flex items-center justify-center text-xl">
                                💼
                            </div>
                            <div>
                                <p class="uppercase text-xs text-gray-500">LinkedIn</p>
                                <h4 class="font-semibold text-lg text-[#4A1021]">
                                    linkedin.com/in/ratufarelia
                                </h4>
                            </div>
                        </div>
                    </a>

                    <!-- GitHub -->
                    <a href="https://github.com/ratufarelia-arch" target="_blank" class="block">
                        <!-- Ditambah class="block" -->
                        <div
                            class="bg-white rounded-[28px] p-5 shadow-lg flex items-center gap-4 hover:shadow-xl hover:-translate-y-1 transition duration-300">
                            <div
                                class="w-14 h-14 rounded-full bg-[#7B1E3A] text-white flex items-center justify-center text-xl">
                                💻
                            </div>
                            <div>
                                <p class="uppercase text-xs text-gray-500">GitHub</p>
                                <h4 class="font-semibold text-lg text-[#4A1021]">
                                    github.com/ratufarelia
                                </h4>
                            </div>
                        </div>
                    </a>

                    <!-- Instagram -->
                    <a href="https://www.instagram.com/ratufralaa/" target="_blank" class="block">
                        <!-- Ditambah class="block" -->
                        <div
                            class="bg-white rounded-[28px] p-5 shadow-lg flex items-center gap-4 hover:shadow-xl hover:-translate-y-1 transition duration-300">
                            <div
                                class="w-14 h-14 rounded-full bg-[#7B1E3A] text-white flex items-center justify-center text-xl">
                                📷
                            </div>
                            <div>
                                <p class="uppercase text-xs text-gray-500">Instagram</p>
                                <h4 class="font-semibold text-lg text-[#4A1021]">
                                    @ratufralaa
                                </h4>
                            </div>
                        </div>
                    </a>

                </div>

                <!-- Right -->
                <div class="bg-white rounded-[28px] shadow-lg p-8">

                    <form action="#" method="POST" class="space-y-5">

                        <div class="grid md:grid-cols-2 gap-5">

                            <div>
                                <label class="block mb-2 font-medium text-[#4A1021]">
                                    Name
                                </label>

                                <input type="text" placeholder="Your Name"
                                    class="w-full border rounded-full px-5 py-3 focus:outline-none focus:border-[#7B1E3A]">
                            </div>

                            <div>
                                <label class="block mb-2 font-medium text-[#4A1021]">
                                    Email
                                </label>

                                <input type="email" placeholder="you@example.com"
                                    class="w-full border rounded-full px-5 py-3 focus:outline-none focus:border-[#7B1E3A]">
                            </div>

                        </div>

                        <div>

                            <label class="block mb-2 font-medium text-[#4A1021]">
                                Subject
                            </label>

                            <input type="text" placeholder="Subject"
                                class="w-full border rounded-full px-5 py-3 focus:outline-none focus:border-[#7B1E3A]">

                        </div>

                        <div>

                            <label class="block mb-2 font-medium text-[#4A1021]">
                                Message
                            </label>

                            <textarea rows="5" placeholder="Write your message..."
                                class="w-full border rounded-2xl px-5 py-3 resize-none focus:outline-none focus:border-[#7B1E3A]"></textarea>

                        </div>

                        <button
                            class="bg-[#7B1E3A] hover:bg-[#63152F] text-white px-8 py-3 rounded-full font-semibold transition duration-300">
                            Send Message →
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </section>