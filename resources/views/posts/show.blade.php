<x-app-layout>
    <div class="container py-8">
        <h1 class="text-4xl font-bold text-gray-600">{{$post->nombre}}</h1>

        <div class="text-lg text-gray-500 mb-2">
            {!!$post->extract!!}
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2">
                <figure>
                    @if ($post->image)
                        <img class="w-full h-80 object-cover object-center border-2" src="{{ Storage::url($post->images->url) }}" alt="" srcset="">
                    @else
                        <img class="w-full h-80 object-cover object-center" src="https://cdn.pixabay.com/photo/2016/03/27/18/54/technology-1283624_960_720.jpg" alt="" srcset="">
                    @endif
                </figure>
                <div  class="text-base text-gray-500 mt-4">
                    {!! $post->body !!}
                </div>
            </div>
            <aside>
                <h1 class="text-2xl font-bold text-gray-600 mb-4">Más en {{ $post->category->nombre }}</h1>
                <ul>
                    @foreach ($similares as $similar)
                        <li class="mb-4">
                            <a class="flex" href="{{ route('posts.show',$similar) }}">
                                @if ($post->image)
                                    <img class="w-36 h-20 object-cover object-center" src="{{ Storage::url($post->images->url) }}" alt="" srcset="">
                                @else
                                    <img class="w-36 h-20 object-cover object-center" src="https://cdn.pixabay.com/photo/2016/03/27/18/54/technology-1283624_960_720.jpg" alt="" srcset="">
                                @endif

                                <span class="ml-2 text-gray-600">{{ $similar->nombre }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>
</x-app-layout>
