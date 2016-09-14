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
 * Clase VillaCalifornia
 */
class VillaCalifornia extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Villa California';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'villa-california';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Villa California de IBC Torreón.';
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
                'Población total' => '10692',
                'Porcentaje de población masculina' => '47.47',
                'Porcentaje de población femenina' => '52.53',
                'Porcentaje de población de 0 a 14 años' => '23.69',
                'Porcentaje de población de 15 a 64 años' => '69.93',
                'Porcentaje de población de 65 y más años' => '4.78',
                'Porcentaje de población no especificada' => '1.60',
                'Fecundidad promedio' => '1.93',
                'Porcentaje de población nacida en otro estado' => '16.34',
                'Porcentaje de población con discapacidad' => '2.98'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '11.20',
                'Grado Promedio de Escolaridad masculina' => '11.31',
                'Grado Promedio de Escolaridad femenina' => '11.09'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '52.70',
                'Población Económicamente Activa masculina' => '60.35',
                'Población Económicamente Activa femenina' => '39.65',
                'Población Ocupada' => '91.96',
                'Población Ocupada masculina' => '59.75',
                'Población Ocupada femenina' => '40.25',
                'Población Desocupada' => '8.04',
                'Derechohabiencia' => '72.07'
            ),
            'Viviendas' => array(
                'Hogares' => '2867',
                'Hogares Jefatura masculina' => '71.00',
                'Hogares Jefatura femenina' => '29.00',
                'Ocupación por Vivienda' => '3.73',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '99.77',
                'Viviendas con Drenaje' => '99.70',
                'Viviendas con Televisión' => '99.11',
                'Viviendas con Automóvil' => '64.96',
                'Viviendas con Computadora' => '53.13',
                'Viviendas con Celular' => '79.34',
                'Viviendas con Internet' => '39.74'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '482',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '42.32',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '18.05',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '16.60',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '6.02',
                'Quinta actividad nombre' => 'Educativos',
                'Quinta actividad porcentaje' => '4.77'
            )
        );
    } // datos

} // Clase VillaCalifornia

?>
