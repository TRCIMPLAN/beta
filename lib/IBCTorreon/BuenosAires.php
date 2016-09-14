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
 * Clase BuenosAires
 */
class BuenosAires extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Buenos Aires';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'buenos-aires';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Buenos Aires de IBC Torreón.';
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
                'Población total' => '238',
                'Porcentaje de población masculina' => '45.66',
                'Porcentaje de población femenina' => '54.34',
                'Porcentaje de población de 0 a 14 años' => '29.81',
                'Porcentaje de población de 15 a 64 años' => '67.09',
                'Porcentaje de población de 65 y más años' => '3.10',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '2.12',
                'Porcentaje de población nacida en otro estado' => '13.36',
                'Porcentaje de población con discapacidad' => '1.87'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '7.49',
                'Grado Promedio de Escolaridad masculina' => '7.24',
                'Grado Promedio de Escolaridad femenina' => '7.70'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '53.47',
                'Población Económicamente Activa masculina' => '74.06',
                'Población Económicamente Activa femenina' => '25.94',
                'Población Ocupada' => '93.20',
                'Población Ocupada masculina' => '73.43',
                'Población Ocupada femenina' => '26.57',
                'Población Desocupada' => '6.80',
                'Derechohabiencia' => '74.90'
            ),
            'Viviendas' => array(
                'Hogares' => '62',
                'Hogares Jefatura masculina' => '81.59',
                'Hogares Jefatura femenina' => '18.41',
                'Ocupación por Vivienda' => '3.84',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '99.12',
                'Viviendas con Drenaje' => '99.19',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '25.82',
                'Viviendas con Computadora' => '14.33',
                'Viviendas con Celular' => '59.67',
                'Viviendas con Internet' => '0.23'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '2',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '100.00'
            )
        );
    } // datos

} // Clase BuenosAires

?>
