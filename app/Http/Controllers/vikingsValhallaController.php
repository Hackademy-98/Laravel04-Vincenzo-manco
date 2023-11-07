<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vikingsValhallaController extends Controller
{
    public function index(){
        $vikingValhalla = [
            ["name"=> "Vikings Valhalla stagione 1" , "year"=> "2022" , "description"=> "Ambientata oltre un secolo dopo la serie originale di History Channel, Valhalla segue i Vichinghi dopo il massacro del giorno di San Brizio, in cui il re d’Inghilterra Etelredo ordina lo sterminio dei vichinghi che risiedono nel suo regno." , "img"=> "/media/v1.jpg"],
            ["name"=> "Vikings Valhalla stagione 2" , "year"=> "2023" , "description"=> "La seconda stagione dello spin-off di Vikings ritrova tutti i personaggi che il pubblico ha imparato a conoscere nella prima. C’è Harald Sigurdsson, che ambisce a conquistare il trono in Norvegia e che per questo motivo ha stretto un’alleanza con il re della Danimarca, che a sua volta punta a conquistare l’Inghilterra. " , "img"=> "/media/v2.jpg"],
        ];
        return view('seasonValhalla', ['stagioniValhalla'=>$vikingValhalla]);
    }
    public function show($name){
        
        $vikingValhalla = [
            ["name"=> "Vikings Valhalla stagione 1" , "year"=> "2022" , "description"=> "Ambientata oltre un secolo dopo la serie originale di History Channel, Valhalla segue i Vichinghi dopo il massacro del giorno di San Brizio, in cui il re d’Inghilterra Etelredo ordina lo sterminio dei vichinghi che risiedono nel suo regno." , "img"=> "/media/v1.jpg"],
            ["name"=> "Vikings Valhalla stagione 2" , "year"=> "2023" , "description"=> "La seconda stagione dello spin-off di Vikings ritrova tutti i personaggi che il pubblico ha imparato a conoscere nella prima. C’è Harald Sigurdsson, che ambisce a conquistare il trono in Norvegia e che per questo motivo ha stretto un’alleanza con il re della Danimarca, che a sua volta punta a conquistare l’Inghilterra. " , "img"=> "/media/v2.jpg"],
        ];
        foreach($vikingValhalla as $el){
            if ($name == $el["name"]){
                // in questo caso nella view richiamiamo viking perchè abbiamo solo una pagina detail
                return view('detail',["viking"=>$el]);
            }
        }
    }

}
