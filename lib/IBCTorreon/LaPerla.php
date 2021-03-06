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
 * Clase LaPerla
 */
class LaPerla extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'La Perla';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'la-perla';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia La Perla de IBC Torreón.';
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
                'Población total' => '2587',
                'Porcentaje de población masculina' => '50.17',
                'Porcentaje de población femenina' => '49.83',
                'Porcentaje de población de 0 a 14 años' => '39.47',
                'Porcentaje de población de 15 a 64 años' => '58.56',
                'Porcentaje de población de 65 y más años' => '1.74',
                'Porcentaje de población no especificada' => '0.23',
                'Fecundidad promedio' => '1.91',
                'Porcentaje de población nacida en otro estado' => '12.32',
                'Porcentaje de población con discapacidad' => '2.24'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '9.24',
                'Grado Promedio de Escolaridad masculina' => '9.32',
                'Grado Promedio de Escolaridad femenina' => '9.15'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '57.92',
                'Población Económicamente Activa masculina' => '70.98',
                'Población Económicamente Activa femenina' => '29.02',
                'Población Ocupada' => '94.67',
                'Población Ocupada masculina' => '69.76',
                'Población Ocupada femenina' => '30.24',
                'Población Desocupada' => '5.33',
                'Derechohabiencia' => '72.44'
            ),
            'Viviendas' => array(
                'Hogares' => '679',
                'Hogares Jefatura masculina' => '82.92',
                'Hogares Jefatura femenina' => '17.08',
                'Ocupación por Vivienda' => '3.81',
                'Viviendas con Electricidad' => '99.85',
                'Viviendas con Agua' => '99.85',
                'Viviendas con Drenaje' => '99.85',
                'Viviendas con Televisión' => '99.12',
                'Viviendas con Automóvil' => '45.51',
                'Viviendas con Computadora' => '27.69',
                'Viviendas con Celular' => '84.68',
                'Viviendas con Internet' => '19.28'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '87',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '41.38',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '28.74',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '16.09',
                'Cuarta actividad nombre' => 'Educativos',
                'Cuarta actividad porcentaje' => '5.75',
                'Quinta actividad nombre' => 'Industria Manufacturera',
                'Quinta actividad porcentaje' => '3.45'
            )
        );
    } // datos

} // Clase LaPerla

?>
