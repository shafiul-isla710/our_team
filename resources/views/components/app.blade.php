

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>This is crud project</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>


    <style type="text/tailwindcss">
      @layer utilities {
        .in{
          @apply rounded-lg text-black w-full;
        }

      }
    </style>



</head>
<body class="">



<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
           <div class="flex flex-row gap-8">
               <a  class="flex items-center space-x-3 rtl:space-x-reverse">
                   <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo">
                   <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">TEAM</span>
               </a>
               <a href="{{route('home.route')}}" class="self-center bg-gray-100 p-2 rounded-md  dark:text-white">Home page</a>
                <form action="{{ route('member.route') }}">



                  <div class="flex items-center space-x-2">                
                    <input name="search"
                      type="text" 
                      placeholder="Search..." 
                      class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    /> 

                    <button 
                      class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                      Search
                    </button>
                  </div>
                </form>
           </div>
    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        <a href="{{route('login.route')}}">
            <button type="button"  class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Get started</button>
        </a>
        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
    </div>

    </div>

  </nav>

  @section('content')

  @show



</body>
</html>
