<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;


class ActuController extends Controller
{

    public function index() {


        $actualites = Actualite::All();


        return view('accueil', compact('actualites'));

    }


    // Reception de l'identifiant de l'actualite
    public function detail($id=0) {


        //selectionne l'actualite portant $id
        //sql: select * from actu where id = $id order by id ASC limit 1
        $actu = Actualite::Where("id",$id)->first();
        
        
        return view('detail', compact('actu'));

    }





    // traite  les informations du formulaire
    public function save(Request $request) {

        //dd($request);

        $validate = $request->validate(
            ["title" => "required"]
        );

        // dd($validate);

    /************************************************** */
    /* *** Creation de mon instance d'enregistrement *** */
    // a l'aide du modele Actualite

    // Affectation dde la variable $request a mon enregstrement

    // enregistrement en bd
    //

    $saveActualite = new Actualite;
    $saveActualite->title = $request->title;
    $saveActualite->detail = $request->detail;
    $saveActualite->save();

    //redirection vers ma page de creation
    return back();

}


    // affiche les infos du formulaire
    public function create() {

        return view('create');
    }




    // mise a jour de mon actualite
    public function update($id=0) {

        $actu = new Actualites;


        return back();
    }

}
