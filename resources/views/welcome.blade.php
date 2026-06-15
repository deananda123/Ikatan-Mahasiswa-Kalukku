@extends('layouts.app')

@section('content')
    <div class="relative bg-cover bg-center bg-no-repeat text-white h-[500px] flex items-center justify-center overflow-hidden"
        style="background-image: url('{{ asset('image/bg.jpeg') }}');">

        <div class="absolute inset-0 bg-[#0F2A1D]/40"></div>

        <div class="relative max-w-7xl mx-auto px-4 text-center z-10">
            <h1 class="text-5xl md:text-[66px] font-bold tracking-tight drop-shadow-md">
                Ikatan Mahasiswa Kalukku
            </h1>
            <p class="mt-4 md:text-[30px] text-lg text-gray-100 max-w-2xl mx-auto drop-shadow leading-relaxed">
               Mesa Pattuju 
               <br>
               Tak Sedarah, Satu Daerah, Kita Saudara
            </p>
           
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-6 lg:px-12 bg-white rounded-[39px] shadow-xl p-10 md:p-16 relative z-20 -mt-14 text-center">
       <div class="space-y-6">
            <p class="text-gray-700 leading-relaxed text-justify">
                Ikatan Mahasiswa Kalukku (IMK) adalah organisasi kedaerahan yang bersifat independen, didirikan di Kalukku pada tanggal 21 Januari 2018, dan berkedudukan di Kabupaten Majene. Organisasi ini berfungsi sebagai wadah untuk mempersatukan dan menghimpun seluruh mahasiswa asal Kecamatan Kalukku yang sedang menimba ilmu di Kabupaten Majene.
            </p>
            <p class="text-gray-700 leading-relaxed text-justify">
                Berasaskan Pancasila dan UUD 1945, IMK memegang peran penting sebagai organisasi kaderisasi dan perjuangan yang bertujuan membina anggotanya menjadi insan yang beriman, bertaqwa, berilmu, kreatif, kritis, dan berguna bagi masyarakat, bangsa, serta negara.
            </p>
            <div class="bg-emerald-50 border-l-4 border-emerald-700 p-6 rounded-r-xl italic shadow-sm">
                <p class="text-[#051F20] font-semibold text-lg">
                    "Mesa Pattuju" (Satu Tujuan) — Tak sedarah, satu daerah, kita saudara.
                </p>
            </div>
            <p class="text-gray-700 leading-relaxed text-justify">
                Dengan berlandaskan nilai-nilai agama, budaya, dan kekeluargaan, IMK berkomitmen melahirkan kaum intelektual yang profesional agar kelak dapat kembali untuk mengabdi dan membangun daerah Kecamatan Kalukku.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div class="bg-white p-8 rounded-3xl shadow-lg border border-gray-100 hover:border-emerald-200 transition">
                <div class="text-3xl mb-4">📍</div>
                <h3 class="font-bold text-[#051F20] mb-2">Organisasi Kaderisasi</h3>
                <p class="text-sm text-gray-500">Membina insan yang beriman, bertaqwa, dan kreatif untuk masa depan.</p>
            </div>
            <div class="bg-white p-8 rounded-3xl shadow-lg border border-gray-100 hover:border-emerald-200 transition">
                <div class="text-3xl mb-4">💡</div>
                <h3 class="font-bold text-[#051F20] mb-2">Pusat Intelektual</h3>
                <p class="text-sm text-gray-500">Wadah diskusi mahasiswa untuk melahirkan pemikiran kritis dan profesional.</p>
            </div>
            <div class="bg-white p-8 rounded-3xl shadow-lg border border-gray-100 hover:border-emerald-200 transition">
                <div class="text-3xl mb-4">🤝</div>
                <h3 class="font-bold text-[#051F20] mb-2">Nilai Kekeluargaan</h3>
                <p class="text-sm text-gray-500">Menjunjung tinggi budaya dan nilai agama sebagai fondasi persaudaraan.</p>
            </div>
            <div class="bg-white p-8 rounded-3xl shadow-lg border border-gray-100 hover:border-emerald-200 transition">
                <div class="text-3xl mb-4">🏗️</div>
                <h3 class="font-bold text-[#051F20] mb-2">Pengabdian Daerah</h3>
                <p class="text-sm text-gray-500">Komitmen nyata untuk kembali membangun dan memajukan Kecamatan Kalukku.</p>
            </div>
        </div>

    </div>

    </div>
      
    </div>

@endsection