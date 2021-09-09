<?php

class Lutador {

    // Atributos da Classe

    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    // Métodos da Classe

    public function apresentar()    {

    }

    public function status()   {

    }

    public function ganharLuta ()  {

    }

    public function perderLuta ()  {

    }

    public function empatarLuta () {

    }

    // Método Mágico Construtor

    public function __construct()    {
        $this->setNome();
        $this->setNacionalidade();
        $this->setIdade();
        $this->setAltura();
        $this->setPeso();
        $this->setVitorias();
        $this->setDerrotas();
        $this->setEmpates();
    }


    // Métodos Getter e Setters

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($no)
    {
        $this->nome = $no;
    }

    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    public function setNacionalidade($na)
    {
        $this->nacionalidade = $na;
    }


    public function getIdade()
    {
        return $this->idade;
    }


    public function setIdade($id)
    {
        $this->idade = $id;
    }

    public function getAltura()
    {
        return $this->altura;
    }


    public function setAltura($al)
    {
        $this->altura = $al;
    }


    public function getPeso()
    {
        return $this->peso;
    }


    public function setPeso($pe)
    {
        $this->peso = $pe;
        $this->setCategoria();
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    private function setCategoria($ca)
    {
        $this->categoria = $ca;
    }

    public function getVitorias()
    {
        return $this->vitorias;
    }

    public function setVitorias($vi)
    {
        $this->vitorias = $vi;
    }

    public function getDerrotas()
    {
        return $this->derrotas;
    }

    public function setDerrotas($de)
    {
        $this->derrotas = $de;
    }

    public function getEmpates()
    {
        return $this->empates;
    }

    public function setEmpates($em)
    {
        $this->empates = $em;
    }




}