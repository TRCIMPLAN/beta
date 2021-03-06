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
 * Clase ValleVerde
 */
class ValleVerde extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Valle Verde';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'valle-verde';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Valle Verde de IBC Torreón.';
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
                'Población total' => '1080',
                'Porcentaje de población masculina' => '50.37',
                'Porcentaje de población femenina' => '49.63',
                'Porcentaje de población de 0 a 14 años' => '16.61',
                'Porcentaje de población de 15 a 64 años' => '66.60',
                'Porcentaje de población de 65 y más años' => '7.00',
                'Porcentaje de población no especificada' => '9.79',
                'Fecundidad promedio' => '2.04',
                'Porcentaje de población nacida en otro estado' => '19.57',
                'Porcentaje de población con discapacidad' => '3.96'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '11.48',
                'Grado Promedio de Escolaridad masculina' => '11.73',
                'Grado Promedio de Escolaridad femenina' => '11.24'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '50.43',
                'Población Económicamente Activa masculina' => '62.32',
                'Población Económicamente Activa femenina' => '37.68',
                'Población Ocupada' => '94.67',
                'Población Ocupada masculina' => '62.09',
                'Población Ocupada femenina' => '37.91',
                'Población Desocupada' => '5.33',
                'Derechohabiencia' => '75.19'
            ),
            'Viviendas' => array(
                'Hogares' => '287',
                'Hogares Jefatura masculina' => '77.47',
                'Hogares Jefatura femenina' => '22.53',
                'Ocupación por Vivienda' => '3.76',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '99.30',
                'Viviendas con Automóvil' => '64.75',
                'Viviendas con Computadora' => '50.37',
                'Viviendas con Celular' => '82.02',
                'Viviendas con Internet' => '39.79'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '21',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '52.38',
                'Segunda actividad nombre' => 'Educativos',
                'Segunda actividad porcentaje' => '19.05',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '9.52',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '9.52',
                'Quinta actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Quinta actividad porcentaje' => '4.76'
            )
        );
    } // datos

} // Clase ValleVerde

?>
