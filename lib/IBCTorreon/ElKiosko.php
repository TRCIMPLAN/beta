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
 * Clase ElKiosko
 */
class ElKiosko extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'El Kiosko';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-15 08:36:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'el-kiosko';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia El Kiosko de Torreón.';
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
                    'Población total' => 147,
                    'Porcentaje de población masculina' => 50.34,
                    'Porcentaje de población femenina' => 49.66,
                    'Porcentaje de población de 0 a 14 años' => 36.05,
                    'Porcentaje de población de 15 a 64 años' => 62.59,
                    'Porcentaje de población de 65 y más años' => 1.36,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.87,
                    'Porcentaje de población nacida en otro estado' => 10.20,
                    'Porcentaje de población con discapacidad' => 1.86,
                    'Porcentaje de población de 15 y más analfabeta' => 0.00,
                    'Porcentaje de población de 18 y más' => 58.50,
                    'Porcentaje de población de 18 y más postbásicos' => 34.01
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 10.96,
                    'Grado Promedio de Escolaridad masculina' => 10.70,
                    'Grado Promedio de Escolaridad femenina' => 11.23
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 68.42,
                    'Población Económicamente Activa masculina' => 61.54,
                    'Población Económicamente Activa femenina' => 38.46,
                    'Población Ocupada' => 95.17,
                    'Población Ocupada masculina' => 61.29,
                    'Población Ocupada femenina' => 38.71,
                    'Población Desocupada' => 4.83,
                    'Derechohabiencia' => 91.84
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 41,
                    'Hogares Jefatura masculina' => 87.80,
                    'Hogares Jefatura femenina' => 12.20,
                    'Ocupación por Vivienda' => 3.59,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 97.56,
                    'Viviendas con Automóvil' => 65.85,
                    'Viviendas con Computadora' => 31.71,
                    'Viviendas con Celular' => 85.37,
                    'Viviendas con Internet' => 24.39
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 11,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 36.36,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 18.18,
                    'Tercera actividad nombre' => 'Esparcimiento, Culturales, Deportivos',
                    'Tercera actividad porcentaje' => 18.18,
                    'Cuarta actividad nombre' => 'Inmobiliarios',
                    'Cuarta actividad porcentaje' => 18.18,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 9.09
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

} // Clase ElKiosko

?>
