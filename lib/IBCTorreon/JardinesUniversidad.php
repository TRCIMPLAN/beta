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
 * Clase JardinesUniversidad
 */
class JardinesUniversidad extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Jardines Universidad';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'jardines-universidad';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Jardines Universidad de IBC Torreón.';
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
                'Población total' => '5061',
                'Porcentaje de población masculina' => '49.74',
                'Porcentaje de población femenina' => '50.26',
                'Porcentaje de población de 0 a 14 años' => '25.67',
                'Porcentaje de población de 15 a 64 años' => '45.54',
                'Porcentaje de población de 65 y más años' => '12.06',
                'Porcentaje de población no especificada' => '16.73',
                'Fecundidad promedio' => '1.78',
                'Porcentaje de población nacida en otro estado' => '14.81',
                'Porcentaje de población con discapacidad' => '1.45'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '10.51',
                'Grado Promedio de Escolaridad masculina' => '10.68',
                'Grado Promedio de Escolaridad femenina' => '10.37'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '59.05',
                'Población Económicamente Activa masculina' => '65.44',
                'Población Económicamente Activa femenina' => '34.56',
                'Población Ocupada' => '90.82',
                'Población Ocupada masculina' => '64.86',
                'Población Ocupada femenina' => '35.14',
                'Población Desocupada' => '9.18',
                'Derechohabiencia' => '55.65'
            ),
            'Viviendas' => array(
                'Hogares' => '1009',
                'Hogares Jefatura masculina' => '79.27',
                'Hogares Jefatura femenina' => '20.73',
                'Ocupación por Vivienda' => '5.02',
                'Viviendas con Electricidad' => '99.20',
                'Viviendas con Agua' => '99.00',
                'Viviendas con Drenaje' => '99.10',
                'Viviendas con Televisión' => '98.11',
                'Viviendas con Automóvil' => '54.11',
                'Viviendas con Computadora' => '34.03',
                'Viviendas con Celular' => '86.92',
                'Viviendas con Internet' => '22.08'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '122',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '50.82',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '16.39',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '15.57',
                'Cuarta actividad nombre' => 'Educativos',
                'Cuarta actividad porcentaje' => '5.74',
                'Quinta actividad nombre' => 'Industria Manufacturera',
                'Quinta actividad porcentaje' => '4.92'
            )
        );
    } // datos

} // Clase JardinesUniversidad

?>
