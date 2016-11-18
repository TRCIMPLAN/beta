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
 * Clase LasArboledas
 */
class LasArboledas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Las Arboledas';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-18 13:33:45';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'las-arboledas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Las Arboledas de Torreón.';
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
                    'Población total' => 2959,
                    'Porcentaje de población masculina' => 48.12,
                    'Porcentaje de población femenina' => 51.88,
                    'Porcentaje de población de 0 a 14 años' => 32.41,
                    'Porcentaje de población de 15 a 64 años' => 64.21,
                    'Porcentaje de población de 65 y más años' => 2.77,
                    'Porcentaje de población no especificada' => 0.61,
                    'Fecundidad promedio' => 1.73,
                    'Porcentaje de población nacida en otro estado' => 16.19,
                    'Porcentaje de población con discapacidad' => 2.31,
                    'Porcentaje de población de 15 y más analfabeta' => 0.03,
                    'Porcentaje de población de 18 y más' => 59.65,
                    'Porcentaje de población de 18 y más postbásicos' => 42.85
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 12.03,
                    'Grado Promedio de Escolaridad masculina' => 12.33,
                    'Grado Promedio de Escolaridad femenina' => 11.76
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 55.96,
                    'Población Económicamente Activa masculina' => 58.08,
                    'Población Económicamente Activa femenina' => 41.92,
                    'Población Ocupada' => 96.72,
                    'Población Ocupada masculina' => 57.20,
                    'Población Ocupada femenina' => 42.80,
                    'Población Desocupada' => 3.28,
                    'Derechohabiencia' => 78.95
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 793,
                    'Hogares Jefatura masculina' => 77.61,
                    'Hogares Jefatura femenina' => 22.39,
                    'Ocupación por Vivienda' => 3.73,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 99.87,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 98.99,
                    'Viviendas con Automóvil' => 74.00,
                    'Viviendas con Computadora' => 57.38,
                    'Viviendas con Celular' => 86.38,
                    'Viviendas con Internet' => 40.43
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 47,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 40.43,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 8.51,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 8.51,
                    'Cuarta actividad nombre' => 'Manejo de Residuos',
                    'Cuarta actividad porcentaje' => 8.51,
                    'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Quinta actividad porcentaje' => 8.51
                )
            )
        );
    } // datos

    /**
     * Mapas
     *
     * @return string
     */
    public function mapas() {
        return array('Límites' => \Configuracion\IBCTorreonConfig::LIMITES);
    } // mapas

} // Clase LasArboledas

?>
