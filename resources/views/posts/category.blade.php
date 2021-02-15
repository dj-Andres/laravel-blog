<x-app-layout>
    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <h1 class="uppercase text-center text-3xl font-bold">Categoria: {{ $categoria->nombre }}</h1>

        @foreach ($posts as $post)
        <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
            @if ($post->image)
                <img class="w-full h-80 object-cover object-center border-2" src="{{ Storage::url($post->images->url) }}" alt="" srcset="">
            @else
                <img class="w-full h-80 object-cover object-center" src="https://cdn.pixabay.com/photo/2016/03/27/18/54/technology-1283624_960_720.jpg" alt="" srcset="">
            @endif
        
            <div class="px-6 py-4">
                <h1>
                    <a href="{{route('posts.show',$post)}}" class="font-bold text-xl mb-2">{{$post->nombre}}</a>
                </h1>
                <div class="text-gray-200 text-base">
                    {!!$post->extract!!}
                </div>
                <div class="px-6 pt-4 pb-2">
                        <a class="inline-block bg-green-200 rounded-full px-3 py-1 text-sm text-gray-200 mr-2" href="{{route('posts.tag',$tag)}}">Muestra</a>
                </div>
            </div>
        </article>
        @endforeach
        <div class="mt-4">
            {{$posts->links()}}
        </div>
    </div>
</x-app-layout>