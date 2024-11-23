
@extends('components.app')

@section('content')

   <div class="w-3/5 h-screen mt-20  mx-auto flex flex-col p-2">

     

        <div class="h-3/6 bg-[#F5F7FA] p-5 flex flex-row gap-5">

            <h1 class="text-red-800 font-bold">
                {{session('login')}}
            </h1>

             <div class="w-3/5 h-4/5 hover:border  m-auto py-10 px-8 ">
                   <h1 class="text-black text-3xl ml-5 mt-8 font-semibold"> Lessons and insights <br> <span class="text-green-500">from 8 years</span> </h1>
                 <p class="ml-5  text-sm">Where to grow your business as a web Design & Developer: site or social media?</p>

                  <a href="{{route('member.route')}}">
                      <button class="bg-green-700 hover:opacity-70 p-2 px-5 rounded-lg text-white ml-5 mt-5">members</button>
                  </a>
             </div>

             <div class="h-4/5 w-2/5 pl-5 bg-white rounded-lg hover:border m-auto">
                 <img src="{{ asset('photo/Illustration.jpg') }}" alt="Example Image">
             </div>

          </div>

          <div class="h-3/6 bg-[#FBFBFB] flex bg-white p-2 ">

             <div class="h-4/5 w-2/5 pl-5 bg-white rounded-lg hover:border m-auto">
              <img src="{{ asset('photo/rafiki.jpg') }}" alt="Example Image">
             </div>

             <div class="w-3/5 h-4/5 hover:border  m-auto py-10 px-8   ">
                   <div class="flex flex-col gap-5">
                    <h1 class="text-3xl font-bold">The unseen of spending three years at Pixelgrade</h1>
                    <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet justo ipsum. Sed accumsan quam vitae est varius fringilla. Pellentesque placerat vestibulum lorem sed porta. Nullam mattis tristique iaculis. Nullam pulvinar sit amet risus pretium auctor. Etiam quis massa pulvinar, aliquam quam vitae, tempus sem. Donec elementum pulvinar odio.</p>
                   </div>
                  <button type="button" class="bg-green-500 p-2 mt-5 text-white hover:border rounded-sm">Learn more</button>
             </div>

          </div>

   </div>
@endsection
