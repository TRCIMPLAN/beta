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
 * Clase ResidencialFloridaBlanca
 */
class ResidencialFloridaBlanca extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Residencial Florida Blanca';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'residencial-florida-blanca';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Residencial Florida Blanca de IBC Torreón.';
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
                'Población total' => '413',
                'Porcentaje de población masculina' => '49.88',
                'Porcentaje de población femenina' => '50.12',
                'Porcentaje de población de 0 a 14 años' => '23.73',
                'Porcentaje de población de 15 a 64 años' => '68.77',
                'Porcentaje de población de 65 y más años' => '5.33',
                'Porcentaje de población no especificada' => '2.17',
                'Fecundidad promedio' => '1.50',
                'Porcentaje de población nacida en otro estado' => '17.43',
                'Porcentaje de población con discapacidad' => '2.39'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '14.11',
                'Grado Promedio de Escolaridad masculina' => '14.50',
                'Grado Promedio de Escolaridad femenina' => '13.72'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '48.65',
                'Población Económicamente Activa masculina' => '59.26',
                'Población Económicamente Activa femenina' => '40.74',
                'Población Ocupada' => '92.05',
                'Población Ocupada masculina' => '59.33',
                'Población Ocupada femenina' => '40.67',
                'Población Desocupada' => '7.95',
                'Derechohabiencia' => '83.78'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '81.65',
                'Hogares Jefatura femenina' => '18.35',
                'Ocupación por Vivienda' => '3.79',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '94.50',
                'Viviendas con Computadora' => '88.99',
                'Viviendas con Celular' => '94.50',
                'Viviendas con Internet' => '87.16'
            ),
            'Unidades Económicas' => array(
                'Primer actividad nombre' => 'Manejo de Residuos',
                'Primer actividad porcentaje' => '20.00',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '20.00',
                'Tercera actividad nombre' => 'Profesionales, Científicos, Técnicos',
                'Tercera actividad porcentaje' => '20.00',
                'Cuarta actividad nombre' => 'Comercio Menudeo',
                'Cuarta actividad porcentaje' => '20.00',
                'Quinta actividad nombre' => 'Educativos',
                'Quinta actividad porcentaje' => '20.00'
            )
        );
    } // datos

} // Clase ResidencialFloridaBlanca

?>
