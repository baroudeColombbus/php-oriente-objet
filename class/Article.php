<?php

class Article
{
    private $titre;
    private $contenu;
    private $dateDePublication;

    function __construct($titre = null, $contenu = null, $dateDePublication = null)
    {
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->dateDePublication = $dateDePublication;
    }

    function afficher()
    {
        setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
        date_default_timezone_set('Europe/Paris');
        //$date = utf8_encode(strftime('%A %d %B %Y'));
        $date = datetime::createFromFormat('Y-m-d', $this->dateDePublication);
       // var_dump($date);
        echo "<article>
            <h2>$this->titre</h2>
            <p>$this->contenu</p>
            <p>Publié le <time datetime=\"$this->dateDePublication\">" .$date->format('l j F Y'). "</time>
            </p></article>" ;
    }

    /**
     * Donne la valeur de dateDePublication
     */
    public function getDateDePublication()
    {
        return $this->dateDePublication;
    }

    /**
     * Définie la valeur de dateDePublication
     *
     * @return  self
     */
    public function setDateDePublication($dateDePublication)
    {
        $this->dateDePublication = $dateDePublication;

        return $this;
    }

    /**
     * Récupère la valeur du contenu
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     *  Définie la valeur du contenu
     *
     * @return  self
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     *  Récupère la valeur  titre
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Définie la valeur du titre
     *
     * @return  self
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }
}
