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
 * Clase Anna
 */
class Anna extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Anna';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'anna';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Anna de IBC Torreón.';
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
                'Población total' => '4672',
                'Porcentaje de población masculina' => '48.60',
                'Porcentaje de población femenina' => '51.40',
                'Porcentaje de población de 0 a 14 años' => '37.46',
                'Porcentaje de población de 15 a 64 años' => '59.09',
                'Porcentaje de población de 65 y más años' => '2.21',
                'Porcentaje de población no especificada' => '1.24',
                'Fecundidad promedio' => '1.85',
                'Porcentaje de población nacida en otro estado' => '13.62',
                'Porcentaje de población con discapacidad' => '1.50'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '9.53',
                'Grado Promedio de Escolaridad masculina' => '9.54',
                'Grado Promedio de Escolaridad femenina' => '9.54'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '59.79',
                'Población Económicamente Activa masculina' => '65.27',
                'Población Económicamente Activa femenina' => '34.73',
                'Población Ocupada' => '94.52',
                'Población Ocupada masculina' => '64.73',
                'Población Ocupada femenina' => '35.27',
                'Población Desocupada' => '5.48',
                'Derechohabiencia' => '74.97'
            ),
            'Viviendas' => array(
                'Hogares' => '1205',
                'Hogares Jefatura masculina' => '84.13',
                'Hogares Jefatura femenina' => '15.87',
                'Ocupación por Vivienda' => '3.88',
                'Viviendas con Electricidad' => '99.74',
                'Viviendas con Agua' => '99.66',
                'Viviendas con Drenaje' => '99.49',
                'Viviendas con Televisión' => '99.24',
                'Viviendas con Automóvil' => '51.21',
                'Viviendas con Computadora' => '25.63',
                'Viviendas con Celular' => '86.27',
                'Viviendas con Internet' => '20.08'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '78',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '51.28',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '10.26',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '10.26',
                'Cuarta actividad nombre' => 'Salud',
                'Cuarta actividad porcentaje' => '8.97',
                'Quinta actividad nombre' => 'Educativos',
                'Quinta actividad porcentaje' => '5.13'
            )
        );
    } // datos

} // Clase Anna

?>
