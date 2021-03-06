@extends('layouts.app')

@section('content')
    <div class ="flex justify-center">
        <div class="w-8/12 shadow-xl bg-white p-6  rounded-lg">
            Post 
           
            <ul class="space-y-2">
              <li>
                  <ul class="grid grid-cols-10 h-7">
                    <li class="bg-pink-50"></li>
                    <li class="bg-pink-100"></li>
                    <li class="bg-pink-200"></li>
                    <li class="bg-pink-300"></li>
                    <li class="bg-pink-400"></li>
                    <li class="bg-pink-500"></li>
                    <li class="bg-pink-600"></li>
                    <li class="bg-pink-700"></li>
                    <li class="bg-pink-800"></li>
                    <li class="bg-pink-900"></li>
                  </ul>
             </li>
            </ul>
            <form action="{{ route('posts')}}" method="post" class="mb-4">
              @csrf
              <div class="mb-4">

                  <label for="body" class="sr-only">Body</label>

                  <textarea name="body" id = "body" cols="30" rows="4" class="bg-gray-100
                  border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror"
                  placeholder="Post something!">
                  </textarea>

                  @error('body')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                  @enderror

              </div>

              <!-- button  -->
              <div>
                  <button type="submit" class="bg-pink-600 text-white px-4 py-2 rounded font-medium">
                  게시하기
                  </button>
              </div>


            </form>

    
            @if ($posts->count())
                @foreach($posts as $post)
                
                <div class = "mb-4">
                    <a href="" class="font-bold">{{ $post->user->username}} </a>
                      <span class = "text-gray-600 text-sm">{{$post->user->created_at->diffForHumans()}}</span>

                      <p class="mb-2">{{$post->body}}</p>
                      @auth
                            <div class = "flex items-center">
                                @if(!$post->likedBy(auth()->user()))
                                <form action="{{ route('posts.likes', $post)}}" method="post" class="mr-1">
                                @csrf
                                    <button type="submit" class = "text-pink-500">Like</button>
                                </form>
                                @else
                                <form action="{{ route('posts.likes', $post)}}" method="post" class="mr-1">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class = "text-pink-500">Unlike</button>
                                </form>
                                @endif
                        @endauth
                          <span> {{$post->likes->count()}} 
                            {{ Str::plural('like', $post->likes->count())}}
                          </span>
                      </div>




                </div>
                @endforeach

                {{ $posts->links() }}
            @else
                <p>There are no posts</p>
            @endif


        </div>


@endsection