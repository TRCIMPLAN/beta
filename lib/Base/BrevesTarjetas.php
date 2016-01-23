<?php
/**
 * Plataforma de Conocimiento - Breves Tarjetas
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
 * Clase BrevesTarjetas
 */
class BrevesTarjetas extends Breves {

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
            throw new \Exception("Error en BrevesTarjetas: El recolector no tiene publicaciones.");
        }
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular encabezado
        $a[] = $this->encabezado_html();
        // Acumular breves
        $a[] = '      <div class="row" id="tarjetas">';
        foreach ($this->recolector->obtener_publicaciones($this->cantidad_maxima) as $p) {
            // Validar publicacion
            $p->validar();
            // Pasar valores a la puyblicación
            $p->en_raiz = $this->en_raiz;
            $p->en_otro = $this->en_otro;
            // Acumular
            $a[] = '        <div class="col-sm-6 col-md-3">';
            $a[] = '          <div class="thumbnail tarjeta">';
            if ($p->imagen != '') {
                $a[] = sprintf('            <a href="%s"%s><img src="%s" alt="%s"></a>', $p->archivo_url, $p->archivo_target, $p->imagen, $p->nombre);
            }
            $a[] = '            <div class="caption">';
            $a[] = sprintf('              <h3 class="caption-titulo"><a href="%s"%s>%s</a></h3>', $p->archivo_url, $p->archivo_target, $p->nombre);
            if ($p->descripcion != '') {
                $a[] = sprintf('              <p class="caption-descripcion">%s</p>', $p->descripcion);
            }
            if (($p->url_etiqueta != '') && ($p->boton_url)) {
                $a[] = sprintf('              <a href="%s" class="btn btn-default caption-boton" role="button"%s>%s</a>', $p->boton_url, $p->boton_target, $p->url_etiqueta);
            }
            $a[] = '            </div>';
            $a[] = '          </div>';
            $a[] = '        </div>';
        }
        $a[] = '      </div>'; // row
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

} // Clase BrevesTarjetas

?>
