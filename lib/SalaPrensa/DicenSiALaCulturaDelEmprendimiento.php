<?php
/**
 * TrcIMPLAN Sitio Web - Dicen sí a la cultura del emprendimiento
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
 * Clase DicenSiALaCulturaDelEmprendimiento
 */
class DicenSiALaCulturaDelEmprendimiento extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Dicen sí a la cultura del emprendimiento';
        $this->fecha                      = '2015-11-23T08:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2015-11-23-dicen-si-a-la-cultura-del-emprendimiento';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El programa de Peñoles Proempleo ha fomentado la creación de 65 nuevas empresas y asesorado a 450, que iniciaron desde amas de casa, personas jubiladas y jóvenes universitarios o recién egresados.';
        $this->claves                     = 'IMPLAN, Torreon, Peñoles, Emprendimiento, Empleo, Proempleo';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/DicenSiALaCulturaDelEmprendimiento.md';
        // Para el Organizador
        $this->categorias                 = array('Empresas', 'Empleo');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase DicenSiALaCulturaDelEmprendimiento

?>
