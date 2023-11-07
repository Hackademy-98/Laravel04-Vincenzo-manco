<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VikingsController extends Controller
{
    public function index(){
        $vikings = [
            ["name"=> "Vikings stagione 1" , "year"=> "2013" , "description"=> "La serie, ambientata nel IX secolo principalmente tra la Scandinavia e le isole britanniche, racconta in chiave romanzata le avventure del grande guerriero vichingo Ragnar Lothbrok" , "img"=> "media/s1m.jpg" ],
            ["name"=> "Vikings stagione 2" , "year"=> "2014" , "description"=> "Rollo si è schierato con lo jarl Borg contro re Horik e Ragnar. Ha inizio una violenta battaglia tra i due schieramenti, nella quale Floki viene ferito gravemente e Rollo uccide diversi vecchi compagni." , "img"=> "media/s2.jpg"],
            ["name"=> "Vikings stagione 3" , "year"=> "2015" , "description"=> "Dopo aver sconfitto i merciani, Ragnar chiede alla principessa Kwenthrith perché odiasse così tanto suo fratello maggiore Kanelm e suo zio Brihtwulf." , "img"=> "media/s3.jpg"],
            ["name"=> "Vikings stagione 4" , "year"=> "2016" , "description"=> "Ragnar, ancora convalescente dopo il ritorno da Parigi, sogna di avvicinarsi al Valhalla, senza riuscire ad attraversare i cancelli dorati. " , "img"=> "media/s4.jpg"],
            ["name"=> "Vikings stagione 5" , "year"=> "2017" , "description"=> "Nell'Anglia Orientale, dove è posto l'insediamento dei figli di Ragnar, viene celebrato il funerale di Sigurd." , "img"=> "media/s5.jpg"],
            ["name"=> "Vikings stagione 6" , "year"=> "2019" , "description"=> "Ivar e la sua guardia del corpo Vigrid viaggiano lungo la Via della seta ma quando si inoltrano nella Rus' di Kiev vengono catturati dagli uomini del principe Oleg il Profeta." , "img"=> "media/s6.jpg"],
        ];
        return view('seasons', ['stagioniVikings'=>$vikings]);
        
    }

    public function show($name){
        $vikings = [
            ["name"=> "Vikings stagione 1" , "year"=> "2013" , "description"=> "La serie, ambientata nel IX secolo principalmente tra la Scandinavia e le isole britanniche, racconta in chiave romanzata le avventure del grande guerriero vichingo Ragnar Lothbrok" , "img"=> "/media/s1m.jpg" ],
            ["name"=> "Vikings stagione 2" , "year"=> "2014" , "description"=> "Rollo si è schierato con lo jarl Borg contro re Horik e Ragnar. Ha inizio una violenta battaglia tra i due schieramenti, nella quale Floki viene ferito gravemente e Rollo uccide diversi vecchi compagni." , "img"=> "/media/s2.jpg"],
            ["name"=> "Vikings stagione 3" , "year"=> "2015" , "description"=> "Dopo aver sconfitto i merciani, Ragnar chiede alla principessa Kwenthrith perché odiasse così tanto suo fratello maggiore Kanelm e suo zio Brihtwulf." , "img"=> "/media/s3.jpg"],
            ["name"=> "Vikings stagione 4" , "year"=> "2016" , "description"=> "Ragnar, ancora convalescente dopo il ritorno da Parigi, sogna di avvicinarsi al Valhalla, senza riuscire ad attraversare i cancelli dorati. " , "img"=> "/media/s4.jpg"],
            ["name"=> "Vikings stagione 5" , "year"=> "2017" , "description"=> "Nell'Anglia Orientale, dove è posto l'insediamento dei figli di Ragnar, viene celebrato il funerale di Sigurd." , "img"=> "/media/s5.jpg"],
            ["name"=> "Vikings stagione 6" , "year"=> "2019" , "description"=> "Ivar e la sua guardia del corpo Vigrid viaggiano lungo la Via della seta ma quando si inoltrano nella Rus' di Kiev vengono catturati dagli uomini del principe Oleg il Profeta." , "img"=> "/media/s6.jpg"],
        ];
        foreach($vikings as $viking){
            if ($name == $viking["name"]){
                return view('detail',["viking"=>$viking]);
            }
        }
        
    }
}
