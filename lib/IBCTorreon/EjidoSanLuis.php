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
 * Clase EjidoSanLuis
 */
class EjidoSanLuis extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Ejido San Luis';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'ejido-san-luis';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Ejido San Luis de IBC Torreón.';
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
                'Población total' => '1456',
                'Porcentaje de población masculina' => '48.76',
                'Porcentaje de población femenina' => '51.24',
                'Porcentaje de población de 0 a 14 años' => '30.42',
                'Porcentaje de población de 15 a 64 años' => '63.66',
                'Porcentaje de población de 65 y más años' => '5.49',
                'Porcentaje de población no especificada' => '0.43',
                'Fecundidad promedio' => '2.51',
                'Porcentaje de población nacida en otro estado' => '14.61',
                'Porcentaje de población con discapacidad' => '6.93'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '7.97',
                'Grado Promedio de Escolaridad masculina' => '8.02',
                'Grado Promedio de Escolaridad femenina' => '7.92'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '54.63',
                'Población Económicamente Activa masculina' => '70.02',
                'Población Económicamente Activa femenina' => '29.98',
                'Población Ocupada' => '89.32',
                'Población Ocupada masculina' => '68.29',
                'Población Ocupada femenina' => '31.71',
                'Población Desocupada' => '10.68',
                'Derechohabiencia' => '66.79'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '81.14',
                'Hogares Jefatura femenina' => '18.86',
                'Ocupación por Vivienda' => '4.15',
                'Viviendas con Electricidad' => '99.87',
                'Viviendas con Agua' => '98.06',
                'Viviendas con Drenaje' => '96.10',
                'Viviendas con Televisión' => '97.99',
                'Viviendas con Automóvil' => '46.74',
                'Viviendas con Computadora' => '21.62',
                'Viviendas con Celular' => '69.56',
                'Viviendas con Internet' => '11.51'
            ),
            'Unidades Económicas' => array(
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '32.56',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '24.42',
                'Tercera actividad nombre' => 'Comercio Mayoreo',
                'Tercera actividad porcentaje' => '9.30',
                'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Cuarta actividad porcentaje' => '9.30',
                'Quinta actividad nombre' => 'Industria Manufacturera',
                'Quinta actividad porcentaje' => '6.98'
            )
        );
    } // datos

} // Clase EjidoSanLuis

?>
