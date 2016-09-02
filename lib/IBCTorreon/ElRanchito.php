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
 * Clase ElRanchito
 */
class ElRanchito extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'El Ranchito';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'el-ranchito';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia El Ranchito de IBC Torreón.';
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
                'Población total' => '668',
                'Porcentaje de población masculina' => '49.59',
                'Porcentaje de población femenina' => '50.41',
                'Porcentaje de población de 0 a 14 años' => '36.59',
                'Porcentaje de población de 15 a 64 años' => '60.26',
                'Porcentaje de población de 65 y más años' => '3.09',
                'Porcentaje de población no especificada' => '0.06',
                'Fecundidad promedio' => '2.29',
                'Porcentaje de población nacida en otro estado' => '16.71',
                'Porcentaje de población con discapacidad' => '2.68'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '6.93',
                'Grado Promedio de Escolaridad masculina' => '6.72',
                'Grado Promedio de Escolaridad femenina' => '7.14'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '49.86',
                'Población Económicamente Activa masculina' => '72.70',
                'Población Económicamente Activa femenina' => '27.30',
                'Población Ocupada' => '90.05',
                'Población Ocupada masculina' => '70.44',
                'Población Ocupada femenina' => '29.56',
                'Población Desocupada' => '9.95',
                'Derechohabiencia' => '49.11'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '84.44',
                'Hogares Jefatura femenina' => '15.56',
                'Ocupación por Vivienda' => '4.20',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '90.50',
                'Viviendas con Drenaje' => '65.54',
                'Viviendas con Televisión' => '96.21',
                'Viviendas con Automóvil' => '37.76',
                'Viviendas con Computadora' => '14.15',
                'Viviendas con Celular' => '70.16',
                'Viviendas con Internet' => '13.84'
            ),
            'Unidades Económicas' => array(
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '33.33',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '21.21',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '12.12',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '12.12',
                'Quinta actividad nombre' => 'Comercio Mayoreo',
                'Quinta actividad porcentaje' => '9.09'
            )
        );
    } // datos

} // Clase ElRanchito

?>
