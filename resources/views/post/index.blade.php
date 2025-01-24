<x-app-layout>
    <div class="font-mono md:text-4xl text-xl font-bold sql py-2"><span class="text-black text-sm font-bold">sql:</span>{{$runnedSql}}</div>
    @foreach ($posts as $post)
        <div class="px-3 py-2 border"><p class="text-xs">title</p>{{$post->title}}</div>
    @endforeach
    <form action="/post" method="POST">
        @csrf
        <input type="text"name="title"/>
        <button type="submit">send</button>
    </form>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            setTimeout(() => {
                document.querySelectorAll(".sql").forEach(el => {
                    el.classList.add("fade-out");
                });
            }, 1000); // 0.5秒後にフェードアウト開始
        });
    </script>
</x-app-layout>