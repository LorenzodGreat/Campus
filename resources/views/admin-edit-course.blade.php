@extends('admin-layout')
@section('title', 'Course Edit')
@section('content')
<center>
    <h1 class=" text-6xl">Edit Course</h1>
</center>
<div class="flex flex-col w-9/12 mx-auto my-6 md:mt-0">
    <div class="relative mt-4">
        <form action={{ route('course.update', $in->id) }} method="POST" enctype="multipart/form-data">
            @csrf
            <label for="Course" class="text-base leading-7 text-blueGray-500">Course Name</label>
            <input type="text" id="Course" name="name" value="{{ $in['name'] }}"
                class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
    </div>
    <div class="relative mt-4">
        <label for="Subject" class="text-base leading-7 text-blueGray-500">Subject</label>
        <select name="sub_id" id="Subject"
            class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
            @foreach ($subs as $item)
                <option value="{{ $item->id }}">{{ $item['name'] }}</option>
            @endforeach
        </select>
    </div>
    <div class="relative mt-4">
        <label for="description" class="text-base leading-7 text-blueGray-500">Description</label>
        <textarea name="description" id="description" cols="30" rows="10" value="{{ $in['description'] }}"
            class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2"></textarea>
    </div>
    <div class="relative mt-4">
        <label for="cost" class="text-base leading-7 text-blueGray-500">Cost</label>
        <input type="text" id="cost" name="cost" value="{{ $in['cost'] }}"
            class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
    </div>
    <div class="relative mt-4">
        <label for="start_date" class="text-base leading-7 text-blueGray-500">Start Date</label>
        <input type="date" id="start_date" name="start_date"
            class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
    </div>
    <div class="relative mt-4">
        <label for="end_date" class="text-base leading-7 text-blueGray-500">End Date</label>
        <input type="date" id="end_date" name="end_date"
            class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
    </div>
    <div class="relative mt-4">
        <label for="image" class="text-base leading-7 text-blueGray-500">Display Image For
            Course</label>
        <input type="file" id="image" name="pic"
            class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
    </div>
    <button type="submit"
        class="w-full px-16 py-2 my-2 mr-2 text-base font-medium text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-800 ">
        Update Course </button>
    </form>
</div>
@endsection