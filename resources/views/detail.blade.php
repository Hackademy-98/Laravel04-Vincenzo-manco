
<x-layout title="{{$viking['name']}}">
    
        <div class="container">
            <div class="row">
                <div class="col-12 my-5">
                    <div class="card mb-3 border-0">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{$viking["img"]}}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body h-100 d-flex flex-column justify-content-betweens">
                                    <h5 class="card-title text-center">{{$viking['name']}}</h5>
                                    <p class="card-text">{{$viking["description"]}}</p>
                                    <p class="text-center">{{$viking["year"]}}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
</x-layout>