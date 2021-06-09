<x-app-layout>
    <section class="flex flex-col justify-center shadow-md w-full mx-auto mt-6 py-10 sm:px-6 lg:px-8">
        <div class="text-center w-full h-full gap-2">
            <p class="font-bold text-4xl">
                Company <span class="text-purple-600">Profile</span></p>
        </div>
        <div class="grid grid-cols-2 w-3/4 mx-auto py-8">
            <div class="border-r border-black text-right">
                <img class="shadow-md" src="{{ asset('/images/profil_0.png') }}" alt="">
            </div>
            <div class="border-l border-black px-3 py-6">
                <div class="text-2xl text-bold mb-3">
                    Profil
                </div>
                <p>
                    <span class="text-purple-600">PT Global Promedika Services (GPS)</span> berdiri sejak tahun 2007. Berawal dari divisi customer support yang didirikan oleh PT Bersaudara sejak tahun 1965. GPS menjadi anak perusahaan dari PT. Bersaudara yang bergerak dalam bidang after-sales support. Sebuah kepercayaan yang seiring  perjalanan waktu menjadi komitmen kami untuk senantiasa berinovasi secara konsisten sekaligus meningkatkan performa layanan yang membuat GPS menjadi pilihan terbaik.
                </p>
            </div>
            <div class="border-r border-black px-3 py-3">
                <div class="text-2xl text-bold mb-3 text-purple-600">
                    Visi
                </div>
                <p>
                    "Menjadi Perusahaan Jasa Layanan Purna Jual Alat – Alat Kesehaatan yang terpadu dan senantiasa mengikuti perkembangan dunia usaha"
                </p>
            </div>
            <div class="border-l border-black text-left py-6">
                <img class="shadow-md" src="{{ asset('/images/profil_1.jpeg') }}" style="height: 600px; width: 450px;" alt="">
            </div>
            <div class="border-r border-black text-right py-6">
                <img class="shadow-md" src="{{ asset('/images/profil_2.jpeg') }}" alt="">
            </div>
            <div class="border-l border-black px-3 py-6">
                <div class="text-2xl text-bold mb-3 text-purple-600">
                    Misi
                </div>
                <p>
                    "Mempersembahkan Kualitas Produk dan Layanan Terbaik Kepada Setiap Pelanggan Dalam Format Layanan yang berkesinambungan"
                </p>
            </div>
        </div>
    </section>
</x-app-layout>
