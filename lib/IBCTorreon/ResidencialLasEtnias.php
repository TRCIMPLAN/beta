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
 * Clase ResidencialLasEtnias
 */
class ResidencialLasEtnias extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Residencial Las Etnias';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'residencial-las-etnias';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Residencial Las Etnias de IBC Torreón.';
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
                'Población total' => '3787',
                'Porcentaje de población masculina' => '48.69',
                'Porcentaje de población femenina' => '51.31',
                'Porcentaje de población de 0 a 14 años' => '34.25',
                'Porcentaje de población de 15 a 64 años' => '61.18',
                'Porcentaje de población de 65 y más años' => '2.59',
                'Porcentaje de población no especificada' => '1.98',
                'Fecundidad promedio' => '1.62',
                'Porcentaje de población nacida en otro estado' => '17.14',
                'Porcentaje de población con discapacidad' => '1.13'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '12.85',
                'Grado Promedio de Escolaridad masculina' => '13.22',
                'Grado Promedio de Escolaridad femenina' => '12.52'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '62.27',
                'Población Económicamente Activa masculina' => '61.97',
                'Población Económicamente Activa femenina' => '38.03',
                'Población Ocupada' => '95.42',
                'Población Ocupada masculina' => '60.81',
                'Población Ocupada femenina' => '39.19',
                'Población Desocupada' => '4.58',
                'Derechohabiencia' => '81.57'
            ),
            'Viviendas' => array(
                'Hogares' => '1067',
                'Hogares Jefatura masculina' => '85.75',
                'Hogares Jefatura femenina' => '14.25',
                'Ocupación por Vivienda' => '3.55',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '99.91',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '99.34',
                'Viviendas con Automóvil' => '78.35',
                'Viviendas con Computadora' => '57.45',
                'Viviendas con Celular' => '91.66',
                'Viviendas con Internet' => '43.02'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '54',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '42.59',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '20.37',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '12.96',
                'Cuarta actividad nombre' => 'Educativos',
                'Cuarta actividad porcentaje' => '7.41',
                'Quinta actividad nombre' => 'Salud',
                'Quinta actividad porcentaje' => '3.70'
            )
        );
    } // datos

} // Clase ResidencialLasEtnias

?>
