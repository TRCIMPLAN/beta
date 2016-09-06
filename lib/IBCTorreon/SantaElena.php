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
 * Clase SantaElena
 */
class SantaElena extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Santa Elena';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'santa-elena';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Santa Elena de IBC Torreón.';
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
                'Población total' => '989',
                'Porcentaje de población masculina' => '49.75',
                'Porcentaje de población femenina' => '50.25',
                'Porcentaje de población de 0 a 14 años' => '28.01',
                'Porcentaje de población de 15 a 64 años' => '66.33',
                'Porcentaje de población de 65 y más años' => '3.74',
                'Porcentaje de población no especificada' => '1.92',
                'Fecundidad promedio' => '1.64',
                'Porcentaje de población nacida en otro estado' => '19.01',
                'Porcentaje de población con discapacidad' => '1.15'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '13.66',
                'Grado Promedio de Escolaridad masculina' => '13.86',
                'Grado Promedio de Escolaridad femenina' => '13.47'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '55.09',
                'Población Económicamente Activa masculina' => '55.92',
                'Población Económicamente Activa femenina' => '44.08',
                'Población Ocupada' => '97.08',
                'Población Ocupada masculina' => '55.37',
                'Población Ocupada femenina' => '44.63',
                'Población Desocupada' => '2.92',
                'Derechohabiencia' => '81.19'
            ),
            'Viviendas' => array(
                'Hogares' => '263',
                'Hogares Jefatura masculina' => '79.47',
                'Hogares Jefatura femenina' => '20.53',
                'Ocupación por Vivienda' => '3.76',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '99.62',
                'Viviendas con Automóvil' => '91.63',
                'Viviendas con Computadora' => '82.51',
                'Viviendas con Celular' => '92.78',
                'Viviendas con Internet' => '73.38'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '34',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '35.29',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '23.53',
                'Tercera actividad nombre' => 'Salud',
                'Tercera actividad porcentaje' => '8.82',
                'Cuarta actividad nombre' => 'Manejo de Residuos',
                'Cuarta actividad porcentaje' => '5.88',
                'Quinta actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Quinta actividad porcentaje' => '5.88'
            )
        );
    } // datos

} // Clase SantaElena

?>
