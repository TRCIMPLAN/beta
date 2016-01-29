<?php
/**
 * Plataforma de Conocimiento - Vinculos Galeria
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
 * Clase VinculosGalerias
 */
class VinculosGalerias extends Vinculos {

    // public $en_raiz;
    // public $en_otro;
    // protected $vinculos;

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Si no hay vinculos no se entrega nada
        if (count($this->vinculos) == 0) {
            return '<!-- Sin vínculos -->';
        }
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Bucle por los vinculos
        $a[] = '      <div class="row">';
        foreach ($this->vinculos as $vinculo) {
            // Pasar valores al vínculo
            $vinculo->en_raiz = $this->en_raiz;
            $vinculo->en_otro = $this->en_otro;
            // Acumular
            $a[] = '        <div class="col-xs-6 col-md-4 col-lg-3">';
            $a[] = '          <div class="thumbnail galeria-thumbnail">';
            if ($vinculo->imagen_previa != '') {
                $a[] = sprintf('            <a href="%s" title="%s"><img class="img-thumbnail galeria-imagen" src="%s" alt="%s"></a>',
                    $vinculo->url(),
                    $vinculo->descripcion,
                    $vinculo->imagen_previa_url(),
                    $vinculo->nombre);
            } elseif ($vinculo->icono != '') {
                $a[] = sprintf('            <a href="%s" title="%s"><img class="img-thumbnail galeria-imagen" src="%s" alt="%s"></a>',
                    $vinculo->url(),
                    $vinculo->descripcion,
                    $vinculo->icono_url(128),
                    $vinculo->nombre);
            }
            $a[] = '            <div class="caption">';
            $a[] = sprintf('              <a href="%s" title="%s">%s</a>', $vinculo->url(), $vinculo->descripcion, $vinculo->nombre);
            $a[] = '            </div>';
            $a[] = '          </div>'; // thumbnail galeria-thumbnail
            $a[] = '        </div>'; // col
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

} // Clase VinculosGalerias

?>
