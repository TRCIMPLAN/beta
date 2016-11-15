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
 * Clase LasFloresCooperativaHabitacional
 */
class LasFloresCooperativaHabitacional extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Las Flores Cooperativa Habitacional';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-15 08:36:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'las-flores-cooperativa-habitacional';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Las Flores Cooperativa Habitacional de Torreón.';
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
                    'Población total' => 159,
                    'Porcentaje de población masculina' => 45.28,
                    'Porcentaje de población femenina' => 54.72,
                    'Porcentaje de población de 0 a 14 años' => 23.90,
                    'Porcentaje de población de 15 a 64 años' => 69.81,
                    'Porcentaje de población de 65 y más años' => 6.29,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.88,
                    'Porcentaje de población nacida en otro estado' => 18.87,
                    'Porcentaje de población con discapacidad' => 5.95,
                    'Porcentaje de población de 15 y más analfabeta' => 1.03,
                    'Porcentaje de población de 18 y más' => 66.04,
                    'Porcentaje de población de 18 y más postbásicos' => 51.57
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 12.27,
                    'Grado Promedio de Escolaridad masculina' => 12.90,
                    'Grado Promedio de Escolaridad femenina' => 11.72
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 55.47,
                    'Población Económicamente Activa masculina' => 61.97,
                    'Población Económicamente Activa femenina' => 38.03,
                    'Población Ocupada' => 98.57,
                    'Población Ocupada masculina' => 62.86,
                    'Población Ocupada femenina' => 37.14,
                    'Población Desocupada' => 1.43,
                    'Derechohabiencia' => 71.70
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 41,
                    'Hogares Jefatura masculina' => 80.49,
                    'Hogares Jefatura femenina' => 19.51,
                    'Ocupación por Vivienda' => 3.88,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 87.80,
                    'Viviendas con Computadora' => 70.73,
                    'Viviendas con Celular' => 90.24,
                    'Viviendas con Internet' => 58.54
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

} // Clase LasFloresCooperativaHabitacional

?>
