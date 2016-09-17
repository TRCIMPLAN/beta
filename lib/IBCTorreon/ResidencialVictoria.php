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
 * Clase ResidencialVictoria
 */
class ResidencialVictoria extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Residencial Victoria';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-17 15:33:02';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'residencial-victoria';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial Victoria de Torreón.';
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
                'Población total' => 1111,
                'Porcentaje de población masculina' => 47.61,
                'Porcentaje de población femenina' => 52.39,
                'Porcentaje de población de 0 a 14 años' => 36.45,
                'Porcentaje de población de 15 a 64 años' => 59.86,
                'Porcentaje de población de 65 y más años' => 2.07,
                'Porcentaje de población no especificada' => 1.62,
                'Fecundidad promedio' => 1.92,
                'Porcentaje de población nacida en otro estado' => 13.91,
                'Porcentaje de población con discapacidad' => 3.22
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => 9.53,
                'Grado Promedio de Escolaridad masculina' => 9.67,
                'Grado Promedio de Escolaridad femenina' => 9.32
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => 61.07,
                'Población Económicamente Activa masculina' => 61.76,
                'Población Económicamente Activa femenina' => 38.24,
                'Población Ocupada' => 89.14,
                'Población Ocupada masculina' => 61.22,
                'Población Ocupada femenina' => 38.78,
                'Población Desocupada' => 10.86,
                'Derechohabiencia' => 77.32
            ),
            'Viviendas' => array(
                'Hogares' => 296,
                'Hogares Jefatura masculina' => 77.70,
                'Hogares Jefatura femenina' => 22.30,
                'Ocupación por Vivienda' => 3.75,
                'Viviendas con Electricidad' => 100.00,
                'Viviendas con Agua' => 100.00,
                'Viviendas con Drenaje' => 100.00,
                'Viviendas con Televisión' => 99.66,
                'Viviendas con Automóvil' => 51.68,
                'Viviendas con Computadora' => 27.42,
                'Viviendas con Celular' => 85.81,
                'Viviendas con Internet' => 18.26
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => 38,
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => 31.58,
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => 28.95,
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => 10.53,
                'Cuarta actividad nombre' => 'Esparcimiento, Culturales, Deportivos',
                'Cuarta actividad porcentaje' => 5.26,
                'Quinta actividad nombre' => 'Salud',
                'Quinta actividad porcentaje' => 5.26
            )
        );
    } // datos

} // Clase ResidencialVictoria

?>
