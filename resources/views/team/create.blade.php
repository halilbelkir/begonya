<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Takım Ekle') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-6 py-6">

                <form action="{{route('team.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-1">
                        <div>
                            <x-jet-label for="ad" value="Ad" />
                            <x-jet-input id="ad" name="ad" type="text" value="{{old('ad')}}" class="mt-1 block"  placeholder="Ad" />
                            <x-jet-input-error for="ad" class="mt-2" />
                        </div>

                        <div>
                            <x-jet-label for="unvan" value="Ünvan" />
                            <x-jet-input id="unvan" name="unvan" type="text" value="{{old('unvan')}}" class="mt-1 block"  placeholder="Ünvan" />
                            <x-jet-input-error for="unvan" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-jet-label for="aciklama" value="Aciklama" />
                            <textarea id="aciklama" name="aciklama" class="mt-1 mb-1 block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"  placeholder="Aciklama" rows="2">@if(!empty(old('aciklama'))){{old('aciklama')}}@endif</textarea>
                            <x-jet-input-error for="aciklama" class="mt-2" />
                        </div>

                        <div>
                            <x-jet-label for="resim" value="Resim" />
                            <x-jet-input id="resim" name="resim" type="file" value="{{old('resim')}}" class="mt-1 block"  placeholder="Resim" />
                            <x-jet-input-error for="resim" class="mt-2" />
                        </div>
                    </div>

                    <x-jet-button class="float-right">
                        {{ __('Kaydet') }}
                    </x-jet-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

