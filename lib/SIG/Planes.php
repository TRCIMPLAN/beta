<?php
/**
 * TrcIMPLAN Sitio Web - Planes
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
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

namespace SIG;

/**
 * Clase Planes
 *
 * No crea archivo. Es para poner la opción en index.html
 */
class Planes extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Planes';
        $this->fecha                      = '2015-01-01T08:00';
        // El nombre del archivo a crear
        $this->archivo                    = ''; // No hay archivo HTML a crear
        // Imágenes
        $this->imagen                     = 'introduccion/imagen.jpg';
        $this->imagen_previa              = 'introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Documentos oficiales que tienen que ver con desarrollo urbano.';
        $this->claves                     = 'IMPLAN, Torreon, Planes, Documentos, Reglamentos';
        // URL de destino
        $this->url                        = '../sig-planes/index.html';
    } // constructor

} // Clase Planes

?>
