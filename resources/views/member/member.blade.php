<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Member List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="mb-4 font-bold">📚 Danh sách thành viên</h3>

                    {{-- <table class="w-full border-collapse text-left">
                        <thead>
                            <tr class="bg-gray-200 dark:bg-gray-700">
                                <th class="px-4 py-2">👤 Tên tác giả</th>
                                <th class="px-4 py-2">🌏 Quốc tịch</th>
                                <th class="px-4 py-2">📖 Tổng số sách</th>
                                <th class="px-4 py-2">🔍 Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tacGia as $tg)
                                <tr class="border-b dark:border-gray-600">
                                    <td class="px-4 py-2">{{ $tg->TenTG }}</td>
                                    <td class="px-4 py-2">{{ $tg->QuocTich }}</td>
                                    <td class="px-4 py-2">{{ $tg->sachs_count }}</td>
                                    <td class="px-4 py-2">
                                        <a href="{{ route('author.detail', $tg->MaTG) }}"
                                            class="rounded bg-blue-500 px-3 py-1 text-white hover:bg-blue-600">
                                            Xem chi tiết
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="mt-4">
                        {{ $tacGia->links() }}
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
