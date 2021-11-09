@extends('student-layout')
@section('title', 'Paying Now')
@section('content')
<section class="text-blueGray-700 ">
    <div class="container items-center px-5 py-12 lg:px-20">
      <div class="flex flex-col w-full p-10 mx-auto my-6 transition duration-500 ease-in-out transform bg-white border rounded-lg lg:w-2/6 md:w-1/2 md:mt-0">
        <div class="relative mt-4">
          <form action={{ route('student.pay.now') , $in->id }} method="POST">
            @csrf
            <label for="name" class="text-base leading-7 text-blueGray-500">Card Holder</label>
            <input type="name" id="name" name="card_holder" placeholder="Enter Name" class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
          </div>
          <div class="relative mt-4">
            <label for="number" class="text-base leading-7 text-blueGray-500">Card Number</label>
            <input type="text" id="number" name="number" placeholder="Enter Number Here......." class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
          </div>
          <div class="relative mt-4">
            <input hidden type="text" id="course" value="{{ $in['id'] }}" name="application_id"  placeholder="{{ $in['name'] }}" class=" w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
          </div>
          <div class="relative mt-4">
            <label for="type" class="text-base leading-7 text-blueGray-500">Card Type</label>
            <select class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2" id="grid-url" type="text" name="type" placeholder="https://..." required="">
              <option value="Master Card">Master Card</option>
              <option value="Visa Card">Visa Card</option>
              <option value="Debit Card">Debit Card</option>
            </select>
          </div>
          <div class="relative mt-4">
            <label for="date" class="text-base leading-7 text-blueGray-500">Name</label>
            <input type="date" id="date" name="date"  class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
          </div>
          <div class="flex my-6">
            <label class="flex items-center">
              <input type="checkbox" class="form-checkbox ">
              <span class="ml-2 text-blueGray-500">Pay Now </span>
            </label>
          </div>
          <button type="submit" class="w-full px-16 py-2 my-2 mr-2 text-base text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-800 "> Pay Now </button>
        </form>
        </div>
      </div>
    </section>

    @endsection