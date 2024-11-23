@extends('components.app')


@section('content')



    <div class="h-screen w-3/4 pt-10 p-5 bg-[#FBFBFB] m-auto">

          

        <div class="w-3/4 h-[500px] m-auto rounded-lg  mt-20 bg-[#FFDDAE] border border-green-300 p-3">
            <h1 class=" mt-10 text-center">If you want you can update your information</h1>

            
               <p> {{ session('update') }}</p>
            


            <form class="max-w-sm mt-10 mx-auto" method="POST" action="{{route('update.route',$data->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Name</label>
                    <input type="name" name="name" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  value="{{$data->name}}"/>
                </div>
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Email</label>
                    <input type="email" name="email" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data->email}}"/>
                </div>

                <div class="mb-5">
                    <label for="file" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Image</label>
                    <input type="file" name="image" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  value="{{$data->image}}"/>
                </div>

                <div class="flex justify-around gap-10">
                    <a href="{{route('member.route')}}">
                        <button type="button">Back</button>
                    </a>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </div>

            </form>

        </div>

    </div>

@endsection
