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
 * Clase ResidencialElSecreto
 */
class ResidencialElSecreto extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Residencial El Secreto';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2017-01-17 13:11:23';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'residencial-el-secreto';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial El Secreto en Torreón, Coahuila de Zaragoza, México.';
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
                    'Población total' => 549,
                    'Porcentaje de población masculina' => 46.08,
                    'Porcentaje de población femenina' => 53.92,
                    'Porcentaje de población de 0 a 14 años' => 33.88,
                    'Porcentaje de población de 15 a 64 años' => 60.47,
                    'Porcentaje de población de 65 y más años' => 2.91,
                    'Porcentaje de población no especificada' => 2.74,
                    'Fecundidad promedio' => 1.53,
                    'Porcentaje de población con discapacidad' => 0.93
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 53.30,
                    'Población Económicamente Activa masculina' => 62.87,
                    'Población Económicamente Activa femenina' => 37.13,
                    'Población Ocupada' => 97.46,
                    'Población Ocupada masculina' => 62.94,
                    'Población Ocupada femenina' => 37.06,
                    'Población Desocupada' => 2.54,
                    'Derechohabiencia' => 73.04
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 134,
                    'Ocupación por Vivienda' => 4.10,
                    'Viviendas con Electricidad' => 98.51,
                    'Viviendas con Agua' => 98.51,
                    'Viviendas con Drenaje' => 98.51,
                    'Viviendas con Televisión' => 98.51,
                    'Viviendas con Automóvil' => 94.78,
                    'Viviendas con Computadora' => 85.82
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 10,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 30.00,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Educativos',
                    'Tercera actividad porcentaje' => 10.00,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 10.00,
                    'Quinta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                    'Quinta actividad porcentaje' => 10.00
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
            'Centro latitud'  => 25.5377576978352,
            'Centro longitud' => -103.366944820481
        );
    } // mapas

} // Clase ResidencialElSecreto

?>
