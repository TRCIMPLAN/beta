<?php
/**
 * Plataforma de Conocimiento - Vinculo
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
 * Clase Vinculo
 */
class Vinculo {

    const ICONOS_DIR = 'imagenes'; // Nombre del directorio donde están los subdirectorios 64, 128 y 256 con los iconos
    public $nombre;                // Nombre
    public $vinculo;               // Ruta relativa desde la raíz
    public $icono;                 // Nombre del archivo para el icono, sin extensión
    public $imagen_previa;         // Ruta relativa desde donde está el archivo HTML de la publicación a la imagen previa
    public $descripcion;           // Descripción
    public $autor;                 // Autor
    public $fecha;                 // Fecha
    public $boton_etiqueta;        // Etiqueta para usar como texto en un botón en VinculosTarjetas
    public $en_raiz = false;       // Verdadero para un URL que va a la raiz del sitio web
    public $en_otro = true;        // Verdadero para un URL a OTRO directorio distinto

    /**
     * Constructor
     *
     * @param string Nombre
     * @param string Vínculo
     * @param string Nombre del archivo para el icono, sin extensión
     * @param string Ruta relativa desde donde está el archivo HTML de la publicación a la imagen previa
     * @param string Descripción
     * @param string Autor
     * @param string Fecha
     */
    public function __construct($nombre, $vinculo='', $icono='', $imagen_previa='', $descripcion='', $autor='', $fecha='') {
        $this->nombre        = $nombre;
        $this->vinculo       = $vinculo;
        $this->icono         = $icono;
        $this->imagen_previa = $imagen_previa;
        $this->descripcion   = $descripcion;
        $this->autor         = $autor;
        $this->fecha         = $fecha;
    } // constructor

    /**
     * URL
     *
     * @return string URL relativo para vincular a la página en autores
     */
    public function url() {
        if ($this->vinculo == '') {
            return '#';
        } else {
            return $this->vinculo;
        }
    } // url

    /**
     * Icono URL
     *
     * @param  string Tamaño del icono, puede ser 64, 128 o 256, por defecto 128
     * @return string URL relativo a la imagen icono
     */
    public function icono_url($tamano='64') {
        if ($this->icono == '') {
            $this->icono = 'unknown';
        }
        if ($this->en_raiz) {
            return sprintf('%s/%s/%s.png', self::ICONOS_DIR, $tamano, $this->icono);
        } else {
            return sprintf('../%s/%s/%s.png', self::ICONOS_DIR, $tamano, $this->icono);
        }
    } // icono_url

    /**
     * Imagen previa URL
     *
     * @return string URL relativo a la imagen previa
     */
    public function imagen_previa_url() {
        if ($this->imagen_previa == '') {
            return '';
        } else {
            return $this->imagen_previa;
        }
    } // imagen_previa_url

} // Clase Vinculo

?>
