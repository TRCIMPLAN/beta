<?php
/**
 * Plataforma de Conocimiento - Páginas
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
 * Clase Abstracta Paginas
 */
abstract class Paginas {

    public $titulo;           // Texto, título de la página
    public $descripcion;      // Texto, descripción para meta tag
    public $encabezado;       // Código HTML para usarse como encabezado
    public $encabezado_color; // Texto, color de fondo del encabezado #nnnnnn
    public $encabezado_icono; // Texto, icono Font Awesome
    protected $recolector;    // Instacia de Recolector

    /**
     * Constructor
     *
     * @param mixed Instancia de Recolector
     */
    public function __construct(Recolector $recolector) {
        $this->recolector = $recolector;
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    abstract function html();

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    abstract function javascript();

} // Clase Abstracta Paginas

?>
