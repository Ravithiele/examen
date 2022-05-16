<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>reserveringen:</h1>
                    @if ($reserveringen->count()) 
                    @foreach ($reserveringen as $reservering) 
                    <span>email gast: </span> {{ $reservering->user->email }} 
                    <br>
                    <span>hotel naam: </span> {{ $reservering->hotel->hotel_naam }}
                    @endforeach
                    @else 
                    <p>geen mogelijkheden</p>
                    @endif
                    <hr>
                    <h1>kamers:</h1>
                    @if ($kamers->count()) 
                    @foreach ($kamers as $kamer) 
                    <span>hotel naam: </span>{{ $kamer->hotel->hotel_naam }}
                    <br>
                    <span>kamer nummer: </span> {{ $kamer->kamer_nummer }} 
                    <br> <hr>
                    @endforeach
                    @else 
                    <p>geen mogelijkheden</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<style>
    h1 {
        font-weight: bold;
        font-size: 20px;
    }
    span {
        font-weight: bold;
    }
</style>
