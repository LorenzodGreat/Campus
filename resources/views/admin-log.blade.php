@extends('admin-layout')
@section('title', 'Applicantions Log')
@section('content')
<section class="text-blueGray-700 ">
    <div class="container flex flex-col items-center px-5 py-2 mx-auto">
      <div class="flex flex-col w-full text-left lg:text-center">
        <h1 class="mx-auto mb-12 text-2xl font-semibold leading-none tracking-tighter text-black lg:w-1/2 sm:text-6xl title-font">Application Log </h1>
      </div>
    </div>
  </section>
<section class="text-blueGray-600 ">
    <div class="container px-5 py-14 mx-auto">
      <div class="w-full overflow-auto bg-opacity-75 bg-white rounded-2xl">
        <table class="w-full text-left whitespace-no-wrap table-auto">
          <thead>
            <tr>
              <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> Student ID</th>
              <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> First Name</th>
              <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> Last Name</th>
              <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> Email</th>
              <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> Submited</th>
              <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> Course Start</th>
              <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> Course End</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($collection as $item)
          <tr class="items-center">
                  
              <td class="px-4 py-2 text-black bg-blueGray-50">{{ $item->student_id }}</td>
              <td class="px-4 py-2 text-black bg-blueGray-50">{{ $item->First_name}}</td>
              <td class="px-4 py-2 text-black bg-blueGray-50">{{ $item->Last_name }}</td>
              <td class="px-4 py-2 text-black bg-blueGray-50">{{ $item->email }}</td>
              <td class="px-4 py-2 text-black bg-blueGray-50">{{ $item->created_at }}</td>
              <td class="px-4 py-2 text-black bg-blueGray-50">{{ $item->start_date }}</td>
              <td class="px-4 py-2 text-black bg-blueGray-50">{{ $item->end_date }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <center>
      <span>
        {{ $collection->links() }}
      </span>
    </center>
  </section>
  @endsection