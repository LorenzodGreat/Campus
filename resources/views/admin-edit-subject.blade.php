@extends('admin-layout')
@section('title', 'Edit Subject')
@section('content')
<div class="container items-center px-5 py-12 lg:px-20">
    <div class="w-full px-5 mx-auto border rounded-lg shadow-xl lg:px-0 text-blueGray-500 lg:w-1/2" aria-hidden="false"
        aria-describedby="modalDescription" role="dialog">

        <div class="flex flex-col w-full mx-auto text-left lg:px-20 lg:text-center">
            <h1 class="text-2xl font-semibold leading-none tracking-tighter text-black title-font"> Edit Your Subject Here </h1>
        </div>
        <div class="flex flex-col w-full mx-auto mb-8 lg:px-20 md:mt-0">
            <div class="relative mt-4">
                <form action={{ route('subject.update', $in->id) }} method="POST">
                    @csrf
                    <label for="name" class="text-base leading-7 text-blueGray-500">Subject</label>
                    <input type="text" id="name" value="{{ $in->name }}" name="subject" placeholder="Click Here To Enter...."
                        class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
            </div><br>
            <button type="submit"
                class="w-full px-16 py-2 mr-2 text-base font-medium text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-800 ">
                Add Subject </button>
            </form>
            <p class="mx-auto mt-3 text-xs text-blueGray-500"> Add the subject of the course above..</p>
        </div>
    </div>
</div>
@endsection