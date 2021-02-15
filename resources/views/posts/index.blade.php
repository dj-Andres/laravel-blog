<x-app-layout>
    <div class="container py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($posts as $post)
                <article class="w-full h-40 bg-cover bg-center" @if($loop->first) md:col-span-2 @endif style="border-radius:7px;background-image:url(@if($post->image) {{ Storage::url($post->image->url) }}  @else https://cdn.pixabay.com/photo/2016/03/27/18/54/technology-1283624_960_720.jpg @endif)";>
                    <div class="w-full h-full px-8 flex flex-col justify-center">
                        <div>
                            @foreach ($post->tags as $tag)
                                <a href="{{route('posts.tag',$tag)}}" class="inline-block px-2 h-6 bg-{{ $tag->color }}-600 text-white rounded-full mt-1">{{$tag->nombre}}</a>
                            @endforeach
                        </div>
                        <h1 class="text-4xl text-blue-500 leading-8 font-bold mt-3">
                            <a href="{{ route('posts.show',$post) }}">
                                {{ $post->nombre}}
                            </a>
                        </h1>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="mt-4">
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>