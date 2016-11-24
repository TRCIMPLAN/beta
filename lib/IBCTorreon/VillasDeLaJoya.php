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
 * Clase VillasDeLaJoya
 */
class VillasDeLaJoya extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Villas de La Joya';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:12';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'villas-de-la-joya';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Villas de La Joya de Torreón.';
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
                    'Población total' => 1146,
                    'Porcentaje de población masculina' => 46.51,
                    'Porcentaje de población femenina' => 53.49,
                    'Porcentaje de población de 0 a 14 años' => 38.31,
                    'Porcentaje de población de 15 a 64 años' => 60.38,
                    'Porcentaje de población de 65 y más años' => 1.31,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.90,
                    'Porcentaje de población nacida en otro estado' => 15.45,
                    'Porcentaje de población con discapacidad' => 2.19,
                    'Porcentaje de población de 15 y más analfabeta' => 0.23,
                    'Porcentaje de población de 18 y más' => 58.12,
                    'Porcentaje de población de 18 y más postbásicos' => 24.08
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 9.04,
                    'Grado Promedio de Escolaridad masculina' => 9.15,
                    'Grado Promedio de Escolaridad femenina' => 8.61
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 61.38,
                    'Población Económicamente Activa masculina' => 63.35,
                    'Población Económicamente Activa femenina' => 36.65,
                    'Población Ocupada' => 89.31,
                    'Población Ocupada masculina' => 61.97,
                    'Población Ocupada femenina' => 38.03,
                    'Población Desocupada' => 10.69,
                    'Derechohabiencia' => 78.97
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 311,
                    'Hogares Jefatura masculina' => 77.17,
                    'Hogares Jefatura femenina' => 22.83,
                    'Ocupación por Vivienda' => 3.68,
                    'Viviendas con Electricidad' => 99.36,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 98.39,
                    'Viviendas con Automóvil' => 54.34,
                    'Viviendas con Computadora' => 30.05,
                    'Viviendas con Celular' => 82.32,
                    'Viviendas con Internet' => 16.62
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 14,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 57.14,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 14.29,
                    'Tercera actividad nombre' => 'Manejo de Residuos',
                    'Tercera actividad porcentaje' => 7.14,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 7.14,
                    'Quinta actividad nombre' => 'Inmobiliarios',
                    'Quinta actividad porcentaje' => 7.14
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
            'Centro latitud'  => 25.5450009063256,
            'Centro longitud' => -103.349189184243
        );
    } // mapas

} // Clase VillasDeLaJoya

?>
