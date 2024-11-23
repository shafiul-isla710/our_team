

@extends('components.app')

@section('content')

  <div class="mt-20 text-center p-8 m-auto h-[700px]  w-[900px] bg-gradient-to-r from-violet-500 to-fuchsia-500">



            <div class="p-10 text-white flex flex-col gap-5">

                <div class="flex  flex-col gap-3">
                  <h1 class="font-bold">Sing In</h1>
                  <p>Wellcome back ,You've been missed</p>
                </div>


                 <div>
                  <form action="{{route('form.handle')}}" method="POST" enctype="multipart/form-data" class="h-[470px] w-[450px] bg-white m-auto rounded-lg  p-12 flex flex-col gap-5 w-90%">
                   @csrf
                    <label >
                        <input name="name" class="in " placeholder="enter name"  value="{{old('name')}}">
                        @error('name')
                        <p class="text-green-700 text-left">{{$message}}</p>
                        @enderror
                    </label>
                    <label>
                        <input name="email" class="in" placeholder="enter email" value="{{old('email')}}">
                        @error('email')
                        <p class="text-green-700 text-left">{{$message}}</p>
                        @enderror
                    </label>
                    <label>
                        <input type="password" name="password" class="in" placeholder="enter password" value="{{old('password')}}">
                        @error('password')
                        <p class="text-green-700 text-left mt-2">{{$message}}</p>
                        @enderror
                    </label>

                      <label>
                          <input type="file" name="image" class="in"  value="{{old('image')}}">
                          @error('picture')
                          <p class="text-green-700 text-left mt-0">{{$message}}</p>
                          @enderror
                      </label>
                    <button class="bg-blue-700 rounded-lg text-white mt-5 m-auto w-[100px] h-[40px]" type="submit">Login</button>



                   {{-- @if($errors->any())

                      <ul>
                          @foreach ($errors->all() as $error)

                              <li class="text-red-900">{{$error}}</li>

                          @endforeach
                      </ul>

                   @endif --}}

                  </form>
                 </div>

            </div>



  </div>

@endsection
