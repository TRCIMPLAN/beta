<?php
/**
 * Plataforma de Conocimiento - Páginas Índice
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
 * Clase PaginasIndice
 */
class PaginasIndice extends Paginas {

    // public $titulo;
    // public $descripcion;
    // public $encabezado;
    // public $encabezado_color;
    // public $encabezado_icono;
    // protected $recolector;
    public $en_raiz = false;  // Si es verdadero los vínculos serán para un archivo en la raíz del sitio
    public $en_otro = false;  // Si es verdadero el archivo va a OTRO lugar como al directorio autores, categorias, etc.
    public $cantidad_maxima;  // Entero, cantidad máxima de publicaciones a mostrar, si no está definido usa todas
    protected $breves_indice; // Instancia de BrevesIndice

    /**
     * Constructor
     *
     * @param mixed Instancia de Recolector
     */
    public function __construct(Recolector $recolector) {
        parent::__construct($recolector);
        $this->breves_indice = new BrevesIndice($this->recolector);
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Pasar variables a Breves Índice
        $this->breves_indice->titulo           = $this->titulo;
        $this->breves_indice->descripcion      = $this->descripcion;
        $this->breves_indice->encabezado       = $this->encabezado;
        $this->breves_indice->encabezado_color = $this->encabezado_color;
        $this->breves_indice->encabezado_icono = $this->encabezado_icono;
        $this->breves_indice->en_raiz          = $this->en_raiz;
        $this->breves_indice->en_otro          = $this->en_otro;
        $this->breves_indice->cantidad_maxima  = $this->cantidad_maxima;
        // Entregar
        return $this->breves_indice->html();
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        return $this->breves_indice->javascript();
    } // javascript

} // Clase PaginasIndice

?>
