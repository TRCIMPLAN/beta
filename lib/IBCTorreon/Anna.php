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
 * Clase Anna
 */
class Anna extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Anna';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-16 15:38:41';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'anna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Anna de Torreón.';
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
                    'Población total' => 4877,
                    'Porcentaje de población masculina' => 48.48,
                    'Porcentaje de población femenina' => 51.52,
                    'Porcentaje de población de 0 a 14 años' => 37.34,
                    'Porcentaje de población de 15 a 64 años' => 59.23,
                    'Porcentaje de población de 65 y más años' => 2.12,
                    'Porcentaje de población no especificada' => 1.31,
                    'Fecundidad promedio' => 1.85,
                    'Porcentaje de población nacida en otro estado' => 13.37,
                    'Porcentaje de población con discapacidad' => 1.52,
                    'Porcentaje de población de 15 y más analfabeta' => 0.38,
                    'Porcentaje de población de 18 y más' => 55.13,
                    'Porcentaje de población de 18 y más postbásicos' => 21.15
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 9.49,
                    'Grado Promedio de Escolaridad masculina' => 9.50,
                    'Grado Promedio de Escolaridad femenina' => 9.48
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 59.98,
                    'Población Económicamente Activa masculina' => 65.30,
                    'Población Económicamente Activa femenina' => 34.70,
                    'Población Ocupada' => 94.67,
                    'Población Ocupada masculina' => 64.81,
                    'Población Ocupada femenina' => 35.19,
                    'Población Desocupada' => 5.33,
                    'Derechohabiencia' => 75.03
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1262,
                    'Hogares Jefatura masculina' => 83.90,
                    'Hogares Jefatura femenina' => 16.10,
                    'Ocupación por Vivienda' => 3.86,
                    'Viviendas con Electricidad' => 99.75,
                    'Viviendas con Agua' => 99.67,
                    'Viviendas con Drenaje' => 99.51,
                    'Viviendas con Televisión' => 99.20,
                    'Viviendas con Automóvil' => 50.72,
                    'Viviendas con Computadora' => 25.26,
                    'Viviendas con Celular' => 86.34,
                    'Viviendas con Internet' => 19.41
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 83,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 53.01,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 10.84,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 9.64,
                    'Cuarta actividad nombre' => 'Salud',
                    'Cuarta actividad porcentaje' => 8.43,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 4.82
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

} // Clase Anna

?>
