<?php

class Recette
{
    private $_id;
    private $_nom;
    private $_description;
    private $_preparation;
    private $_tempsPreparation;
    private $_tempsCuisson;
    private $_nombre;
    private $_idIngredients;
    private $_remarque;

    public function __construct()
    {
    }

    // Getters
    public function getId()
    {
        return $this->_id;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function getDescription()
    {
        return $this->_description;
    }

    public function getPreparation()
    {
        return $this->_preparation;
    }

    public function getTempsPreparation()
    {
        return $this->_tempsPreparation;
    }

    public function getTempsCuisson()
    {
        return $this->_tempsCuisson;
    }

    public function getNombre()
    {
        return $this->_nombre;
    }

    public function getIdIngredients()
    {
        return $this->_idIngredients;
    }

    public function getRemarque()
    {
        return $this->_remarque;
    }

    // Setters

    public function setId($id)
    {
        $this->_id = $id;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function setNombre($nombre)
    {
        $this->_nombre = $nombre;
    }

    public function setDescription($description)
    {
        $this->_description = $description;
    }

    public function setRemarque($remarque)
    {
        $this->_remarque = $remarque;
    }

    public function setIdIngredients($idIngredients)
    {
        $this->_idIngredients = $idIngredients;
    }

    public function setPreparation($preparation)
    {
        $this->_preparation = $preparation;
    }

    public function setTempsCuisson($tempsCuisson)
    {
        $this->_tempsCuisson = $tempsCuisson;
    }

    public function setTempsPreparation($tempsPreparation)
    {
        $this->_tempsPreparation = $tempsPreparation;
    }
}


