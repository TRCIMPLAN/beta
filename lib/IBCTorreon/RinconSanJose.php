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
 * Clase RinconSanJose
 */
class RinconSanJose extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Rincón San José';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-18 13:33:45';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'rincon-san-jose';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Rincón San José de Torreón.';
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
                    'Población total' => 122,
                    'Porcentaje de población masculina' => 43.44,
                    'Porcentaje de población femenina' => 56.56,
                    'Porcentaje de población de 0 a 14 años' => 32.79,
                    'Porcentaje de población de 15 a 64 años' => 63.93,
                    'Porcentaje de población de 65 y más años' => 0.82,
                    'Porcentaje de población no especificada' => 2.46,
                    'Fecundidad promedio' => 1.36,
                    'Porcentaje de población nacida en otro estado' => 20.72,
                    'Porcentaje de población con discapacidad' => 0.21,
                    'Porcentaje de población de 15 y más analfabeta' => 0.07,
                    'Porcentaje de población de 18 y más' => 59.84,
                    'Porcentaje de población de 18 y más postbásicos' => 54.92
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 14.47,
                    'Grado Promedio de Escolaridad masculina' => 14.73,
                    'Grado Promedio de Escolaridad femenina' => 14.29
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 69.88,
                    'Población Económicamente Activa masculina' => 51.72,
                    'Población Económicamente Activa femenina' => 48.28,
                    'Población Ocupada' => 96.43,
                    'Población Ocupada masculina' => 50.00,
                    'Población Ocupada femenina' => 50.00,
                    'Población Desocupada' => 3.57,
                    'Derechohabiencia' => 86.07
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 39,
                    'Hogares Jefatura masculina' => 69.23,
                    'Hogares Jefatura femenina' => 30.77,
                    'Ocupación por Vivienda' => 3.13,
                    'Viviendas con Electricidad' => 97.44,
                    'Viviendas con Agua' => 97.44,
                    'Viviendas con Drenaje' => 97.44,
                    'Viviendas con Televisión' => 97.44,
                    'Viviendas con Automóvil' => 84.08,
                    'Viviendas con Computadora' => 80.53,
                    'Viviendas con Celular' => 94.87,
                    'Viviendas con Internet' => 61.54
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 1,
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
        return array('Límites' => \Configuracion\IBCTorreonConfig::LIMITES);
    } // mapas

} // Clase RinconSanJose

?>
