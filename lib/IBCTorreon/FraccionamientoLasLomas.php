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
 * Clase FraccionamientoLasLomas
 */
class FraccionamientoLasLomas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Fraccionamiento Las Lomas';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'fraccionamiento-las-lomas';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Fraccionamiento Las Lomas de IBC Torreón.';
        $this->claves          = 'IMPLAN, Torreon, Desagregación';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio      = 'ibc-torreon';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu     = 'IBC > IBC Torreón';
        // Para el Organizador
        $this->categorias      = array();
        $this->fuentes         = array();
        $this->regiones        = array();
    } // constructor

    /**
     * Datos
     *
     * @return array Arreglo asociativo
     */
    public function datos() {
        return array(
            'Demografía' => array(
                'Población total' => '447',
                'Porcentaje de población masculina' => '48.55',
                'Porcentaje de población femenina' => '51.45',
                'Porcentaje de población de 0 a 14 años' => '31.54',
                'Porcentaje de población de 15 a 64 años' => '64.43',
                'Porcentaje de población de 65 y más años' => '1.34',
                'Porcentaje de población no especificada' => '2.69',
                'Fecundidad promedio' => '1.39',
                'Porcentaje de población nacida en otro estado' => '26.42',
                'Porcentaje de población con discapacidad' => '1.58'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '14.81',
                'Grado Promedio de Escolaridad masculina' => '15.24',
                'Grado Promedio de Escolaridad femenina' => '14.46'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '64.49',
                'Población Económicamente Activa masculina' => '53.62',
                'Población Económicamente Activa femenina' => '46.38',
                'Población Ocupada' => '98.03',
                'Población Ocupada masculina' => '53.69',
                'Población Ocupada femenina' => '46.31',
                'Población Desocupada' => '1.97',
                'Derechohabiencia' => '87.47'
            ),
            'Viviendas' => array(
                'Hogares' => '135',
                'Hogares Jefatura masculina' => '71.85',
                'Hogares Jefatura femenina' => '28.15',
                'Ocupación por Vivienda' => '3.31',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '96.30',
                'Viviendas con Computadora' => '81.48',
                'Viviendas con Celular' => '100.00',
                'Viviendas con Internet' => '65.19'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '4',
                'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Primer actividad porcentaje' => '50.00',
                'Segunda actividad nombre' => 'Comercio Menudeo',
                'Segunda actividad porcentaje' => '25.00',
                'Tercera actividad nombre' => 'Comercio Mayoreo',
                'Tercera actividad porcentaje' => '25.00'
            )
        );
    } // datos

} // Clase FraccionamientoLasLomas

?>
