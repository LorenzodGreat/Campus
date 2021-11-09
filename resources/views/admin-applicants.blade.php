@extends('admin-layout')
@section('title', 'Applications')
@section('content')
<center class="py-10">
    <button id="b1" class="px-4 py-2 mx-auto text-base font-medium text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md items-centerw-full focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-700"> New Applicants</button>
    <button id="b2" class="px-4 py-2 mx-auto text-base font-medium text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md items-centerw-full focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-700">Accepted Applicants</button>
    <button id="b3" class="px-4 py-2 mx-auto text-base font-medium text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md items-centerw-full focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-700">Rejected Applicants</button>
</center>

<div id="1"> 
    <section class="text-blueGray-700 ">
        <div class="container flex flex-col items-center px-5 py-2 mx-auto">
          <div class="flex flex-col w-full text-left lg:text-center">
            <h1 class="mx-auto mb-12 text-2xl font-semibold leading-none tracking-tighter text-black lg:w-1/2 sm:text-6xl title-font">Pending Applications </h1>
          </div>
        </div>
      </section>
    <section class="text-blueGray-600 ">
        <div class="container px-5 py-14 mx-auto">
          <div class="w-full overflow-auto">
            <table class="w-full text-left whitespace-no-wrap table-auto">
              <thead>
                <tr>
                  <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> Student ID</th>
                  <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> Student Name</th>
                  <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> Course ID</th>
                  <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> Course Name</th>
                  <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> Status</th>
                  <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> Payment</th>
                  <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> Modify</th>
                  <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> Submit</th>
                  <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> Download XML</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($collection as $item)
              <tr class="items-center">
                      
                  <td class="px-4 py-2 text-black bg-blueGray-50">{{ $item->student_id }}</td>
                  <td class="px-4 py-2 text-black bg-blueGray-50">{{ $item->First_name}}</td>
                  <td class="px-4 py-2 text-black bg-blueGray-50">{{ $item->course_id }}</td>
                  <td class="px-4 py-2 text-black bg-blueGray-50">{{ $item->name }}</td>
                  <td class="px-4 py-2 text-black bg-blueGray-50">{{ $item->status }}</td>
                  <td class="px-4 py-2 text-black bg-blueGray-50">None</td>
                  <form action="{{ route('admin.application.update', $item->student_id )}}" method="POST">
@csrf
                    <td class="px-4 py-2 text-black bg-blueGray-50">
                      <select name="status" id="">
                        <option value="Pending">Pending</option>
                        <option value="Accepted">Accepted</option>  
                        <option value="Rejected">Rejected</option>
                      </select>  
                    </td>
                    <td class="px-4 py-2 text-lg bg-blueGray-50">
                      <button role="button" type="submit" class="px-4 py-2 mx-auto text-base font-medium text-blue-600 transition duration-500 ease-in-out transform bg-blue-100 rounded-lg hover:bg-blue-300 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">Update </button>
                    </td>
                  </form>
                  <form action="{{ route('admin.application.download' , $item->id) }}">
                      <td class="px-4 py-2 text-lg bg-blueGray-50">
                        <button role="button" type="submit" class="px-4 py-2 mx-auto text-base font-medium text-blue-600 transition duration-500 ease-in-out transform bg-blue-100 rounded-lg hover:bg-blue-300 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">Download </button>
                      </td>
                   
                  </form>
                               </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <span>
            {{ $collection->links() }}
          </span>
        </div>
      </section>
    </div>
    
  <div id="2"> 
    <section class="text-blueGray-700 ">
      <div class="container flex flex-col items-center px-5 py-2 mx-auto">
        <div class="flex flex-col w-full text-left lg:text-center">
          <h1 class="mx-auto mb-12 text-2xl font-semibold leading-none tracking-tighter text-black lg:w-1/2 sm:text-6xl title-font">Accepted Applications  </h1>
        </div>
      </div>
    </section>
  <section class="text-blueGray-600 ">
      <div class="container px-5 py-14 mx-auto">
        <div class="w-full overflow-auto ">
          <table class="w-full text-left whitespace-no-wrap table-auto">
            <thead>
              <tr>
                <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> Student ID</th>
                <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> Student Name</th>
                <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> Course ID</th>
                <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> Course Name</th>
                <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> Status</th>
                <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> Payment</th>
                <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> Modify</th>
                <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> Submit</th>
                <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font">Download XML</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($in as $item)
            <tr class="items-center">
                    
                <td class="px-4 py-2 text-black bg-blueGray-50">{{ $item->student_id }}</td>
                <td class="px-4 py-2 text-black bg-blueGray-50">{{ $item->First_name}}</td>
                <td class="px-4 py-2 text-black bg-blueGray-50">{{ $item->course_id }}</td>
                <td class="px-4 py-2 text-black bg-blueGray-50">{{ $item->name }}</td>
                <td class="px-4 py-2 text-black bg-blueGray-50">{{ $item->status }}</td>
                <td class="px-4 py-2 text-black bg-blueGray-50">None</td>
                <form action="{{ route('admin.application.update', $item->student_id )}}" method="POST">
@csrf
                  <td class="px-4 py-2 text-black bg-blueGray-50">
                    <select name="status" id="">
                      <option value="Pending">Pending</option>
                      <option value="Accepted">Accepted</option>  
                      <option value="Rejected">Rejected</option>
                    </select>  
                  </td>
                  <td class="px-4 py-2 text-lg bg-blueGray-50">
                    <button role="button" type="submit" class="px-4 py-2 mx-auto text-base font-medium text-blue-600 transition duration-500 ease-in-out transform bg-blue-100 rounded-lg hover:bg-blue-300 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">Update </button>
                  </td>
                </form>
                <form post action="{{ route('admin.application.download' , $item->id) }}">

                    <td class="px-4 py-2 text-lg bg-blueGray-50">
                      <button role="button" type="submit" class="px-4 py-2 mx-auto text-base font-medium text-blue-600 transition duration-500 ease-in-out transform bg-blue-100 rounded-lg hover:bg-blue-300 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">Download </button>
                    </td>  
                  </a>
                </form>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <span>
          {{ $in->links() }}
        </span>
      </div>
    </section>  </div>
  
   <div id="3"> 
    <section class="text-blueGray-700 ">
      <div class="container flex flex-col items-center px-5 py-2 mx-auto">
        <div class="flex flex-col w-full text-left lg:text-center">
          <h1 class="mx-auto mb-12 text-2xl font-semibold leading-none tracking-tighter text-black lg:w-1/2 sm:text-6xl title-font">Rejected Applications </h1>
        </div>
      </div>
    </section>
  <section class="text-blueGray-600 ">
      <div class="container px-5 py-14 mx-auto">
        <div class="w-full overflow-auto ">
          <table class="w-full text-left whitespace-no-wrap table-auto">
            <thead>
              <tr>
                <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> Student ID</th>
                <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> Student Name</th>
                <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> Course ID</th>
                <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> Course Name</th>
                <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> Status</th>
                <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> Payment</th>
                <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> Modify</th>
                <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> Submit</th>
                <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> Download XML</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($opps as $item)
            <tr class="items-center">
                    
                <td class="px-4 py-2 text-black bg-blueGray-50">{{ $item->student_id }}</td>
                <td class="px-4 py-2 text-black bg-blueGray-50">{{ $item->First_name}}</td>
                <td class="px-4 py-2 text-black bg-blueGray-50">{{ $item->course_id }}</td>
                <td class="px-4 py-2 text-black bg-blueGray-50">{{ $item->name }}</td>
                <td class="px-4 py-2 text-black bg-blueGray-50">{{ $item->status }}</td>
                <td class="px-4 py-2 text-black bg-blueGray-50">None</td>
                <form action="{{ route('admin.application.update', $item->student_id )}}" method="POST">
@csrf
                  <td class="px-4 py-2 text-black bg-blueGray-50">
                    <select name="status" id="">
                      <option value="Pending">Pending</option>
                      <option value="Accepted">Accepted</option>  
                      <option value="Rejected">Rejected</option>
                    </select>  
                  </td>
                  <td class="px-4 py-2 text-lg bg-blueGray-50">
                    <button role="button" type="submit" class="px-4 py-2 mx-auto text-base font-medium text-blue-600 transition duration-500 ease-in-out transform bg-blue-100 rounded-lg hover:bg-blue-300 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">Update </button>
                  </td>
                </form>
                <a href="{{ route('admin.application.download' , $item->id) }}">
                  <td class="px-4 py-2 text-lg bg-blueGray-50">
                    <button role="button" class="px-4 py-2 mx-auto text-base font-medium text-blue-600 transition duration-500 ease-in-out transform bg-blue-100 rounded-lg hover:bg-blue-300 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">Download </button>
                  </td>
                </a>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <span>
          {{ $opps->links() }}
        </span>
      </div>
    </section>
    </div>
  
  </div> 

  <script>
      
let div1 = document.getElementById("1");
let div2 = document.getElementById("2");
let div3 = document.getElementById("3");

let btn1 = document.getElementById("b1");
let btn2 = document.getElementById("b2");
let btn3 = document.getElementById("b3");

btn1.addEventListener("click", function() {
    enableView(1)
});

btn2.addEventListener("click", function() {
    enableView(2)
});

btn3.addEventListener("click", function() {
    enableView(3)
});

enableView(1)


function enableView($view) {

    if ($view === 1) {

        div1.removeAttribute("hidden")
        div2.setAttribute("hidden", true)
        div3.setAttribute("hidden", true)

    } else if ($view === 2) {

        div1.setAttribute("hidden", true)
        div2.removeAttribute("hidden")
        div3.setAttribute("hidden", true)
    } else if ($view === 3) {

        div1.setAttribute("hidden", true)
        div2.setAttribute("hidden", true)
        div3.removeAttribute("hidden")
    } else {
        console.log("Review Code");
    }
};

  </script>
@endsection