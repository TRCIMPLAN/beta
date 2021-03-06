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
 * Clase ResidencialDelNazas
 */
class ResidencialDelNazas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Residencial Del Nazas';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'residencial-del-nazas';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Residencial Del Nazas de IBC Torreón.';
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
                'Población total' => '1290',
                'Porcentaje de población masculina' => '49.34',
                'Porcentaje de población femenina' => '50.66',
                'Porcentaje de población de 0 a 14 años' => '31.90',
                'Porcentaje de población de 15 a 64 años' => '61.10',
                'Porcentaje de población de 65 y más años' => '4.82',
                'Porcentaje de población no especificada' => '2.18',
                'Fecundidad promedio' => '1.90',
                'Porcentaje de población nacida en otro estado' => '17.44',
                'Porcentaje de población con discapacidad' => '2.48'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '11.99',
                'Grado Promedio de Escolaridad masculina' => '12.19',
                'Grado Promedio de Escolaridad femenina' => '11.80'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '55.91',
                'Población Económicamente Activa masculina' => '59.11',
                'Población Económicamente Activa femenina' => '40.89',
                'Población Ocupada' => '91.86',
                'Población Ocupada masculina' => '58.78',
                'Población Ocupada femenina' => '41.22',
                'Población Desocupada' => '8.14',
                'Derechohabiencia' => '80.58'
            ),
            'Viviendas' => array(
                'Hogares' => '329',
                'Hogares Jefatura masculina' => '78.67',
                'Hogares Jefatura femenina' => '21.33',
                'Ocupación por Vivienda' => '3.92',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '99.48',
                'Viviendas con Drenaje' => '99.78',
                'Viviendas con Televisión' => '99.16',
                'Viviendas con Automóvil' => '71.41',
                'Viviendas con Computadora' => '56.77',
                'Viviendas con Celular' => '93.04',
                'Viviendas con Internet' => '47.98'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '46',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '39.13',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '21.74',
                'Tercera actividad nombre' => 'Educativos',
                'Tercera actividad porcentaje' => '15.22',
                'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Cuarta actividad porcentaje' => '13.04',
                'Quinta actividad nombre' => 'Salud',
                'Quinta actividad porcentaje' => '2.17'
            )
        );
    } // datos

} // Clase ResidencialDelNazas

?>
