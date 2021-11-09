@extends('student-layout')
@section('title', 'Profile')
@section('content')
    <center>
        <h1 class="mx-auto mb-12 text-2xl font-semibold leading-none tracking-tighter  lg:w-1/2 sm:text-6xl title-font">
            Courses Below </h1>
    </center>

    <section class="text-blueGray-700 ">
        <div class="container items-center px-5 py-8 mx-auto lg:px-24">
            <div class="flex flex-wrap mb-12 text-left">
                @foreach ($cess as $item)

                    <div class="w-full mx-auto space-x-2 lg:w-1/3 bg-orange-500 rounded-3xl m-4">
                        <div class="p-6">
                            <img class="object-cover object-center shadow-outline-red w-full mb-8 lg:h-48 md:h-36"
                                src="{{ asset('storage/images/' . $item['image']) }}" alt="blog">
                            <div class="inline-flex justify-between w-full">
                                <h1
                                    class="mb-8 text-xl font-semibold leading-none tracking-tighter text-white title-font">
                                    {{ $item['name'] }} </h1>
                                <span>${{ $item['cost'] }}.00 JMD</span>
                            </div>
                            <p class="mx-auto text-base font-medium leading-relaxed text-blueGray-700 ">
                                {{ $item['description'] }}</p>
                            <h1 class="mb-4 text-xl font-semibold leading-none tracking-tighter text-white title-font">
                                Start Date: {{ $item['start_date'] }} </h1>
                            <h1 class="mb-8 text-xl font-semibold leading-none tracking-tighter text-white title-font">
                                End
                                Date: {{ $item['end_date'] }} </h1>
                                <a href="{{ route('courses.apply', $item['id']) }}">
                                <button
                                class="w-auto px-8 py-2 my-2 text-base font-medium text-white transition duration-500 ease-in-out transform bg-blue-800 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:b-gblue-700 ">Apply
                            </button>
                            </a>
                        </div>
                    </div>
                @endforeach
                <span>
                    {{ $cess->links() }}
                </span>
            </div>
        </div>
    </section>
    @endsection