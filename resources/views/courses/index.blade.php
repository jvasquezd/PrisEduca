<x-app-layout>
    <section class="bg-cover" style="background-image: url({{asset('img/courses/people-2557396_1920.jpg')}});">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">Los mejores cursos ¡Gratis! y en español</h1>
                <p class="text-white text-lg mt-2 mb-4">Buscamos garantizar una educación inclusiva, equitativa y de calidad y promover oportunidades de aprendizaje durante toda la vida para todos</p>
                <!-- This is an example component -->
                @livewire('search')
            </div>
        </div>
    </section>
    @livewire('courses-index')
</x-app-layout>
