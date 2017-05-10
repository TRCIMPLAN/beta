<?php
/**
 * TrcIMPLAN Sitio Web - IBCTorreon SegundoDeCobianCentro
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
 * Clase SegundoDeCobianCentro
 */
class SegundoDeCobianCentro extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Segundo de Cobián (Centro)';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2017-05-10T11:56:51';
        // El nombre del archivo a crear
        $this->archivo     = 'segundo-de-cobian-centro';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Segundo de Cobián (Centro) en Torreón, Coahuila de Zaragoza, México.';
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
                    'Población total' => 8015,
                    'Porcentaje de población masculina' => 46.37,
                    'Porcentaje de población femenina' => 53.63,
                    'Porcentaje de población de 0 a 14 años' => 17.18,
                    'Porcentaje de población de 15 a 64 años' => 64.10,
                    'Porcentaje de población de 65 y más años' => 16.36,
                    'Porcentaje de población no especificada' => 2.36,
                    'Fecundidad promedio' => 2.07,
                    'Porcentaje de población con discapacidad' => 9.42
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.02,
                    'Población Económicamente Activa masculina' => 58.81,
                    'Población Económicamente Activa femenina' => 41.19,
                    'Población Ocupada' => 93.34,
                    'Población Ocupada masculina' => 57.94,
                    'Población Ocupada femenina' => 42.06,
                    'Población Desocupada' => 6.66,
                    'Derechohabiencia' => 67.95
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 2560,
                    'Ocupación por Vivienda' => 3.13,
                    'Viviendas con Electricidad' => 99.37,
                    'Viviendas con Agua' => 99.13,
                    'Viviendas con Drenaje' => 99.01,
                    'Viviendas con Televisión' => 97.41,
                    'Viviendas con Automóvil' => 53.01,
                    'Viviendas con Computadora' => 43.28
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 1807,
                    'Primer actividad nombre' => 'Salud',
                    'Primer actividad porcentaje' => 22.25,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 18.43,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 13.28,
                    'Cuarta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                    'Cuarta actividad porcentaje' => 10.51,
                    'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Quinta actividad porcentaje' => 10.13
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
            'Centro latitud'  => 25.5440752765227,
            'Centro longitud' => -103.443083806121
        );
    } // mapas

    /**
     * Reseña
     *
     * @return string
     */
    public function resena() {
        return <<<FINAL
![Fuente El Pensador](segundo-de-cobian-centro/fuente-el-pensador-800x450.jpg) 

### Historia 

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enimad minim veniam, quis nostrud exercitation ullamco laboris nisi utaliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enimad minim veniam, quis nostrud exercitation ullamco laboris nisi utaliquip ex ea commodo consequat. 

### Características

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enimad minim veniam, quis nostrud exercitation ullamco laboris nisi utaliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enimad minim veniam, quis nostrud exercitation ullamco laboris nisi utaliquip ex ea commodo consequat.
FINAL;
    } // resena

} // Clase SegundoDeCobianCentro

?>
