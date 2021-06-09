<x-app-layout>
    <section class="shadow-md w-full grid grid-cols-2 mx-auto mt-6 py-10 sm:px-6 lg:px-8">
        <div class="px-6 ml-auto">
            <img class="object-fill" src="{{ asset('/images/illust_0.png') }}" alt="">
        </div>
        <div class="flex flex-col mt-12 w-full h-full gap-2">
            <p class="font-bold text-4xl">
                Lebih dari <span class="text-purple-500">100000</span> Kalibrasi</p>
            <p class="mt-3">
                PT Global Promedika Service hadir untuk melayani keperluan alat kesehatan milik anda.</p>
            

            <div class="flex mt-6 items-end justify-left w-full h-36 pb-12">	
                <div class="text-center mx-4 text-xl text-bold">
                    1000+
                    <div class="text-purple-600 text-base">
                        Clients
                    </div>
                </div>
                <div class="text-center mx-4 text-xl text-bold">
                    1000+
                    <div class="text-purple-600 text-base">
                        Projects
                    </div>
                </div>
                <div class="text-center mx-4 text-xl text-bold">
                    1000+
                    <div class="text-purple-600 text-base">
                        Awards
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="shadow-md w-full mx-auto mt-6 py-10 sm:px-6 lg:px-8">
        <div class="flex flex-col w-full h-full gap-2">
            <p class="font-bold text-4xl">
                Produk <span class="text-purple-600">Unggulan</span> Kami</p>
        </div>
        <div class="w-full text-center mt-12 grid grid-cols-3 gap-2">
            <div class="lg:m-4 shadow-md hover:shadow-lg hover:bg-gray-100 rounded-lg bg-white my-12 mx-8">
                <!-- Card Image -->
                <div class="w-full h-56 bg-cover" style="background-image: url('{{ asset('/images/front_kal.jpeg') }}')">
                    {{-- <img src="{{ asset('/images/front_kal.jpeg') }}" alt=""class="overflow-hidden"> --}}
                </div>
                <!-- Card Content -->
                <div class="p-4">
                    <h3 class="font-medium text-gray-600 text-lg my-2 uppercase">Kalibrasi Plus dan Uji Kesesuaian</h3>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur placeat beatae nam soluta reiciendis quia et tenetur minima nobis? Eveniet, porro et! Harum ratione, eligendi ut ducimus quos aliquid ipsam? Voluptatem, temporibus?.</p>
                    <div class="mt-8">
                        <a href="{{ route('product') }}" class="hover:bg-gray-700 rounded-full py-2 px-3 font-semibold hover:text-white bg-gray-400 text-gray-100">Read More</a>
                    </div>
                </div>
            </div>
            <div class="lg:m-4 shadow-md hover:shadow-lg hover:bg-gray-100 rounded-lg bg-white my-12 mx-8">
                <!-- Card Image -->
                <div class="w-full h-56 bg-cover" style="background-image: url('{{ asset('/images/front_ipm.jpeg') }}')">
                    {{-- <img src="{{ asset('/images/front_kal.jpeg') }}" alt=""class="overflow-hidden"> --}}
                </div>
                <!-- Card Content -->
                <div class="p-4">
                    <h3 class="font-medium text-gray-600 text-lg my-2 uppercase">Inspection and Preventive Maintenance</h3>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur placeat beatae nam soluta reiciendis quia et tenetur minima nobis? Eveniet, porro et! Harum ratione, eligendi ut ducimus quos aliquid ipsam? Voluptatem, temporibus?.</p>
                    <div class="mt-8">
                        <a href="{{ route('product') }}" class="hover:bg-gray-700 rounded-full py-2 px-3 font-semibold hover:text-white bg-gray-400 text-gray-100">Read More</a>
                    </div>
                </div>
            </div>
            <div class="lg:m-4 shadow-md hover:shadow-lg hover:bg-gray-100 rounded-lg bg-white my-12 mx-8">
                <!-- Card Image -->
                <div class="w-full h-56 bg-cover" style="background-image: url('{{ asset('/images/front_srv.jpeg') }}')">
                    {{-- <img src="{{ asset('/images/front_kal.jpeg') }}" alt=""class="overflow-hidden"> --}}
                </div>              
                <!-- Card Content -->
                <div class="p-4">
                    <h3 class="font-medium text-gray-600 text-lg my-2 uppercase">Service and Maintenance</h3>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur placeat beatae nam soluta reiciendis quia et tenetur minima nobis? Eveniet, porro et! Harum ratione, eligendi ut ducimus quos aliquid ipsam? Voluptatem, temporibus?.</p>
                    <div class="mt-8">
                        <a href="{{ route('product') }}" class="hover:bg-gray-700 rounded-full py-2 px-3 font-semibold hover:text-white bg-gray-400 text-gray-100">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full grid grid-cols-2 mx-auto mt-6 py-10 sm:px-6 lg:px-8">
        <div class="flex justify-end px-6">
            {{-- <div id='map' style='width: 400px; height: 300px;'></div>
            <script>
                mapboxgl.accessToken = 'pk.eyJ1IjoiYXhhaGl0byIsImEiOiJja3BuZDE1NGYwMXo4MnVxN2s2ZThwMmxzIn0.tl5aLAfN7IvWgITfSw8I3A';
                var map = new mapboxgl.Map({
                    container: 'map',
                    style: 'mapbox://styles/mapbox/streets-v11'
                });
                var marker = new mapboxgl.Marker()
                .setLngLat([-6.201875431162677, 106.80667046350264])
                .addTo(map);
            </script> --}}
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.6175357755681!2d106.80650842919917!3d-6.201540399719394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6a3442f3e2f%3A0x391736c566cf7441!2sGlobal%20Promedika%20Service%2C%20PT.%20(GPS)!5e0!3m2!1sen!2sid!4v1623118595955!5m2!1sen!2sid" width="500" height="375" style="border:0;" allowfullscreen="" loading="lazy"></iframe>        </div>
        <div class="w-full h-full gap-2">
            <p class="font-bold text-4xl">
                Lokasi</p>
            <p class="mt-3">
                Gedung Bersaudara Lt 4, Jalan Penjernihan Raya No.38 <br>
                Jakarta Pusat 10210</p>
            
            <div class="mt-6">
                <p class="font-bold">
                    <span class="text-purple-600">
                        <i class="fas fa-phone"></i>
                    </span> 021 574 3280, 021 5701467</p>
                <p class="font-bold">
                    <span class="text-purple-600">
                        <i class="fas fa-fax"></i>
                    </span> 021 574 3280</p>
                <br>
                    <a href="" class="bg-purple-500 mt-12 font-bold text-white px-4 py-3 transition duration-300 ease-in-out hover:bg-purple-600 mr-6">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </section>
</x-app-layout>
