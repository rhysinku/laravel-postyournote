<x-layout>


<h2 class="font-bold text-5xl mb-4">{{$post->title}}</h2>
<i class=" text-sm text-blue-400 mb-2">author</i>
<p>{{$post->message}}</p>
<div class="mt-5">
    {{$post->created_at->diffForHumans()}}
</div>

</x-layout>