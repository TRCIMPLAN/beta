<?php
/**
 * TrcIMPLAN Sitio Web - IBC Torreón Club Campestre Montebello
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano
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

namespace IBCTorreon;

/**
 * Clase ClubCampestreMontebello
 */
class ClubCampestreMontebello extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Club Campestre Montebello';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2017-01-18 14:53:48';
        // El nombre del archivo a crear
        $this->archivo     = 'club-campestre-montebello';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Club Campestre Montebello en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Desagregación, Colonia';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio  = 'ibc-torreon';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu = 'Indicadores Básicos por Colonias > Colonias de Torreón';
        // Para el Organizador
        $this->categorias  = array();
        $this->fuentes     = array();
        $this->regiones    = array('Torreón');
    } // constructor

    /**
     * Datos
     *
     * @return array Arreglo asociativo
     */
    public function datos() {
        return array(
            'Demografía' => array(
                '2010' => array(
                    'Población total' => 164,
                    'Porcentaje de población masculina' => 49.39,
                    'Porcentaje de población femenina' => 50.61,
                    'Porcentaje de población de 0 a 14 años' => 25.00,
                    'Porcentaje de población de 15 a 64 años' => 67.68,
                    'Porcentaje de población de 65 y más años' => 1.83,
                    'Porcentaje de población no especificada' => 5.49,
                    'Fecundidad promedio' => 1.74,
                    'Porcentaje de población con discapacidad' => 4.42
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 49.61,
                    'Población Económicamente Activa masculina' => 57.14,
                    'Población Económicamente Activa femenina' => 42.86,
                    'Población Ocupada' => 98.39,
                    'Población Ocupada masculina' => 56.45,
                    'Población Ocupada femenina' => 43.55,
                    'Población Desocupada' => 1.61,
                    'Derechohabiencia' => 81.10
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 36,
                    'Ocupación por Vivienda' => 4.56,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 97.22,
                    'Viviendas con Drenaje' => 97.22,
                    'Viviendas con Televisión' => 97.22,
                    'Viviendas con Automóvil' => 97.22,
                    'Viviendas con Computadora' => 94.44
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 3,
                    'Primer actividad nombre' => 'Inmobiliarios',
                    'Primer actividad porcentaje' => 33.33,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 33.33,
                    'Tercera actividad nombre' => 'Esparcimiento, Culturales, Deportivos',
                    'Tercera actividad porcentaje' => 33.33
                )
            )
        );
    } // datos

    /**
     * Mapas
     *
     * @return string
     */
    public function mapas() {
        return array(
            'Límites'         => \Configuracion\IBCTorreonConfig::LIMITES,
            'Centro latitud'  => 25.5162958198422,
            'Centro longitud' => -103.368921342367
        );
    } // mapas

} // Clase ClubCampestreMontebello

?>
