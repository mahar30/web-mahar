<x-guest-layout>
    <div class="flex flex-col min-h-screen">
        @livewire('navbar')
        <div class="flex-grow">

            <div class="text-xl">
                <h1 class="text-center text-4xl font-bold mt-10">Galeri</h1>
            </div>
            <div class="flex justify-center my-5 flex-wrap ">
                <div class="card w-96 bg-base-100 shadow-xl m-5">
                    <figure class="p-1">
                        <img src="{{ asset('storage/foto-gallery/9.jpg') }}" alt="Shoes" class="rounded-xl" />
                    </figure>
                </div>
                <div class="card w-96 bg-base-100 shadow-xl m-5">
                    <figure class="p-1">
                        <img src="{{ asset('storage/foto-gallery/10.jpg') }}" alt="Shoes" class="rounded-xl" />
                    </figure>
                </div>
                <div class="card w-96 bg-base-100 shadow-xl m-5">
                    <figure class="p-1">
                        <img src="{{ asset('storage/foto-gallery/11.jpg') }}" alt="Shoes" class="rounded-xl" />
                    </figure>
                </div>
                <div class="card w-96 bg-base-100 shadow-xl m-5">
                    <figure class="p-1">
                        <img src="{{ asset('storage/foto-gallery/12.jpg') }}" alt="Shoes" class="rounded-xl" />
                    </figure>
                </div>
                <div class="card w-96 bg-base-100 shadow-xl m-5">
                    <figure class="p-1">
                        <img src="{{ asset('storage/foto-gallery/13.jpg') }}" alt="Shoes" class="rounded-xl" />
                    </figure>
                </div>
            </div>

        </div>
        @livewire('footer')
    </div>
</x-guest-layout>
