<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleBoleta
 *
 * @ORM\Table(name="detalle_boleta", indexes={@ORM\Index(name="id_boleta", columns={"id_boleta"}), @ORM\Index(name="id_producto", columns={"id_producto"})})
 * @ORM\Entity
 */
class DetalleBoleta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Boleta
     *
     * @ORM\ManyToOne(targetEntity="Boleta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_boleta", referencedColumnName="id")
     * })
     */
    private $idBoleta;

    /**
     * @var \Producto
     *
     * @ORM\ManyToOne(targetEntity="Producto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_producto", referencedColumnName="id")
     * })
     */
    private $idProducto;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idBoleta
     *
     * @param \AppBundle\Entity\Boleta $idBoleta
     *
     * @return DetalleBoleta
     */
    public function setIdBoleta(\AppBundle\Entity\Boleta $idBoleta = null)
    {
        $this->idBoleta = $idBoleta;

        return $this;
    }

    /**
     * Get idBoleta
     *
     * @return \AppBundle\Entity\Boleta
     */
    public function getIdBoleta()
    {
        return $this->idBoleta;
    }

    /**
     * Set idProducto
     *
     * @param \AppBundle\Entity\Producto $idProducto
     *
     * @return DetalleBoleta
     */
    public function setIdProducto(\AppBundle\Entity\Producto $idProducto = null)
    {
        $this->idProducto = $idProducto;

        return $this;
    }

    /**
     * Get idProducto
     *
     * @return \AppBundle\Entity\Producto
     */
    public function getIdProducto()
    {
        return $this->idProducto;
    }
}
