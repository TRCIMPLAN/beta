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
 * Clase ElSigloDeTorreon
 */
class ElSigloDeTorreon extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'El Siglo De Torreón';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-16 15:38:41';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'el-siglo-de-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia El Siglo De Torreón de Torreón.';
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
                    'Población total' => 234,
                    'Porcentaje de población masculina' => 52.96,
                    'Porcentaje de población femenina' => 47.04,
                    'Porcentaje de población de 0 a 14 años' => 42.90,
                    'Porcentaje de población de 15 a 64 años' => 54.36,
                    'Porcentaje de población de 65 y más años' => 2.68,
                    'Porcentaje de población no especificada' => 0.06,
                    'Fecundidad promedio' => 2.80,
                    'Porcentaje de población nacida en otro estado' => 12.29,
                    'Porcentaje de población con discapacidad' => 8.39,
                    'Porcentaje de población de 15 y más analfabeta' => 3.08,
                    'Porcentaje de población de 18 y más' => 51.76,
                    'Porcentaje de población de 18 y más postbásicos' => 23.87
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 6.61,
                    'Grado Promedio de Escolaridad masculina' => 6.49,
                    'Grado Promedio de Escolaridad femenina' => 6.74
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.39,
                    'Población Económicamente Activa masculina' => 77.61,
                    'Población Económicamente Activa femenina' => 22.39,
                    'Población Ocupada' => 88.63,
                    'Población Ocupada masculina' => 76.48,
                    'Población Ocupada femenina' => 23.52,
                    'Población Desocupada' => 11.37,
                    'Derechohabiencia' => 55.83
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 51,
                    'Hogares Jefatura masculina' => 91.72,
                    'Hogares Jefatura femenina' => 8.28,
                    'Ocupación por Vivienda' => 4.59,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 98.81,
                    'Viviendas con Drenaje' => 85.07,
                    'Viviendas con Televisión' => 98.76,
                    'Viviendas con Automóvil' => 59.94,
                    'Viviendas con Computadora' => 12.32,
                    'Viviendas con Celular' => 80.16,
                    'Viviendas con Internet' => 4.74
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

} // Clase ElSigloDeTorreon

?>
