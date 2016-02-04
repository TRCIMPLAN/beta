<?php
/**
 * Plataforma de Conocimiento - Vinculos Detallados
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
 * Clase VinculosDetallados
 */
class VinculosDetallados extends Vinculos {

    // public $en_raiz;
    // public $en_otro;
    // protected $vinculos;
    public $icono_tamano = 128;

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
        foreach ($this->vinculos as $vinculo) {
            // Pasar valores al vínculo
            $vinculo->en_raiz = $this->en_raiz;
            $vinculo->en_otro = $this->en_otro;
            // Acumular
            $a[] = '      <div class="media breve">';
            // Si tiene URL se pondrán vínculos, de lo contrario no
            if ($vinculo->url() != '') {
                // Tiene URL
                if ($vinculo->imagen_previa != '') {
                    $a[] = sprintf('        <a class="pull-left" href="%s"><img class="media-object" src="%s"></a>', $vinculo->url(), $vinculo->imagen_previa_url());
                } elseif ($vinculo->icono_url() != '') {
                    $a[] = sprintf('        <a class="pull-left" href="%s"><img class="media-object" src="%s"></a>', $vinculo->url(), $vinculo->icono_url($this->icono_tamano));
                }
                $a[] = '        <div class="media-body">';
                $a[] = sprintf('          <h3 class="media-heading"><a href="%s">%s</a></h3>', $vinculo->url(), $vinculo->nombre);
            } else {
                // NO tiene URL
                if ($vinculo->imagen_previa != '') {
                    $a[] = sprintf('        <img class="media-object pull-left" src="%s">', $vinculo->imagen_previa_url());
                } elseif ($vinculo->icono_url() != '') {
                    $a[] = sprintf('        <img class="media-object pull-left" src="%s">', $vinculo->icono_url($this->icono_tamano));
                }
                $a[] = '        <div class="media-body">';
                $a[] = sprintf('          <h3 class="media-heading">%s</h3>', $vinculo->nombre);
            }
            if ($vinculo->descripcion != '') {
                $a[] = $vinculo->descripcion;
            }
            if (($vinculo->autor != '') && ($vinculo->fecha != '')) {
                $a[] = sprintf('          <p class="detallados-autor-fecha">Por %s, %s</p>', $vinculo->autor, $vinculo->fecha);
            } elseif ($vinculo->autor != '') {
                $a[] = sprintf('          <p class="detallados-autor-fecha">Por %s</p>', $vinculo->autor);
            } elseif ($vinculo->fecha != '') {
                $a[] = sprintf('          <p class="detallados-autor-fecha">%s</p>', $vinculo->fecha);
            }
            $a[] = '        </div>'; // media-body
            $a[] = '      </div>'; // media breve
        }
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

} // Clase VinculosDetallados

?>
