<x-app-layout>
    @auth
    login
    @endauth
    @foreach ($posts as $post)
        <div>{{$post->title}}</div>
    @endforeach
</x-app-layout>