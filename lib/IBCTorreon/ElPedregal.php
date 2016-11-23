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
 * Clase ElPedregal
 */
class ElPedregal extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'El Pedregal';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:08';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'el-pedregal';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia El Pedregal de Torreón.';
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
                    'Población total' => 1254,
                    'Porcentaje de población masculina' => 50.96,
                    'Porcentaje de población femenina' => 49.04,
                    'Porcentaje de población de 0 a 14 años' => 34.21,
                    'Porcentaje de población de 15 a 64 años' => 62.12,
                    'Porcentaje de población de 65 y más años' => 1.52,
                    'Porcentaje de población no especificada' => 2.15,
                    'Fecundidad promedio' => 1.84,
                    'Porcentaje de población nacida en otro estado' => 17.07,
                    'Porcentaje de población con discapacidad' => 1.22,
                    'Porcentaje de población de 15 y más analfabeta' => 0.20,
                    'Porcentaje de población de 18 y más' => 57.50,
                    'Porcentaje de población de 18 y más postbásicos' => 31.98
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 11.13,
                    'Grado Promedio de Escolaridad masculina' => 11.27,
                    'Grado Promedio de Escolaridad femenina' => 10.99
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 55.78,
                    'Población Económicamente Activa masculina' => 67.15,
                    'Población Económicamente Activa femenina' => 32.85,
                    'Población Ocupada' => 91.66,
                    'Población Ocupada masculina' => 65.99,
                    'Población Ocupada femenina' => 34.01,
                    'Población Desocupada' => 8.34,
                    'Derechohabiencia' => 69.62
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 329,
                    'Hogares Jefatura masculina' => 77.51,
                    'Hogares Jefatura femenina' => 22.49,
                    'Ocupación por Vivienda' => 3.81,
                    'Viviendas con Electricidad' => 99.70,
                    'Viviendas con Agua' => 99.70,
                    'Viviendas con Drenaje' => 99.39,
                    'Viviendas con Televisión' => 98.18,
                    'Viviendas con Automóvil' => 57.75,
                    'Viviendas con Computadora' => 41.34,
                    'Viviendas con Celular' => 79.03,
                    'Viviendas con Internet' => 28.88
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 33,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 36.36,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 21.21,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 21.21,
                    'Cuarta actividad nombre' => 'Financieros y Seguros',
                    'Cuarta actividad porcentaje' => 6.06,
                    'Quinta actividad nombre' => 'Manejo de Residuos',
                    'Quinta actividad porcentaje' => 3.03
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

} // Clase ElPedregal

?>
