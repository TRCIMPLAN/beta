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
 * Clase SantaFe
 */
class SantaFe extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Santa Fe';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-18 13:33:45';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'santa-fe';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Santa Fe de Torreón.';
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
                    'Población total' => 820,
                    'Porcentaje de población masculina' => 46.83,
                    'Porcentaje de población femenina' => 53.17,
                    'Porcentaje de población de 0 a 14 años' => 27.80,
                    'Porcentaje de población de 15 a 64 años' => 67.32,
                    'Porcentaje de población de 65 y más años' => 4.51,
                    'Porcentaje de población no especificada' => 0.37,
                    'Fecundidad promedio' => 1.67,
                    'Porcentaje de población nacida en otro estado' => 24.02,
                    'Porcentaje de población con discapacidad' => 21.24,
                    'Porcentaje de población de 15 y más analfabeta' => 0.13,
                    'Porcentaje de población de 18 y más' => 66.95,
                    'Porcentaje de población de 18 y más postbásicos' => 55.12
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 13.46,
                    'Grado Promedio de Escolaridad masculina' => 13.81,
                    'Grado Promedio de Escolaridad femenina' => 13.16
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 59.31,
                    'Población Económicamente Activa masculina' => 57.45,
                    'Población Económicamente Activa femenina' => 42.55,
                    'Población Ocupada' => 94.98,
                    'Población Ocupada masculina' => 56.15,
                    'Población Ocupada femenina' => 43.85,
                    'Población Desocupada' => 5.02,
                    'Derechohabiencia' => 85.61
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 262,
                    'Hogares Jefatura masculina' => 75.19,
                    'Hogares Jefatura femenina' => 24.81,
                    'Ocupación por Vivienda' => 3.13,
                    'Viviendas con Electricidad' => 99.62,
                    'Viviendas con Agua' => 99.62,
                    'Viviendas con Drenaje' => 99.62,
                    'Viviendas con Televisión' => 99.24,
                    'Viviendas con Automóvil' => 77.10,
                    'Viviendas con Computadora' => 61.83,
                    'Viviendas con Celular' => 93.51,
                    'Viviendas con Internet' => 49.62
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 21,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 42.86,
                    'Segunda actividad nombre' => 'Educativos',
                    'Segunda actividad porcentaje' => 33.33,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 9.52,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 9.52,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 4.76
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

} // Clase SantaFe

?>
