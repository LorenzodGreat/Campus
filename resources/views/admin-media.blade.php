@extends('admin-layout')
@section('title', 'Media')
@section('content')
<a href={{ route('admin.media.add') }}>
    <button
        class="w-auto px-8 m-5 py-2 my-2 text-base font-medium text-white transition duration-500 ease-in-out transform bg-red-800 border-red-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:b-gblue-700 ">Add
        Media
    </button>
</a>

<section class="text-blueGray-700 ">
    <div class="container items-center px-5 py-8 mx-auto lg:px-16">
      <div class="flex flex-wrap mb-12 text-left">
        @foreach ($media_uploaded as $item)
        <div class="w-full p-6 mx-auto lg:w-1/3">
          <div class="p-4 lg:p-8 rounded-xl bg-blueGray-50">
            <img class="object-cover object-center w-full mb-8 lg:h-48 md:h-36 rounded-xl" src="{{ asset('storage/images/' . $item['pic']) }}" alt="blog">
            <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-black title-font">{{ $item['title'] }} </h1>
            <p class="mx-auto text-base font-medium leading-relaxed text-blueGray-700 ">{{ $item['description'] }}</p>
            <a href={{ route('media.delete',$item['id']) }} class="inline-flex items-center mt-4 font-semibold text-blue-600 lg:mb-0 hover:text-black " title="read more">Delete media » </a>
          </div>
        </div>
        @endforeach
        <span>
          {{  $media_uploaded->links()  }}
        </span>
      </div>
    </div>
  </section>
  @if (session()->has('media_deleted'))

  <script>
      Swal.fire({
          // position: 'top-end',
          icon: 'error',
          title: 'Congrats Media Deleted',
          showConfirmButton: false,
          timer: 2000
      })
  </script>
@endif
@if (session()->has('media_uploaded'))

  <script>
      Swal.fire({
          // position: 'top-end',
          icon: 'success',
          title: 'Congrats Media Added',
          showConfirmButton: false,
          timer: 2000
      })
  </script>
@endif
@endsection
