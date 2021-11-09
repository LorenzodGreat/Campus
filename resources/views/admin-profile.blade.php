@extends('admin-layout')
@section('title', 'Profile')
@section('content')


    <section class="text-blueGray-700 ">
        <div class="container flex flex-col items-center px-5 py-16 mx-auto md:flex-row lg:px-28">
          <div class="flex flex-col items-start mb-16 text-left lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 md:mb-0">
            <h1 class="mb-8 text-2xl font-black tracking-tighter text-black md:text-5xl title-font">Welcome to your Admin Dashboard. </h1>
            <p class="mb-8 text-base leading-relaxed text-left text-blueGray-600 "> Let's start adding our subjects, manage applications, logs for course applications and more. </p>
            <div class="flex flex-col justify-center lg:flex-row">
              <a href="/">
                <button class="flex items-center px-6 py-2 mt-auto font-semibold text-white transition duration-500 ease-in-out transform bg-blue-600 rounded-lg hover:bg-blue-700 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">Main Page</button>
              </a>
              <p class="mt-2 text-sm text-left text-blueGray-600 md:ml-6 md:mt-0"> Want to see the courses displayed  <br class="hidden lg:block">
                <a href="{{ route('courses.view') }}" class="inline-flex items-center font-semibold text-blue-600 md:mb-2 lg:mb-0 hover:text-black " title="read more">on the main page click here » </a>
              </p>
            </div>
          </div>
          <div class="w-full lg:w-5/6 lg:max-w-lg md:w-1/2">
            <img class="object-cover object-center rounded-lg " alt="hero" src="https://www.heart-nsta.org/wp-content/uploads/HEART-NSTA-Trust-Logo.png">
          </div>
        </div>
      </section>
      @if (session()->has('logedin'))

      <script>
         Swal.fire({
                  position: 'top-end',
                  icon: 'success',
                  title: 'Login Confirm',
                  showConfirmButton: false,
                  timer: 1500
              })
      </script>
      @endif
@endsection
