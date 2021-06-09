<x-app-layout>
    <section class="flex flex-col justify-center w-full">
        <div class="flex w-full">
            <div class="bg-cover bg-no-repeat w-1/3 h-96" style="background-image: url({{ asset('/images/product_kal.jpeg') }})"></div>
            <div class="flex flex-col justify-center items-center bg-gray-100 w-1/3 h-96 text-center hover:bg-gray-300">
                <img class="w-16 h-16 mx-2 my-2" src="{{ asset('/images/ipm.png') }}" alt="">
                <div class="font-extralight my-2">
                    Inspection Preventive Maintenance (IPM)
                </div> 
                <a href="#" class="my-3 text-xs">
                    Read More
                </a>
            </div>
            <div class="bg-cover bg-no-repeat w-1/3 h-96" style="background-image: url({{ asset('/images/product_srv.jpeg') }})"></div>
        </div>
        <div class="flex w-full">
            <div class="flex flex-col justify-center items-center bg-gray-100 w-1/3 h-96 text-center hover:bg-gray-300">
                <img class="w-16 h-16 mx-2 my-2" src="{{ asset('/images/cal.png') }}" alt="">
                <div class="font-extralight my-2">
                    Kalibrasi Plus dan Uji Kesesuaian
                </div> 
                <a href="#" class="my-3 text-xs">
                    Read More
                </a>
            </div>
            <div class="bg-cover bg-no-repeat w-1/3 h-96" style="background-image: url({{ asset('/images/product_ipm.jpg') }})"></div>
            <div class="flex flex-col justify-center items-center bg-gray-100 w-1/3 h-96 text-center hover:bg-gray-300">
                <img class="w-16 h-16 mx-2 my-2" src="{{ asset('/images/srv.png') }}" alt="">
                <div class="font-extralight my-2">
                    Service Medical Devices
                </div> 
                <a href="#" class="my-3 text-xs">
                    Read More
                </a>
            </div>
        </div>
    </section>
</x-app-layout>
