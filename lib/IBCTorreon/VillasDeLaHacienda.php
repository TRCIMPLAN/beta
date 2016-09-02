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
 * Clase VillasDeLaHacienda
 */
class VillasDeLaHacienda extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Villas De La Hacienda';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'villas-de-la-hacienda';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Villas De La Hacienda de IBC Torreón.';
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
                'Población total' => '1888',
                'Porcentaje de población masculina' => '49.36',
                'Porcentaje de población femenina' => '50.64',
                'Porcentaje de población de 0 a 14 años' => '25.26',
                'Porcentaje de población de 15 a 64 años' => '70.23',
                'Porcentaje de población de 65 y más años' => '3.65',
                'Porcentaje de población no especificada' => '0.86',
                'Fecundidad promedio' => '1.65',
                'Porcentaje de población nacida en otro estado' => '23.57',
                'Porcentaje de población con discapacidad' => '1.24'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '13.43',
                'Grado Promedio de Escolaridad masculina' => '13.81',
                'Grado Promedio de Escolaridad femenina' => '13.08'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '50.65',
                'Población Económicamente Activa masculina' => '59.64',
                'Población Económicamente Activa femenina' => '40.36',
                'Población Ocupada' => '97.50',
                'Población Ocupada masculina' => '59.03',
                'Población Ocupada femenina' => '40.97',
                'Población Desocupada' => '2.50',
                'Derechohabiencia' => '77.60'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '78.11',
                'Hogares Jefatura femenina' => '21.89',
                'Ocupación por Vivienda' => '3.79',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '99.40',
                'Viviendas con Drenaje' => '99.60',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '92.97',
                'Viviendas con Computadora' => '82.13',
                'Viviendas con Celular' => '94.18',
                'Viviendas con Internet' => '74.03'
            ),
            'Unidades Económicas' => array(
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '35.48',
                'Segunda actividad nombre' => 'Industria Manufacturera',
                'Segunda actividad porcentaje' => '19.35',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '16.13',
                'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Cuarta actividad porcentaje' => '12.90',
                'Quinta actividad nombre' => 'Salud',
                'Quinta actividad porcentaje' => '9.68'
            )
        );
    } // datos

} // Clase VillasDeLaHacienda

?>
