<?php namespace App\Http\Controllers\Sub;

class MyClass{

    private $nome;
    private $cognome;
    private $eta;

    /*COSTRUTTORE*/
    public function __construct($nome, $cognome, $eta)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
    }

    /*GETTERS & SETTERS*/
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getCognome()
    {
        return $this->cognome;
    }

    public function setCognome($cognome)
    {
        $this->cognome = $cognome;
    }

    public function getEta()
    {
        return $this->eta;
    }

    public function setEta($eta)
    {
        $this->eta = $eta;
    }
}