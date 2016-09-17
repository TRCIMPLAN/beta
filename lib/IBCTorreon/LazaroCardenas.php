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
 * Clase LazaroCardenas
 */
class LazaroCardenas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Lazaro Cardenas';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-17 15:33:00';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'lazaro-cardenas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Lazaro Cardenas de Torreón.';
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
                'Población total' => 5473,
                'Porcentaje de población masculina' => 49.54,
                'Porcentaje de población femenina' => 50.46,
                'Porcentaje de población de 0 a 14 años' => 33.00,
                'Porcentaje de población de 15 a 64 años' => 62.32,
                'Porcentaje de población de 65 y más años' => 4.63,
                'Porcentaje de población no especificada' => 0.05,
                'Fecundidad promedio' => 2.53,
                'Porcentaje de población nacida en otro estado' => 20.45,
                'Porcentaje de población con discapacidad' => 9.89
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => 7.69,
                'Grado Promedio de Escolaridad masculina' => 7.71,
                'Grado Promedio de Escolaridad femenina' => 7.67
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => 52.71,
                'Población Económicamente Activa masculina' => 71.22,
                'Población Económicamente Activa femenina' => 28.78,
                'Población Ocupada' => 90.49,
                'Población Ocupada masculina' => 70.40,
                'Población Ocupada femenina' => 29.60,
                'Población Desocupada' => 9.51,
                'Derechohabiencia' => 64.77
            ),
            'Viviendas' => array(
                'Hogares' => 1381,
                'Hogares Jefatura masculina' => 79.46,
                'Hogares Jefatura femenina' => 20.54,
                'Ocupación por Vivienda' => 3.96,
                'Viviendas con Electricidad' => 100.00,
                'Viviendas con Agua' => 97.09,
                'Viviendas con Drenaje' => 96.79,
                'Viviendas con Televisión' => 97.08,
                'Viviendas con Automóvil' => 40.24,
                'Viviendas con Computadora' => 17.62,
                'Viviendas con Celular' => 61.29,
                'Viviendas con Internet' => 8.14
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => 166,
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => 43.98,
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => 19.28,
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => 11.45,
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => 9.04,
                'Quinta actividad nombre' => 'Comercio Mayoreo',
                'Quinta actividad porcentaje' => 4.22
            )
        );
    } // datos

} // Clase LazaroCardenas

?>
