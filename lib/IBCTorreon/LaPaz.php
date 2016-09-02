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
 * Clase LaPaz
 */
class LaPaz extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'La Paz';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'la-paz';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia La Paz de IBC Torreón.';
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
                'Población total' => '1499',
                'Porcentaje de población masculina' => '50.54',
                'Porcentaje de población femenina' => '49.46',
                'Porcentaje de población de 0 a 14 años' => '40.41',
                'Porcentaje de población de 15 a 64 años' => '58.58',
                'Porcentaje de población de 65 y más años' => '1.01',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '2.12',
                'Porcentaje de población nacida en otro estado' => '15.56',
                'Porcentaje de población con discapacidad' => '1.67'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '8.09',
                'Grado Promedio de Escolaridad masculina' => '7.98',
                'Grado Promedio de Escolaridad femenina' => '8.20'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '57.79',
                'Población Económicamente Activa masculina' => '74.53',
                'Población Económicamente Activa femenina' => '25.47',
                'Población Ocupada' => '94.71',
                'Población Ocupada masculina' => '73.93',
                'Población Ocupada femenina' => '26.07',
                'Población Desocupada' => '5.29',
                'Derechohabiencia' => '71.01'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '85.60',
                'Hogares Jefatura femenina' => '14.40',
                'Ocupación por Vivienda' => '3.90',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '99.54',
                'Viviendas con Drenaje' => '99.53',
                'Viviendas con Televisión' => '98.25',
                'Viviendas con Automóvil' => '43.30',
                'Viviendas con Computadora' => '35.13',
                'Viviendas con Celular' => '72.22',
                'Viviendas con Internet' => '12.54'
            ),
            'Unidades Económicas' => array(
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '63.16',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '21.05',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '5.26',
                'Cuarta actividad nombre' => 'Educativos',
                'Cuarta actividad porcentaje' => '5.26',
                'Quinta actividad nombre' => 'Industria Manufacturera',
                'Quinta actividad porcentaje' => '5.26'
            )
        );
    } // datos

} // Clase LaPaz

?>
