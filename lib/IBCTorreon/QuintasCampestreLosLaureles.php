<?php
/**
 * TrcIMPLAN Sitio Web - IBCTorreon QuintasCampestreLosLaureles
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

namespace IBCTorreon;

/**
 * Clase QuintasCampestreLosLaureles
 */
class QuintasCampestreLosLaureles extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Quintas Campestre - Los Laureles';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2017-01-19T11:04:26';
        // El nombre del archivo a crear
        $this->archivo     = 'quintas-campestre-los-laureles';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Quintas Campestre - Los Laureles en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Desagregación, Colonia, {$this->conglomerado->nombre}';
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
                    'Población total' => 921,
                    'Porcentaje de población masculina' => 49.95,
                    'Porcentaje de población femenina' => 50.05,
                    'Porcentaje de población de 0 a 14 años' => 28.70,
                    'Porcentaje de población de 15 a 64 años' => 49.73,
                    'Porcentaje de población de 65 y más años' => 3.95,
                    'Porcentaje de población no especificada' => 17.62,
                    'Fecundidad promedio' => 1.50,
                    'Porcentaje de población con discapacidad' => 2.38
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 58.51,
                    'Población Económicamente Activa masculina' => 60.61,
                    'Población Económicamente Activa femenina' => 39.39,
                    'Población Ocupada' => 97.61,
                    'Población Ocupada masculina' => 60.34,
                    'Población Ocupada femenina' => 39.66,
                    'Población Desocupada' => 2.39,
                    'Derechohabiencia' => 70.15
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 200,
                    'Ocupación por Vivienda' => 4.60,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.54,
                    'Viviendas con Automóvil' => 98.33,
                    'Viviendas con Computadora' => 94.76
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 4,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 50.00,
                    'Segunda actividad nombre' => 'Inmobiliarios',
                    'Segunda actividad porcentaje' => 25.00,
                    'Tercera actividad nombre' => 'Esparcimiento, Culturales, Deportivos',
                    'Tercera actividad porcentaje' => 25.00
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
            'Centro latitud'  => 25.5734123048965,
            'Centro longitud' => -103.376089823946
        );
    } // mapas

    /**
     * Reseña
     *
     * @return string
     */
    public function resena() {
        return '';
    } // resena

} // Clase QuintasCampestreLosLaureles

?>
