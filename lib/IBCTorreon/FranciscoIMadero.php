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
 * Clase FranciscoIMadero
 */
class FranciscoIMadero extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Francisco I. Madero';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'francisco-i-madero';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Francisco I. Madero de IBC Torreón.';
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
                'Población total' => '836',
                'Porcentaje de población masculina' => '50.49',
                'Porcentaje de población femenina' => '49.51',
                'Porcentaje de población de 0 a 14 años' => '26.64',
                'Porcentaje de población de 15 a 64 años' => '65.71',
                'Porcentaje de población de 65 y más años' => '6.41',
                'Porcentaje de población no especificada' => '1.24',
                'Fecundidad promedio' => '2.51',
                'Porcentaje de población nacida en otro estado' => '19.20',
                'Porcentaje de población con discapacidad' => '4.64'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '7.31',
                'Grado Promedio de Escolaridad masculina' => '7.43',
                'Grado Promedio de Escolaridad femenina' => '7.20'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '50.48',
                'Población Económicamente Activa masculina' => '73.62',
                'Población Económicamente Activa femenina' => '26.38',
                'Población Ocupada' => '84.31',
                'Población Ocupada masculina' => '74.37',
                'Población Ocupada femenina' => '25.63',
                'Población Desocupada' => '15.69',
                'Derechohabiencia' => '69.64'
            ),
            'Viviendas' => array(
                'Hogares' => '207',
                'Hogares Jefatura masculina' => '82.06',
                'Hogares Jefatura femenina' => '17.94',
                'Ocupación por Vivienda' => '4.04',
                'Viviendas con Electricidad' => '99.29',
                'Viviendas con Agua' => '99.29',
                'Viviendas con Drenaje' => '98.31',
                'Viviendas con Televisión' => '97.82',
                'Viviendas con Automóvil' => '23.71',
                'Viviendas con Computadora' => '8.04',
                'Viviendas con Celular' => '58.59',
                'Viviendas con Internet' => '0.95'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '10',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '70.00',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '10.00',
                'Tercera actividad nombre' => 'Educativos',
                'Tercera actividad porcentaje' => '10.00',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '10.00',
                'Quinta actividad nombre' => 'Salud',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase FranciscoIMadero

?>
