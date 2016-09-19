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
 * Clase LasAves
 */
class LasAves extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Las Aves';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'las-aves';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Las Aves de Torreón.';
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
                    'Población total' => 238,
                    'Porcentaje de población masculina' => 47.06,
                    'Porcentaje de población femenina' => 52.94,
                    'Porcentaje de población de 0 a 14 años' => 39.50,
                    'Porcentaje de población de 15 a 64 años' => 58.82,
                    'Porcentaje de población de 65 y más años' => 0.42,
                    'Porcentaje de población no especificada' => 1.26,
                    'Fecundidad promedio' => 2.11,
                    'Porcentaje de población nacida en otro estado' => 14.31,
                    'Porcentaje de población con discapacidad' => 0.56
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 9.74,
                    'Grado Promedio de Escolaridad masculina' => 10.09,
                    'Grado Promedio de Escolaridad femenina' => 9.42
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 65.36,
                    'Población Económicamente Activa masculina' => 63.00,
                    'Población Económicamente Activa femenina' => 37.00,
                    'Población Ocupada' => 94.75,
                    'Población Ocupada masculina' => 61.05,
                    'Población Ocupada femenina' => 38.95,
                    'Población Desocupada' => 5.25,
                    'Derechohabiencia' => 75.21
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 63,
                    'Hogares Jefatura masculina' => 79.37,
                    'Hogares Jefatura femenina' => 20.63,
                    'Ocupación por Vivienda' => 3.78,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 41.27,
                    'Viviendas con Computadora' => 36.05,
                    'Viviendas con Celular' => 87.30,
                    'Viviendas con Internet' => 15.03
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 1,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 100.00
                )
            )
        );
    } // datos

} // Clase LasAves

?>
