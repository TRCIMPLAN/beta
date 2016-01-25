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
    public $en_raiz = false;  // Si es verdadero los vínculos serán para un archivo en la raíz del sitio
    public $en_otro = true;   // Si es verdadero el archivo va a OTRO lugar como al directorio autores, categorias, etc.

    /**
     * Caracteres para web
     *
     * @param  string Texto a convertir
     * @return string Convertido
     */
    protected function caracteres_para_web($in_texto) {
        $buscados            = array('ñ', 'Ñ', 'ü', 'Ü', 'á', 'Á', 'é', 'É', 'í', 'Í', 'ó', 'Ó', 'ú', 'Ú');
        $cambios             = array('n', 'n', 'u', 'u', 'a', 'a', 'e', 'e', 'i', 'i', 'o', 'o', 'u', 'u');
        $sin_acentos         = str_replace($buscados, $cambios, $in_texto);
        $especiales          = array(' ', '#', '&', '%', '$', '@', '(', ')', '.', ',');
        $sin_especiales      = str_replace($especiales, '-', $sin_acentos);
        $sin_repetir_guiones = preg_replace('/\-+/', '-', $sin_especiales);
        return strtolower($sin_repetir_guiones);
    } // caracteres_para_web

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
