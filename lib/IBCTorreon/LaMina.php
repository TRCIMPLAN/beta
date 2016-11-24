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
 * Clase LaMina
 */
class LaMina extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'La Mina';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:09';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'la-mina';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia La Mina de Torreón.';
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
                    'Población total' => 1762,
                    'Porcentaje de población masculina' => 51.02,
                    'Porcentaje de población femenina' => 48.98,
                    'Porcentaje de población de 0 a 14 años' => 19.19,
                    'Porcentaje de población de 15 a 64 años' => 70.27,
                    'Porcentaje de población de 65 y más años' => 5.52,
                    'Porcentaje de población no especificada' => 5.02,
                    'Fecundidad promedio' => 2.03,
                    'Porcentaje de población nacida en otro estado' => 19.53,
                    'Porcentaje de población con discapacidad' => 4.61,
                    'Porcentaje de población de 15 y más analfabeta' => 0.23,
                    'Porcentaje de población de 18 y más' => 69.36,
                    'Porcentaje de población de 18 y más postbásicos' => 41.46
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 11.09,
                    'Grado Promedio de Escolaridad masculina' => 11.53,
                    'Grado Promedio de Escolaridad femenina' => 10.64
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 47.79,
                    'Población Económicamente Activa masculina' => 62.27,
                    'Población Económicamente Activa femenina' => 37.73,
                    'Población Ocupada' => 95.41,
                    'Población Ocupada masculina' => 62.60,
                    'Población Ocupada femenina' => 37.40,
                    'Población Desocupada' => 4.59,
                    'Derechohabiencia' => 73.08
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 439,
                    'Hogares Jefatura masculina' => 79.90,
                    'Hogares Jefatura femenina' => 20.10,
                    'Ocupación por Vivienda' => 4.01,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 97.18,
                    'Viviendas con Automóvil' => 63.72,
                    'Viviendas con Computadora' => 55.63,
                    'Viviendas con Celular' => 79.73,
                    'Viviendas con Internet' => 43.12
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 50,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 40.00,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 16.00,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 8.00,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 8.00,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 8.00
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
        return array(
            'Límites'         => \Configuracion\IBCTorreonConfig::LIMITES,
            'Centro latitud'  => 25.5529176631691,
            'Centro longitud' => -103.371249048848
        );
    } // mapas

} // Clase LaMina

?>
