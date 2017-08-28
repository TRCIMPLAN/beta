<?php
/**
 * TrcIMPLAN Sitio Web - UsoDeSueloCentroVecinal
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
 * Clase UsoDeSueloCentroVecinal
 */
class UsoDeSueloCentroVecinal extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre                     = 'Uso de suelo CV';
        $this->fecha                      = '2017-08-22T12:27';
        // El nombre del archivo a crear
        $this->archivo                    = 'uso-de-suelo-centro-vecinal';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Uso de suelo para centro vecinal.';
        $this->claves                     = 'IMPLAN, Torreon, Usos, Suelo, Centro, Vecinal';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Información Geográfica > Zonificación Secundaria';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SIG/UsoDeSueloCentroVecinal.md';
    } // constructor

} // Clase UsoDeSueloCentroVecinal

?>
