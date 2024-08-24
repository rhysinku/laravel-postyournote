<x-layout>

    <h1 class="font-bold text-5xl mb-4 ">Posts</h1>

    <div class="flex flex-wrap justify-evenly my-2 gap-2">

        @foreach ($posts as $post)     
        <section class="max-w-md w-full p-5 rounded-xl bg-blue-200">
            <h2 class="font-bold text-3xl mb-1">{{$post->title}}</h2>
            <i class=" text-sm text-blue-400 mb-2">author</i>
            <p>{{$post->message}}</p>
            <div class="mt-3 flex flex-wrap justify-between items-center">
                {{$post->created_at->diffForHumans()}}
                <a href="{{route('posts.show', $post->id)}}" class="hover:underline text-blue-800">Read More</a>
            </div>
        </section>
        @endforeach

    </div>

    <div class="mt-5">
        {{$posts->links()}}
    </div>

</x-layout>