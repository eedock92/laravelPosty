@extends('layouts.app')

@section('content')
    <div class ="flex justify-center">
        <div class="w-6/12 shadow-xl bg-white p-6  rounded-lg">
            로그인
           @if (session('status'))
                <div class = "bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{session('status')}}
                </div>
            @endif


           <form action = "{{route('login')}}" method = "post">
                @csrf
                <div class = "mb-4">
                    <label for="userid" class = "sr-only">이름</label>
                    <input type="text" name= "userid" id="userid" placeholder = "아이디를 입력하세요"
                    class = "bg-gray-100 border-2 w-full p-4 rounded-lg 
                    @error('userid') border-red-500 @enderror" value="{{old('userid')}}">
               
                    @error('userid')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ "아이디를 입력하세요." }}
                        </div>
                    @enderror

                </div>



                <div class = "mb-4">
                    <label for="password" class = "sr-only">비밀번호</label>
                    <input type="password" name= "password" id="password" placeholder = "비밀번호를 입력하세요"
                    class = "bg-gray-100 border-2 w-full p-4 rounded-lg
                    @error('password') border-red-500 @enderror" value="">
               
                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                           {{ $message }} 
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="mr-2">
                        <label for="remember">Remember me</label>
                    </div>
                </div>

       

                <div>
                    <button type="submit" class="bg-pink-500 text-white px-4 py-3 rounded
                    font-medium w-full">로그인</button>
                </div>
                
           </form>

        </div>


@endsection