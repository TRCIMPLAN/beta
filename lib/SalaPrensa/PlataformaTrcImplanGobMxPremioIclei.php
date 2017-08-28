<?php
/**
 * TrcIMPLAN Sitio Web - Plataforma trcimplan.gob.mx Premio ICLEI
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

namespace SalaPrensa;

/**
 * Clase PlataformaTrcImplanGobMxPremioIclei
 */
class PlataformaTrcImplanGobMxPremioIclei extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Plataforma trcimplan.gob.mx Premio ICLEI';
        $this->fecha                      = '2015-11-10T16:20';
        // El nombre del archivo a crear
        $this->archivo                    = '2015-11-10-plataforma-trcimplangobmx-premio-iclei';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El ICLEI reconoció al sitio web como una herramienta para la planeación metropolitana.';
        $this->claves                     = 'IMPLAN, Torreon, Plataforma, ICLEI';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/PlataformaTrcImplanGobMxPremioIclei.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase PlataformaTrcImplanGobMxPremioIclei

?>
