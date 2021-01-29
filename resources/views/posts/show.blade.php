<x-app-layout>
    <div class="container py-8">
        <h1 class="text-4xl font-bold text-gray-600">{{$post->nombre}}</h1>

        <div class="text-lg text-gray-500 mb-2">
            {{$post->extract}}
        </div>

        <div class="grid grid-cols-3 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2">
                <figure>
                    <img class="w-full h-80 object-cover object-center"  src="http%3A%2F%2Fwww.icorp.com.mx%2Fblog%2Fwp-content%2Fuploads%2F2017%2F12%2Fedu1494860482284_aspR_2.000_w1200_h600_e-713x330.jpg&imgrefurl=http%3A%2F%2Fwww.icorp.com.mx%2Fblog%2Flenguajes-de-programacion-2018%2F&tbnid=vvlV5k0aM0CURM&vet=12ahUKEwj-35qdiMLuAhW3bjABHUbhCW0QMygEegUIARDXAQ..i&docid=RUbpQtQsqDHRGM&w=713&h=330&q=lenguajes%20de%20programacion&ved=2ahUKEwj-35qdiMLuAhW3bjABHUbhCW0QMygEegUIARDXAQ" alt="" srcset="">
                </figure>
                <div  class="text-base text-gray-500 mt-4">
                    {{ $post->body }}
                </div>
            </div>
            <aside>
                <h1 class="text-2xl font-bold text-gray-600 mb-4">Más en {{ $post->category->nombre }}</h1>
                <ul>
                    @foreach ($similares as $similar)
                        <li class="mb-4">
                            <a class="flex" href="{{ route('posts.show',$similar) }}">
                                <img class="w-36 h-20 object-cover object-center" src="http%3A%2F%2Fwww.icorp.com.mx%2Fblog%2Fwp-content%2Fuploads%2F2017%2F12%2Fedu1494860482284_aspR_2.000_w1200_h600_e-713x330.jpg&imgrefurl=http%3A%2F%2Fwww.icorp.com.mx%2Fblog%2Flenguajes-de-programacion-2018%2F&tbnid=vvlV5k0aM0CURM&vet=12ahUKEwj-35qdiMLuAhW3bjABHUbhCW0QMygEegUIARDXAQ..i&docid=RUbpQtQsqDHRGM&w=713&h=330&q=lenguajes%20de%20programacion&ved=2ahUKEwj-35qdiMLuAhW3bjABHUbhCW0QMygEegUIARDXAQ" alt="" srcset="">
                                <span class="ml-2 text-gray-600">{{ $similar->nombre }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>
</x-app-layout>
