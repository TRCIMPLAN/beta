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
 * Clase Vencedora
 */
class Vencedora extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Vencedora';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'vencedora';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Vencedora de IBC Torreón.';
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
                'Población total' => '2182',
                'Porcentaje de población masculina' => '49.38',
                'Porcentaje de población femenina' => '50.62',
                'Porcentaje de población de 0 a 14 años' => '25.08',
                'Porcentaje de población de 15 a 64 años' => '63.62',
                'Porcentaje de población de 65 y más años' => '10.84',
                'Porcentaje de población no especificada' => '0.46',
                'Fecundidad promedio' => '2.58',
                'Porcentaje de población nacida en otro estado' => '14.26',
                'Porcentaje de población con discapacidad' => '4.44'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '8.49',
                'Grado Promedio de Escolaridad masculina' => '8.74',
                'Grado Promedio de Escolaridad femenina' => '8.25'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '53.70',
                'Población Económicamente Activa masculina' => '66.47',
                'Población Económicamente Activa femenina' => '33.53',
                'Población Ocupada' => '92.19',
                'Población Ocupada masculina' => '65.51',
                'Población Ocupada femenina' => '34.49',
                'Población Desocupada' => '7.81',
                'Derechohabiencia' => '63.63'
            ),
            'Viviendas' => array(
                'Hogares' => '582',
                'Hogares Jefatura masculina' => '71.11',
                'Hogares Jefatura femenina' => '28.89',
                'Ocupación por Vivienda' => '3.75',
                'Viviendas con Electricidad' => '99.25',
                'Viviendas con Agua' => '98.56',
                'Viviendas con Drenaje' => '98.91',
                'Viviendas con Televisión' => '96.45',
                'Viviendas con Automóvil' => '29.25',
                'Viviendas con Computadora' => '21.41',
                'Viviendas con Celular' => '53.19',
                'Viviendas con Internet' => '13.80'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '59',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '44.07',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '23.73',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '10.17',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '10.17',
                'Quinta actividad nombre' => 'Salud',
                'Quinta actividad porcentaje' => '5.08'
            )
        );
    } // datos

} // Clase Vencedora

?>
