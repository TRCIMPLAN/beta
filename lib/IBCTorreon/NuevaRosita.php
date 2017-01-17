<?php
/**
 * TrcIMPLAN Índice Básico de Colonias
 *
 * Copyright (C) 2016 Guillermo Valdes Lozano
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
 * @package TrcIMPLAN
 */

namespace IBCTorreon;

/**
 * Clase NuevaRosita
 */
class NuevaRosita extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Nueva Rosita';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2017-01-17 13:11:23';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'nueva-rosita';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Nueva Rosita en Torreón, Coahuila de Zaragoza, México.';
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
                    'Población total' => 2273,
                    'Porcentaje de población masculina' => 50.64,
                    'Porcentaje de población femenina' => 49.36,
                    'Porcentaje de población de 0 a 14 años' => 26.18,
                    'Porcentaje de población de 15 a 64 años' => 65.46,
                    'Porcentaje de población de 65 y más años' => 8.23,
                    'Porcentaje de población no especificada' => 0.13,
                    'Fecundidad promedio' => 2.39,
                    'Porcentaje de población con discapacidad' => 14.21
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 53.36,
                    'Población Económicamente Activa masculina' => 66.32,
                    'Población Económicamente Activa femenina' => 33.68,
                    'Población Ocupada' => 90.09,
                    'Población Ocupada masculina' => 64.55,
                    'Población Ocupada femenina' => 35.45,
                    'Población Desocupada' => 9.91,
                    'Derechohabiencia' => 62.03
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 591,
                    'Ocupación por Vivienda' => 3.85,
                    'Viviendas con Electricidad' => 98.65,
                    'Viviendas con Agua' => 98.82,
                    'Viviendas con Drenaje' => 99.15,
                    'Viviendas con Televisión' => 96.95,
                    'Viviendas con Automóvil' => 32.02,
                    'Viviendas con Computadora' => 21.05
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 82,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 42.68,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 26.83,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 14.63,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 6.10,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 3.66
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
            'Centro latitud'  => 25.5416784864172,
            'Centro longitud' => -103.473490663773
        );
    } // mapas

} // Clase NuevaRosita

?>
