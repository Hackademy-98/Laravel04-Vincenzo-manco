
<x-layout title="Valhalla">
    
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Vikings Valhalla</h1>
                </div>
                @foreach($stagioniValhalla as $stagione )
                {{-- i due punti in questo caso servono perhcè stiamo passando un dato composto (array) --}}
                <x-card :data="$stagione" route="show.valhalla"/>
                @endforeach
            </div>
        </div>
        
    </x-layout>
    
    
    
    
    
    
    
