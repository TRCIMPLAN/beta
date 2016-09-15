<?php
/**
 * TrcIMPLAN Sitio Web - Introduccion
 *
 * Copyright (C) 2016 IMPLAN Torreón
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
 * @package TrcIMPLANSitioWeb
 */

namespace IBC;

/**
 * Clase Introduccion
 */
class Introduccion extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Título';
     // $this->autor       = '';
        $this->fecha       = '2016-00-00T00:00';
        // El nombre del archivo a crear
        $this->archivo     = 'titulo';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Descripción.';
        $this->claves      = 'Clave1, Clave2, Clave3';
        // Para el Organizador
        $this->categorias  = array(); // Arreglo con las categorías
        $this->fuentes     = array(); // Arreglo con las fuentes
        $this->regiones    = array(); // Arreglo con las regiones
        // Banderas que pueden tener un valor por defecto en \Configuracion\PublicacionConfig
     // $this->poner_imagen_en_contenido = false; // Poner la imagen en la parte superior izquierda
     // $this->para_compartir            = false; // Poner los botones para compartir en redes sociales
    } // constructor

} // Clase Introduccion

?>
