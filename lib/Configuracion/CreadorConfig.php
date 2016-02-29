<?php
/**
 * TrcIMPLAN Sitio Web - Creador Config
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

namespace Configuracion;

/**
 * Clase CreadorConfig
 *
 * Define las rutas a las imprentas que tomará \Base\Creador
 */
class CreadorConfig {

    // Rutas a las clases de ImprentaPublicaciones
    public $imprentas = array(
        '\\Blog\\Imprenta',
        '\\ConsejoDirectivo\\Imprenta',
        '\\Contacto\\Imprenta',
        '\\Institucional\\Imprenta',
        '\\PlanEstrategicoMetropolitano\\Imprenta',
        '\\PreguntasFrecuentes\\Imprenta',
        '\\Proyectos\\Imprenta',
        '\\SalaPrensa\\Imprenta',
        '\\SIG\\Imprenta',
        '\\SIGMapasTorreon\\Imprenta',
        '\\SIGPlanes\\Imprenta',
        '\\SMI\\Imprenta',
        '\\SMICategorias\\Imprenta',
        '\\SMIGeorreferenciados\\Imprenta',
        '\\SMIIndicadoresGomezPalacio\\Imprenta',
        '\\SMIIndicadoresLaLaguna\\Imprenta',
        '\\SMIIndicadoresLerdo\\Imprenta',
        '\\SMIIndicadoresMatamoros\\Imprenta',
        '\\SMIIndicadoresTorreon\\Imprenta',
        '\\Terminos\\Imprenta');

} // Clase CreadorConfig

?>
