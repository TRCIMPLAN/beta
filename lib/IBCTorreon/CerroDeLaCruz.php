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
 * Clase CerroDeLaCruz
 */
class CerroDeLaCruz extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Cerro De La Cruz';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'cerro-de-la-cruz';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Cerro De La Cruz de IBC Torreón.';
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
                'Población total' => '2766',
                'Porcentaje de población masculina' => '49.39',
                'Porcentaje de población femenina' => '50.61',
                'Porcentaje de población de 0 a 14 años' => '28.92',
                'Porcentaje de población de 15 a 64 años' => '61.93',
                'Porcentaje de población de 65 y más años' => '8.97',
                'Porcentaje de población no especificada' => '0.18',
                'Fecundidad promedio' => '2.68',
                'Porcentaje de población nacida en otro estado' => '19.39',
                'Porcentaje de población con discapacidad' => '12.54'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '7.34',
                'Grado Promedio de Escolaridad masculina' => '7.39',
                'Grado Promedio de Escolaridad femenina' => '7.30'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '50.31',
                'Población Económicamente Activa masculina' => '68.29',
                'Población Económicamente Activa femenina' => '31.71',
                'Población Ocupada' => '93.94',
                'Población Ocupada masculina' => '67.36',
                'Población Ocupada femenina' => '32.64',
                'Población Desocupada' => '6.06',
                'Derechohabiencia' => '63.67'
            ),
            'Viviendas' => array(
                'Hogares' => '696',
                'Hogares Jefatura masculina' => '71.07',
                'Hogares Jefatura femenina' => '28.93',
                'Ocupación por Vivienda' => '3.97',
                'Viviendas con Electricidad' => '99.43',
                'Viviendas con Agua' => '98.71',
                'Viviendas con Drenaje' => '99.57',
                'Viviendas con Televisión' => '97.41',
                'Viviendas con Automóvil' => '23.76',
                'Viviendas con Computadora' => '17.80',
                'Viviendas con Celular' => '56.71',
                'Viviendas con Internet' => '10.57'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '35',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '54.29',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '14.29',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '8.57',
                'Cuarta actividad nombre' => 'Salud',
                'Cuarta actividad porcentaje' => '5.71',
                'Quinta actividad nombre' => 'Manejo de Residuos',
                'Quinta actividad porcentaje' => '5.71'
            )
        );
    } // datos

} // Clase CerroDeLaCruz

?>
