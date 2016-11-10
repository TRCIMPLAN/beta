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
 * Clase JardinLasEtnias
 */
class JardinLasEtnias extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Jardin Las Etnias';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:29';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'jardin-las-etnias';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Jardin Las Etnias de Torreón.';
        $this->claves      = 'IMPLAN, Torreon, Desagregación';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio  = 'ibc-torreon';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu = 'Indicadores Básicos por Colonias > Colonias de Torreón';
        // Para el Organizador
        $this->categorias  = array();
        $this->fuentes     = array();
        $this->regiones    = array('Torreón');
    } // constructor

    /**
     * Datos
     *
     * @return array Arreglo asociativo
     */
    public function datos() {
        return array(
            'Demografía' => array(
                '2010' => array(
                    'Población total' => 150,
                    'Porcentaje de población masculina' => 52.67,
                    'Porcentaje de población femenina' => 47.33,
                    'Porcentaje de población de 0 a 14 años' => 26.00,
                    'Porcentaje de población de 15 a 64 años' => 72.00,
                    'Porcentaje de población de 65 y más años' => 2.00,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.20,
                    'Porcentaje de población nacida en otro estado' => 23.83,
                    'Porcentaje de población con discapacidad' => 0.00,
                    'Porcentaje de población de 15 y más analfabeta' => 0.00,
                    'Porcentaje de población de 18 y más' => 69.33,
                    'Porcentaje de población de 18 y más postbásicos' => 62.67
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 14.56,
                    'Grado Promedio de Escolaridad masculina' => 15.41,
                    'Grado Promedio de Escolaridad femenina' => 13.88
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 63.03,
                    'Población Económicamente Activa masculina' => 65.04,
                    'Población Económicamente Activa femenina' => 34.96,
                    'Población Ocupada' => 98.63,
                    'Población Ocupada masculina' => 64.47,
                    'Población Ocupada femenina' => 35.53,
                    'Población Desocupada' => 1.37,
                    'Derechohabiencia' => 86.00
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 48,
                    'Hogares Jefatura masculina' => 91.67,
                    'Hogares Jefatura femenina' => 8.33,
                    'Ocupación por Vivienda' => 3.12,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 100.00,
                    'Viviendas con Computadora' => 97.92,
                    'Viviendas con Celular' => 91.67,
                    'Viviendas con Internet' => 91.67
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 0
                )
            )
        );
    } // datos

} // Clase JardinLasEtnias

?>
