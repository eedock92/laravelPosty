<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posty</title>

    <link rel="stylesheet" href = "{{ asset('css/app.css')}}">
</head>
<body class="bg-pink-300">

    <nav class="p-6 bg-white flex justify-between mb-6">
      <ul class = "flex items-center">
            <li>             
                <a href="" class = "p-3" >홈</a>
                </li>       
        
            <li>
                <a href="" class = "p-3">게시판</a>
            </li>

            <li>
                <a href="" class = "p-3">포스트</a>
            </li>

      </ul>

      <ul class = "flex items-center">
            <li>             
                <a href="" class = "p-3" >byungsoo land</a>
                </li>       
        
            <li>
                <a href="" class = "p-3">로그인</a>
            </li>

            <li>
                <a href="{{route('register')}}" class = "p-3">회원가입</a>
            </li>

            <li>
                <a href="" class = "p-3">로그아웃</a>
            </li>

      </ul>

   
      

</nav>
    @yield('content')

</body>
</html>