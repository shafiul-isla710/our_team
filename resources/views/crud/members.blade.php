
@extends('components.app')


@section('content')

    <div class="bg-[#FFF6E3] w-3/4 h-full mt-[50px] p-10 m-auto  text-black">

          <div class="mt-20 text-center">
              <h1 class="mt-10 text-3xl font-bold text-red-800  ">Our Team Members</h1>
              <h3 class="mt-2">If you want to join our team while Click Get start button fo <span class="text-red-700">Registration</span></h3>
          </div>

       

        <div class="relative overflow-x-auto mt-10">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <p>
                        {{session('update')}}
                    </p>

                    <p>
                        {{session('Delete')}}
                    </p>
                    
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email Address
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Image
                    </th>
                    <th scope="col" class="px-6 py-3">
                        action
                    </th>

                    
                </tr>
                </thead>
                <tbody>
                   @foreach($get as $data)

                       <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                           <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                               {{$data->id}}
                           </th>
                           <td class="px-6 py-4">
                               {{$data->name}}
                           </td>
                           <td class="px-6 py-4">
                               {{$data->email}}
                           </td>
                           <td class="px-6 py-4">
                               <img class="h-[60px] w-[60px] rounded-lg border-2 border-red-300" src="images/{{$data->image}}">
                           </td>

                           <td class="px-6 py-4 flex flex-row gap-2">
                               <a href="{{route('updateInfo.route',$data->id)}}">
                                   <button class="px-3 py-2 hover:opacity-75 rounded-sm text-white bg-green-700">Edid</button>
                               </a>
                               
                               <form action="{{ route('delete.route',$data->id) }}"  method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="px-3 py-2 hover:opacity-75 rounded-sm text-white bg-red-600">Delete</button>
                            </form>
                           </td>                         
                       </tr>
                   @endforeach



                </tbody>
            </table>
        </div>


    </div>
@endsection
