<?php
/**
 * Plataforma de Conocimiento - Breves Índice
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
 * Clase BrevesIndice
 */
class BrevesIndice extends Breves {

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
            throw new \Exception("Error en BrevesIndice: El recolector no tiene publicaciones.");
        }
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular encabezado
        $a[] = $this->encabezado_html();
        // Acumular breves
        foreach ($this->recolector->obtener_publicaciones($this->cantidad_maxima) as $p) {
            // Validar publicacion
            $p->validar();
            // Pasar valores a la puyblicación
            $p->en_raiz = $this->en_raiz;
            $p->en_otro = $this->en_otro;
            // Acumular
            $a[] = '      <div class="media breve">';
            // Si tiene imagen previa
            if ($p->imagen_previa != '') {
                $a[] = sprintf('        <a class="pull-left" href="%s"><img class="media-object" src="%s"></a>', $p->url(), $p->imagen_previa_url());
            } elseif ($p->icono != '') {
                $a[] = sprintf('        <a class="pull-left %s indice-icono" href="%s"></a>', $p->icono, $p->url()); // Tiene icono Font Awsome
            }
            $a[] = '        <div class="media-body">';
            $a[] = sprintf('          <h3 class="media-heading"><a href="%s">%s</a></h3>', $p->url(), $p->nombre);
            if ($p->descripcion != '') {
                $a[] = sprintf('          <p>%s</p>', $p->descripcion);
            }
            if (is_array($p->autor)) {
                $a[] = sprintf('          <p class="pull-left autor-fecha">Por %s, %s</p>', implode(', ', $p->autor), $p->fecha_con_formato_humano());
            } else {
                $a[] = sprintf('          <p class="pull-left autor-fecha">Por %s, %s</p>', $p->autor, $p->fecha_con_formato_humano());
            }
            $a[] = '        </div>';
            $a[] = '      </div>';
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

} // Clase BrevesIndice

?>
