<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            /* Custom CSS to set a fixed height for the carousel images */
            .carousel-item img {
                max-height: 700px; /* Set the desired height */
                object-fit: cover; /* Maintain aspect ratio and cover the container */
            }
            li a{
                color:white;
            }
        </style>
    </head>
    <body>
        {{-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

            <nav class="navbar navbar-expand-lg  fixed-top" style="background-color: rgb(17, 75, 141); color:rgb(255, 255, 255);">
                <a class="navbar-brand" href="#" style="color:white;">
                    <img src="{{ asset('image/logo.jpg') }}" alt="Church Icon" class="mr-2" width="40" height="40" style="border-radius:50%;box-shadow: 0px 0px 28px -3px cyan;" > IYESUS CHURCH
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto" >
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about_us.html">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="faq.html">Tiyake ina Melsochu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about_us.html">Tiyake Yiteyiku</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="about_us.html">Graudate Student</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                         </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                             @csrf
                         </form>
                            @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        </li>
                    </ul>
                </div>
            </nav>

            <section class="container" style="padding-top: 200px;">
                <div class="row">
                    <!-- Contact Form -->

                        <div class="col"></div>
                        <div class="col">
                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                            <h2>Tiyake Teyiku</h2>
                            <form method="POST" action="{{ route('store_question') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="question">Questions</label>
                                    <textarea class="form-control" id="message" name="question" rows="4" placeholder="Enter your questions" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Send Question</button>
                            </form>
                        </div>
                        <div class="col"></div>


                    </div>

            </section>

            <br>
            <hr>
            <footer class="footer pt-3 pb-5" style="background-color: rgb(17, 75, 141);">
                <div class="container">
                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="footer-logo"><img src="{{ asset('image/logo.jpg') }}" alt="Church Icon" class="mr-2" width="50" height="50" style="border-radius:50%;box-shadow: 0px 0px 28px -3px rgb(9, 174, 224);" >
                                Iyesus Church</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                        </div>
                        <div class="col-md-4">
                            <h4>Quick Links</h4>
                            <ul class="footer-links">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h4>Connect With Us</h4>
                            <ul class="footer-social-icons list-inline">
                                <li class="list-inline-item text-danger"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-tiktok"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        {{-- </div> --}}
        <script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- Font Awesome Icons -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>
</html>
