<?php
/**
 * Plataforma de Conocimiento - Breves Galerías
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
 * Clase BrevesGalerias
 */
class BrevesGalerias extends Breves {

    // public $titulo;
    // public $descripcion;
    // public $encabezado;
    // public $encabezado_color;
    // public $encabezado_icono;
    // public $en_raiz;
    // public $en_otro;
    // public $cantidad_maxima;
    // protected $recolector;

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Validar recolector
        if ($this->recolector->obtener_cantidad_de_publicaciones() == 0) {
            throw new \Exception("Error en BrevesGalerias: El recolector no tiene publicaciones.");
        }
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Entregar
        return implode("\n", $a);
    } // html

    /**
     * Javascript
     *
     * @return string No hay código Javascript, entrega un texto vacío
     */
    public function javascript() {
        return '';
    } // javascript

?>
