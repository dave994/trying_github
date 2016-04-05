<?php


class BirthdayFilter{
    public function filter($route, $request, $date, $frase){
        if (date('d/m/y') == $date) { //se la data corrente (date('d/m/y')) == alla data passata ($date)
            $data['frase'] = $frase;
            return View::make('birthday', $data);//passo il parametro $frase alla View
        }
    }
}