<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Basında Biz') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-6 py-6">
                <x-link-green href="{{ route('media.create') }}" class="float-right" style="margin-bottom: 20px;">
                    {{ __('Ekle') }}
                </x-link-green>

                <table class=" table table-striped table-bordered dt-responsive nowrap sortable" data-order='[[ 0, "asc" ]]' data-link="{{route('media.sortable')}}" id="data-tables">
                    <thead>
                    <tr>
                        <th>Sıra</th>
                        <th>Resim</th>
                        <th>Link</th>
                        <th>Oluşturulma Zamanı</th>
                        <th>Aksiyon</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    @section('datatables.ajax.url'){{route('media.datatables')}}@stop
    @section('datatables.columns')
        [
            { data: 'order', name: 'order' },
            { data: 'image', name: 'image' },
            { data: 'link', name: 'link' },
            { data: 'created_at', name: 'created_at' },
            { data: 'actions', name: 'actions',className: 'text-center'},
        ]
    @stop
</x-app-layout>

