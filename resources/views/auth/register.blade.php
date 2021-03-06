@extends('layouts.app')

@section('content')
    <div class ="flex justify-center">
        <div class="w-6/12 shadow-xl bg-white p-6  rounded-lg">
            Register
           <form action = "{{route('register')}}" method = "post">
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
                    <label for="username" class = "sr-only">아이디</label>
                    <input type="text" name= "username" id="username" placeholder = "이름을 입력하세요"
                    class = "bg-gray-100 border-2 w-full p-4 rounded-lg
                    @error('username') border-red-500 @enderror" value="{{old('username')}}">

                    @error('username')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ "이름을 입력하세요." }}
                        </div>
                    @enderror

                </div>

                <div class = "mb-4">
                    <label for="email" class = "sr-only">이메일</label>
                    <input type="text" name= "email" id="email" placeholder = "이메일을 입력하세요"
                    class = "bg-gray-100 border-2 w-full p-4 rounded-lg
                     @error('email') border-red-500 @enderror" value="{{old('email')}}">

                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                           {{ "이메일을 입력하세요." }} 
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

                <div class = "mb-4">
                    <label for="password_confirmation" class = "sr-only">비밀번호 재확인</label>
                    <input type="password" name= "password_confirmation" id="password_confirmation" placeholder = "비밀번호를 한번  더 입력하세요"
                    class = "bg-gray-100 border-2 w-full p-4 rounded-lg
                    " value="">
                
                 
               
                
                </div>

                <div>
                    <button type="submit" class="bg-pink-500 text-white px-4 py-3 rounded
                    font-medium w-full">등록하기</button>
                </div>
                
           </form>

        </div>


@endsection