@extends('admin-layout')
@section('title', 'Add Courses')
@section('content')

    <div id="myModal" class="container items-center hidden px-5 py-12 lg:px-20">
        <div class="w-full px-5 mx-auto border rounded-lg shadow-xl lg:px-0 text-blueGray-500 lg:w-1/2" aria-hidden="false"
            aria-describedby="modalDescription" role="dialog">
            <div class="flex items-center justify-end px-6 py-4 ">
                <button
                    class="close p-1 transition-colors duration-200 transform rounded-md hover:bg-opacity-25 hover:bg-blueGray-600 focus:outline-none"
                    type="button" aria-label="Close" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-x" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="12" r="9"></circle>
                        <path d="M10 10l4 4m0 -4l-4 4"></path>
                    </svg>
                </button>
            </div>
            <div class="flex flex-col w-full mx-auto text-left lg:px-20 lg:text-center">
                <h1 class="text-2xl font-semibold leading-none tracking-tighter text-black title-font"> Add The Subject You
                    Will Like Here. </h1>
            </div>
            <div class="flex flex-col w-full mx-auto mb-8 lg:px-20 md:mt-0">
                <div class="relative mt-4">
                    <form action={{ route('adding-subject') }} method="POST">
                        @csrf
                        <label for="name" class="text-base leading-7 text-blueGray-500">Subject</label>
                        <input type="text" id="name" name="subject" placeholder="Click Here To Enter...."
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
    <section class="text-blueGray-700 ">
        <div class="container items-center px-5 py-8 mx-auto lg:px-24">
            <div class="flex flex-wrap justify-center mx-auto mb-12 divide-y-2 lg:divide-x-2 lg:divide-y-0">
                <div class="w-full p-4 lg:w-1/2">
                    <div class="p-4 lg:p-8 ">
                        <h1
                            class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-black lg:text-3xl title-font">
                            Welcome Administrator. </h1>
                        <p class="mx-auto text-base font-medium leading-relaxed text-blueGray-700 ">You're about to be able
                            to add course information below for Users to see.</p>
                        <div class="flex flex-col w-full mx-auto my-6 md:mt-0">
                            <div class="relative mt-4">
                                <form action={{ route('adding-course') }} method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <label for="Course" class="text-base leading-7 text-blueGray-500">Course Name</label>
                                    <input type="text" id="Course" name="name" placeholder="Course Name......"
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
                                <textarea name="description" id="description" cols="30" rows="10"
                                    class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2"></textarea>
                            </div>
                            <div class="relative mt-4">
                                <label for="cost" class="text-base leading-7 text-blueGray-500">Cost</label>
                                <input type="text" id="cost" name="cost"
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
                                Add Course </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="w-full p-4 lg:w-1/2">
                    <div class="p-4 lg:p-8">
                        <h1
                            class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-black lg:text-3xl title-font">
                            New? Subject. </h1>
                        <p class="mx-auto mb-10 text-base font-medium leading-relaxed text-blueGray-700 ">You're about to
                            add a new subject for the course you like to add. </p>
                        <!-- Trigger/Open The Modal -->
                        <button id="myBtn"
                            class="w-full px-16 py-2 my-2 mr-2 text-base font-medium text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-800 ">
                            Add Subject </button>
                    </div>

                    <script>
                        // Get the modal
                        var modal = document.getElementById("myModal");

                        // Get the button that opens the modal
                        var btn = document.getElementById("myBtn");

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close")[0];

                        // When the user clicks the button, open the modal 
                        btn.onclick = function() {
                            modal.style.display = "block";
                        }

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function() {
                            modal.style.display = "none";
                        }

                        // When the user clicks anywhere outside of the modal, close it
                        window.onclick = function(event) {
                            if (event.target == modal) {
                                modal.style.display = "none";
                            }
                        }
                    </script>
                    <section class="text-blueGray-600 ">
                        <div class="container px-5 py-24 mx-auto">
                            <div class="w-full overflow-auto ">
                                <table class="w-full text-left whitespace-no-wrap table-auto">
                                    <thead>
                                        <tr>
                                            <th
                                                class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font">
                                                Subject Name</th>
                                                <th
                                                class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font">
                                                Remove</th>    
                                                 <th
                                                class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font">
                                                Update</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($subs as $item)
                                            <tr class="items-center">
                                                <td class="px-4 py-2 text-black bg-blueGray-50">{{ $item['name'] }}</td>
                                                <td class="px-4 py-2 text-lg bg-blueGray-50">
                                                    <a href={{ route('subject.delete' ,$item['id']) }}>
                                                        <button role="button"
                                                            class="px-4 py-2 mx-auto text-base font-medium text-blue-600 transition duration-500 ease-in-out transform bg-blue-100 rounded-lg hover:bg-blue-300 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">Delete
                                                            Now </button>
                                                    </a>
                                                </td>
                                                <td class="px-4 py-2 text-lg bg-blueGray-50">
                                                  <a href={{ route('subject.editer' ,$item['id']) }}>
                                                      <button role="button"
                                                          class="px-4 py-2 mx-auto text-base font-medium text-blue-600 transition duration-500 ease-in-out transform bg-blue-100 rounded-lg hover:bg-blue-300 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">Edit
                                                          Now </button>
                                                  </a>
                                              </td>                                                
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </section>
    @if (session()->has('deleted'))

        <script>
            Swal.fire({
                // position: 'top-end',
                icon: 'error',
                title: 'Congrats Subject Removed',
                showConfirmButton: false,
                timer: 2500
            })
        </script>
    @endif

    @if (session()->has('subject'))

        <script>
            Swal.fire({
                // position: 'top-end',
                icon: 'success',
                title: 'Congrats Subject Submited',
                showConfirmButton: false,
                timer: 2500
            })
        </script>
    @endif

    @if (session()->has('up'))

    <script>
        Swal.fire({
            // position: 'top-end',
            icon: 'success',
            title: 'Congrats Subject Updated',
            showConfirmButton: false,
            timer: 2500
        })
    </script>
@endif
@endsection
