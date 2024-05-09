<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login | Opixo - Tailwind CSS Multipurpose Landing Page Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Tailwind CSS Saas & Software Landing Page Template, agency, application, business, clean, creative, it solutions, modern, multipurpose, saas, software, tailwind css." name="description" />
    <meta content="coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets-landing/images/favicon.ico">

        <!-- style css -->
    <link href="assets-landing/css/style.min.css" rel="stylesheet" type="text/css">

    <!-- unicons Icons css -->
    <link href="assets-landing/libs/@iconscout/unicons/css/line.css" rel="stylesheet" type="text/css">

    <!--Swiper slider css-->
    <link href="assets-landing/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css">
</head>

<body class="relative h-full">


    <section class="flex items-center p-6 w-full bg-right-bottom h-screen bg-no-repeat bg-cover bg-[url(../images/auth-bg.jpg)]">
        <div class="absolute inset-0 w-full h-full bg-black/60"></div>
        <!-- end backdrop -->

        <div class="container">
            <div class="backdrop-blur-2xl bg-black/40 rounded-lg overflow-hidden max-w-5xl mx-auto">
                <div class="grid lg:grid-cols-2">
                    <div class="flex flex-col h-full p-10">
                        <div class="pb-10">
                            <a href="index.html" class="flex justify-center">
                                <img src="assets-landing/images/logo-light.png" alt="dark logo" class="h-10">
                            </a>
                        </div>
                        <div class="pb-6 my-auto text-center">
                            <h4 class="text-2xl font-bold text-white mb-3">Sign In</h4>
                            <p class="text-gray-300 mb-5 max-w-sm mx-auto">Enter your email address and password to access account.</p>

                            <x-auth-session-status class="mt-4" :status="session('success')" />
                            <x-input-error :messages="$errors->get('email')" class="mt-4" />

                            <!-- form -->
                            <form method="POST" action="{{ url('login') }}" class="text-start">
                                @csrf
                                <div class="mb-4">
                                    <label for="emailaddress" class="block text-base/normal font-semibold text-gray-200 mb-2">Email address</label>
                                    <input class="block w-full rounded py-1.5 px-3 bg-transparent border-white/10 border-gray-200 text-white/80 focus:border-white/25 focus:ring-transparent" name="email" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                </div>
                                <!-- end email input -->
                                <div class="mb-4">
                                    <label for="password" class="block text-base/normal font-semibold text-gray-200 mb-2">Password</label>
                                    <input class="block w-full rounded py-1.5 px-3 bg-transparent border-white/10 border-gray-200 text-white/80 focus:border-white/25 focus:ring-transparent" name="password" type="password" required="" id="password" placeholder="Enter your password">
                                </div>
                                <!-- end password input -->
                                <div class="mb-6">
                                    <a href="auth-forgotpw.html" class="text-gray-200 float-right border-b border-dashed"><small>Forgot your password?</small></a>
                                    <input type="checkbox" class="h-4 w-4 rounded border-white/20 bg-white/20 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary/60 focus:ring-offset-0" id="checkbox-signin">
                                    <label class="ms-2 text-gray-200 align-middle" for="checkbox-signin">Remember me</label>
                                </div>
                                <!-- end checkbox input -->
                                <div class="mb-6 text-center">
                                    <button class="w-full inline-flex items-center justify-center px-6 py-2 backdrop-blur-2xl bg-white/20 text-white rounded-lg transition-all duration-500 group hover:bg-primary/20 hover:text-primary mt-5" type="submit"><i class="uil uil-navigator me-2 text-lg"></i> <span class="fw-bold">Log In</span> </button>
                                </div>
                            </form><!-- end form-->

                            <div class="pb-6">
                                <div class="text-center">
                                    <p class="text-lg text-gray-200 font-semibold mb-4">Sign in with</p>
                                    <ul class="flex flex-wrap items-center justify-center gap-2">
                                        <li>
                                            <a href="javascript:void(0);" class="h-10 w-10 inline-flex items-center justify-center backdrop-blur-2xl bg-white/20 rounded-lg transition-all duration-500 group hover:bg-primary/60"><i class="uil uil-facebook-f text-xl text-white group-hover:text-white"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="h-10 w-10 inline-flex items-center justify-center backdrop-blur-2xl bg-white/20 rounded-lg transition-all duration-500 group hover:bg-pink-600/60"><i class="uil uil-instagram text-xl text-white group-hover:text-white"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="h-10 w-10 inline-flex items-center justify-center backdrop-blur-2xl bg-white/20 rounded-lg transition-all duration-500 group hover:bg-sky-600/60"><i class="uil uil-skype-alt text-xl text-white group-hover:text-white"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="h-10 w-10 inline-flex items-center justify-center backdrop-blur-2xl bg-white/20 rounded-lg transition-all duration-500 group hover:bg-blue-800/60"><i class="uil uil-linkedin-alt text-xl text-white group-hover:text-white"></i></a>
                                        </li>
                                    </ul><!-- end social -->
                                </div>
                            </div>
                        </div>
                        <div class="w-full text-center">
                            <p class="text-gray-300 leading-6 text-base font-medium">Don't have an account? <a href="auth-register.html" class="text-primary font-semibold ms-1">Sign Up</a></p>
                        </div>
                    </div> <!-- end col -->
                    <div class="hidden lg:block">
                        <div class="relative overflow-hidden">
                            <img src="assets-landing/images/auth-img.jpg" alt="" class="max-w-full max-h-full transform -scale-x-100">
                            <div class="absolute inset-0 bg-black/70">
                                <div class="flex items-end justify-center h-full">
                                    <div class="swiper auth-swiper rounded-xl">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide rounded-xl">
                                                <div class="flex items-end justify-center h-full">
                                                    <div class="p-6 mb-10 text-center">
                                                        <h5 class="text-xl font-bold text-white mb-3">Start journey with us.</h5>
                                                        <p class="text-base font-medium text-gray-300">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
                                                    </div>
                                                </div>
                                            </div><!-- end swiper-slider -->

                                            <div class="swiper-slide rounded-xl">
                                                <div class="flex items-end justify-center h-full">
                                                    <div class="p-6 mb-10 text-center">
                                                        <h5 class="text-xl font-bold text-white mb-3">Let's help to run your buiness.</h5>
                                                        <p class="text-base font-medium text-gray-300">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
                                                    </div>
                                                </div>
                                            </div><!-- end swiper-slider -->

                                            <div class="swiper-slide rounded-xl">
                                                <div class="flex items-end justify-center h-full">
                                                    <div class="p-6 mb-10 text-center">
                                                        <h5 class="text-xl font-bold text-white mb-3">Change the quality of your buiness.</h5>
                                                        <p class="text-base font-medium text-gray-300">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
                                                    </div>
                                                </div>
                                            </div><!-- end swiper-slider -->
                                        </div><!-- end wrapper -->

                                        <div class="swiper-pagination"></div>
                                        <!-- end swiper-pagination -->

                                    </div><!-- end swiper -->
                                </div>
                            </div>
                        </div>
                    </div><!-- end gri-cols -->
                </div> <!-- end grid -->
            </div> <!-- end bg -->
        </div><!-- end container -->
    </section><!-- end section -->

    <!-- footer start -->
    {{-- <footer class="fixed bottom-0 start-0 end-0 py-3">
        <div class="container">
            <p class="text-base font-medium text-center text-gray-400">
                <script>document.write(new Date().getFullYear())</script>
                © Opixo - <a href="#">Design crafted <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="heart" class="lucide lucide-heart inline h-4 w-4 text-red-500 fill-red-500"> <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"> </path> </svg> by Coderthemes.com</a>
            </p>
        </div>
    </footer> --}}
    <!-- footer end -->



    <!-- plugin -->
    <script src="assets-landing/libs/swiper/swiper-bundle.min.js"></script>

    <!-- custom swiper js -->
    <script src="assets-landing/js/swiper.js"></script>

</body>

</html>
