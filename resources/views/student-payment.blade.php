@extends('student-layout')
@section('title', 'Payment')
@section('content')
<center>
    <h1 class="mx-auto mb-12 text-2xl font-semibold leading-none tracking-tighter  lg:w-1/2 sm:text-6xl title-font">
        Your Payments </h1>
        </center>
<section class="text-blueGray-600 ">
  <div class="container px-5 py-24 mx-auto">
      <div class="w-full overflow-auto ">
          <table class="w-full text-left whitespace-no-wrap table-auto">
              <thead>
                  <tr>
                    <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font">
                        Payment ID</th>
                      <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font">
                          Card Holder</th>
                      <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font">
                          Card Type</th>
                      <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font">
                          Date Applied</th>

                  </tr>
              </thead>
              <tbody>
                  @foreach ($collection as $item)
                  <tr class="items-center">
                      <td class="px-4 py-2 text-black bg-blueGray-50">{{ $item->id }}</td>
                      <td class="px-4 py-2 text-black bg-blueGray-50">{{ $item->card_holder }}</td>
                      <td class="px-4 py-2 text-black bg-blueGray-50">{{ $item->card_type }}</td>
                      <td class="px-4 py-2 text-black bg-blueGray-50">{{ $item->created_at }}</td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
  </div>
</section>



 
    
    @if (session()->has('paid'))
    
    <script>
      Swal.fire({
          // position: 'top-end',
          icon: 'success',
          title: 'Congrats Payment Made',
          showConfirmButton: false,
          timer: 2000
      })
  </script>
@endif

@endsection