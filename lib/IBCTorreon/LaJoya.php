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
 * Clase LaJoya
 */
class LaJoya extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'La Joya';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'la-joya';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia La Joya de IBC Torreón.';
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
                'Población total' => '718',
                'Porcentaje de población masculina' => '47.63',
                'Porcentaje de población femenina' => '52.37',
                'Porcentaje de población de 0 a 14 años' => '37.88',
                'Porcentaje de población de 15 a 64 años' => '60.17',
                'Porcentaje de población de 65 y más años' => '1.95',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '1.90',
                'Porcentaje de población nacida en otro estado' => '14.07',
                'Porcentaje de población con discapacidad' => '1.74'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '8.22',
                'Grado Promedio de Escolaridad masculina' => '8.60',
                'Grado Promedio de Escolaridad femenina' => '7.79'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '61.52',
                'Población Económicamente Activa masculina' => '64.21',
                'Población Económicamente Activa femenina' => '35.79',
                'Población Ocupada' => '84.45',
                'Población Ocupada masculina' => '62.79',
                'Población Ocupada femenina' => '37.21',
                'Población Desocupada' => '15.55',
                'Derechohabiencia' => '74.09'
            ),
            'Viviendas' => array(
                'Hogares' => '188',
                'Hogares Jefatura masculina' => '77.66',
                'Hogares Jefatura femenina' => '22.34',
                'Ocupación por Vivienda' => '3.82',
                'Viviendas con Electricidad' => '99.47',
                'Viviendas con Agua' => '99.47',
                'Viviendas con Drenaje' => '99.47',
                'Viviendas con Televisión' => '98.40',
                'Viviendas con Automóvil' => '45.21',
                'Viviendas con Computadora' => '19.68',
                'Viviendas con Celular' => '81.91',
                'Viviendas con Internet' => '17.90'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '8',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '50.00',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '25.00',
                'Tercera actividad nombre' => 'Salud',
                'Tercera actividad porcentaje' => '12.50',
                'Cuarta actividad nombre' => 'Inmobiliarios',
                'Cuarta actividad porcentaje' => '12.50',
                'Quinta actividad nombre' => 'Información Medios Masivos',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase LaJoya

?>
