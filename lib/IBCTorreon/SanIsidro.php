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
 * Clase SanIsidro
 */
class SanIsidro extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'San Isidro';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'san-isidro';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia San Isidro de IBC Torreón.';
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
                'Población total' => '2151',
                'Porcentaje de población masculina' => '46.04',
                'Porcentaje de población femenina' => '53.96',
                'Porcentaje de población de 0 a 14 años' => '13.44',
                'Porcentaje de población de 15 a 64 años' => '62.36',
                'Porcentaje de población de 65 y más años' => '16.15',
                'Porcentaje de población no especificada' => '8.05',
                'Fecundidad promedio' => '2.03',
                'Porcentaje de población nacida en otro estado' => '21.29',
                'Porcentaje de población con discapacidad' => '5.37'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '14.28',
                'Grado Promedio de Escolaridad masculina' => '15.16',
                'Grado Promedio de Escolaridad femenina' => '13.57'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '50.94',
                'Población Económicamente Activa masculina' => '59.03',
                'Población Económicamente Activa femenina' => '40.97',
                'Población Ocupada' => '97.54',
                'Población Ocupada masculina' => '59.07',
                'Población Ocupada femenina' => '40.93',
                'Población Desocupada' => '2.46',
                'Derechohabiencia' => '74.58'
            ),
            'Viviendas' => array(
                'Hogares' => '599',
                'Hogares Jefatura masculina' => '74.71',
                'Hogares Jefatura femenina' => '25.29',
                'Ocupación por Vivienda' => '3.59',
                'Viviendas con Electricidad' => '99.92',
                'Viviendas con Agua' => '99.24',
                'Viviendas con Drenaje' => '99.41',
                'Viviendas con Televisión' => '96.14',
                'Viviendas con Automóvil' => '93.58',
                'Viviendas con Computadora' => '82.48',
                'Viviendas con Celular' => '88.87',
                'Viviendas con Internet' => '80.13'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '155',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '28.39',
                'Segunda actividad nombre' => 'Profesionales, Científicos, Técnicos',
                'Segunda actividad porcentaje' => '14.19',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '12.90',
                'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Cuarta actividad porcentaje' => '11.61',
                'Quinta actividad nombre' => 'Financieros y Seguros',
                'Quinta actividad porcentaje' => '8.39'
            )
        );
    } // datos

} // Clase SanIsidro

?>
