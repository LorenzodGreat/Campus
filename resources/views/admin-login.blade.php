<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Admin Portal</title>
</head>

<body
    style="background-image: url(https://images.unsplash.com/photo-1594671581654-cc7ed83167bb?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80);background-attachment: fixed;background-size: 50%;">
    <section class="flex flex-col items-center h-screen md:flex-row">
        <div class="container mx-auto">
            <div class="flex justify-center px-2 py-6 ">
                <div class="flex w-full rounded-lg xl:w-3/4 lg:w-11/12 lg:shadow-xl ">
                    <div
                        class="relative hidden w-full h-auto bg-white bg-cover border-r rounded-l-lg lg:block lg:w-6/12">
                        <div class="relative z-10 m-12 text-left ">
                            <a class="flex items-center w-32 mb-4 font-medium text-blueGray-900 title-font md:mb-10">
                                <div class="w-2 h-2 p-2 mr-2 rounded-full bg-gradient-to-tr from-blue-300 to-blue-600">
                                </div>
                                <h2
                                    class="text-lg font-bold tracking-tighter text-black uppercase transition duration-500 ease-in-out transform hover:text-lightBlack-500 dark:text-lightBlue-400">
                                    Heart Trust Pro </h2>
                            </a>
                            <img src="https://www.heart-nsta.org/wp-content/uploads/HEART-NSTA-Trust-Logo.png" alt="">
                        </div>
                    </div>
                    <div
                        class="w-full px-8 py-24 bg-white rounded-lg border-blueGray-100 lg:w-8/12 lg:px-24 lg:py-4 lg:rounded-l-none s">
                        <div class="relative z-10 text-left ">
                            <div class="flex justify-enter lg:py-6">
                            </div>
                            <form class="mt-6" action={{ route('adminlogin') }} method="POST">
                                @csrf
                                <div class="mt-4">
                                    <h1 class="mb-8 text-2xl font-black tracking-tighter text-black md:text-5xl title-font">Welcome to the Heart TRUST NSTA  Admin Portal. </h1>

                                    <label class="block text-base font-medium leading-relaxed text-blueGray-700">Email
                                        Address</label>
                                    <input type="email" name="Email" placeholder="Your Email "
                                        class="w-full px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ext-black focus:border-blueGray-500"
                                        autocomplete="" required="">
                                </div>
                                <div class="flex flex-wrap mt-4 mb-6 -mx-3">
                                    <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                                        <label class="text-base font-medium leading-relaxed text-blueGray-700"
                                            for="password" minlength="6"> Password </label>
                                        <input name="Password"
                                            class="block w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ext-black focus:border-blueGray-500"
                                            type="password" placeholder="Your Password">
                                    </div>
                                </div>
                                <button type="submit"
                                    class="block w-full px-4 py-3 mt-6 font-semibold text-white transition duration-500 ease-in-out transform rounded-lg bg-gradient-to-r from-black hover:from-black to-black focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 hover:to-black">Log
                                    In</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
