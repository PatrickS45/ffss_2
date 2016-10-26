<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agenda
 *
 * @ORM\Table(name="agenda")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\AgendaRepository")
 */
class Agenda
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Formation", inversedBy="formation")
     * @ORM\JoinColumn(name="formation_id", referencedColumnName="id")
     */
    private $agendas;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_de_debut", type="date")
     */
    private $dateDeDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_de_fin", type="date")
     */
    private $dateDeFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_de_debut_am", type="time")
     */
    private $heureDeDebutAm;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_de_fin_am", type="time")
     */
    private $heureDeFinAm;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_de_debut_pm", type="time")
     */
    private $heureDeDebutPm;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_de_fin_pm", type="time")
     */
    private $heureDeFinPm;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var int
     *
     * @ORM\Column(name="agenda", type="integer")
     */
    private $agenda;



    /**
     * Get id
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateDeDebut
     *
     * @param \DateTime $dateDeDebut
     * @return Agenda
     */
    public function setDateDeDebut($dateDeDebut)
    {
        $this->dateDeDebut = $dateDeDebut;

        return $this;
    }

    /**
     * Get dateDeDebut
     *
     * @return \DateTime 
     */
    public function getDateDeDebut()
    {
        return $this->dateDeDebut;
    }

    /**
     * Set dateDeFin
     *
     * @param \DateTime $dateDeFin
     * @return Agenda
     */
    public function setDateDeFin($dateDeFin)
    {
        $this->dateDeFin = $dateDeFin;

        return $this;
    }

    /**
     * Get dateDeFin
     *
     * @return \DateTime 
     */
    public function getDateDeFin()
    {
        return $this->dateDeFin;
    }

    /**
     * Set heureDeDebutAm
     *
     * @param \DateTime $heureDeDebutAm
     * @return Agenda
     */
    public function setHeureDeDebutAm($heureDeDebutAm)
    {
        $this->heureDeDebutAm = $heureDeDebutAm;

        return $this;
    }

    /**
     * Get heureDeDebutAm
     *
     * @return \DateTime 
     */
    public function getHeureDeDebutAm()
    {
        return $this->heureDeDebutAm;
    }

    /**
     * Set heureDeFinAm
     *
     * @param \DateTime $heureDeFinAm
     * @return Agenda
     */
    public function setHeureDeFinAm($heureDeFinAm)
    {
        $this->heureDeFinAm = $heureDeFinAm;

        return $this;
    }

    /**
     * Get heureDeFinAm
     *
     * @return \DateTime 
     */
    public function getHeureDeFinAm()
    {
        return $this->heureDeFinAm;
    }

    /**
     * Set heureDeDebutPm
     *
     * @param \DateTime $heureDeDebutPm
     * @return Agenda
     */
    public function setHeureDeDebutPm($heureDeDebutPm)
    {
        $this->heureDeDebutPm = $heureDeDebutPm;

        return $this;
    }

    /**
     * Get heureDeDebutPm
     *
     * @return \DateTime 
     */
    public function getHeureDeDebutPm()
    {
        return $this->heureDeDebutPm;
    }

    /**
     * Set heureDeFinPm
     *
     * @param \DateTime $heureDeFinPm
     * @return Agenda
     */
    public function setHeureDeFinPm($heureDeFinPm)
    {
        $this->heureDeFinPm = $heureDeFinPm;

        return $this;
    }

    /**
     * Get heureDeFinPm
     *
     * @return \DateTime 
     */
    public function getHeureDeFinPm()
    {
        return $this->heureDeFinPm;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Agenda
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->agenda = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add agenda
     *
     * @param \AdminBundle\Entity\Formation $agenda
     * @return Agenda
     */
    public function addAgenda(\AdminBundle\Entity\Formation $agenda)
    {
        $this->agenda[] = $agenda;

        return $this;
    }

    /**
     * Remove agenda
     *
     * @param \AdminBundle\Entity\Formation $agenda
     */
    public function removeAgenda(\AdminBundle\Entity\Formation $agenda)
    {
        $this->agenda->removeElement($agenda);
    }

    /**
     * Get agenda
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAgenda()
    {
        return $this->agenda;
    }

    /**
     * @param mixed $agendas
     */
    public function setAgendas($agendas)
    {
        $this->agendas = $agendas;
    }

    /**
     * @return mixed
     */
    public function getAgendas()
    {
        return $this->agendas;
    }
}
