<?php namespace App\Http\Controllers;


class FrontController extends Controller {

    public function home(){
        return view('welcome')->with('titolo', 'Laravel - Home');
    }

    public function progetto(){
        /*
        Nome file della view .blade.php (senza estensioni) nella cartella "views".
        Se metto Cartella.Nome va a cercare la view nella specifica cartella
        */

        return view('FrontOffice.Progetto')->with('titolo', 'Laravel - Progetto');
    }

    public function about(){

        /*
        //Metodo 1 passaggio dati view: with()
        $data = "Davide Frasca 21 anni";

        return view("FrontOffice.About")->with('data', $data);
        */

        //Metodo 2 passaggio dati view: array

        /*
        //2.1 - with() con array
        return view("FrontOffice.About")->with([
            'nome' => 'Davide',
            'cognome' => 'Frasca',
            'eta' => '<span style="color: green;">21</span>'
        ]);
        */

        /*
        //2.2 - view() con array come secondo parametro
        $data = [];

        $data['nome'] = 'Davide';
        $data['cognome'] = 'Frasca';
        $data['eta'] = '<span style="color: red;">21</span>';

        return view("FrontOffice.About", $data);
        */



        //Metodo 3 passaggio dati view: compact() (+ Prova Namespaces)

        /*-- Oggetto della classe MyClass con namespace App\Http\Controllers\Sub --*/
        /*-- Visto che sono nel namespace App\Http\Controllers, posso usarla semplicemente con Sub\Myclass --*/
        $myobj = new Sub\MyClass("Davide", "Frasca", "21");

        $nome = $myobj->getNome();
        $cognome = $myobj->getCognome();
        $eta = '<span style="color: blue;">'.$myobj->getEta().'</span>'; ////////////////////////////////////////
        $titolo = "Laravel - About";

        $interests = [
            'Staying with my Love', 'Guitar', 'Videogames'
        ];

        return view("FrontOffice.About", compact('nome', 'cognome', 'eta', 'interests', 'titolo'));

        //return view("FrontOffice.About", compact($myobj->getNome(), $myobj->getCognome(), $myobj->getEta(), 'interests'));

    }

}
