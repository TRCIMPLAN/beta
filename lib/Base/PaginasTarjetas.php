<?php
/**
 * Plataforma de Conocimiento - Páginas Tarjetas
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package PlataformaDeConocimiento
 */

namespace Base;

/**
 * Clase PaginasTarjetas
 */
class PaginasTarjetas extends Paginas {

    // public $titulo;
    // public $descripcion;
    // public $encabezado;
    // public $encabezado_color;
    // public $encabezado_icono;
    // public $en_raiz;
    // public $en_otro;
    public $cantidad_maxima;    // Entero, cantidad máxima de publicaciones a mostrar, si no está definido usa todas
    protected $recolector;      // Instancia de Recolector
    protected $breves_tarjetas; // Instancia de BrevesTarjetas

    /**
     * Constructor
     *
     * @param mixed Instancia de Recolector
     */
    public function __construct(Recolector $recolector) {
        $this->recolector      = $recolector;
        $this->breves_tarjetas = new BrevesTarjetas($this->recolector);
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Pasar variables a Breves Tarjetas
        $this->breves_tarjetas->titulo           = $this->titulo;
        $this->breves_tarjetas->descripcion      = $this->descripcion;
        $this->breves_tarjetas->encabezado       = $this->encabezado;
        $this->breves_tarjetas->encabezado_color = $this->encabezado_color;
        $this->breves_tarjetas->encabezado_icono = $this->encabezado_icono;
        $this->breves_tarjetas->en_raiz          = $this->en_raiz;
        $this->breves_tarjetas->en_otro          = $this->en_otro;
        $this->breves_tarjetas->cantidad_maxima  = $this->cantidad_maxima;
        // Entregar
        return $this->breves_tarjetas->html();
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        return $this->breves_tarjetas->javascript();
    } // javascript

} // Clase PaginasTarjetas

?>
