<x-app-layout>

    {{-- Cover --}}
    <section class="bg-cover bg-center" style="background-image: url({{asset('img/home/people-2557399_1920.jpg')}});">
        <div class="max-w-7xl mx-auto px-4 py-36 sm:px-6 lg:px-8 text-white">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">Educación inclusiva, equitativa y de calidad</h1>
                <p class="text-white text-lg mt-2 mb-4">Garantizamos una educación inclusiva, equitativa y de calidad y promover oportunidades de aprendizaje durante toda la vida para todos</p>
                <!-- This is an example component -->
                @livewire('search')

            </div>
        </div>
    </section>

    <section class="py-12">
        <h1 class="text-gray-600 text-center text-3xl mb-6">Contenido</h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/american-1209605_640.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Idiomas</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto saepe corrupti maxime!</p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/microsoft-5977659_640.png')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Office</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto saepe corrupti maxime!</p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/time-2101549_640.png')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Desarrollo Sostenible</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto saepe corrupti maxime!</p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/books-1316306_640.png')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Estrategias Didacticas</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto saepe corrupti maxime!</p>
            </article>
        </div>
    </section>

    <section class="py-12 bg-gray-700 text-center text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl mb-3">¿No sabes qué curso llevar?</h1>
            <p class="mb-5">Dirígete al catálogo de cursos y filtralos por categoría o nivel</p>
            <a href="{{ route('courses.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none">Catálogo de cursos</a>
        </div>
    </section>

    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-center text-gray-600 text-3xl mb-5">Ultimos cursos</h1>
            <p class="text-center text-gray-500 text-sm mb-6">Trabaja duro para seguir subiendo cursos</p>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8">
                @foreach ($courses as $course)
                    <x-course-card :course="$course" />
                @endforeach
            </div>
        </div>
    </section>

</x-app-layout>
