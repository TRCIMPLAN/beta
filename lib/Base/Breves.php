<?php
/**
 * Plataforma de Conocimiento - Breves
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
 * Clase Abstracta Breves
 */
abstract class Breves {

    public $titulo;           // Texto, título de la página
    public $descripcion;      // Texto, descripción para meta tag
    public $encabezado;       // Código HTML para usarse como encabezado
    public $encabezado_color; // Texto, color de fondo del encabezado #nnnnnn
    public $encabezado_icono; // Texto, icono Font Awesome
    public $en_raiz = false;  // Si es verdadero los vínculos serán para un archivo en la raíz del sitio
    public $en_otro = false;  // Si es verdadero el archivo va a OTRO lugar como al directorio autores, categorias, etc.
    public $cantidad_maxima;  // Entero, cantidad máxima de publicaciones a mostrar, si no está definido usa todas
    protected $recolector;    // Instancia de Recolector

    /**
     * Constructor
     *
     * @param mixed Instancia de Recolector
     */
    public function __construct(Recolector $recolector) {
        $this->recolector = $recolector;
    } // constructor

    /**
     * Encabezado HTML
     */
    protected function encabezado_html() {
        // Validar título
        if (!is_string($this->titulo) || ($this->titulo == '')) {
            return '<!-- Aviso: No hay título para encabezado. -->';
        }
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Si el encabezado está definido
        if ($this->encabezado != '') {
            // Se pone el código HTML del encabezado
            $a[] = $this->encabezado;
            // Y el título de la página es invisible
            if ($this->titulo != '') {
                $a[] = "      <h1 style=\"display:none;\">{$this->titulo}</h1>";
            }
        } else {
            // No hay código HTML, vamos a construir el encabezado
            if ($this->encabezado_color != '') {
                $a[] = sprintf('      <div class="encabezado" style="background-color:%s;">', $this->encabezado_color);
            } else {
                $a[] = '      <div class="encabezado">';
            }
            if ($this->encabezado_icono != '') {
                $enca = sprintf('<i class="%s encabezado-icono"></i> %s', $this->encabezado_icono, $this->titulo);
            } else {
                $enca = $this->titulo;
            }
            $a[] = "        <span><h1>$enca</h1></span>";
            if ($this->descripcion != '') {
                $a[] = sprintf('        <div class="encabezado-descripcion">%s</div>', $this->descripcion);
            }
            $a[] = '      </div>';
        }
        // Entregar
        return implode("\n", $a);
    } // encabezado_html

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

} // Abstract Class Breves

?>
