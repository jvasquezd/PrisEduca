@props(['course'])

<article class="card flex flex-col">
    <img class="h-36 w-full object-cover" src="{{ Storage::url($course->image->url) }}" alt="">
    <div class="card-body flex-1 flex flex-col justify-between">
        <div>
            <h1 class="card-title">{{Str::limit($course->title, 40)}}</h1>
            <p class="text-gray-500 text-sm mb-2">Instructor: {{$course->instructor->name}}</p>
        </div>
        <div>
            <div class="flex">
                <ul class="flex text-sm">
                    <li class="mr-1"><i class="fas fa-star text-{{$course->rating >=1 ? 'yellow' : 'gray'}}-400"></i></li>
                    <li class="mr-1"><i class="fas fa-star text-{{$course->rating >=2 ? 'yellow' : 'gray'}}-400"></i></li>
                    <li class="mr-1"><i class="fas fa-star text-{{$course->rating >=3 ? 'yellow' : 'gray'}}-400"></i></li>
                    <li class="mr-1"><i class="fas fa-star text-{{$course->rating >=4 ? 'yellow' : 'gray'}}-400"></i></li>
                    <li class="mr-1"><i class="fas fa-star text-{{$course->rating >=5 ? 'yellow' : 'gray'}}-400"></i></li>
                </ul>
                <p class="text-sm text-gray-500 ml-auto">
                    <i class="fas fa-users"></i>
                    ({{$course->subscribers_count}})
                </p>
            </div>
            @if ($course->price->value == 0)
                <p class="font-bold uppercase text-green-500 my-3">Gratis</p>
            @else
                <p class="font-bold uppercase my-3 text-blue-600">US$ {{ $course->price->value }}</p>
            @endif


            <a href="{{route('courses.show', $course)}}" class="btn-block mt-4 btn btn-primary">
                Más Informacion
            </a>
        </div>
    </div>
</article>
