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
 * Clase EjidoLaPartida
 */
class EjidoLaPartida extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Ejido La Partida';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'ejido-la-partida';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Ejido La Partida de IBC Torreón.';
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
                'Población total' => '4010',
                'Porcentaje de población masculina' => '49.41',
                'Porcentaje de población femenina' => '50.59',
                'Porcentaje de población de 0 a 14 años' => '29.48',
                'Porcentaje de población de 15 a 64 años' => '64.10',
                'Porcentaje de población de 65 y más años' => '6.23',
                'Porcentaje de población no especificada' => '0.19',
                'Fecundidad promedio' => '2.45',
                'Porcentaje de población nacida en otro estado' => '9.62',
                'Porcentaje de población con discapacidad' => '4.02'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '7.82',
                'Grado Promedio de Escolaridad masculina' => '8.02',
                'Grado Promedio de Escolaridad femenina' => '7.63'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '47.25',
                'Población Económicamente Activa masculina' => '72.11',
                'Población Económicamente Activa femenina' => '27.89',
                'Población Ocupada' => '88.29',
                'Población Ocupada masculina' => '71.73',
                'Población Ocupada femenina' => '28.27',
                'Población Desocupada' => '11.71',
                'Derechohabiencia' => '74.17'
            ),
            'Viviendas' => array(
                'Hogares' => '987',
                'Hogares Jefatura masculina' => '83.54',
                'Hogares Jefatura femenina' => '16.46',
                'Ocupación por Vivienda' => '4.06',
                'Viviendas con Electricidad' => '99.36',
                'Viviendas con Agua' => '98.34',
                'Viviendas con Drenaje' => '94.89',
                'Viviendas con Televisión' => '98.72',
                'Viviendas con Automóvil' => '49.57',
                'Viviendas con Computadora' => '28.62',
                'Viviendas con Celular' => '62.06',
                'Viviendas con Internet' => '17.67'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '149',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '46.31',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '15.44',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '15.44',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '8.05',
                'Quinta actividad nombre' => 'Salud',
                'Quinta actividad porcentaje' => '4.03'
            )
        );
    } // datos

} // Clase EjidoLaPartida

?>
