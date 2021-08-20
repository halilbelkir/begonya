<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Takım Düzenle') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-6 py-6">

                <form action="{{route('team.update',$team->id)}}" method="post" enctype="multipart/form-data">
                    {{ method_field('PUT') }}
                    @csrf
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-1">
                        <div>
                            <x-jet-label for="ad" value="Ad" />
                            @if(!empty(old('ad')))
                                <x-jet-input value="{{old('ad')}}" id="ad" name="ad" type="text"  class="mt-1 block" placeholder="Ad" />
                            @else
                                <x-jet-input value="{{$team->ad}}" id="ad" name="ad" type="text"  class="mt-1 block" placeholder="Ad" />
                            @endif
                            <x-jet-input-error for="ad" class="mt-2" />
                        </div>

                        <div>
                            <x-jet-label for="unvan" value="Ünvan" />
                            @if(!empty(old('unvan')))
                                <x-jet-input value="{{old('unvan')}}" id="unvan" name="unvan" type="text"  class="mt-1 block" placeholder="Ünvan" />
                            @else
                                <x-jet-input value="{{$team->unvan}}" id="unvan" name="unvan" type="text"  class="mt-1 block" placeholder="Ünvan" />
                            @endif
                            <x-jet-input-error for="unvan" class="mt-2" />
                        </div>

                        <div>
                            <x-jet-label for="aciklama" value="Açıklama" />
                            <textarea id="aciklama" name="aciklama" class="mt-1 mb-1 block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"  placeholder="Açıklama" rows="2">@if(!empty(old('aciklama'))){{old('aciklama')}} @else{{$team->aciklama}}@endif</textarea>
                            <x-jet-input-error for="aciklama" class="mt-2" />
                        </div>

                        @if(empty($team->resim))
                            <div>
                                <x-jet-label for="resim" value="Resim" />
                                <x-jet-input id="resim" name="resim" type="file" value="{{old('resim')}}" class="mt-1 block"  placeholder="Resim" />
                                <x-jet-input-error for="resim" class="mt-2" />
                            </div>
                        @else
                            <div>
                                <img class="rounded-full h-24 w-24 object-cover mb-3" src="{{asset($team->resim)}}" alt="">
                                <a onclick="return confirm('Resmi silmek istediğinize emin misiniz?')" href="{{route('team.destroy.image',$team->id)}}" class="inline-flex items-center px-1 py-1 bg-red-800 border border-transparent rounded-md font-normal text-xs text-white uppercase tracking-widest hover:bg-red-700 hover:text-white active:bg-red-900 focus:outline-none focus:border-red-900 focus:ring focus:ring-red-300 disabled:opacity-25 transition"><span class="material-icons" style="font-size: 18px">delete</span> Resim Sil</a>
                            </div>
                        @endif
                    </div>

                    <x-jet-button class="float-right">
                        {{ __('Kaydet') }}
                    </x-jet-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

