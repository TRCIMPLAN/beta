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
 * Clase VinedosDeLaVega
 */
class VinedosDeLaVega extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Viñedos de La Vega';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:12';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'vinedos-de-la-vega';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Viñedos de La Vega de Torreón.';
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
                    'Población total' => 299,
                    'Porcentaje de población masculina' => 48.49,
                    'Porcentaje de población femenina' => 51.51,
                    'Porcentaje de población de 0 a 14 años' => 38.13,
                    'Porcentaje de población de 15 a 64 años' => 60.87,
                    'Porcentaje de población de 65 y más años' => 1.00,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.88,
                    'Porcentaje de población nacida en otro estado' => 20.07,
                    'Porcentaje de población con discapacidad' => 1.87,
                    'Porcentaje de población de 15 y más analfabeta' => 0.67,
                    'Porcentaje de población de 18 y más' => 56.52,
                    'Porcentaje de población de 18 y más postbásicos' => 14.54
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 8.71,
                    'Grado Promedio de Escolaridad masculina' => 8.74,
                    'Grado Promedio de Escolaridad femenina' => 8.68
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 58.21,
                    'Población Económicamente Activa masculina' => 73.50,
                    'Población Económicamente Activa femenina' => 26.50,
                    'Población Ocupada' => 83.41,
                    'Población Ocupada masculina' => 72.00,
                    'Población Ocupada femenina' => 28.00,
                    'Población Desocupada' => 16.59,
                    'Derechohabiencia' => 64.21
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 81,
                    'Hogares Jefatura masculina' => 85.63,
                    'Hogares Jefatura femenina' => 14.37,
                    'Ocupación por Vivienda' => 3.69,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 46.10,
                    'Viviendas con Computadora' => 20.48,
                    'Viviendas con Celular' => 76.54,
                    'Viviendas con Internet' => 10.08
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 2,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 100.00
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
            'Centro latitud'  => 25.5576831979536,
            'Centro longitud' => -103.327908213856
        );
    } // mapas

} // Clase VinedosDeLaVega

?>
