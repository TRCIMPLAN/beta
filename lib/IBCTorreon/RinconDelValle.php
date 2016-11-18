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
 * Clase RinconDelValle
 */
class RinconDelValle extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Rincón del Valle';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-18 13:33:45';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'rincon-del-valle';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Rincón del Valle de Torreón.';
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
                    'Población total' => 164,
                    'Porcentaje de población masculina' => 44.51,
                    'Porcentaje de población femenina' => 55.49,
                    'Porcentaje de población de 0 a 14 años' => 37.80,
                    'Porcentaje de población de 15 a 64 años' => 62.20,
                    'Porcentaje de población de 65 y más años' => 0.00,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.80,
                    'Porcentaje de población nacida en otro estado' => 17.97,
                    'Porcentaje de población con discapacidad' => 1.83,
                    'Porcentaje de población de 15 y más analfabeta' => 0.15,
                    'Porcentaje de población de 18 y más' => 56.10,
                    'Porcentaje de población de 18 y más postbásicos' => 41.46
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 12.80,
                    'Grado Promedio de Escolaridad masculina' => 13.13,
                    'Grado Promedio de Escolaridad femenina' => 12.54
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 61.61,
                    'Población Económicamente Activa masculina' => 62.32,
                    'Población Económicamente Activa femenina' => 37.68,
                    'Población Ocupada' => 95.46,
                    'Población Ocupada masculina' => 62.12,
                    'Población Ocupada femenina' => 37.88,
                    'Población Desocupada' => 4.54,
                    'Derechohabiencia' => 85.37
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 43,
                    'Hogares Jefatura masculina' => 79.07,
                    'Hogares Jefatura femenina' => 20.93,
                    'Ocupación por Vivienda' => 3.81,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 83.72,
                    'Viviendas con Computadora' => 73.79,
                    'Viviendas con Celular' => 86.05,
                    'Viviendas con Internet' => 46.51
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

} // Clase RinconDelValle

?>
