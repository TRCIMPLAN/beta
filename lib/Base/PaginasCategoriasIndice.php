<?php
/**
 * Plataforma de Conocimiento - Páginas Categorías Índice
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
 * Clase PaginasCategoriasIndice
 */
class PaginasCategoriasIndice extends Paginas {

    // public $titulo;
    // public $descripcion;
    // public $encabezado;
    // public $encabezado_color;
    // public $encabezado_icono;
    // public $en_raiz;
    // public $en_otro;
    protected $recolector; // Instancia de RecolectorCategorias

    /**
     * Constructor
     *
     * @param mixed Instancia de RecolectorCategorias
     */
    public function __construct(RecolectorCategorias $recolector) {
        $this->recolector = $recolector;
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Bucle por todas las categorias
        $vinculos = array();
        foreach ($this->recolector->obtener_categorias() as $categoria) {
            $this->recolector->filtrar_publicaciones_de_categoria($categoria);
            $etiqueta            = sprintf('%s (%d)', $categoria, $this->recolector->obtener_cantidad_de_publicaciones());
            $vinculos[$etiqueta] = sprintf('%s.html', $this->caracteres_para_web($categoria));
        }
        // Acumular el HTML
        $a   = array();
        $a[] = '      <div class="encabezado">';
        $a[] = sprintf('        <span><h1>%s</h1></span>', $this->titulo);
        $a[] = sprintf('        <div class="encabezado-descripcion">%s</div>', $this->descripcion);
        $a[] = '      </div>';
        $a[] = '      <ul>';
        foreach ($vinculos as $etiqueta => $url) {
            $a[] = sprintf('        <li><a href="%s">%s</a></li>', $url, $etiqueta);
        }
        $a[] = '      </ul>';
        // Entregar
        return implode("\n", $a);
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        return '';
    } // javascript

} // Clase PaginasCategoriasIndice

?>
