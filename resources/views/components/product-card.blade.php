<div class="w-full bg-white shadow-2xl rounded-md overflow-hidden">
    <div class="img">
        <a href="/detail">
            <img src="https://smktrimulia.sch.id/wp-content/uploads/2020/09/Ilustrasi-futsal-istimewa8f521491d609bc2c.jpg"
                alt="Foto Lapangan" class="object-cover w-full">
        </a>
    </div>
    <div class="description px-2 py-4">
        <a href="/detail">
            <h2 class="text-dark font-medium text-xl">
                {{$field->name}}
            </h2>
        </a>
        <div class="caption flex justify-between align-middle items-center">
            <p class="text-gray-600">
                <i class="fas fa-xs fa-money-bill-wave"></i>
                <small class="font-light">
                    Rp. {{number_format($field->price)}} / Jam
                </small>
            </p>
            <p class="text-gray-500">
                <i class="fas fa-xs fa-ruler-combined"></i>
                <small class="font-light">
                    {{$field->witdh}}m x {{$field->height}}m
                </small>
            </p>
        </div>
    </div>
    <div class="footer px-2 py-2 flex justify-end border-t-1 space-x-2">
        <a href="/detail" class="px-3 py-2 w-full font-semibold text-xs text-center rounded-md transition duration-500
             bg-white border border-primary hover:bg-primary text-primary hover:text-white">
            Cek Jadwal
        </a>
        <a href="/detail" class="px-3 py-2 w-full font-semibold text-xs text-center rounded-md transition duration-500
             bg-secondary hover:bg-primary text-primary hover:text-white">
            Booking
        </a>
    </div>
</div>
