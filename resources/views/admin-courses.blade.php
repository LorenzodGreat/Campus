@extends('admin-layout')
@section('title', 'Courses')
@section('content')
    <a href={{ route('admin.courses.add') }}>
        <button
            class="w-auto px-8 m-5 py-2 my-2 text-base font-medium text-white transition duration-500 ease-in-out transform bg-red-800 border-red-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:b-gblue-700 ">Add
            Course
        </button>
    </a>

    <h1 class="mx-auto mb-12 text-2xl font-semibold leading-none tracking-tighter  lg:w-1/2 sm:text-6xl title-font">Admin
        Courses Below </h1>

    <section class="text-blueGray-700 ">
        <div class="container items-center px-5 py-8 mx-auto lg:px-24">
            <div class="flex flex-wrap mb-12 text-left">
                @foreach ($cess as $item)

                    <div class="w-full mx-auto lg:w-1/4 bg-white rounded-3xl m-4">
                        <div class="p-6 ">
                            <img class="object-cover object-center shadow-outline-red w-full mb-8 lg:h-48 md:h-36"
                                src="{{ asset('storage/images/' . $item['image']) }}" alt="blog">
                            <div class="inline-flex justify-between w-full">
                                <h1 class="mb-8 text-xl font-semibold leading-none tracking-tighter text-red-600 title-font">
                                    {{ $item['name'] }} </h1>
                                <span>${{ $item['cost'] }}.00 JMD</span>
                            </div>
                            <p class="mx-auto text-base font-medium leading-relaxed text-blueGray-700 ">
                                {{ $item['description'] }}</p>
                            <h1 class="mb-4 text-xl font-semibold leading-none tracking-tighter text-red-600 title-font">
                                Start Date: {{ $item['start_date'] }} </h1>
                            <h1 class="mb-8 text-xl font-semibold leading-none tracking-tighter text-red-600 title-font">End
                                Date: {{ $item['end_date'] }} </h1>
                            <a href="{{ route('courses.edit', $item['id']) }}">Edit</a>
                            <a href="{{ route('courses.delete', $item['id']) }}">Delete</a>
                        </div>
                    </div>
                @endforeach
                <span>
                    {{ $cess->links() }}
                </span>
            </div>
        </div>
    </section>
 2
    @if (session()->has('add'))

        <script>
            Swal.fire({
                // position: 'top-end',
                icon: 'success',
                title: 'Congrats Course Added',
                showConfirmButton: false,
                timer: 2500
            })
        </script>
    @endif
    @if (session()->has('update'))

        <script>
            Swal.fire({
                // position: 'top-end',
                icon: 'success',
                title: 'Congrats Course Updated',
                showConfirmButton: false,
                timer: 2500
            })
        </script>
    @endif
@endsection
