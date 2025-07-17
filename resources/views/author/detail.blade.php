<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            Chi tiết tác giả: {{ $tacGia->TenTG }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="bg-white p-6 text-gray-900 dark:bg-gray-800 dark:text-gray-100">
                <p><strong>🌏 Quốc tịch:</strong> {{ $tacGia->QuocTich }}</p>
                <p><strong>📖 Danh sách sách:</strong></p>
                <ul class="list-disc pl-5">
                    @foreach ($tacGia->sachs as $sach)
                        <li>{{ $sach->TieuDe }} ({{ $sach->NamXuatBan }})</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
