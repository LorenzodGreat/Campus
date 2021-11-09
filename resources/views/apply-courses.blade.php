<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <title>Our Courses</title>
</head>

<body style="background-color: #abe9cd;
background-image: linear-gradient(315deg, #abe9cd 0%, #3eadcf 74%);
">
    <section class="text-blueGray-700 ">
        <div class="container flex flex-col items-center px-5 py-16 mx-auto md:flex-row lg:px-28">
            <div
                class="flex flex-col items-start w-full pt-0 mb-16 text-left lg:flex-grow md:w-1/2 xl:mr-20 md:pr-24 md:mb-0 ">
                <h1 class="mb-8 text-2xl font-bold tracking-tighter text-left text-black lg:text-2xl title-font">
                    {{ $in['name'] }}</h1>
                <p class="mb-8 text-base leading-relaxed text-left text-blueGray-600 "> {{ $in['description'] }}</p>
                <p class="flex items-center mb-2 text-blueGray-600 "><span
                        class="inline-flex items-center justify-center flex-shrink-0 w-6 h-6 mr-2 rounded-full">
                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                            height="24">
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                        </svg>
                    </span>Start Date: {{ $in['start_date'] }}</p>
                <p class="flex items-center mb-2 text-blueGray-600 ">
                    <span class="inline-flex items-center justify-center flex-shrink-0 w-6 h-6 mr-2 rounded-full">
                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                            height="24">
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                        </svg>
                    </span> End Date: {{ $in['end_date'] }}
                </p>
            </div>
            <div class="w-full lg:w-5/6 lg:max-w-lg md:w-1/2">
                <img class="object-cover object-center rounded-lg " alt="hero"
                    src="{{ asset('storage/images/' . $in['image']) }}">
            </div>
        </div>
    </section>

    <div class="flex flex-col w-9/12 mx-auto my-6 md:mt-0">
        <div class="relative mt-4">
            <form action={{ route('courses.applying', $in->id) }} method="POST" enctype="multipart/form-data">
                @csrf
                <label for="TRN" class="text-base leading-7 text-blueGray-500">TRN</label>
                <input type="text" id="TRN" name="trn" required placeholder="TRN HERE...."
                    class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
        </div>
        <div class="relative mt-4">
            <label for="first_name" class="text-base leading-7 text-blueGray-500">First Name</label>
            <input type="text" id="first_name" name="first_name" placeholder="First Name" required class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
        </div>
        <div class="relative mt-4">
            <label for="middle" class="text-base leading-7 text-blueGray-500">Middle Name</label>
            <input type="text" id="middle" name="middle_name" required placeholder="Middle Name" class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
    </div>
    <div class="relative mt-4">
        <label for="Last Name" class="text-base leading-7 text-blueGray-500">Last Name</label>
        <input type="text" id="Last Name" name="Last_name" required placeholder="Last Name" class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
    </div>
    <div class="relative mt-4">
        <label for="email" class="text-base leading-7 text-blueGray-500">Email</label>
        <input type="email" id="email" name="email" required placeholder="Enter Your Email here......" class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
</div>
        <div class="relative mt-4">
            <label for="gender" class="text-base leading-7 text-blueGray-500" required>Gender</label><br>
            <select class="text-base leading-7 text-blueGray-500" name="gender" id="gender" required class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
<option value="Female" >Female</option>
<option value="Male">Male</option>
            </select>
        </div>
        <div class="relative mt-4">
            <label for="DOB" class="text-base leading-7 text-blueGray-500" required>Date Of Birth</label>
            <input type="date" id="DOB" name="date_of_birth" class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
        </div>
        <div class="relative mt-4">
            <label for="qualification1" class="text-base leading-7 text-blueGray-500">Qualification 1</label>
            <input type="text" id="qualification1" name="qualification1" placeholder="Enter Your Qualification Plus Level Here..." class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
        </div>
        <div class="relative mt-4">
            <label for="qualification2" class="text-base leading-7 text-blueGray-500">Qualification 2</label>
            <input type="text" id="qualification2" name="qualification2" placeholder="Enter Your Qualification Plus Level Here..." class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
        </div>
        <div class="relative mt-4">
            <label for="qualification3" class="text-base leading-7 text-blueGray-500">Qualification 3</label>
            <input type="text" id="qualification3" name="qualification3" placeholder="Enter Your Qualification Plus Level Here..." class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
        </div>
        <div class="relative mt-4">
            <label for="qualification4" class="text-base leading-7 text-blueGray-500">Qualification 4</label>
            <input type="text" id="qualification4" name="qualification4" placeholder="Enter Your Qualification Plus Level Here..." class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
        </div>
        <div class="relative mt-4">
            <label for="qualification5" class="text-base leading-7 text-blueGray-500">Qualification 5</label>
            <input type="text" id="qualification5" name="qualification5" placeholder="Enter Your Qualification Plus Level Here..." class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
        </div>
        <div class="relative mt-4">
            <label for="Street" class="text-base leading-7 text-blueGray-500">Street Name</label>
            <input type="text" id="Street" name="street" placeholder="Enter Street Here....." class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
        </div>
        <div class="relative mt-4">
            <label for="Parish" class="text-base leading-7 text-blueGray-500">Parish Name</label>
       <input type="text" id="Parish" name="parish" placeholder="Parish Here" class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
        </div>
        <div class="relative mt-4">
            <label for="Tel" class="text-base leading-7 text-blueGray-500">Telephone Number</label>
            <input type="tel" id="Tel" name="tel" required placeholder="876-123-4567" class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
        </div>
        <div class="relative mt-4">
            <label for="CVV" class="text-base leading-7 text-blueGray-500">CVV</label>
            <input type="file" id="CVV" name="file">
        </div>
        <button type="submit"
            class="w-full px-16 py-2 my-2 mr-2 text-base font-medium text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-800 ">
            Apply Now</button>
        </form>
    </div>
    
</body>

</html>













