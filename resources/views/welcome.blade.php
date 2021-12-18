<x-app-layout>
    <section class="bg-cover" style="background-image: url({{ asset('img/home/student.jpg') }})";>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">

                <h1 class="text-white font-bold text-4xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quisquam, veniam cumque tenetur.!</h1>
                <p class="text-white text-lg mt-2 mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>

                <!-- component -->
            <!-- This is an example component -->
                {{-- @livewire('search') --}}
            </div>
                
        </div>
    </section>

    <section class="my-24">
        <h1 class="text-center text-gray-600 text-3xl"> Últimos Productos </h1>
        <p class="text-center text-gray-500 text-sm mb-6">Trabajamos duro para seguir mejorando</p>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-y-6 gap-x-8">
            @foreach ($productos as $producto)
            <x-product-card :producto="$producto"/>
            @endforeach
        </div>
    </section>
</x-app-layout>
