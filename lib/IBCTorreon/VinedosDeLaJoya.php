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
 * Clase VinedosDeLaJoya
 */
class VinedosDeLaJoya extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Viñedos de La Joya';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:12';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'vinedos-de-la-joya';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Viñedos de La Joya de Torreón.';
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
                    'Población total' => 438,
                    'Porcentaje de población masculina' => 46.35,
                    'Porcentaje de población femenina' => 53.65,
                    'Porcentaje de población de 0 a 14 años' => 36.76,
                    'Porcentaje de población de 15 a 64 años' => 60.05,
                    'Porcentaje de población de 65 y más años' => 1.14,
                    'Porcentaje de población no especificada' => 2.05,
                    'Fecundidad promedio' => 1.69,
                    'Porcentaje de población nacida en otro estado' => 13.22,
                    'Porcentaje de población con discapacidad' => 0.52,
                    'Porcentaje de población de 15 y más analfabeta' => 0.00,
                    'Porcentaje de población de 18 y más' => 56.62,
                    'Porcentaje de población de 18 y más postbásicos' => 23.79
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 9.85,
                    'Grado Promedio de Escolaridad masculina' => 9.93,
                    'Grado Promedio de Escolaridad femenina' => 9.76
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.90,
                    'Población Económicamente Activa masculina' => 73.25,
                    'Población Económicamente Activa femenina' => 26.75,
                    'Población Ocupada' => 93.23,
                    'Población Ocupada masculina' => 71.99,
                    'Población Ocupada femenina' => 28.01,
                    'Población Desocupada' => 6.77,
                    'Derechohabiencia' => 70.32
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 118,
                    'Hogares Jefatura masculina' => 88.14,
                    'Hogares Jefatura femenina' => 11.86,
                    'Ocupación por Vivienda' => 3.71,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 96.61,
                    'Viviendas con Televisión' => 99.15,
                    'Viviendas con Automóvil' => 50.33,
                    'Viviendas con Computadora' => 25.84,
                    'Viviendas con Celular' => 94.07,
                    'Viviendas con Internet' => 19.98
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 15,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 40.00,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 26.67,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 13.33,
                    'Cuarta actividad nombre' => 'Manejo de Residuos',
                    'Cuarta actividad porcentaje' => 6.67,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 6.67
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
            'Centro latitud'  => 25.0,
            'Centro longitud' => -103.5);
    } // mapas

} // Clase VinedosDeLaJoya

?>
