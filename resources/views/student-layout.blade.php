<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="https://apply.heart-nta.org/images/heartnsta-logo-500.png">
    <script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>@yield('title')</title>
</head>

<body style="background-color: #abe9cd;
background-image: linear-gradient(315deg, #abe9cd 0%, #3eadcf 74%);
">
    {{-- This is the Header section of the page which contains the nav bar --}}
    <header>
        <div class="container max-w-full items-center">
            <div class="text-blueGray-700 max-w-full transition duration-500 ease-in-out transform bg-black">
                <div class="flex flex-col flex-wrap p-5 max-w-full mx-auto md:items-center md:flex-row">
                    <a href="/" class="pr-2 lg:pr-8 lg:px-6 focus:outline-none">
                        <div class="inline-flex items-center">
                            <div class="w-2 h-2 p-2 mr-2 rounded-full bg-gradient-to-tr from-blue-500 to-blue-600">
                            </div>
                            <h2
                                class="block p-2 text-xl font-medium tracking-tighter text-white transition duration-500 ease-in-out transform cursor-pointer hover:text-blueGray-500 lg:text-x lg:mr-8">
                                Heart Trust NSTA Student</h2>
                        </div>
                    </a>
                    <nav class="flex flex-wrap items-center justify-center text-base md:ml-auto md:mr-auto">
                        <ul class="items-center inline-block list-none lg:inline-flex">
                            <li>
                                <a href={{ route('student.profile') }}
                                    class="px-4 py-1 mr-1 text-base text-white transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-red ">Profile</a>
                            </li>
                            <li>
                                <a href={{ route('student.courses') }}
                                    class="px-4 py-1 mr-1 text-base text-white transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-red ">My Courses</a>
                            </li>
                            <li>
                                <a href={{ route('student.pay') }}
                                    class="px-4 py-1 mr-1 text-base text-white transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-red ">Payments</a>
                            </li>
                        </ul>
                    </nav>
                    <a href={{ route('student-logout') }}>
                        <button
                            class="w-auto px-8 py-2 my-2 text-base font-medium text-white transition duration-500 ease-in-out transform bg-blue-800 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:b-gblue-700 ">Logout
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </header>
    {{-- End Of The Header Section!!!!!!!!!! --}}


    <main>
        @yield('content')
    </main>
    </div>
</body>

</html>
