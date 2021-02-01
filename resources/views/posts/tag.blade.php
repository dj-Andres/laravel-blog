<x-app-layout>
    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <h1 class="uppercase text-center text-3xl font-bold">Etiqueta: {{$tag->nombre}}</h1>
        @foreach ($posts as $post)
        <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
            <img class="w-36 h-72 object-cover object-center" src="http%3A%2F%2Fwww.icorp.com.mx%2Fblog%2Fwp-content%2Fuploads%2F2017%2F12%2Fedu1494860482284_aspR_2.000_w1200_h600_e-713x330.jpg&imgrefurl=http%3A%2F%2Fwww.icorp.com.mx%2Fblog%2Flenguajes-de-programacion-2018%2F&tbnid=vvlV5k0aM0CURM&vet=12ahUKEwj-35qdiMLuAhW3bjABHUbhCW0QMygEegUIARDXAQ..i&docid=RUbpQtQsqDHRGM&w=713&h=330&q=lenguajes%20de%20programacion&ved=2ahUKEwj-35qdiMLuAhW3bjABHUbhCW0QMygEegUIARDXAQ" alt="" srcset="">
        
            <div class="px-6 py-4">
                <h1>
                    <a href="{{route('posts.show',$post)}}" class="font-bold text-xl mb-2">{{$post->nombre}}</a>
                </h1>
                <div class="text-gray-200 text-base">
                    {{$post->extract}}
                </div>
                <div class="px-6 pt-4 pb-2">
                    <a class="inline-block bg-green-200 rounded-full px-3 py-1 text-sm text-gray-200 mr-2" href="{{route('posts.tag',$tag)}}">Muestra</a>
                </div>
            </div>
        </article>
        @endforeach
        
        
    </div>
</x-app-layout>