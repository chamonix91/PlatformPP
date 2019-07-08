<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 07/07/2019
 * Time: 15:01
 */

namespace Permispromo\clientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 *
 * @ORM\Table(name="client")
 * @ORM\Entity
 *
 */

class Client
{
    /**
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $ref;

    /**
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $nomprenom;

    /**
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $tel1;

    /**
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $tel2;

    /**
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $adresse;

    /**
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $gouvernorat;

    /**
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $rating;

    /**
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $crated_at;

    /**
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $last_cantacted;

    /**
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $statut;



}