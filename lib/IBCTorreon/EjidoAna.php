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
 * Clase EjidoAna
 */
class EjidoAna extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Ejido Ana';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:08';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'ejido-ana';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ejido Ana de Torreón.';
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
                    'Población total' => 2572,
                    'Porcentaje de población masculina' => 49.51,
                    'Porcentaje de población femenina' => 50.49,
                    'Porcentaje de población de 0 a 14 años' => 31.52,
                    'Porcentaje de población de 15 a 64 años' => 62.94,
                    'Porcentaje de población de 65 y más años' => 5.04,
                    'Porcentaje de población no especificada' => 0.50,
                    'Fecundidad promedio' => 2.44,
                    'Porcentaje de población nacida en otro estado' => 13.22,
                    'Porcentaje de población con discapacidad' => 4.57,
                    'Porcentaje de población de 15 y más analfabeta' => 2.20,
                    'Porcentaje de población de 18 y más' => 60.45,
                    'Porcentaje de población de 18 y más postbásicos' => 13.49
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 7.83,
                    'Grado Promedio de Escolaridad masculina' => 7.81,
                    'Grado Promedio de Escolaridad femenina' => 7.84
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 48.50,
                    'Población Económicamente Activa masculina' => 74.88,
                    'Población Económicamente Activa femenina' => 25.12,
                    'Población Ocupada' => 91.19,
                    'Población Ocupada masculina' => 73.14,
                    'Población Ocupada femenina' => 26.86,
                    'Población Desocupada' => 8.81,
                    'Derechohabiencia' => 65.72
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 625,
                    'Hogares Jefatura masculina' => 77.63,
                    'Hogares Jefatura femenina' => 22.37,
                    'Ocupación por Vivienda' => 4.12,
                    'Viviendas con Electricidad' => 99.46,
                    'Viviendas con Agua' => 98.11,
                    'Viviendas con Drenaje' => 95.52,
                    'Viviendas con Televisión' => 97.71,
                    'Viviendas con Automóvil' => 39.50,
                    'Viviendas con Computadora' => 15.76,
                    'Viviendas con Celular' => 65.61,
                    'Viviendas con Internet' => 6.69
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 101,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 36.63,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 19.80,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 13.86,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 8.91,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 7.92
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
            'Centro latitud'  => 25.0,
            'Centro longitud' => -103.5);
    } // mapas

} // Clase EjidoAna

?>
