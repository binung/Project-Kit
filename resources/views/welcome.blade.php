<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PROJECTKIT</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <style>
        .carousel-open:checked+.carousel-item {
            position: static;
            opacity: 100;
        }

        .carousel-item {
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }

        #carousel-1:checked~.control-1,
        #carousel-2:checked~.control-2,
        #carousel-3:checked~.control-3 {
            display: block;
        }

        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }

        #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #2b6cb0;
        }
    </style>
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans leading-normal tracking-normal">
    <livewire:welcome.navigation />

    {{-- <div class="relative z-0 pt-12 bg-white shadow-2xl carousel">
    <div class="relative w-full overflow-hidden carousel-inner">
      <!--Slide 1-->
      <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
      <div class="absolute opacity-0 carousel-item">
        <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(15).jpg" style="aspect-ratio:4" class="block w-full" alt="..." />
      </div>
      <label for="carousel-3" class="absolute inset-y-0 left-0 z-10 hidden w-10 h-10 my-auto ml-2 text-3xl font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer prev control-1 md:ml-10 hover:text-white hover:bg-blue-700">‹</label>
      <label for="carousel-2" class="absolute inset-y-0 right-0 z-10 hidden w-10 h-10 my-auto mr-2 text-3xl font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer next control-1 md:mr-10 hover:text-white hover:bg-blue-700">›</label>

      <!--Slide 2-->
      <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
      <div class="absolute opacity-0 carousel-item">
        <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(22).jpg" style="aspect-ratio:4" class="block w-1/2 w-full m-auto" alt="..." />
      </div>
      <label for="carousel-1" class="absolute inset-y-0 left-0 z-10 hidden w-10 h-10 my-auto ml-2 text-3xl font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer prev control-2 md:ml-10 hover:text-white hover:bg-blue-700">‹</label>
      <label for="carousel-3" class="absolute inset-y-0 right-0 z-10 hidden w-10 h-10 my-auto mr-2 text-3xl font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer next control-2 md:mr-10 hover:text-white hover:bg-blue-700">›</label>

      <!--Slide 3-->
      <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
      <div class="absolute opacity-0 carousel-item">
        <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(23).jpg" style="aspect-ratio:4" class="block w-full" alt="..." />
      </div>
      <label for="carousel-2" class="absolute inset-y-0 left-0 z-10 hidden w-10 h-10 my-auto ml-2 text-3xl font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer prev control-3 md:ml-10 hover:text-white hover:bg-blue-700">‹</label>
      <label for="carousel-1" class="absolute inset-y-0 right-0 z-10 hidden w-10 h-10 my-auto mr-2 text-3xl font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer next control-3 md:mr-10 hover:text-white hover:bg-blue-700">›</label>

      <!-- Add additional indicators for each slide-->
      <ol class="carousel-indicators">
        <li class="inline-block mr-3">
          <label for="carousel-1" class="block text-4xl text-white cursor-pointer carousel-bullet hover:text-blue-700">•</label>
        </li>
        <li class="inline-block mr-3">
          <label for="carousel-2" class="block text-4xl text-white cursor-pointer carousel-bullet hover:text-blue-700">•</label>
        </li>
        <li class="inline-block mr-3">
          <label for="carousel-3" class="block text-4xl text-white cursor-pointer carousel-bullet hover:text-blue-700">•</label>
        </li>
      </ol>
    </div>
  </div> --}}

    <section class="px-8 py-24 pt-40">
        <div class="container mx-auto text-center">
            <h2
                class="block antialiased tracking-normal font-sans text-4xl font-semibold leading-[1.3] mb-4 text-red-600">
                PROJECT KIT</h2>
            <p
                class="block antialiased font-sans text-base leading-relaxed text-inherit mb-8 font-normal !text-gray-500 text-blue-600">
                These projects are all open source and built using the different frameworks. Feel free to use them for
                any purpose, even commercially!</p>
        </div>
        <div class="mt-24">
            <div class="grid gap-8 md:grid-cols-4 lg:grid-cols-5">
                <div
                    class="relative flex flex-col text-gray-700 bg-white border shadow-md bg-clip-border rounded-xl border-blue-gray-100">
                    <div
                        class="relative bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none !m-0 p-6">
                        <h5
                            class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-800 capitalize">
                            Livewire</h5>
                        <p
                            class="block antialiased font-sans text-sm leading-normal text-inherit font-normal !text-gray-500">
                            This project built livewire</p>
                        {{-- <h3 class="flex gap-1 mt-4 font-sans text-3xl antialiased font-semibold leading-snug tracking-normal text-blue-800">$9.99<span class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-800 -translate-y-0.5 self-end opacity-70"></span></h3> --}}
                    </div>
                    <div class="p-6 border-t border-blue-gray-50">
                        <ul class="flex flex-col gap-3">
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Laravel 11</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Livewire 3</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Tailwnd CSS</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Alpine.js</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    MySQL</p>
                            </li>
                        </ul><button
                            class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 px-4 rounded-lg border border-green-500 text-green-500 hover:opacity-75 focus:ring focus:ring-green-200 active:opacity-[0.85] block w-full mt-6"
                            type="button">Download</button>
                    </div>
                </div>
                <div
                    class="relative flex flex-col text-gray-700 bg-white border shadow-md bg-clip-border rounded-xl border-blue-gray-100">
                    <div
                        class="relative bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none !m-0 p-6">
                        <h5
                            class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-800 capitalize">
                            Laravel, React, Inertia</h5>
                        <p
                            class="block antialiased font-sans text-sm leading-normal text-inherit font-normal !text-gray-500">
                            This project built with Laravel, Inertia, React</p>
                        {{-- <h3 class="flex gap-1 mt-4 font-sans text-3xl antialiased font-semibold leading-snug tracking-normal text-blue-800">$29.99<span class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-800 -translate-y-0.5 self-end opacity-70"></span></h3> --}}
                    </div>
                    <div class="p-6 border-t border-blue-gray-50">
                        <ul class="flex flex-col gap-3">
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Laravel 11</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    React 18</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Tailwnd CSS</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Alpine.js</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    MySQL</p>
                            </li>
                        </ul><button
                            class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 px-4 rounded-lg border border-green-500 text-green-500 hover:opacity-75 focus:ring focus:ring-green-200 active:opacity-[0.85] block w-full mt-6"
                            type="button">Download</button>
                    </div>
                </div>
                <div
                    class="relative flex flex-col text-gray-700 bg-white border shadow-md bg-clip-border rounded-xl border-blue-gray-100">
                    <div
                        class="relative bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none !m-0 p-6">
                        <h5
                            class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-800 capitalize">
                            Laravel, React, API</h5>
                        <p
                            class="block antialiased font-sans text-sm leading-normal text-inherit font-normal !text-gray-500">
                            This project built with Laravel, RESTful API, React</p>
                        {{-- <h3 class="flex gap-1 mt-4 font-sans text-3xl antialiased font-semibold leading-snug tracking-normal text-blue-800">Contact us for a quote<span class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-800 -translate-y-0.5 self-end opacity-70"></span></h3> --}}
                    </div>
                    <div class="p-6 border-t border-blue-gray-50">
                        <ul class="flex flex-col gap-3">
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Laravel 11</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    React 18</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Tailwnd CSS, Material Tailwind CSS</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Alpine.js</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    MySQL</p>
                            </li>
                        </ul><button
                            class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 px-4 rounded-lg border border-green-500 text-green-500 hover:opacity-75 focus:ring focus:ring-green-200 active:opacity-[0.85] block w-full mt-6"
                            type="button">Download</button>
                    </div>
                </div>
                <div
                    class="relative flex flex-col text-gray-700 bg-white border shadow-md bg-clip-border rounded-xl border-blue-gray-100">
                    <div
                        class="relative bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none !m-0 p-6">
                        <h5
                            class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-800 capitalize">
                            Laravel, Vue, Inertia</h5>
                        <p
                            class="block antialiased font-sans text-sm leading-normal text-inherit font-normal !text-gray-500">
                            This project built with Laravel, Inertia, Vue</p>
                        {{-- <h3 class="flex gap-1 mt-4 font-sans text-3xl antialiased font-semibold leading-snug tracking-normal text-blue-800">Contact us for a quote<span class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-800 -translate-y-0.5 self-end opacity-70"></span></h3> --}}
                    </div>
                    <div class="p-6 border-t border-blue-gray-50">
                        <ul class="flex flex-col gap-3">
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Laravel 11</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Vue 3</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Tailwnd CSS, Material Tailwind CSS</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Alpine.js</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    MySQL</p>
                            </li>
                        </ul><button
                            class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 px-4 rounded-lg border border-green-500 text-green-500 hover:opacity-75 focus:ring focus:ring-green-200 active:opacity-[0.85] block w-full mt-6"
                            type="button">Download</button>
                    </div>
                </div>
                <div
                    class="relative flex flex-col text-gray-700 bg-white border shadow-md bg-clip-border rounded-xl border-blue-gray-100">
                    <div
                        class="relative bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none !m-0 p-6">
                        <h5
                            class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-800 capitalize">
                            Laravel, Vue, API</h5>
                        <p
                            class="block antialiased font-sans text-sm leading-normal text-inherit font-normal !text-gray-500">
                            This project built with Laravel, RESTful API, Vue</p>
                        {{-- <h3 class="flex gap-1 mt-4 font-sans text-3xl antialiased font-semibold leading-snug tracking-normal text-blue-800">Contact us for a quote<span class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-800 -translate-y-0.5 self-end opacity-70"></span></h3> --}}
                    </div>
                    <div class="p-6 border-t border-blue-gray-50">
                        <ul class="flex flex-col gap-3">
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Laravel 11</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Vue 3</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Tailwnd CSS, Material Tailwind CSS</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Alpine.js</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    MySQL</p>
                            </li>
                        </ul><button
                            class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 px-4 rounded-lg border border-green-500 text-green-500 hover:opacity-75 focus:ring focus:ring-green-200 active:opacity-[0.85] block w-full mt-6"
                            type="button">Download</button>
                    </div>
                </div>


                <div
                    class="relative flex flex-col text-gray-700 bg-white border shadow-md bg-clip-border rounded-xl border-blue-gray-100">
                    <div
                        class="relative bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none !m-0 p-6">
                        <h5
                            class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-800 capitalize">
                            Laravel, Next.js Inertia</h5>
                        <p
                            class="block antialiased font-sans text-sm leading-normal text-inherit font-normal !text-gray-500">
                            This project built with Laravel, Inertia, Next.js</p>
                        {{-- <h3 class="flex gap-1 mt-4 font-sans text-3xl antialiased font-semibold leading-snug tracking-normal text-blue-800">Contact us for a quote<span class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-800 -translate-y-0.5 self-end opacity-70"></span></h3> --}}
                    </div>
                    <div class="p-6 border-t border-blue-gray-50">
                        <ul class="flex flex-col gap-3">
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Laravel 11</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Vue 3</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Tailwnd CSS, Material Tailwind CSS</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Alpine.js</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    MySQL</p>
                            </li>
                        </ul><button
                            class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 px-4 rounded-lg border border-green-500 text-green-500 hover:opacity-75 focus:ring focus:ring-green-200 active:opacity-[0.85] block w-full mt-6"
                            type="button">Download</button>
                    </div>
                </div>
                <div
                    class="relative flex flex-col text-gray-700 bg-white border shadow-md bg-clip-border rounded-xl border-blue-gray-100">
                    <div
                        class="relative bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none !m-0 p-6">
                        <h5
                            class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-800 capitalize">
                            Express.js, React.js</h5>
                        <p
                            class="block antialiased font-sans text-sm leading-normal text-inherit font-normal !text-gray-500">
                            This project built React</p>
                        {{-- <h3 class="flex gap-1 mt-4 font-sans text-3xl antialiased font-semibold leading-snug tracking-normal text-blue-800">$9.99<span class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-800 -translate-y-0.5 self-end opacity-70"></span></h3> --}}
                    </div>
                    <div class="p-6 border-t border-blue-gray-50">
                        <ul class="flex flex-col gap-3">
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Express.js</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Livewire 3</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Tailwnd CSS</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Alpine.js</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    MySQL</p>
                            </li>
                        </ul><button
                            class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 px-4 rounded-lg border border-green-500 text-green-500 hover:opacity-75 focus:ring focus:ring-green-200 active:opacity-[0.85] block w-full mt-6"
                            type="button">Download</button>
                    </div>
                </div>
                <div
                    class="relative flex flex-col text-gray-700 bg-white border shadow-md bg-clip-border rounded-xl border-blue-gray-100">
                    <div
                        class="relative bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none !m-0 p-6">
                        <h5
                            class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-800 capitalize">
                            Express.js, Vue.js</h5>
                        <p
                            class="block antialiased font-sans text-sm leading-normal text-inherit font-normal !text-gray-500">
                            This project built with Laravel, Inertia, React</p>
                        {{-- <h3 class="flex gap-1 mt-4 font-sans text-3xl antialiased font-semibold leading-snug tracking-normal text-blue-800">$29.99<span class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-800 -translate-y-0.5 self-end opacity-70"></span></h3> --}}
                    </div>
                    <div class="p-6 border-t border-blue-gray-50">
                        <ul class="flex flex-col gap-3">
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Laravel 11</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    React 18</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Tailwnd CSS</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Alpine.js</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    MySQL</p>
                            </li>
                        </ul><button
                            class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 px-4 rounded-lg border border-green-500 text-green-500 hover:opacity-75 focus:ring focus:ring-green-200 active:opacity-[0.85] block w-full mt-6"
                            type="button">Download</button>
                    </div>
                </div>
                <div
                    class="relative flex flex-col text-gray-700 bg-white border shadow-md bg-clip-border rounded-xl border-blue-gray-100">
                    <div
                        class="relative bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none !m-0 p-6">
                        <h5
                            class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-800 capitalize">
                            Express.js, Next.js</h5>
                        <p
                            class="block antialiased font-sans text-sm leading-normal text-inherit font-normal !text-gray-500">
                            This project built with Laravel, RESTful API, React</p>
                        {{-- <h3 class="flex gap-1 mt-4 font-sans text-3xl antialiased font-semibold leading-snug tracking-normal text-blue-800">Contact us for a quote<span class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-800 -translate-y-0.5 self-end opacity-70"></span></h3> --}}
                    </div>
                    <div class="p-6 border-t border-blue-gray-50">
                        <ul class="flex flex-col gap-3">
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Laravel 11</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    React 18</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Tailwnd CSS, Material Tailwind CSS</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Alpine.js</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    MySQL</p>
                            </li>
                        </ul><button
                            class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 px-4 rounded-lg border border-green-500 text-green-500 hover:opacity-75 focus:ring focus:ring-green-200 active:opacity-[0.85] block w-full mt-6"
                            type="button">Download</button>
                    </div>
                </div>
                <div
                    class="relative flex flex-col text-gray-700 bg-white border shadow-md bg-clip-border rounded-xl border-blue-gray-100">
                    <div
                        class="relative bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none !m-0 p-6">
                        <h5
                            class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-800 capitalize">
                            React Native</h5>
                        <p
                            class="block antialiased font-sans text-sm leading-normal text-inherit font-normal !text-gray-500">
                            This project built with React Native</p>
                        {{-- <h3 class="flex gap-1 mt-4 font-sans text-3xl antialiased font-semibold leading-snug tracking-normal text-blue-800">Contact us for a quote<span class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-800 -translate-y-0.5 self-end opacity-70"></span></h3> --}}
                    </div>
                    <div class="p-6 border-t border-blue-gray-50">
                        <ul class="flex flex-col gap-3">
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Laravel 11</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Vue 3</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Tailwnd CSS, Material Tailwind CSS</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    Alpine.js</p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true" class="w-4 h-4 text-blue-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                    </path>
                                </svg>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-inherit">
                                    MySQL</p>
                            </li>
                        </ul><button
                            class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 px-4 rounded-lg border border-green-500 text-green-500 hover:opacity-75 focus:ring focus:ring-green-200 active:opacity-[0.85] block w-full mt-6"
                            type="button">Download</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
