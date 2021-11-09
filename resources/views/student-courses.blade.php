@extends('student-layout')
@section('title', 'My Courses')
@section('content')
    <center>
        <h1 class="mx-auto mb-12 text-2xl font-semibold leading-none tracking-tighter  lg:w-1/2 sm:text-6xl title-font">
            Courses Below </h1>
            </center>
    <section class="text-blueGray-600 ">
        <div class="container px-5 py-24 mx-auto">
            <div class="w-full overflow-auto ">
                <table class="w-full text-left whitespace-no-wrap table-auto">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font">
                                Subject Name</th>
                            <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font">
                                Status</th>
                            <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font">
                                Date Applied</th>
                            <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font">
                                Update</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($collection as $item)
                        <tr class="items-center">
                            <td class="px-4 py-2 text-black bg-blueGray-50">{{ $item->name }}</td>
                            <td class="px-4 py-2 text-black bg-blueGray-50">{{ $item->status }}</td>
                            <td class="px-4 py-2 text-black bg-blueGray-50">{{ $item->created_at }}</td>
                            @if ($item->status === "Accepted")
                            <td class="px-4 py-2 text-lg bg-blueGray-50">
                                    <a href={{ route('student.payments', $item->id) }}>
                                        <button role="button"
                                            class="px-4 py-2 mx-auto text-base font-medium text-blue-600 transition duration-500 ease-in-out transform bg-blue-100 rounded-lg hover:bg-blue-300 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">Pay
                                            Now </button>
                                    </a>                                        
                                </td>
                                    @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
    </section>


@endsection
