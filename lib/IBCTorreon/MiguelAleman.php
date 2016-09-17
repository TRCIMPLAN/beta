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
 * Clase MiguelAleman
 */
class MiguelAleman extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Miguel Aleman';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-17 15:33:00';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'miguel-aleman';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Miguel Aleman de Torreón.';
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
                'Población total' => 727,
                'Porcentaje de población masculina' => 46.22,
                'Porcentaje de población femenina' => 53.78,
                'Porcentaje de población de 0 a 14 años' => 27.65,
                'Porcentaje de población de 15 a 64 años' => 62.17,
                'Porcentaje de población de 65 y más años' => 9.77,
                'Porcentaje de población no especificada' => 0.41,
                'Fecundidad promedio' => 2.56,
                'Porcentaje de población nacida en otro estado' => 22.03,
                'Porcentaje de población con discapacidad' => 7.02
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => 9.44,
                'Grado Promedio de Escolaridad masculina' => 9.70,
                'Grado Promedio de Escolaridad femenina' => 9.22
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => 51.87,
                'Población Económicamente Activa masculina' => 62.33,
                'Población Económicamente Activa femenina' => 37.67,
                'Población Ocupada' => 90.71,
                'Población Ocupada masculina' => 61.42,
                'Población Ocupada femenina' => 38.58,
                'Población Desocupada' => 9.29,
                'Derechohabiencia' => 71.80
            ),
            'Viviendas' => array(
                'Hogares' => 199,
                'Hogares Jefatura masculina' => 68.84,
                'Hogares Jefatura femenina' => 31.16,
                'Ocupación por Vivienda' => 3.65,
                'Viviendas con Electricidad' => 100.00,
                'Viviendas con Agua' => 99.50,
                'Viviendas con Drenaje' => 100.00,
                'Viviendas con Televisión' => 98.99,
                'Viviendas con Automóvil' => 53.27,
                'Viviendas con Computadora' => 35.17,
                'Viviendas con Celular' => 65.33,
                'Viviendas con Internet' => 24.43
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => 52,
                'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Primer actividad porcentaje' => 32.69,
                'Segunda actividad nombre' => 'Comercio Menudeo',
                'Segunda actividad porcentaje' => 19.23,
                'Tercera actividad nombre' => 'Industria Manufacturera',
                'Tercera actividad porcentaje' => 15.38,
                'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Cuarta actividad porcentaje' => 9.62,
                'Quinta actividad nombre' => 'Inmobiliarios',
                'Quinta actividad porcentaje' => 5.77
            )
        );
    } // datos

} // Clase MiguelAleman

?>
