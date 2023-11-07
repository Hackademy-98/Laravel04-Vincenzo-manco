<div class="col-4 mt-5">
                <div class="card border-0" style="width: 18rem;">
                    <img src="{{$data["img"]}}" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column align-items-center">
                        <h5 class="card-title">{{$data["name"]}}</h5>
                        
                        <a href="{{route($route,["name"=>$data["name"]]) }}" class="btn btn-primary">Dettagli</a>
                    </div>
                </div>
            </div>