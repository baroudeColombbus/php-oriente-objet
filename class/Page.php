<?php


class Page
{
    private  $titre;
    private $contenu;
    private  $date_de_publication;
    private $url;

    public function __construct($titre, $contenu, $date_de_publication, $url)
    {
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->date_de_publication = $date_de_publication;
        $this->url = $url;
    }

    // public function voirLivre()
    // {
    //     echo " Ce livre a pour titre { $this->titre} et pour contenu { $this->contenu} il a été plublié le {$this->date_de_publication} et peut être acheté a l'addresse {$this->url} ";
    // }

    public function afficherLivre()
    {
        echo "<article>
                <h2> { $this->titre}</h2>
                <p>{ $this->contenu}</p>
                <time datetime>{ $this->date_de_publication} </time>
                </article>
                
        ";
        // echo" <article>  <h2 > Ce livre a pour titre { $this->titre} et pour contenu { $this->contenu} </h2>        </article>";

        
    }

    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }


    /**
     * Get the value of contenu
     */ 
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set the value of contenu
     *
     * @return  self
     */ 
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }


    /**
     * Get the value of date_de_publication
     */ 
    public function getDate_de_publication()
    {
        return $this->date_de_publication;
    }

    /**
     * Set the value of date_de_publication
     *
     * @return  self
     */ 
    public function setDate_de_publication($date_de_publication)
    {
        $this->date_de_publication = $date_de_publication;

        return $this;
    }

    /**
     * Get the value of url
     */ 
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set the value of url
     *
     * @return  self
     */ 
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }
}


// - Crée une classe page
//     * titre 
//     * contenu 
//     * date  de publication
//     * url
