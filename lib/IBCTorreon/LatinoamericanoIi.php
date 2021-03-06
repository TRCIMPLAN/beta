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
 * Clase LatinoamericanoIi
 */
class LatinoamericanoIi extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Latinoamericano Ii';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'latinoamericano-ii';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Latinoamericano Ii de IBC Torreón.';
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
                'Población total' => '458',
                'Porcentaje de población masculina' => '48.46',
                'Porcentaje de población femenina' => '51.54',
                'Porcentaje de población de 0 a 14 años' => '30.94',
                'Porcentaje de población de 15 a 64 años' => '65.53',
                'Porcentaje de población de 65 y más años' => '2.87',
                'Porcentaje de población no especificada' => '0.66',
                'Fecundidad promedio' => '1.87',
                'Porcentaje de población nacida en otro estado' => '19.86',
                'Porcentaje de población con discapacidad' => '3.63'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '11.57',
                'Grado Promedio de Escolaridad masculina' => '11.82',
                'Grado Promedio de Escolaridad femenina' => '11.34'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '54.55',
                'Población Económicamente Activa masculina' => '62.22',
                'Población Económicamente Activa femenina' => '37.78',
                'Población Ocupada' => '92.91',
                'Población Ocupada masculina' => '61.89',
                'Población Ocupada femenina' => '38.11',
                'Población Desocupada' => '7.09',
                'Derechohabiencia' => '77.42'
            ),
            'Viviendas' => array(
                'Hogares' => '114',
                'Hogares Jefatura masculina' => '76.16',
                'Hogares Jefatura femenina' => '23.84',
                'Ocupación por Vivienda' => '4.02',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '99.64',
                'Viviendas con Automóvil' => '66.63',
                'Viviendas con Computadora' => '55.92',
                'Viviendas con Celular' => '89.80',
                'Viviendas con Internet' => '38.18'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '10',
                'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Primer actividad porcentaje' => '50.00',
                'Segunda actividad nombre' => 'Comercio Menudeo',
                'Segunda actividad porcentaje' => '30.00',
                'Tercera actividad nombre' => 'Salud',
                'Tercera actividad porcentaje' => '10.00',
                'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Cuarta actividad porcentaje' => '10.00',
                'Quinta actividad nombre' => 'Información Medios Masivos',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase LatinoamericanoIi

?>
