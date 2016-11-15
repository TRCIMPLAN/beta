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
 * Clase AmpliacionLazaroCardenas
 */
class AmpliacionLazaroCardenas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Ampliacion Lazaro Cardenas';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-15 08:36:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'ampliacion-lazaro-cardenas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ampliacion Lazaro Cardenas de Torreón.';
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
                    'Población total' => 2755,
                    'Porcentaje de población masculina' => 48.46,
                    'Porcentaje de población femenina' => 51.54,
                    'Porcentaje de población de 0 a 14 años' => 27.22,
                    'Porcentaje de población de 15 a 64 años' => 67.59,
                    'Porcentaje de población de 65 y más años' => 4.65,
                    'Porcentaje de población no especificada' => 0.54,
                    'Fecundidad promedio' => 2.00,
                    'Porcentaje de población nacida en otro estado' => 18.52,
                    'Porcentaje de población con discapacidad' => 13.92,
                    'Porcentaje de población de 15 y más analfabeta' => 0.64,
                    'Porcentaje de población de 18 y más' => 65.26,
                    'Porcentaje de población de 18 y más postbásicos' => 30.98
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 9.90,
                    'Grado Promedio de Escolaridad masculina' => 10.01,
                    'Grado Promedio de Escolaridad femenina' => 9.79
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.43,
                    'Población Económicamente Activa masculina' => 64.85,
                    'Población Económicamente Activa femenina' => 35.15,
                    'Población Ocupada' => 93.87,
                    'Población Ocupada masculina' => 64.02,
                    'Población Ocupada femenina' => 35.98,
                    'Población Desocupada' => 6.13,
                    'Derechohabiencia' => 72.99
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 699,
                    'Hogares Jefatura masculina' => 77.98,
                    'Hogares Jefatura femenina' => 22.02,
                    'Ocupación por Vivienda' => 3.94,
                    'Viviendas con Electricidad' => 99.71,
                    'Viviendas con Agua' => 99.28,
                    'Viviendas con Drenaje' => 99.71,
                    'Viviendas con Televisión' => 98.00,
                    'Viviendas con Automóvil' => 60.28,
                    'Viviendas con Computadora' => 44.43,
                    'Viviendas con Celular' => 77.54,
                    'Viviendas con Internet' => 33.64
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 64,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 43.75,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 20.31,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 12.50,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 9.38,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 4.69
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

} // Clase AmpliacionLazaroCardenas

?>
