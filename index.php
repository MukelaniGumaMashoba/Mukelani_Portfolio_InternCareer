<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mukelani Portfolio</title>
    <meta name="description" content="Mukelani Mashoba PortFolio website for Intercareer">
    <meta name="author" content="Mukelani" />
    <link rel="stylesheet" href="index.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link href="./output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="form.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body class="bg-blue-700">
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <div class="flex md:order-2">
                <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                    aria-expanded="false"
                    class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 me-1">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
                <div class="relative hidden md:block">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search icon</span>
                    </div>
                    <input type="text" id="search-navbar"
                        class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search...">
                </div>
                <button data-collapse-toggle="navbar-search" type="button" id="btn"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-search" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
                <div class="relative mt-3 md:hidden">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="search-navbar"
                        class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search...">
                </div>
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#Projects"
                            class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                            aria-current="page">Projects</a>
                    </li>
                    <li>
                        <a href="#about"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                    <li>
                        <a href="#skills"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Skills</a>
                    </li>
                    <li>
                        <a href="#Contact"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>
    </nav>

    <section id="description" class="p-4">
        <div id="introduction" class="text-center">
            <div class="text-center">
                <h1
                    class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-blue-900 md:text-3xl lg:text-6xl dark:text-white hover:text-white">
                    Welcome(); am</h1>
            </div>

            <div>
                <h1
                    class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-6xl dark:text-white">
                    Mukelani Mashoba </h1>
            </div>
            <div>
                <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-6xl
                dark:text-white">
                    I Code Websites And Mobile Apps<br> Also Design</h1>
            </div>
        </div>

        <div id="description" class="">
            <p class="mb-6 text-lg font-normal text-white lg:text-xl sm:px-16 xl:px-48 dark:text-white text-wrap">Hi
                am
                Mukelani, I am a web developer and I recently started an internship with
                InterCareer. I value simple content structure, clean design patterns, and
                thoughtful interactions. <a href="https://mukelanigumamashoba.github.io/mukelani.github.io-master/">Get
                    More</a></p>
        </div>
        <div id="buttons" class="m-4 flex justify-center">
            <a href="mailto:mukelanilastborn@gmail.com"><button type="button"
                    class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Let
                    Talk</button>
            </a>
        </div>
    </section>


    <section id="about" class="text-wrap">
        <h1 class="text-white md:text-5xl lg:text-6xl text-center mb-3">About Me</h1>

        <div class="flex flex-row leading-normal m-28 gap-4 text-center min-w-6">
            <div class="max-w-min text-wrapt">
                <p class="text-white text-1xl text-center">
                    Web Development has been part of me since 2021, It has shown me how important it "UJ CBE
                    Hackathon
                    2023
                    Winner | Campus Innov8 2023 Hackathon winner | UJ Student
                    ||Web Developer || Mobile Developer with experience of programming, Frontend Web
                    Designs and BackEnd. I Love fun Web UI, collaboration and making products.<br />
                    <br />
                    I value simple content structure, clean design patterns, and
                    thoughtful interactions."
                </p>
            </div>
        </div>
        <div class="flex flex-row justify-center leading-normal m-28 gap-4 mb-7 text-center min-w-6">
            <button type="button" onclick="cv()"
                class="text-white bg-gray-900 hover:bg-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-8 h-4" aria-hidden="true" xmlns="" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
                <span class="sr-only">Cv download</span>
            </button>
        </div>

    </section>


    <section id="skills" class="flex justify-center gap-8">
        <div class="">
            <h1 class="text-4xl md:text-5xl lg:text-6xl text-center mb-10">
                Skills
            </h1>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

            <div class="flex flex-col">
                <ul style="list-style-type: disc; font-weight: 400; color: rgb(107, 198, 228); cursor: pointer;"
                    class="hover:bg-white rounded-lg p-7">

                    <li class="text-2xl">React</li>
                    <li>React-Native</li>
                    <li class="text-2xl">CSS</li>
                    <li>SQL</li>
                    <li class="text-2xl">TailWind</li>
                    <li class="text-2xl">HTML</li>
                    <li>GitHub</li>
                    <li class="text-2xl">JavaScript</li>
                </ul>

            </div>

            <div class="flex flex-row">
                <figure
                    class="relative max-w-sm transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0">
                    <a href="#">
                        <img class="rounded-lg" src="/pictures/mukelani.jpg" alt="image description">
                    </a>
                    <figcaption class="absolute px-4 text-lg text-white bottom-6">
                        <p>Do you want to know my work? Then scroll down</p>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>

    <section id="Projects" class="p-5 md:p-10">
        <h1 class="text-4xl md:text-5xl lg:text-6xl text-center mb-10 text-white">Projects</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">

            <a href="https://github.com/MukelaniGumaMashoba/PLug3.0"
                class="flex flex-col items-center bg-black border border-gray-200 rounded-lg shadow hover:bg-gray-700">
                <img class="object-cover w-full h-48 md:h-64 rounded-t-lg" src="/png/plug3.0.jpg" alt="">
                <div class="p-4">
                    <h5 class="text-xl md:text-2xl font-bold text-white hover:text-black">Plug 3.0</h5>
                    <p class="text-sm md:text-base text-white mt-2">Here are the biggest enterprise technology
                        acquisitions of 2021 so far, in reverse chronological order.</p>
                </div>
            </a>



            <a href="https://github.com/MukelaniGumaMashoba/Dev-Project-2A"
                class="flex flex-col items-center bg-black border border-gray-200 rounded-lg shadow hover:bg-gray-700 p-2">
                <img class="object-cover w-full h-48 md:h-64 rounded-t-lg" src="/png/elearning.jpg" alt="">
                <div class="p-4">
                    <h5 class="text-xl md:text-2xl font-bold text-white hover:text-black">Elearning Platform</h5>
                    <p class="text-sm md:text-base text-white mt-2">Elearning Website for Highschool and useful since it
                        offer communication for teachers and etc and also allow students, to get
                        resources needed for learning.
                    </p>
                </div>
            </a>

            <a href="https://github.com/MukelaniGumaMashoba/M.P.P"
                class="flex flex-col items-center bg-black border border-gray-200 rounded-lg shadow hover:bg-gray-700">
                <img class="object-cover w-full h-48 md:h-64 rounded-t-lg" src="/png/mpp.png" alt="">
                <div class="p-4">
                    <h5 class="text-xl md:text-2xl font-bold text-white hover:text-black">Maphephetha Secondary
                        School
                    </h5>
                    <p class="text-sm md:text-base text-white mt-2">The Maphephetha Website which will be used by
                        students and also admins to maintain resources that will be available online and all time
                        since also it at rural areas access to resources is scarce.</p>
                </div>
            </a>

            <a href="https://github.com/MukelaniGumaMashoba/carWash"
                class="flex flex-col items-center bg-black border border-gray-200 rounded-lg shadow hover:bg-gray-700 p-2">
                <img class="object-cover w-full h-48 md:h-64 rounded-t-lg" src="/png/mobileCarWash.png" alt="">
                <div class="p-4">
                    <h5 class="text-xl md:text-2xl font-bold text-white hover:text-black">Mobile Car Wash</h5>
                    <p class="text-sm md:text-base text-white mt-2">Mobile Application that will allow users to book car
                        services online
                        and on appointment, all sort of car cleaning serivce is offered.</p>
                </div>
            </a>

            <a href="https://github.com/MukelaniGumaMashoba/planetearth"
                class="flex flex-col items-center bg-black border border-gray-200 rounded-lg shadow hover:bg-gray-700">
                <img class="object-cover w-full h-48 md:h-64 rounded-t-lg" src="/png/planertEarth.png" alt="">
                <div class="p-4">
                    <h5 class="text-xl md:text-2xl font-bold text-white hover:text-black">Planet Earth
                        School
                    </h5>
                    <p class="text-sm md:text-base text-white mt-2"> A mobile application for companies to track their
                        carbon emission it uses npm to run built with react native,expo and javascript
                        to run it you can download expo and the open command prompt run npm start and then tscan to run
                        it using expo and good to go.</p>
                </div>
            </a>
        </div>
    </section>



    <section id="Contact">
        <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
            <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]"
                aria-hidden="true">
                <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-6xl font-bold tracking-tight text-gray-900 sm:text-4xl">Contact</h2>
                <p class="mt-2 text-lg leading-8 text-gray-600">If You are interested or what to leave a message
                    feel free.</p>
            </div>
            <form method="POST" action="email.php" class="mx-auto mt-16 max-w-xl sm:mt-20" id="contact-form">
                <div class="grid grid-cols-1 gap-x-8 gap-y-6 gap-2 sm:grid-cols-2">
                    <div>
                        <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">First
                            name</label>
                        <div class="mt-2.5">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Last
                            name</label>
                        <div class="mt-2.5">
                            <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
                        <div class="mt-2.5">
                            <input type="email" name="email" id="email" autocomplete="email"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="phone-number" class="block text-sm font-semibold leading-6 text-gray-900">Phone
                            number</label>
                        <div class="relative mt-2.5">
                            <input type="tel" name="phone-number" id="phone-number" autocomplete="tel"
                                class="block w-full rounded-md border-0 px-3.5 py-2 pl-20 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">Message</label>
                        <div class="mt-2.5">
                            <textarea name="message" id="message" rows="4"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        </div>
                    </div>
                </div>
                <div class="mt-10">
                    <button type="submit"
                        class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Let's
                        talk
                    </button>
                </div>
            </form>


            <div>
                <p class="text-center"><a href="https://mukelanigumamashoba.github.io/mukelani.github.io-master/">See
                        More About Me Here</a></p>
            </div>
        </div>
    </section>

    <div class="social-media-container">
        <div class="text-white m-4" id="contact">
            <article>GetinTouch();</article>
        </div>
        <div class="flex flex-row justify-center">
            <a href="https://www.instagram.com/mukelaniguma/" target="_blank" tabindex="0"
                aria-label="My instagram"><svg viewBox="0 0 448 512" width="50" height="30" class="SocialHandle">
                    <path
                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                </svg></a>

            <a href="https://www.linkedin.com/in/mukelani-mashoba-902179247/" target="_blank"
                aria-label="My Linkdin"><svg class="SocialHandle" viewBox="0 0 448 512" width="50" height="30">
                    <path
                        d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z" />
                </svg></a>

            <a href="https://github.com/MukelaniGumaMashoba" target="_blank" aria-label="My github"><svg
                    viewBox="0 0 448 512" width="50" height="30" class="SocialHandle">
                    <path
                        d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                </svg></a>

            <a href="mailto:mukelanilastborn@gmail.com" target="_blank" aria-label="My G mail"><svg
                    viewBox="0 0 448 512" width="50" height="30" class="SocialHandle">
                    <path
                        d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z" />
                </svg></a>
        </div>
    </div>

    <section id="footer">
        <footer class="bg-white rounded-lg shadow m-4 dark:bg-gray-800">
            <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a
                        href="https://flowbite.com/" class="hover:underline">Mukelani™</a>. All Rights Reserved.
                </span>
                <ul
                    class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">About</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
        </footer>

    </section>
</body>

<!-- <script src="../path/to/flowbite/dist/flowbite.min.js"></script> -->
<script src="index.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</html>
