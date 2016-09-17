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
 * Clase ResidencialPalmaReal
 */
class ResidencialPalmaReal extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Residencial Palma Real';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-17 15:33:02';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'residencial-palma-real';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial Palma Real de Torreón.';
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
                'Población total' => 1305,
                'Porcentaje de población masculina' => 49.88,
                'Porcentaje de población femenina' => 50.12,
                'Porcentaje de población de 0 a 14 años' => 31.76,
                'Porcentaje de población de 15 a 64 años' => 65.52,
                'Porcentaje de población de 65 y más años' => 1.80,
                'Porcentaje de población no especificada' => 0.92,
                'Fecundidad promedio' => 1.34,
                'Porcentaje de población nacida en otro estado' => 26.97,
                'Porcentaje de población con discapacidad' => 0.51
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => 15.24,
                'Grado Promedio de Escolaridad masculina' => 15.56,
                'Grado Promedio de Escolaridad femenina' => 14.94
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => 67.99,
                'Población Económicamente Activa masculina' => 61.10,
                'Población Económicamente Activa femenina' => 38.90,
                'Población Ocupada' => 99.02,
                'Población Ocupada masculina' => 60.88,
                'Población Ocupada femenina' => 39.12,
                'Población Desocupada' => 0.98,
                'Derechohabiencia' => 86.02
            ),
            'Viviendas' => array(
                'Hogares' => 411,
                'Hogares Jefatura masculina' => 86.41,
                'Hogares Jefatura femenina' => 13.59,
                'Ocupación por Vivienda' => 3.18,
                'Viviendas con Electricidad' => 98.70,
                'Viviendas con Agua' => 98.22,
                'Viviendas con Drenaje' => 97.24,
                'Viviendas con Televisión' => 97.73,
                'Viviendas con Automóvil' => 96.45,
                'Viviendas con Computadora' => 84.12,
                'Viviendas con Celular' => 96.00,
                'Viviendas con Internet' => 74.07
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => 4,
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => 50.00,
                'Segunda actividad nombre' => 'Comercio Mayoreo',
                'Segunda actividad porcentaje' => 25.00,
                'Tercera actividad nombre' => 'Transportes, Correo, Almacenamiento',
                'Tercera actividad porcentaje' => 25.00
            )
        );
    } // datos

} // Clase ResidencialPalmaReal

?>
