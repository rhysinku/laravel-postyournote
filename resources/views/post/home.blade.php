<x-layout>

    <h1 class="font-bold text-5xl mb-4 ">Posts</h1>

    <div class="flex flex-wrap justify-evenly my-2 gap-2">

        @foreach ($posts as $post)     
        <section class="max-w-xl w-full p-5 rounded-xl bg-blue-200">
            <h2 class="font-bold text-3xl mb-2">{{$post->title}}</h2>
            <p>{{$post->message}}</p>
        </section>
        @endforeach

    </div>

</x-layout>