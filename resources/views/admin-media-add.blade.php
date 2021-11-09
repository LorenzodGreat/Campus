@extends('admin-layout')
@section('title', 'Add Media')
@section('content')
<div class="p-4 lg:p-8 ">
    <h1
        class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-black lg:text-3xl title-font">
        Welcome Administrator. </h1>
    <p class="mx-auto text-base font-medium leading-relaxed text-blueGray-700 ">You're about to be able
        to add media to your gallery for all to see on your main page.</p>
        <div class="container items-center px-5 py-12 lg:px-20">
            <form method="POST"  enctype="multipart/form-data" action="{{ route('admin.media.upload') }}" class="flex flex-col w-full p-10 px-8 pt-6 mx-auto my-6 mb-4 transition duration-500 ease-in-out transform bg-white border rounded-lg lg:w-1/2 ">
                <div class="relative pt-4">
                    @csrf
                    <label for="Pic" class="text-base leading-7 text-blueGray-500">Add Image</label>
                    <input type="file" required id="Pic" name="pic" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
                  </div>
              <div class="relative pt-4">
                <label for="Title" class="text-base leading-7 text-blueGray-500">Title</label>
                <input type="text" required id="Title" name="title" placeholder="Media Title...." class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
              </div>
              <div class="flex flex-wrap mt-4 mb-6 -mx-3">
                <div class="w-full px-3">
                  <label class="text-base leading-7 text-blueGray-500" for="description"> Description </label>
                  <textarea required name="description" class="w-full h-32 px-4 py-2 mt-2 text-base text-blueGray-500 transition duration-500 ease-in-out transform bg-white border rounded-lg focus:border-blue-500 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 apearance-none autoexpand" id="description" type="text" name="description" placeholder="Message..." required="" spellcheck="false"></textarea>
                </div>
              </div>
              <div class="flex items-center w-full pt-4">
                <button type="submit" class="w-full py-3 text-base text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-800 "> Button </button>
              </div>
            </form>
          </div>

    </div>

  @endsection