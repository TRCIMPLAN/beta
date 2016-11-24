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
 * Clase LasBrisas
 */
class LasBrisas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Las Brisas';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:09';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'las-brisas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Las Brisas de Torreón.';
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
                    'Población total' => 3607,
                    'Porcentaje de población masculina' => 50.63,
                    'Porcentaje de población femenina' => 49.37,
                    'Porcentaje de población de 0 a 14 años' => 33.27,
                    'Porcentaje de población de 15 a 64 años' => 64.48,
                    'Porcentaje de población de 65 y más años' => 2.26,
                    'Porcentaje de población no especificada' => -0.01,
                    'Fecundidad promedio' => 2.07,
                    'Porcentaje de población nacida en otro estado' => 16.00,
                    'Porcentaje de población con discapacidad' => 9.81,
                    'Porcentaje de población de 15 y más analfabeta' => 1.30,
                    'Porcentaje de población de 18 y más' => 58.75,
                    'Porcentaje de población de 18 y más postbásicos' => 19.26
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 8.89,
                    'Grado Promedio de Escolaridad masculina' => 8.93,
                    'Grado Promedio de Escolaridad femenina' => 8.84
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 49.44,
                    'Población Económicamente Activa masculina' => 74.94,
                    'Población Económicamente Activa femenina' => 25.06,
                    'Población Ocupada' => 90.83,
                    'Población Ocupada masculina' => 73.96,
                    'Población Ocupada femenina' => 26.04,
                    'Población Desocupada' => 9.17,
                    'Derechohabiencia' => 70.21
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 901,
                    'Hogares Jefatura masculina' => 80.98,
                    'Hogares Jefatura femenina' => 19.02,
                    'Ocupación por Vivienda' => 4.00,
                    'Viviendas con Electricidad' => 99.89,
                    'Viviendas con Agua' => 98.55,
                    'Viviendas con Drenaje' => 99.00,
                    'Viviendas con Televisión' => 97.66,
                    'Viviendas con Automóvil' => 43.49,
                    'Viviendas con Computadora' => 25.18,
                    'Viviendas con Celular' => 73.71,
                    'Viviendas con Internet' => 14.42
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 41,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 43.90,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 14.63,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 14.63,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 9.76,
                    'Quinta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Quinta actividad porcentaje' => 7.32
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
            'Centro latitud'  => 25.4902207187318,
            'Centro longitud' => -103.406890150704
        );
    } // mapas

} // Clase LasBrisas

?>
