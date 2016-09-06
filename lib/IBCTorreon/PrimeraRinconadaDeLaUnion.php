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
 * Clase PrimeraRinconadaDeLaUnion
 */
class PrimeraRinconadaDeLaUnion extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Primera Rinconada De La Union';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'primera-rinconada-de-la-union';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Primera Rinconada De La Union de IBC Torreón.';
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
                'Población total' => '837',
                'Porcentaje de población masculina' => '50.49',
                'Porcentaje de población femenina' => '49.51',
                'Porcentaje de población de 0 a 14 años' => '27.82',
                'Porcentaje de población de 15 a 64 años' => '62.23',
                'Porcentaje de población de 65 y más años' => '9.95',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '2.36',
                'Porcentaje de población nacida en otro estado' => '8.60',
                'Porcentaje de población con discapacidad' => '5.92'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '7.59',
                'Grado Promedio de Escolaridad masculina' => '7.52',
                'Grado Promedio de Escolaridad femenina' => '7.65'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '51.24',
                'Población Económicamente Activa masculina' => '72.42',
                'Población Económicamente Activa femenina' => '27.58',
                'Población Ocupada' => '94.75',
                'Población Ocupada masculina' => '70.97',
                'Población Ocupada femenina' => '29.03',
                'Población Desocupada' => '5.25',
                'Derechohabiencia' => '64.76'
            ),
            'Viviendas' => array(
                'Hogares' => '230',
                'Hogares Jefatura masculina' => '69.75',
                'Hogares Jefatura femenina' => '30.25',
                'Ocupación por Vivienda' => '3.64',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '99.96',
                'Viviendas con Drenaje' => '99.97',
                'Viviendas con Televisión' => '98.19',
                'Viviendas con Automóvil' => '17.72',
                'Viviendas con Computadora' => '16.22',
                'Viviendas con Celular' => '58.05',
                'Viviendas con Internet' => '6.74'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '12',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '66.67',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '25.00',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '8.33',
                'Cuarta actividad nombre' => 'Salud',
                'Cuarta actividad porcentaje' => '0.00',
                'Quinta actividad nombre' => 'Información Medios Masivos',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase PrimeraRinconadaDeLaUnion

?>
