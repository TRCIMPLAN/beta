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
 * Clase SantaSofia
 */
class SantaSofia extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Santa Sofía';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:11';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'santa-sofia';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Santa Sofía de Torreón.';
        $this->claves      = 'IMPLAN, Torreon, Desagregación';
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
                    'Población total' => 2180,
                    'Porcentaje de población masculina' => 51.01,
                    'Porcentaje de población femenina' => 48.99,
                    'Porcentaje de población de 0 a 14 años' => 37.33,
                    'Porcentaje de población de 15 a 64 años' => 60.27,
                    'Porcentaje de población de 65 y más años' => 1.02,
                    'Porcentaje de población no especificada' => 1.38,
                    'Fecundidad promedio' => 2.05,
                    'Porcentaje de población nacida en otro estado' => 14.15,
                    'Porcentaje de población con discapacidad' => 2.23,
                    'Porcentaje de población de 15 y más analfabeta' => 0.68,
                    'Porcentaje de población de 18 y más' => 55.99,
                    'Porcentaje de población de 18 y más postbásicos' => 16.73
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 8.90,
                    'Grado Promedio de Escolaridad masculina' => 8.79,
                    'Grado Promedio de Escolaridad femenina' => 9.01
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 58.04,
                    'Población Económicamente Activa masculina' => 71.24,
                    'Población Económicamente Activa femenina' => 28.76,
                    'Población Ocupada' => 90.73,
                    'Población Ocupada masculina' => 70.32,
                    'Población Ocupada femenina' => 29.68,
                    'Población Desocupada' => 9.27,
                    'Derechohabiencia' => 61.91
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 590,
                    'Hogares Jefatura masculina' => 86.84,
                    'Hogares Jefatura femenina' => 13.16,
                    'Ocupación por Vivienda' => 3.69,
                    'Viviendas con Electricidad' => 95.21,
                    'Viviendas con Agua' => 98.09,
                    'Viviendas con Drenaje' => 96.73,
                    'Viviendas con Televisión' => 94.85,
                    'Viviendas con Automóvil' => 38.79,
                    'Viviendas con Computadora' => 23.58,
                    'Viviendas con Celular' => 78.58,
                    'Viviendas con Internet' => 11.01
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 45,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 51.11,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 17.78,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 4.44,
                    'Quinta actividad nombre' => 'Gubernamentales',
                    'Quinta actividad porcentaje' => 2.22
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
            'Centro latitud'  => 25.4888441746162,
            'Centro longitud' => -103.359668470761
        );
    } // mapas

} // Clase SantaSofia

?>
