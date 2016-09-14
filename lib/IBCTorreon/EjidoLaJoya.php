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
 * Clase EjidoLaJoya
 */
class EjidoLaJoya extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Ejido La Joya';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'ejido-la-joya';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Ejido La Joya de IBC Torreón.';
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
                'Población total' => '3054',
                'Porcentaje de población masculina' => '47.64',
                'Porcentaje de población femenina' => '52.36',
                'Porcentaje de población de 0 a 14 años' => '30.80',
                'Porcentaje de población de 15 a 64 años' => '62.64',
                'Porcentaje de población de 65 y más años' => '6.41',
                'Porcentaje de población no especificada' => '0.15',
                'Fecundidad promedio' => '2.61',
                'Porcentaje de población nacida en otro estado' => '12.64',
                'Porcentaje de población con discapacidad' => '4.40'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '7.83',
                'Grado Promedio de Escolaridad masculina' => '7.88',
                'Grado Promedio de Escolaridad femenina' => '7.79'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '45.43',
                'Población Económicamente Activa masculina' => '73.39',
                'Población Económicamente Activa femenina' => '26.61',
                'Población Ocupada' => '88.78',
                'Población Ocupada masculina' => '72.86',
                'Población Ocupada femenina' => '27.14',
                'Población Desocupada' => '11.22',
                'Derechohabiencia' => '72.44'
            ),
            'Viviendas' => array(
                'Hogares' => '753',
                'Hogares Jefatura masculina' => '78.36',
                'Hogares Jefatura femenina' => '21.64',
                'Ocupación por Vivienda' => '4.06',
                'Viviendas con Electricidad' => '98.71',
                'Viviendas con Agua' => '97.25',
                'Viviendas con Drenaje' => '96.81',
                'Viviendas con Televisión' => '95.93',
                'Viviendas con Automóvil' => '47.95',
                'Viviendas con Computadora' => '48.63',
                'Viviendas con Celular' => '63.76',
                'Viviendas con Internet' => '44.81'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '66',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '48.48',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '15.15',
                'Tercera actividad nombre' => 'Industria Manufacturera',
                'Tercera actividad porcentaje' => '10.61',
                'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Cuarta actividad porcentaje' => '10.61',
                'Quinta actividad nombre' => 'Educativos',
                'Quinta actividad porcentaje' => '6.06'
            )
        );
    } // datos

} // Clase EjidoLaJoya

?>
