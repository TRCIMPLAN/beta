<?php
/**
 * Plataforma de Conocimiento - Páginas Autores Índice
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
 * Clase PaginasAutoresIndice
 */
class PaginasAutoresIndice extends Paginas {

    // public $titulo;
    // public $descripcion;
    // public $encabezado;
    // public $encabezado_color;
    // public $encabezado_icono;
    // public $en_raiz;
    // public $en_otro;
    protected $recolector; // Instancia de RecolectorAutores

    /**
     * Constructor
     *
     * @param mixed Instancia de RecolectorAutores
     */
    public function __construct(RecolectorAutores $recolector) {
        $this->recolector = $recolector;
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Bucle por todos los autores
        $vinculos = array();
        foreach ($this->recolector->obtener_autores() as $autor) {
            $this->recolector->filtrar_publicaciones_de_autor($autor);
            $etiqueta            = sprintf('%s (%d)', $autor, $this->recolector->obtener_cantidad_de_publicaciones());
            $vinculos[$etiqueta] = sprintf('%s.html', $this->caracteres_para_web($autor));
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

} // Clase PaginasAutoresIndice

?>
