<div>
    <div class="bg-gray-200 py-4">
        <div class="container flex flex-wrap">
            <button class="block bg-white shadow h-12 px-4 rounded-lg text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 mr-2 lg:mr-4 mb-2" wire:click="resetFilters">
                <i class="fas fa-archway text-xs mr-2"></i>
                Todos los cursos
            </button>

            <!-- Dropdown Category-->
            <div class="relative mb-2" x-data="{ open: false }">
                <button class="block bg-white shadow h-12 px-4 rounded-lg text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 mr-2 lg:mr-4" x-on:click="open = !open">
                    <i class="fas fa-tags text-sm mr-2"></i>
                    Category
                    <i class="fas fa-angle-down text-sm ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div class="absolute right-0 w-50 mt-2 bg-white border rounded shadow-xl p-2" x-show="open" x-on:click.away="open = false">

                    @foreach ($categories as $category)
                        <a href="javascript:void(0)" class="transition-colors duration-200 block px-4 py-1 text-normal text-gray-700 rounded hover:bg-blue-500 hover:text-white" wire:click="$set('category_id', {{ $category->id }})" x-on:click="open = false">{{ $category->name }}</a>
                    @endforeach

                </div>
            </div>

            <!-- Dropdown Nivels-->
            <div class="relative mb-2" x-data="{ open: false }">
                <button
                    class="px-4 text-gray-700 block h-12 rounded-lg overflow-hidden focus:outline-none bg-white shadow"
                    x-on:click="open = true">
                    <i class="fas fa-tags text-sm mr-2"></i>
                    Niveles
                    <i class="fas fa-angle-down text-sm ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" x-show="open"
                    x-on:click.away="open = false">
                    @foreach ($levels as $level)
                        <a class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-blue-500 hover:text-white" wire:click="$set('level_id',{{$level->id}})" x-on:click="open = false">{{$level->name}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="container py-16">
        <p wire:loading class="mb-5">Buscando...</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8">
            @forelse ($courses as $course)
                <x-course-card :course="$course" />
            @empty
                <p class="block text-gray-400 sm:col-span-2 lg:col-span-4">No se han encontrado resultados que coincidan con su filtro de busqueda.</p>
            @endforelse
        </div>

        <div class="mt-5">
            {{ $courses->links() }}
        </div>
    </div>
</div>
