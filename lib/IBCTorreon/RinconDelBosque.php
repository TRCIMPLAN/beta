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
 * Clase RinconDelBosque
 */
class RinconDelBosque extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Rincón del Bosque';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-18 13:33:45';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'rincon-del-bosque';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Rincón del Bosque de Torreón.';
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
                    'Población total' => 1041,
                    'Porcentaje de población masculina' => 51.20,
                    'Porcentaje de población femenina' => 48.80,
                    'Porcentaje de población de 0 a 14 años' => 31.12,
                    'Porcentaje de población de 15 a 64 años' => 62.63,
                    'Porcentaje de población de 65 y más años' => 4.51,
                    'Porcentaje de población no especificada' => 1.74,
                    'Fecundidad promedio' => 2.49,
                    'Porcentaje de población nacida en otro estado' => 18.32,
                    'Porcentaje de población con discapacidad' => 5.15,
                    'Porcentaje de población de 15 y más analfabeta' => 1.50,
                    'Porcentaje de población de 18 y más' => 60.23,
                    'Porcentaje de población de 18 y más postbásicos' => 18.17
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 8.29,
                    'Grado Promedio de Escolaridad masculina' => 8.61,
                    'Grado Promedio de Escolaridad femenina' => 7.98
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 53.30,
                    'Población Económicamente Activa masculina' => 70.97,
                    'Población Económicamente Activa femenina' => 29.03,
                    'Población Ocupada' => 87.03,
                    'Población Ocupada masculina' => 69.37,
                    'Población Ocupada femenina' => 30.63,
                    'Población Desocupada' => 12.97,
                    'Derechohabiencia' => 60.61
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 249,
                    'Hogares Jefatura masculina' => 84.11,
                    'Hogares Jefatura femenina' => 15.89,
                    'Ocupación por Vivienda' => 4.18,
                    'Viviendas con Electricidad' => 99.60,
                    'Viviendas con Agua' => 99.60,
                    'Viviendas con Drenaje' => 99.60,
                    'Viviendas con Televisión' => 98.39,
                    'Viviendas con Automóvil' => 50.48,
                    'Viviendas con Computadora' => 31.30,
                    'Viviendas con Celular' => 77.39,
                    'Viviendas con Internet' => 13.59
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 33,
                    'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Primer actividad porcentaje' => 36.36,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 30.30,
                    'Tercera actividad nombre' => 'Comercio Mayoreo',
                    'Tercera actividad porcentaje' => 9.09,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 9.09,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 6.06
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

} // Clase RinconDelBosque

?>
