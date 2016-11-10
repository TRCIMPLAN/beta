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
 * Clase CiudadNazasPoligono27
 */
class CiudadNazasPoligono27 extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Ciudad Nazas Poligono 27';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:28';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'ciudad-nazas-poligono-27';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ciudad Nazas Poligono 27 de Torreón.';
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
                    'Población total' => 2082,
                    'Porcentaje de población masculina' => 48.32,
                    'Porcentaje de población femenina' => 51.68,
                    'Porcentaje de población de 0 a 14 años' => 36.41,
                    'Porcentaje de población de 15 a 64 años' => 61.91,
                    'Porcentaje de población de 65 y más años' => 1.25,
                    'Porcentaje de población no especificada' => 0.43,
                    'Fecundidad promedio' => 1.84,
                    'Porcentaje de población nacida en otro estado' => 13.59,
                    'Porcentaje de población con discapacidad' => 1.35,
                    'Porcentaje de población de 15 y más analfabeta' => 0.08,
                    'Porcentaje de población de 18 y más' => 56.29,
                    'Porcentaje de población de 18 y más postbásicos' => 27.86
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 10.27,
                    'Grado Promedio de Escolaridad masculina' => 10.43,
                    'Grado Promedio de Escolaridad femenina' => 10.14
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 51.78,
                    'Población Económicamente Activa masculina' => 66.02,
                    'Población Económicamente Activa femenina' => 33.98,
                    'Población Ocupada' => 92.36,
                    'Población Ocupada masculina' => 64.80,
                    'Población Ocupada femenina' => 35.20,
                    'Población Desocupada' => 7.64,
                    'Derechohabiencia' => 75.79
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 521,
                    'Hogares Jefatura masculina' => 79.27,
                    'Hogares Jefatura femenina' => 20.73,
                    'Ocupación por Vivienda' => 4.00,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.42,
                    'Viviendas con Drenaje' => 99.04,
                    'Viviendas con Televisión' => 99.04,
                    'Viviendas con Automóvil' => 54.70,
                    'Viviendas con Computadora' => 36.47,
                    'Viviendas con Celular' => 85.60,
                    'Viviendas con Internet' => 22.26
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 39,
                    'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Primer actividad porcentaje' => 30.77,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 28.21,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 23.08,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 7.69,
                    'Quinta actividad nombre' => 'Comercio Mayoreo',
                    'Quinta actividad porcentaje' => 2.56
                )
            )
        );
    } // datos

} // Clase CiudadNazasPoligono27

?>
