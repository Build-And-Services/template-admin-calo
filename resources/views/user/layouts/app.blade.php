<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Opixo - Tailwind CSS Multipurpose Landing Page Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Tailwind CSS Saas & Software Landing Page Template, agency, application, business, clean, creative, it solutions, modern, multipurpose, saas, software, tailwind css." name="description" />
    <meta content="coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets-landing/images/favicon.ico')}}">

    <!-- style css -->
    <link href="{{asset('assets-landing/css/style.min.css')}}" rel="stylesheet" type="text/css">

    <!-- unicons Icons css -->
    <link href="{{asset('assets-landing/libs/@iconscout/unicons/css/line.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Navbar Start -->
    <header id="navbar-sticky" class="navbar nav-light">
        <div class="container">
            <nav>
                <!-- Navbar Brand Logo -->
                <a href="home-event.html" class="logo">
                    <img src="{{asset('assets-landing/images/logo-dark.png')}}" class="h-10 logo-dark" alt="Opixo Logo">
                    <img src="{{asset('assets-landing/images/logo-light.png')}}" class="h-10 logo-light" alt="Opixo Logo">
                </a>

                <!-- Moblie Menu Toggle Button (Offcanvas Button) -->
                <div class="lg:hidden flex items-center ms-auto px-2.5">
                    <button class="hs-collapse-toggle inline-flex items-center justify-center h-9 w-12 rounded-md border border-gray-300 bg-slate-300/30" type="button" id="hs-unstyled-collapse" data-hs-collapse="#mobileMenu" data-hs-type="collapse">
                        <i class="uil uil-bars text-2xl"></i>
                    </button>
                </div>

                <!-- Nevigation Menu -->
                <div id="mobileMenu" class="hs-collapse overflow-hidden transition-all duration-300 lg:basis-auto basis-full grow hidden lg:flex items-center justify-center mx-auto mt-2 lg:mt-0">
                    <ul id="navbar-navlist" class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#schedule">Pesanan</a>
                        </li>
                    </ul>
                    <!-- Download Button -->
                    {{-- <div class="lg:hidden flex items-center pt-4 mt-4 lg:pt-0 lg:mt-0 border-t border-gray-200 lg:border-none">
                        <a href="#price" class="nav-btn">Book Tickets</a>
                    </div> --}}
                </div>
                <!-- Download Button -->
                <div class="hidden lg:flex items-center">
                    <a href="#price" class="nav-btn uppercase me-2">{{\Auth::user()->name}}</a>
                </div>

                <div class="hidden lg:flex items-center">
                    <form action="{{url('logout')}}" method="post">
                    @csrf
                        <button type="submit" class="nav-btn">Logout</button>

                    </form>
                </div>
            </nav>
        </div>
    </header>
    <!-- Navbar End -->

    <!-- Hero Section Start -->
    <section id="home" class="py-64 relative overflow-hidden bg-fixed bg-no-repeat bg-center bg-cover bg-[url('../images/landing/event/hero-bg.jpg')]">
        <div class="absolute bg-black/25 inset-0 w-full h-full"></div>
        <div class="absolute inset-0 bg-black/70"></div>
        <!-- end backdrop -->

        <div class="container">
            <div class="relative text-center">
                <span class="text-white font-medium bg-white/20 py-[5px] px-4 rounded-md">
                    1 <sup>th</sup> Show, 01 January 2023
                </span>
                <h1 class="lg:text-6xl text-4xl font-extrabold text-white my-8">Event Management</h1>
                <div class="flex justify-center">
                    <div class="max-w-xl text-center">
                        <p class="font-semibold text-white">Itaque earum rerum tenetur a sapiente delectus reiciendis voluptatibus maiores alias perferendis doloribus asperiores.</p>
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="relative mt-14">
                        <div class="">
                            <div class="flex flex-wrap items-center justify-center gap-y-4 gap-x-4 sm:gap-x-0">
                                <div class="inline-flex flex-col items-center justify-center rounded-lg border-2 border-dashed font-bold text-white h-24 w-24 px-3 py-2">
                                    <span id="days" class="text-3xl">00</span>
                                    <span class="text-base">Days</span>
                                </div>
                                <div class="text-2xl font-bold mx-4 text-white hidden sm:block">:</div>
                                <div class="inline-flex flex-col items-center justify-center rounded-lg border-2 border-dashed font-bold text-white h-24 w-24 px-3 py-2">
                                    <span id="hours" class="text-3xl">00</span>
                                    <span class="text-base">Hours</span>
                                </div>
                                <div class="text-2xl font-bold mx-4 text-white hidden sm:block">:</div>
                                <div class="inline-flex flex-col items-center justify-center rounded-lg border-2 border-dashed font-bold text-white h-24 w-24 px-3 py-2">
                                    <span id="minutes" class="text-3xl">00</span>
                                    <span class="text-base">Minutes</span>
                                </div>
                                <div class="text-2xl font-bold mx-4 text-white hidden sm:block">:</div>
                                <div class="inline-flex flex-col items-center justify-center rounded-lg border-2 border-dashed font-bold text-white h-24 w-24 px-3 py-2">
                                    <span id="seconds" class="text-3xl">00</span>
                                    <span class="text-base">Seconds</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Flex End -->
            </div>

            <div class="flex justify-center">
                <div class="relative mt-20">
                    <a href="#price" class="text-xl font-medium py-3 px-9 bg-white text-primary rounded-lg transition-all duration-500  hover:shadow-white/10">Register Now</a>
                </div>
            </div><!-- Flex End -->
        </div><!-- Container End -->
    </section>
    <!-- hero section End -->

    <!-- About section start -->
    <section id="about" class="sm:py-20 pt-20 pb-10">
        <div class="container">
            <div class="grid lg:grid-cols-2 grid-cols-1 items-center gap-10">
                <div class="lg:order-2">
                    <div class="grid grid-cols-12 items-center gap-6">
                        <div class="col-span-5">
                            <img src="{{asset('assets-landing/images/landing/event/speakers/2.jpg')}}" class="max-w-full max-h-full rounded-md" alt="">
                        </div>
                        <div class="col-span-7">
                            <img src="{{asset('assets-landing/images/landing/event/event-speakers.jpg')}}" class="max-w-full max-h-full rounded-md" alt="">
                        </div>
                    </div>
                </div><!-- end grid-col -->

                @if (session('success'))
                    <div id="dismiss-example" class="border bg-info/10 text-info border-info/20 rounded py-3 px-5 flex justify-between items-center">
                        <p>
                            <span class="font-bold">Success</span> {{ session('success') }}
                        </p>
                        <button class="text-xl/[0]" data-fc-dismiss="dismiss-example" type="button">
                        <i class="mdi mdi-close text-xl text-gray-400"></i>
                        </button>
                    </div>
                @endif
                @if (session('error'))
                    <div id="dismiss-example-danger" class="border bg-danger/10 text-danger border-danger/20 rounded-md py-3 px-5 flex justify-between items-center">
                        <p>
                            <span class="font-bold">Error</span> {{ session('error') }}
                        </p>
                        <button class="text-xl/[0]" data-fc-dismiss="dismiss-example-danger" type="button">
                        <i class="mdi mdi-close text-xl text-gray-400"></i>
                        </button>
                    </div>
                @endif
                <div class="lg:me-6">
                    <div class="my-auto">
                        <h2 class="text-3xl text-gray-800 font-bold mb-4">Welcome to <span class="text-primary">Opixo.</span></h2>
                        <div class="flex flex-col mb-6">
                            <p class="text-lg font-medium text-slate-500 mb-6 pe-2">Temporibus autem quibusdam et aut officiis debitis aut voluptates at rerum molestiae non recusandae earum rerum.</p>
                            <p class="text-base font-medium text-slate-500 mb-2"><i class="uil uil-check-circle text-xl text-primary align-middle me-1"></i> Cras ultricies turpis hendrerit fringilla.</p>
                            <p class="text-base font-medium text-slate-500 mb-2"><i class="uil uil-check-circle text-xl text-primary align-middle me-1"></i> Maecenas tempus tellus condimentum rhoncus.</p>
                            <p class="text-base font-medium text-slate-500 mb-2"><i class="uil uil-check-circle text-xl text-primary align-middle me-1"></i> Donec pede justo fringilla.</p>
                        </div>

                        <div class="grid grid-cols-2 items-center gap-6 mb-10">
                            <div class="">
                                <div class="h-10 w-10 inline-flex justify-center items-center bg-primary/20 text-primary text-2xl/none rounded-md mb-4">
                                    <i data-lucide="map-pin" class="h-6 w-6"></i>
                                </div>
                                <h6 class="text-lg font-bold mb-1">Where</h6>
                                <p class="text-base font-semibold text-gray-500">3929 Hide Gate A Way Main Road Santa Clara, CA 95054</p>
                            </div>
                            <div class="">
                                <div class="h-10 w-10 inline-flex justify-center items-center bg-primary/20 text-primary text-2xl/none rounded-md mb-4">
                                    <i data-lucide="circle-dot-dashed" class="h-6 w-6"></i>
                                </div>
                                <h6 class="text-lg font-bold mb-1">When</h6>
                                <p class="text-base font-semibold text-gray-500">Saturday to Thursday (09:00 am to 05:00 pm) July 15 to 19, 2017</p>
                            </div>
                        </div>

                        <a href="#" class="group relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none text-primary hover:text-primary duration-500"><span class="absolute h-px w-7/12 group-hover:w-full transition-all duration-500 rounded bg-primary/80 -bottom-0"></span>Learn More <i class="uil uil-angle-right text-xl/none align-middle"></i></a>
                    </div>
                </div><!-- end grid-col -->
            </div><!-- Grid End -->
        </div><!-- Container End -->
    </section>
    <!-- About section End -->

    <!-- Schedule section start -->
    <section id="schedule" class="py-20 bg-slate-50">
        <div class="container">
            <div class="flex items-center justify-center mb-16">
                <div class="max-w-2xl text-center">
                    <h5 class="capitalize text-lg  text-gray-800 font-medium mb-2">Jadwal <span class="font-semibold text-primary">Event</span></h5>
                    <h2 class="text-3xl/snug font-bold capitalize text-gray-800 mb-1.5">Event</h2>
                    <p class="text-base font-medium text-gray-500 max-w-xl">Silahkan melihat list jadwal event kami dan memesan</p>
                </div>
            </div><!-- end flex -->


            <div class="grid lg:grid-cols-3 grid-cols-1 gap-6 mb-20">
                    @foreach ($getEvents as $item)
                    <div class="relative border dark:border-gray-700 rounded-lg shadow-lg overflow-hidden bg-no-repeat bg-center bg-cover bg-[url('../images/landing/event/bg.jpg')]">
                        <div class="absolute inset-0 bg-black/60"></div>
                        <div class="text-center relative shadow p-10">
                            <div class="mb-12">
                                <p class="text-gray-100 font-semibold mb-2">{{\Carbon\Carbon::parse($item->date)->format('d F Y')}}</p>
                                <h4 class="text-2xl font-bold text-white">{{$item->title}}</h4>
                            </div>

                            <div class="mb-8">
                                <h6 class="text-white font-bold italic mb-1">{{\Carbon\Carbon::parse($item->start_time)->format('H:i')}} - {{\Carbon\Carbon::parse($item->finish_time)->format('H:i')}} WIB</h6>
                                <p class="text-slate-200 font-medium mb-8">{{$item->description}}</p>
                                <p class="text-slate-200 text-xl font-medium mb-1">Open Gate</p>
                                <h6 class="text-white font-bold italic mb-1">{{\Carbon\Carbon::parse($item->open_gate)->format('H:i')}} WIB</h6>
                            </div>

                            <a href="#price" class="group relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none text-primary hover:text-primary duration-500"><span class="absolute h-px w-7/12 group-hover:w-full transition-all duration-500 rounded bg-primary/80 -bottom-0"></span><i class="uil uil-shopping-cart-alt text-xl/none align-middle"></i> Buy tickits</a>
                        </div>
                    </div><!-- end grid-col -->

                    @endforeach
                </div><!-- Grid End -->

            <div class="flex justify-center items-center mt-14">
                <a href="#" class="inline-flex items-center justify-center border border-dashed font-semibold border-primary text-primary px-4 py-2 transition-all duration-200 rounded-md hover:bg-primary hover:text-white">Download PDF <i data-lucide="download" class="h-5 w-5 ms-2"></i></a>
            </div>
        </div><!-- Container End -->
    </section>
    <!-- Schedule section End -->

    <!-- Speakers section start -->
    <section id="speakers" class="py-20">
        <div class="container">
            <div class="flex items-center justify-center mb-16">
                <div class="max-w-2xl text-center">
                    <h5 class="capitalize text-lg  text-gray-800 font-medium mb-2">Artis<span class="font-semibold text-primary">Event</span></h5>
                    <h2 class="text-3xl/snug font-bold capitalize text-gray-800 mb-1.5">Artis</h2>
                    <p class="text-base font-medium text-gray-500 max-w-xl">Beberapa artis yang akan mengisi event-event kami</p>
                </div>
            </div><!-- end flex -->

            <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">
                @foreach ($getArtists as $item)

                    <div class="lg:col-span-3 md:col-span-6">
                        <div class="group text-center">
                            <div class="relative inline-block mx-auto rounded-lg overflow-hidden">
                                <img src="{{asset($item->img)}}" class="" style="height: 400px;width:" alt="">
                                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black rounded-lg opacity-0 group-hover:opacity-100 duration-500"></div>

                                <div class="absolute start-0 end-0 -bottom-20 group-hover:bottom-5 duration-500">
                                    <ul class="mb-4 space-x-2">
                                        <li class="inline-block"><a href="" class="h-10 w-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-lg bg-white"><i data-lucide="facebook" class="h-5 w-5 text-primary fill-primary/25"></i></a></li>
                                        <li class="inline-block"><a href="" class="h-10 w-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-lg bg-white"><i data-lucide="instagram" class="h-5 w-5 text-pink-500 fill-pink-500/25"></i></a></li>
                                        <li class="inline-block"><a href="" class="h-10 w-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-lg bg-white"><i data-lucide="twitter" class="h-5 w-5 text-sky-500 fill-sky-500/25"></i></a></li>
                                    </ul><!-- end social-->
                                    <p class="text-base font-semibold text-white">{{$item->profesion}}</p>
                                </div>
                            </div>

                            <a href="" class="block text-lg font-semibold group-hover:text-primary duration-500 mt-3">{{$item->name}}</a>
                        </div>
                    </div><!-- end grid-col -->
                @endforeach


            </div><!-- end grid -->
        </div><!-- Container End -->
    </section>
    <!-- Speakers section End -->

    <!-- Tickets section start -->
    <section id="price" class="sm:py-20 py-10 bg-[#f8f9fa] dark:bg-neutral-900">
        <div class="container">
            <div class="flex items-center justify-center mb-16">
                <div class="max-w-2xl text-center">
                    <h5 class="capitalize text-lg  text-gray-800 font-medium mb-2">Tiket <span class="font-semibold text-primary">Event</span></h5>
                    <h2 class="text-3xl/snug font-bold capitalize text-gray-800 mb-1.5">Tiket aktif</h2>
                    <p class="text-base font-medium text-gray-500 max-w-xl">Beberapa kategori tiket event bisa dilihat dibawah ini beserta eventnya</p>
                </div>
            </div><!-- Flex End -->

            <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6">

                @foreach ($getTickets as $item)
                    <div class="relative bg-white border-b-2 rounded-lg transition-all duration-500 border-b-primary overflow-hidden hover:-translate-y-3">
                        <div class="absolute bg-primary text-sm text-center inline-flex items-center gap-2 text-white font-semibold rounded-s-full py-1 px-2 end-0 top-2">
                            <i class="uil uil-link text-base/none"></i>
                            {{$item->ticketCategories->name}}
                        </div>
                        <div class="p-6">
                            <h3 class="text-4xl font-bold text-gray-800 mb-10">$28<sub class="text-lg">/ Day</sub></h3>

                            <div class="flex items-center justify-between gap-4 mb-6">
                                <div class="">
                                    <p class="text-base font-nunito font-semibold text-gray-600">Speaker</p>
                                    <h5 class="text-black text-lg font-bold">Lenny Morton</h5>
                                </div>
                                <div class="h-20 w-20 inline-flex items-center justify-center border border-gray-300 bg-gray-100 overflow-hidden rounded-full p-1">
                                    <img src="{{asset('assets-landing/images/avatars/img-2.png')}}" alt="" class="max-w-full max-h-full rounded-full">
                                </div>
                            </div>
                            <div class="mb-6">
                                <a href="#" class="hover:text-primary text-lg font-bold">Digital Conference Event Intro</a>
                                <p class="text-gray-500 font-medium mt-2">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century</p>
                            </div>
                            {{-- @dd($item->ticketCategories) --}}
                            <ul class="mb-6">
                                <li class="flex items-center gap-2 mb-4 font-medium text-base">
                                    <i data-lucide="badge-check" class="inline h-5 w-5 text-primary"></i>
                                    <p class="text-gray-900">{{$item->ticketCategories->ticketBenefits->benefits}}</p>
                                </li>

                            </ul>
                            <a href="#" class="flex items-center justify-center border border-dashed font-semibold border-primary text-primary px-4 py-2 transition-all duration-200 rounded-md hover:bg-primary hover:text-white">Buy Tickits <i data-lucide="shopping-cart" class="inline h-5 w-5 ms-2"></i></a>
                        </div>
                    </div><!-- end grid-col -->

                @endforeach

            </div><!-- Grid End -->
        </div><!-- Container End -->
    </section>
    <!-- Tickets section End -->

    <!-- schedules section start -->
    <section class="py-20">
        <div class="container">
            <div class="relative z-30">
                <div class="flex items-center justify-center mb-16">
                    <div class="max-w-2xl text-center">
                        <h5 class="capitalize text-lg  text-gray-800 font-medium mb-2">Event <span class="font-semibold text-primary">Schedules</span></h5>
                        <h2 class="text-3xl/snug font-bold capitalize text-gray-800 mb-1.5">Management & Schedules</h2>
                        <p class="text-base font-medium text-gray-500 max-w-xl">Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque rem aperiam.</p>
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="flex bg-white rounded-lg transition">
                      <nav class="flex" aria-label="Tabs" role="tablist">
                        <button type="button" class="hs-tab-active:border-primary hs-tab-active:text-primary border-b-2 py-3 px-8 inline-flex items-center gap-2 bg-transparent text-sm text-gray-500 hover:text-gray-700 font-medium active" id="day-1" data-hs-tab="#day-items-1" aria-controls="day-items-1" role="tab">
                            <h5 class="text-base">First Day</h5>
                        </button>
                        <button type="button" class="hs-tab-active:border-primary hs-tab-active:text-primary border-b-2 py-3 px-8 inline-flex items-center gap-2 bg-transparent text-sm text-gray-500 hover:text-gray-700 font-medium" id="day-2" data-hs-tab="#day-items-2" aria-controls="day-items-2" role="tab">
                            <h5 class="text-base">Second Day</h5>
                        </button>
                        <button type="button" class="hs-tab-active:border-primary hs-tab-active:text-primary border-b-2 py-3 px-8 inline-flex items-center gap-2 bg-transparent text-sm text-gray-500 hover:text-gray-700 font-medium" id="day-3" data-hs-tab="#day-items-3" aria-controls="day-items-3" role="tab">
                            <h5 class="text-base">Third Day</h5>
                        </button>
                      </nav><!-- end nav-tabs -->
                    </div>
                </div><!-- end flex -->


                <div class="mt-10">
                    <div id="day-items-1">
                        <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6">
                            <div class="bg-white border border-b-2 rounded-lg transition-all duration-500 hover:border-b-primary hover:-translate-y-3">
                                <div class="flex gap-4 p-6 h-full">
                                    <div class="text-center">
                                        <span class="inline-flex items-center justify-center h-10 w-10 font-semibold rounded-md bg-primary/20 text-primary">16</span>
                                        <p class="text-base font-medium">Jun</p>
                                    </div>
                                    <div class="flex flex-col h-full">
                                        <h4 class="text-xl font-bold capitalize text-gray-800 mb-2">Singing event intro</h4>
                                        <p class="shrink text-sm font-medium text-slate-500 mb-6">Sed ut perspiciatis unde omnis iste natu sit us voluptatem accusantiumu as doloremque totam rem aperiam.</p>
                                        <div class="mt-auto">
                                            <a href="#" class="group relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none text-primary hover:text-primary duration-500"><span class="absolute h-px w-7/12 group-hover:w-full transition-all duration-500 rounded bg-primary/80 -bottom-0"></span>Read More <i class="uil uil-angle-right text-xl/none align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end grid-cols -->

                            <div class="bg-white border border-b-2 rounded-lg transition-all duration-500 hover:border-b-primary hover:-translate-y-3">
                                <div class="flex gap-4 p-6 h-full">
                                    <div class="text-center">
                                        <span class="inline-flex items-center justify-center h-10 w-10 font-semibold rounded-md bg-primary/20 text-primary">16</span>
                                        <p class="text-base font-medium">Jun</p>
                                    </div>
                                    <div class="flex flex-col h-full">
                                        <h4 class="text-xl font-bold capitalize text-gray-800 mb-2">Conference On User Interface</h4>
                                        <p class="shrink text-sm font-medium text-slate-500 mb-6">Sed ut perspiciatis unde omnis iste natu sit us voluptatem accusantiumu as doloremque totam rem aperiam.</p>
                                        <div class="mt-auto">
                                            <a href="#" class="group relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none text-primary hover:text-primary duration-500"><span class="absolute h-px w-7/12 group-hover:w-full transition-all duration-500 rounded bg-primary/80 -bottom-0"></span>Read More <i class="uil uil-angle-right text-xl/none align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end grid-cols -->

                            <div class="bg-white border border-b-2 rounded-lg transition-all duration-500 hover:border-b-primary hover:-translate-y-3">
                                <div class="flex gap-4 p-6 h-full">
                                    <div class="text-center">
                                        <span class="inline-flex items-center justify-center h-10 w-10 font-semibold rounded-md bg-primary/20 text-primary">16</span>
                                        <p class="text-base font-medium">Jun</p>
                                    </div>
                                    <div class="flex flex-col h-full">
                                        <h4 class="text-xl font-bold capitalize text-gray-800 mb-2">Business Conference for professional</h4>
                                        <p class="shrink text-sm font-medium text-slate-500 mb-6">Sed ut perspiciatis unde omnis iste natu sit us voluptatem accusantiumu as doloremque totam rem aperiam.</p>
                                        <div class="mt-auto">
                                            <a href="#" class="group relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none text-primary hover:text-primary duration-500"><span class="absolute h-px w-7/12 group-hover:w-full transition-all duration-500 rounded bg-primary/80 -bottom-0"></span>Read More <i class="uil uil-angle-right text-xl/none align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end grid-cols -->

                            <div class="bg-white border border-b-2 rounded-lg transition-all duration-500 hover:border-b-primary hover:-translate-y-3">
                                <div class="flex gap-4 p-6 h-full">
                                    <div class="text-center">
                                        <span class="inline-flex items-center justify-center h-10 w-10 font-semibold rounded-md bg-primary/20 text-primary">16</span>
                                        <p class="text-base font-medium">Jun</p>
                                    </div>
                                    <div class="flex flex-col h-full">
                                        <h4 class="text-xl font-bold capitalize text-gray-800 mb-2">Business World Event Intro</h4>
                                        <p class="shrink text-sm font-medium text-slate-500 mb-6">Sed ut perspiciatis unde omnis iste natu sit us voluptatem accusantiumu as doloremque totam rem aperiam.</p>
                                        <div class="mt-auto">
                                            <a href="#" class="group relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none text-primary hover:text-primary duration-500"><span class="absolute h-px w-7/12 group-hover:w-full transition-all duration-500 rounded bg-primary/80 -bottom-0"></span>Read More <i class="uil uil-angle-right text-xl/none align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end grid-cols -->

                            <div class="bg-white border border-b-2 rounded-lg transition-all duration-500 hover:border-b-primary hover:-translate-y-3">
                                <div class="flex gap-4 p-6 h-full">
                                    <div class="text-center">
                                        <span class="inline-flex items-center justify-center h-10 w-10 font-semibold rounded-md bg-primary/20 text-primary">16</span>
                                        <p class="text-base font-medium">Jun</p>
                                    </div>
                                    <div class="flex flex-col h-full">
                                        <h4 class="text-xl font-bold capitalize text-gray-800 mb-2">Digital world event intro</h4>
                                        <p class="shrink text-sm font-medium text-slate-500 mb-6">Sed ut perspiciatis unde omnis iste natu sit us voluptatem accusantiumu as doloremque totam rem aperiam.</p>
                                        <div class="mt-auto">
                                            <a href="#" class="group relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none text-primary hover:text-primary duration-500"><span class="absolute h-px w-7/12 group-hover:w-full transition-all duration-500 rounded bg-primary/80 -bottom-0"></span>Read More <i class="uil uil-angle-right text-xl/none align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end grid-cols -->
                        </div><!-- end grid -->
                    </div><!-- end day iteam -->

                    <div id="day-items-2" class="hidden">
                        <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6">
                            <div class="bg-white border border-b-2 rounded-lg transition-all duration-500 hover:border-b-primary hover:-translate-y-3">
                                <div class="flex gap-4 p-6 h-full">
                                    <div class="text-center">
                                        <span class="inline-flex items-center justify-center h-10 w-10 font-semibold rounded-md bg-primary/20 text-primary">17</span>
                                        <p class="text-base font-medium">Jun</p>
                                    </div>
                                    <div class="flex flex-col h-full">
                                        <h4 class="text-xl font-bold capitalize text-gray-800 mb-2">Business World Event Intro</h4>
                                        <p class="shrink text-sm font-medium text-slate-500 mb-6">Sed ut perspiciatis unde omnis iste natu sit us voluptatem accusantiumu as doloremque totam rem aperiam.</p>
                                        <div class="mt-auto">
                                            <a href="#" class="group relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none text-primary hover:text-primary duration-500"><span class="absolute h-px w-7/12 group-hover:w-full transition-all duration-500 rounded bg-primary/80 -bottom-0"></span>Read More <i class="uil uil-angle-right text-xl/none align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end grid-cols -->

                            <div class="bg-white border border-b-2 rounded-lg transition-all duration-500 hover:border-b-primary hover:-translate-y-3">
                                <div class="flex gap-4 p-6 h-full">
                                    <div class="text-center">
                                        <span class="inline-flex items-center justify-center h-10 w-10 font-semibold rounded-md bg-primary/20 text-primary">17</span>
                                        <p class="text-base font-medium">Jun</p>
                                    </div>
                                    <div class="flex flex-col h-full">
                                        <h4 class="text-xl font-bold capitalize text-gray-800 mb-2">Digital world event intro</h4>
                                        <p class="shrink text-sm font-medium text-slate-500 mb-6">Sed ut perspiciatis unde omnis iste natu sit us voluptatem accusantiumu as doloremque totam rem aperiam.</p>
                                        <div class="mt-auto">
                                            <a href="#" class="group relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none text-primary hover:text-primary duration-500"><span class="absolute h-px w-7/12 group-hover:w-full transition-all duration-500 rounded bg-primary/80 -bottom-0"></span>Read More <i class="uil uil-angle-right text-xl/none align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end grid-cols -->
                        </div><!-- end grid -->
                    </div><!-- end day iteam -->

                    <div id="day-items-3" class="hidden">
                        <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6">
                            <div class="bg-white border border-b-2 rounded-lg transition-all duration-500 hover:border-b-primary hover:-translate-y-3">
                                <div class="flex gap-4 p-6 h-full">
                                    <div class="text-center">
                                        <span class="inline-flex items-center justify-center h-10 w-10 font-semibold rounded-md bg-primary/20 text-primary">18</span>
                                        <p class="text-base font-medium">Jun</p>
                                    </div>
                                    <div class="flex flex-col h-full">
                                        <h4 class="text-xl font-bold capitalize text-gray-800 mb-2">Conference On User Interface</h4>
                                        <p class="shrink text-sm font-medium text-slate-500 mb-6">Sed ut perspiciatis unde omnis iste natu sit us voluptatem accusantiumu as doloremque totam rem aperiam.</p>
                                        <div class="mt-auto">
                                            <a href="#" class="group relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none text-primary hover:text-primary duration-500"><span class="absolute h-px w-7/12 group-hover:w-full transition-all duration-500 rounded bg-primary/80 -bottom-0"></span>Read More <i class="uil uil-angle-right text-xl/none align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end grid-cols -->

                            <div class="bg-white border border-b-2 rounded-lg transition-all duration-500 hover:border-b-primary hover:-translate-y-3">
                                <div class="flex gap-4 p-6 h-full">
                                    <div class="text-center">
                                        <span class="inline-flex items-center justify-center h-10 w-10 font-semibold rounded-md bg-primary/20 text-primary">18</span>
                                        <p class="text-base font-medium">Jun</p>
                                    </div>
                                    <div class="flex flex-col h-full">
                                        <h4 class="text-xl font-bold capitalize text-gray-800 mb-2">Business Conference for professional</h4>
                                        <p class="shrink text-sm font-medium text-slate-500 mb-6">Sed ut perspiciatis unde omnis iste natu sit us voluptatem accusantiumu as doloremque totam rem aperiam.</p>
                                        <div class="mt-auto">
                                            <a href="#" class="group relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none text-primary hover:text-primary duration-500"><span class="absolute h-px w-7/12 group-hover:w-full transition-all duration-500 rounded bg-primary/80 -bottom-0"></span>Read More <i class="uil uil-angle-right text-xl/none align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end grid-cols -->

                            <div class="bg-white border border-b-2 rounded-lg transition-all duration-500 hover:border-b-primary hover:-translate-y-3">
                                <div class="flex gap-4 p-6 h-full">
                                    <div class="text-center">
                                        <span class="inline-flex items-center justify-center h-10 w-10 font-semibold rounded-md bg-primary/20 text-primary">16</span>
                                        <p class="text-base font-medium">Jun</p>
                                    </div>
                                    <div class="flex flex-col h-full">
                                        <h4 class="text-xl font-bold capitalize text-gray-800 mb-2">Singing event intro</h4>
                                        <p class="shrink text-sm font-medium text-slate-500 mb-6">Sed ut perspiciatis unde omnis iste natu sit us voluptatem accusantiumu as doloremque totam rem aperiam.</p>
                                        <div class="mt-auto">
                                            <a href="#" class="group relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none text-primary hover:text-primary duration-500"><span class="absolute h-px w-7/12 group-hover:w-full transition-all duration-500 rounded bg-primary/80 -bottom-0"></span>Read More <i class="uil uil-angle-right text-xl/none align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end grid-cols -->
                        </div><!-- end grid -->
                    </div><!-- end day iteam -->
                </div>

                <div class="flex justify-center items-center mt-14">
                    <a href="#" class="inline-flex items-center justify-center border border-dashed font-semibold border-primary text-primary px-4 py-2 transition-all duration-200 rounded-md hover:bg-primary hover:text-white">Show More Events <i data-lucide="move-right" class="inline h-5 w-5 ms-2"></i></a>
                </div>
            </div>
        </div><!-- Container End -->
    </section>
    <!-- schedules section start -->

    <!-- blog section start -->
    <section id="blog" class="py-20 relative bg-slate-50 bg-cover bg-no-repeat bg-[url('../images/landing/directory/cta-bg.png')]">
        <div class="container">
            <div class="relative z-30">
                <div class="flex items-center justify-center mb-16">
                    <div class="max-w-2xl text-center">
                        <h5 class="capitalize text-lg  text-gray-800 font-medium mb-2">Event <span class="font-semibold text-primary">Blogs</span></h5>
                        <h2 class="text-3xl/snug font-bold capitalize text-gray-800 mb-1.5">Latest Blog</h2>
                        <p class="text-base font-medium text-gray-500 max-w-xl">Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque rem aperiam.</p>
                    </div>
                </div><!-- end flex -->

                <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
                    <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                        <div class="grid sm:grid-cols-2 grid-cols-1">
                            <div class="relative p-2 h-full w-full overflow-hidden">
                                <img src="{{asset('assets-landing/images/landing/directory/directory/1.jpg')}}" class="w-full h-full rounded-md transition-all duration-700" alt="">
                                <div class="absolute inset-0 top-auto bottom-5 right-5 left-auto">
                                    <i data-lucide="star" class="inline h-4 w-4 fill-amber-300 text-amber-300"></i>
                                    <i data-lucide="star" class="inline h-4 w-4 fill-amber-300 text-amber-300"></i>
                                    <i data-lucide="star" class="inline h-4 w-4 fill-amber-300 text-amber-300"></i>
                                    <i data-lucide="star" class="inline h-4 w-4 fill-amber-300 text-amber-300"></i>
                                    <i data-lucide="star" class="inline h-4 w-4 text-amber-300"></i>
                                </div>
                            </div><!-- end grid-col -->
                            <div class="p-4">
                                <a href="javascript:void(0);" class="text-lg font-bold mb-2.5">The Langham-Chicago</a>
                                <p class="text-sm font-medium text-slate-500 mb-10 mt-3">Sed ut perspiciatis unde omnis iste
                                    natu sit us voluptatem accusantiumu as doloremque totam rem aperiam.</p>
                                <div class="flex flex-col items-start">
                                    <span class="inline-flex items-center bg-primary/20 text-primary text-xs/none font-semibold capitalize rounded mb-2.5 border-s-2 border-primary px-2 py-1.5">$49 Per person</span>
                                    <div class="flex items-center justify-center">
                                        <img src="{{asset('assets-landing/images/avatars/img-1.png" class="w-10 h-10 rounded-full')}}" alt="">
                                        <h5 class="text-base font-semibold text-slate-800 ps-4">Gina Sanchez</h5>
                                    </div>
                                </div>
                            </div><!-- end grid-col -->
                        </div><!-- end grid -->
                    </div><!-- end grid-col -->

                    <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                        <div class="grid sm:grid-cols-2 grid-cols-1">
                            <div class="relative p-2 h-full w-full overflow-hidden">
                                <img src="{{asset('assets-landing/images/landing/directory/directory/2.jpg')}}" class="w-full h-full rounded-md transition-all duration-700" alt="">
                                <div class="absolute inset-0 top-auto bottom-5 right-5 left-auto">
                                    <i data-lucide="star" class="inline h-4 w-4 fill-amber-300 text-amber-300"></i>
                                    <i data-lucide="star" class="inline h-4 w-4 fill-amber-300 text-amber-300"></i>
                                    <i data-lucide="star" class="inline h-4 w-4 fill-amber-300 text-amber-300"></i>
                                    <i data-lucide="star" class="inline h-4 w-4 fill-amber-300 text-amber-300"></i>
                                    <i data-lucide="star" class="inline h-4 w-4 fill-amber-300 text-amber-300"></i>
                                </div>
                            </div><!-- end grid-col -->
                            <div class="p-4">
                                <a href="javascript:void(0);" class="text-lg font-bold mb-2.5">Primland - Meadows of dan</a>
                                <p class="text-sm font-medium text-slate-500 mb-10 mt-3">At vero eos et accusamus et iusto dignissimos ducimus blanaitiis praesentium voluptatum.</p>
                                <div class="flex flex-col items-start">
                                    <span class="inline-flex items-center bg-primary/20 text-primary text-xs/none font-semibold capitalize rounded mb-2.5 border-s-2 border-primary px-2 py-1.5">$69 Per person</span>
                                    <div class="flex items-center justify-center">
                                        <img src="{{asset('assets-landing/images/avatars/img-2.png')}}" class="w-10 h-10 rounded-full" alt="">
                                        <h5 class="text-base font-semibold text-slate-800 ps-4">Joseph Cohen</h5>
                                    </div>
                                </div>
                            </div><!-- end grid-col -->
                        </div><!-- end grid -->
                    </div><!-- end grid-col -->

                    <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                        <div class="grid sm:grid-cols-2 grid-cols-1">
                            <div class="relative p-2 h-full w-full overflow-hidden">
                                <img src="{{asset('assets-landing/images/landing/directory/directory/3.jpg')}}" class="w-full h-full rounded-md transition-all duration-700" alt="">
                                <div class="absolute inset-0 top-auto bottom-5 right-5 left-auto">
                                    <i data-lucide="star" class="inline h-4 w-4 fill-amber-300 text-amber-300"></i>
                                    <i data-lucide="star" class="inline h-4 w-4 fill-amber-300 text-amber-300"></i>
                                    <i data-lucide="star" class="inline h-4 w-4 fill-amber-300 text-amber-300"></i>
                                    <i data-lucide="star" class="inline h-4 w-4 fill-amber-300 text-amber-300"></i>
                                    <i data-lucide="star" class="inline h-4 w-4 text-amber-300"></i>
                                </div>
                            </div><!-- end grid-col -->
                            <div class="p-4">
                                <a href="javascript:void(0);" class="text-lg font-bold mb-2.5">The Hay-Adams-Washington</a>
                                <p class="text-sm font-medium text-slate-500 mb-10 mt-3">Et harum quidem rerum facilis set et expedita distinctio. Nam lidero tempore cum soluta nobis.</p>
                                <div class="flex flex-col items-start">
                                    <span class="inline-flex items-center bg-primary/20 text-primary text-xs/none font-semibold capitalize rounded mb-2.5 border-s-2 border-primary px-2 py-1.5">$69 Per person</span>
                                    <div class="flex items-center justify-center">
                                        <img src="{{asset('assets-landing/images/avatars/img-3.')}}" class="w-10 h-10 rounded-full" alt="">
                                        <h5 class="text-base font-semibold text-slate-800 ps-4">Aaron Johnson</h5>
                                    </div>
                                </div>
                            </div><!-- end grid-col -->
                        </div><!-- end grid -->
                    </div><!-- end grid-col -->

                    <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                        <div class="grid sm:grid-cols-2 grid-cols-1">
                            <div class="relative p-2 h-full w-full overflow-hidden">
                                <img src="{{asset('assets-landing/images/landing/directory/directory/4.jpg')}}" class="w-full h-full rounded-md transition-all duration-700" alt="">
                                <div class="absolute inset-0 top-auto bottom-5 right-5 left-auto">
                                    <i data-lucide="star" class="inline h-4 w-4 fill-amber-300 text-amber-300"></i>
                                    <i data-lucide="star" class="inline h-4 w-4 fill-amber-300 text-amber-300"></i>
                                    <i data-lucide="star" class="inline h-4 w-4 fill-amber-300 text-amber-300"></i>
                                    <i data-lucide="star" class="inline h-4 w-4 fill-amber-300 text-amber-300"></i>
                                    <i data-lucide="star" class="inline h-4 w-4 fill-amber-300 text-amber-300"></i>
                                </div>
                            </div><!-- end grid-col -->
                            <div class="p-4">
                                <a href="javascript:void(0);" class="text-lg font-bold mb-2.5">Montage Deer Valley-Utah</a>
                                <p class="text-sm font-medium text-slate-500 mb-10 mt-3">Nemo enim ipsam voluptatem aut odit
                                    us fugit sed quia magni dolores aut odit us fugit magni dolores.</p>
                                <div class="flex flex-col items-start">
                                    <span class="inline-flex items-center bg-primary/20 text-primary text-xs/none font-semibold capitalize rounded mb-2.5 border-s-2 border-primary px-2 py-1.5">$49 Per person</span>
                                    <div class="flex items-center justify-center">
                                        <img src="{{asset('assets-landing/images/avatars/img-4.png')}}" class="w-10 h-10 rounded-full" alt="">
                                        <h5 class="text-base font-semibold text-slate-800 ps-4">Sharom Donato</h5>
                                    </div>
                                </div>
                            </div><!-- end grid-col -->
                        </div><!-- end grid -->
                    </div><!-- end grid-col -->
                </div><!-- end grid -->

                <div class="flex justify-center items-center mt-14">
                    <a href="#" class="inline-flex items-center justify-center border border-dashed font-semibold border-primary text-primary px-4 py-2 transition-all duration-200 rounded-md hover:bg-primary hover:text-white">Load More <i data-lucide="loader" class="inline h-5 w-5 ms-2"></i></a>
                </div>
            </div>
        </div><!-- Container End -->
    </section>
    <!-- blog section start -->

    <!-- location section start -->
    <section>
        <iframe class="w-full h-[500px]" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6030.418742494061!2d-111.34563870463673!3d26.01036670629853!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1471908546569" frameborder="0"></iframe>
    </section>
    <!-- location section End -->

    <!-- Footer section start -->
    <footer class="bg-center bg-no-repeat bg-slate-900 bg-[url('../images/footer-bg.png')]">
        <div class="container lg:px-20">
            <div class="flex flex-col lg:flex-row justify-between gap-14 py-24">
                <div class="lg:w-3/12">
                    <a href="#" class="flex items-center gap-2 logo">
                        <img src="{{asset('assets-landing/images/logo-light.png" class="w-36')}}" alt="">
                    </a>

                    <p class="text-gray-400 text-base font-medium max-w-xs mt-6">Start project with tailwind css provide everything you need.</p>
                    <h5 class="text-slate-300 2xl:text-lg text-base mb-4 mt-6">Follow Us :</h5>
                    <ul class="flex flex-wrap items-center gap-2">
                        <li>
                            <a href="javascript:void(0);" class="h-10 w-10 inline-flex items-center justify-center bg-slate-800 rounded-lg transition-all duration-500 group hover:bg-primary"><i data-lucide="facebook" class="h-5 w-5 text-gray-400 group-hover:text-white group-hover:fill-white/30"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="h-10 w-10 inline-flex items-center justify-center bg-slate-800 rounded-lg transition-all duration-500 group hover:bg-pink-600"><i data-lucide="instagram" class="h-5 w-5 text-gray-400 group-hover:text-white group-hover:fill-white/30"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="h-10 w-10 inline-flex items-center justify-center bg-slate-800 rounded-lg transition-all duration-500 group hover:bg-sky-600"><i data-lucide="twitter" class="h-5 w-5 text-gray-400 group-hover:text-white group-hover:fill-white/30"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="h-10 w-10 inline-flex items-center justify-center bg-slate-800 rounded-lg transition-all duration-500 group hover:bg-blue-800"><i data-lucide="linkedin" class="h-5 w-5 text-gray-400 group-hover:text-white group-hover:fill-white/30"></i></a>
                        </li>
                    </ul>
                </div>

                <div class="lg:w-8/12">
                    <div class="grid md:grid-cols-3 sm:grid-cols-2 gap-6">
                        <div class="">
                            <ul class="flex flex-col gap-3">
                                <h5 class="xl:text-xl lg:text-lg font-semibold text-gray-200 mb-2">About Us</h5>
                                <li>
                                    <a href="javascript:void(0);" class="text-base font-semibold text-gray-400 hover:text-white transition-all"><i data-lucide="circle-dot-dashed" class="inline-block h-4 w-4 me-2"></i> Support Center</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-base font-semibold text-gray-400 hover:text-white transition-all"><i data-lucide="circle-dot-dashed" class="inline-block h-4 w-4 me-2"></i> Customer Support</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-base font-semibold text-gray-400 hover:text-white transition-all"><i data-lucide="circle-dot-dashed" class="inline-block h-4 w-4 me-2"></i> About Us</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-base font-semibold text-gray-400 hover:text-white transition-all"><i data-lucide="circle-dot-dashed" class="inline-block h-4 w-4 me-2"></i> Copyright</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-base font-semibold text-gray-400 hover:text-white transition-all"><i data-lucide="circle-dot-dashed" class="inline-block h-4 w-4 me-2"></i> Popular Campaign</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-base font-semibold text-gray-400 hover:text-white transition-all"><i data-lucide="circle-dot-dashed" class="inline-block h-4 w-4 me-2"></i> Return Policy</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-base font-semibold text-gray-400 hover:text-white transition-all"><i data-lucide="circle-dot-dashed" class="inline-block h-4 w-4 me-2"></i> Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-base font-semibold text-gray-400 hover:text-white transition-all"><i data-lucide="circle-dot-dashed" class="inline-block h-4 w-4 me-2"></i> Terms & Conditions</a>
                                </li>
                            </ul>
                        </div>

                        <div class="">
                            <ul class="flex flex-col gap-3">
                                <h5 class="xl:text-xl lg:text-lg font-semibold text-gray-200 mb-2">My Account</h5>
                                <li>
                                    <a href="javascript:void(0);" class="text-base font-semibold text-gray-400 hover:text-white transition-all"><i data-lucide="circle-dot-dashed" class="inline-block h-4 w-4 me-2"></i> Press Inquiries</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-base font-semibold text-gray-400 hover:text-white transition-all"><i data-lucide="circle-dot-dashed" class="inline-block h-4 w-4 me-2"></i> Social Media Directories</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-base font-semibold text-gray-400 hover:text-white transition-all"><i data-lucide="circle-dot-dashed" class="inline-block h-4 w-4 me-2"></i> Images & B-roll</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-base font-semibold text-gray-400 hover:text-white transition-all"><i data-lucide="circle-dot-dashed" class="inline-block h-4 w-4 me-2"></i> Site Map</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-base font-semibold text-gray-400 hover:text-white transition-all"><i data-lucide="circle-dot-dashed" class="inline-block h-4 w-4 me-2"></i> Store Hours</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-base font-semibold text-gray-400 hover:text-white transition-all"><i data-lucide="circle-dot-dashed" class="inline-block h-4 w-4 me-2"></i> Permissions</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-base font-semibold text-gray-400 hover:text-white transition-all"><i data-lucide="circle-dot-dashed" class="inline-block h-4 w-4 me-2"></i> Speaker Requests</a>
                                </li>
                            </ul>
                        </div>

                        <div class="">
                            <ul class="flex flex-col gap-3">
                                <h5 class="xl:text-xl lg:text-lg font-semibold text-gray-200 mb-2">Policy</h5>
                                <li>
                                    <a href="javascript:void(0);" class="text-base font-semibold text-gray-400 hover:text-white transition-all"><i data-lucide="circle-dot-dashed" class="inline-block h-4 w-4 me-2"></i> Application Security</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-base font-semibold text-gray-400 hover:text-white transition-all"><i data-lucide="circle-dot-dashed" class="inline-block h-4 w-4 me-2"></i> Softwere Principles</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-base font-semibold text-gray-400 hover:text-white transition-all"><i data-lucide="circle-dot-dashed" class="inline-block h-4 w-4 me-2"></i> Softwere Policy</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-base font-semibold text-gray-400 hover:text-white transition-all"><i data-lucide="circle-dot-dashed" class="inline-block h-4 w-4 me-2"></i> Risponsible Supply</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- Grid End -->
        </div><!-- Container End -->

        <div class="border-t border-slate-700/20 h-[75px]">
            <div class="container lg:px-20 flex flex-wrap justify-center items-center h-full  md:justify-between text-center md:text-start">
                    <p class="text-base font-medium text-gray-400">
                        <script>document.write(new Date().getFullYear())</script>
                        © Opixo - <a href="#">Design crafted <i data-lucide="heart" class="inline h-4 w-4 text-red-500 fill-red-500"></i> by Coderthemes.com</a>
                    </p>
                    <p class="text-base font-medium text-gray-400">
                        <a href="#">Terms Conditions & Policy</a>
                    </p>
                </div><!-- Flex End -->
            </div><!-- Container End -->
        </div>
    </footer>
    <!-- Footer section End -->

   <!-- Back To Top Start -->
    <button id="back-to-top" onclick="topFunction()" class="fixed text-xl rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-primary/20 text-primary flex justify-center items-center">
        <i class="uil uil-arrow-up text-base"></i>
    </button>
    <!-- Back To Top End -->

    <script src="{{asset('assets-landing/js/counter.js')}}"></script>

    <!-- Plugin Js -->
    <script src="{{asset('assets-landing/libs/preline/preline.js')}}"></script>

    <!-- Gumshoejs -->
    <script src="{{asset('assets-landing/libs/gumshoejs/gumshoe.polyfills.min.js')}}"></script>

    <!-- Lucid Icons -->
    <script src="{{asset('assets-landing/libs/lucide/umd/lucide.min.js')}}"></script>

    <!-- Theme Js -->
    <script src="{{asset('assets-landing/js/theme.js')}}"></script>

</body>

</html>
