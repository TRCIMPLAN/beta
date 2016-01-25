<?php
/**
 * Plataforma de Conocimiento - Páginas Autores Individual
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
 * Clase PaginasAutoresIndividual
 */
class PaginasAutoresIndividual extends Paginas {

    // public $titulo;
    // public $descripcion;
    // public $encabezado;
    // public $encabezado_color;
    // public $encabezado_icono;
    // public $en_raiz;
    // public $en_otro;
    protected $recolector; // Instancia de RecolectorAutores
    protected $breves;     // Instancia de BrevesIndice

    /**
     * Constructor
     *
     * @param mixed Instancia de RecolectorAutores
     */
    public function __construct(RecolectorAutores $recolector) {
        $this->recolector = $recolector;
        $this->breves     = new BrevesIndice($this->recolector);
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Pasar variables a Breves
        $this->breves->titulo           = $this->titulo;
        $this->breves->descripcion      = $this->descripcion;
        $this->breves->encabezado       = $this->encabezado;
        $this->breves->encabezado_color = $this->encabezado_color;
        $this->breves->encabezado_icono = $this->encabezado_icono;
        $this->breves->en_raiz          = $this->en_raiz;
        $this->breves->en_otro          = $this->en_otro;
        // Entregar
        return $this->breves->html();
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        return $this->breves->javascript();
    } // javascript

} // Clase PaginasAutoresIndividual

?>
