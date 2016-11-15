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
 * Clase LosLaureles
 */
class LosLaureles extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Los Laureles';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-15 08:36:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'los-laureles';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Los Laureles de Torreón.';
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
                    'Población total' => 1919,
                    'Porcentaje de población masculina' => 48.51,
                    'Porcentaje de población femenina' => 51.49,
                    'Porcentaje de población de 0 a 14 años' => 36.69,
                    'Porcentaje de población de 15 a 64 años' => 55.45,
                    'Porcentaje de población de 65 y más años' => 0.63,
                    'Porcentaje de población no especificada' => 7.23,
                    'Fecundidad promedio' => 1.96,
                    'Porcentaje de población nacida en otro estado' => 15.84,
                    'Porcentaje de población con discapacidad' => 1.41,
                    'Porcentaje de población de 15 y más analfabeta' => 0.59,
                    'Porcentaje de población de 18 y más' => 52.84,
                    'Porcentaje de población de 18 y más postbásicos' => 18.03
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 9.47,
                    'Grado Promedio de Escolaridad masculina' => 9.46,
                    'Grado Promedio de Escolaridad femenina' => 9.48
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 57.45,
                    'Población Económicamente Activa masculina' => 68.15,
                    'Población Económicamente Activa femenina' => 31.85,
                    'Población Ocupada' => 94.87,
                    'Población Ocupada masculina' => 67.45,
                    'Población Ocupada femenina' => 32.55,
                    'Población Desocupada' => 5.13,
                    'Derechohabiencia' => 69.98
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 484,
                    'Hogares Jefatura masculina' => 80.79,
                    'Hogares Jefatura femenina' => 19.21,
                    'Ocupación por Vivienda' => 3.96,
                    'Viviendas con Electricidad' => 98.97,
                    'Viviendas con Agua' => 98.97,
                    'Viviendas con Drenaje' => 98.76,
                    'Viviendas con Televisión' => 98.14,
                    'Viviendas con Automóvil' => 37.19,
                    'Viviendas con Computadora' => 19.83,
                    'Viviendas con Celular' => 83.26,
                    'Viviendas con Internet' => 10.33
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 31,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 51.61,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 19.35,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 16.13,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 6.45,
                    'Quinta actividad nombre' => 'Manejo de Residuos',
                    'Quinta actividad porcentaje' => 3.23
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
        return array('Límites' => \Configuracion\IBCTorreonConfig::LIMITES);
    } // mapas

} // Clase LosLaureles

?>
