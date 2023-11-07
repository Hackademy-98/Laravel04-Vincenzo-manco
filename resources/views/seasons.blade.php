
<x-layout title="Vikings">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center my-5">Vikings</h1>
            </div>
            @foreach($stagioniVikings as $stagione)
            <x-card :data="$stagione" route="show.vikings"/>
            @endforeach
        </div>
    </div>
    
</x-layout>