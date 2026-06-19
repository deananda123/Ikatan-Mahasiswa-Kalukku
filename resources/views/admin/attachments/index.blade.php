<x-app-layout>
    <x-slot name="header">
        <h2 class="font-black text-3xl text-[#051F20] leading-tight">
            {{ __('Kelola Lampiran') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="flex justify-between items-center mb-8 px-2">
                <div>
                    <h3 class="text-xl font-bold text-gray-800">Daftar Lampiran</h3>
                    <p class="text-gray-500 text-sm mt-1">Kelola file atau dokumen untuk diunduh oleh pengunjung.</p>
                </div>
                <a href="{{ route('admin.attachments.create') }}" class="flex items-center gap-2 px-6 py-3 bg-imk-600 text-white font-bold rounded-full hover:bg-imk-700 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    Tambah Lampiran
                </a>
            </div>

            @if(session('success'))
                <div class="bg-emerald-50 border border-emerald-200 text-emerald-700 px-6 py-4 rounded-2xl mb-8 flex items-center gap-3 shadow-sm">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span class="font-medium">{{ session('success') }}</span>
                </div>
            @endif

            <div class="bg-white rounded-[39px] shadow-xl overflow-hidden border border-gray-100">
                <div class="overflow-x-auto p-4 md:p-8">
                    <table class="min-w-full w-full border-collapse">
                        <thead>
                            <tr class="border-b-2 border-gray-100">
                                <th class="py-4 px-6 text-left text-sm font-bold text-gray-400 uppercase tracking-wider w-16">No</th>
                                <th class="py-4 px-6 text-left text-sm font-bold text-gray-400 uppercase tracking-wider">Nama / Judul File</th>
                                <th class="py-4 px-6 text-left text-sm font-bold text-gray-400 uppercase tracking-wider">Nama File Asli</th>
                                <th class="py-4 px-6 text-center text-sm font-bold text-gray-400 uppercase tracking-wider">Status</th>
                                <th class="py-4 px-6 text-center text-sm font-bold text-gray-400 uppercase tracking-wider w-40">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            @forelse($attachments as $item)
                                <tr class="hover:bg-gray-50/50 transition duration-200">
                                    <td class="py-5 px-6 text-left font-medium text-gray-500">{{ $loop->iteration }}</td>
                                    <td class="py-5 px-6 text-left">
                                        <div class="flex items-center gap-4">
                                            <div class="w-12 h-12 rounded-xl bg-gray-100 flex items-center justify-center text-gray-400 shadow-sm">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path></svg>
                                            </div>
                                            <span class="font-bold text-[#051F20] text-lg">{{ $item->title }}</span>
                                        </div>
                                    </td>
                                    <td class="py-5 px-6 text-left text-gray-500 font-medium">{{ $item->original_name ?? '-' }}</td>
                                    <td class="py-5 px-6 text-center">
                                        @if($item->is_hidden)
                                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-red-50 text-red-600 border border-red-100">
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path></svg>
                                                Tersembunyi
                                            </span>
                                        @else
                                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-50 text-emerald-600 border border-emerald-100">
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                                Publik
                                            </span>
                                        @endif
                                    </td>
                                    <td class="py-5 px-6 text-center">
                                        <div class="flex items-center justify-center gap-3">
                                            <form action="{{ route('admin.attachments.toggleVisibility', $item->id) }}" method="POST" class="inline-block toggle-visibility-form" data-status="{{ $item->is_hidden ? 'tampilkan' : 'sembunyikan' }}">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" title="{{ $item->is_hidden ? 'Tampilkan ke Publik' : 'Sembunyikan dari Publik' }}" class="p-2.5 rounded-xl transition shadow-sm {{ $item->is_hidden ? 'text-emerald-500 bg-emerald-50 hover:bg-emerald-100 hover:text-emerald-700' : 'text-gray-500 bg-gray-50 hover:bg-gray-200 hover:text-gray-700' }}">
                                                    @if($item->is_hidden)
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                                    @else
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path></svg>
                                                    @endif
                                                </button>
                                            </form>
                                            <a href="{{ route('admin.attachments.edit', $item->id) }}" class="p-2.5 text-blue-500 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 rounded-xl transition shadow-sm">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                            </a>
                                            <form action="{{ route('admin.attachments.destroy', $item->id) }}" method="POST" class="inline-block delete-form">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="p-2.5 text-red-500 bg-red-50 hover:bg-red-100 hover:text-red-700 rounded-xl transition shadow-sm">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="py-16 text-center">
                                        <div class="flex flex-col items-center justify-center text-gray-400">
                                            <svg class="w-16 h-16 mb-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                            <p class="text-lg">Belum ada lampiran yang ditambahkan.</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggleForms = document.querySelectorAll('.toggle-visibility-form');
            toggleForms.forEach(form => {
                form.addEventListener('submit', function (e) {
                    e.preventDefault();
                    const status = this.getAttribute('data-status');
                    const isTampilkan = status === 'tampilkan';
                    const actionText = isTampilkan ? 'menampilkan lampiran ini ke publik' : 'menyembunyikan lampiran ini dari publik';
                    const iconType = isTampilkan ? 'info' : 'warning';
                    const confirmBtnColor = isTampilkan ? 'bg-emerald-500 hover:bg-emerald-600' : 'bg-amber-500 hover:bg-amber-600';
                    const confirmBtnText = isTampilkan ? 'Ya, Tampilkan!' : 'Ya, Sembunyikan!';

                    Swal.fire({
                        title: 'Konfirmasi',
                        text: `Apakah Anda yakin ingin ${actionText}?`,
                        icon: iconType,
                        showCancelButton: true,
                        confirmButtonText: confirmBtnText,
                        cancelButtonText: 'Batal',
                        buttonsStyling: false,
                        customClass: {
                            popup: 'rounded-[30px] shadow-2xl border border-gray-100 p-6',
                            title: 'text-2xl font-black text-[#051F20] mt-4',
                            htmlContainer: 'text-gray-500 mt-2',
                            actions: 'mt-8 gap-4 flex w-full justify-center',
                            confirmButton: `px-8 py-3 ${confirmBtnColor} text-white font-bold rounded-full hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5`,
                            cancelButton: 'px-8 py-3 bg-gray-100 text-gray-700 font-bold rounded-full hover:bg-gray-200 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5'
                        }
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
</x-app-layout>
