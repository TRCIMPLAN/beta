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
 * Clase ResidencialLaRosa
 */
class ResidencialLaRosa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Residencial La Rosa';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'residencial-la-rosa';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial La Rosa de Torreón.';
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
                    'Población total' => 502,
                    'Porcentaje de población masculina' => 49.20,
                    'Porcentaje de población femenina' => 50.80,
                    'Porcentaje de población de 0 a 14 años' => 19.92,
                    'Porcentaje de población de 15 a 64 años' => 70.92,
                    'Porcentaje de población de 65 y más años' => 4.98,
                    'Porcentaje de población no especificada' => 4.18,
                    'Fecundidad promedio' => 1.55,
                    'Porcentaje de población nacida en otro estado' => 27.29,
                    'Porcentaje de población con discapacidad' => 1.00
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 14.71,
                    'Grado Promedio de Escolaridad masculina' => 14.86,
                    'Grado Promedio de Escolaridad femenina' => 14.57
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 51.97,
                    'Población Económicamente Activa masculina' => 59.72,
                    'Población Económicamente Activa femenina' => 40.28,
                    'Población Ocupada' => 93.46,
                    'Población Ocupada masculina' => 58.59,
                    'Población Ocupada femenina' => 41.41,
                    'Población Desocupada' => 6.54,
                    'Derechohabiencia' => 79.88
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 134,
                    'Hogares Jefatura masculina' => 82.84,
                    'Hogares Jefatura femenina' => 17.16,
                    'Ocupación por Vivienda' => 3.75,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.25,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.25,
                    'Viviendas con Automóvil' => 92.54,
                    'Viviendas con Computadora' => 87.31,
                    'Viviendas con Celular' => 94.78,
                    'Viviendas con Internet' => 82.09
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 23,
                    'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Primer actividad porcentaje' => 30.43,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 26.09,
                    'Tercera actividad nombre' => 'Comercio Menudeo',
                    'Tercera actividad porcentaje' => 13.04,
                    'Cuarta actividad nombre' => 'Manejo de Residuos',
                    'Cuarta actividad porcentaje' => 13.04,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 8.70
                )
            )
        );
    } // datos

} // Clase ResidencialLaRosa

?>
