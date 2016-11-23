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
 * Clase ResidencialLosPortones
 */
class ResidencialLosPortones extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Residencial Los Portones';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:11';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'residencial-los-portones';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial Los Portones de Torreón.';
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
                    'Población total' => 419,
                    'Porcentaje de población masculina' => 45.58,
                    'Porcentaje de población femenina' => 54.42,
                    'Porcentaje de población de 0 a 14 años' => 26.01,
                    'Porcentaje de población de 15 a 64 años' => 70.64,
                    'Porcentaje de población de 65 y más años' => 1.19,
                    'Porcentaje de población no especificada' => 2.16,
                    'Fecundidad promedio' => 1.27,
                    'Porcentaje de población nacida en otro estado' => 20.29,
                    'Porcentaje de población con discapacidad' => 1.91,
                    'Porcentaje de población de 15 y más analfabeta' => 0.30,
                    'Porcentaje de población de 18 y más' => 66.83,
                    'Porcentaje de población de 18 y más postbásicos' => 59.43
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 14.24,
                    'Grado Promedio de Escolaridad masculina' => 14.82,
                    'Grado Promedio de Escolaridad femenina' => 13.77
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 62.85,
                    'Población Económicamente Activa masculina' => 52.71,
                    'Población Económicamente Activa femenina' => 47.29,
                    'Población Ocupada' => 97.99,
                    'Población Ocupada masculina' => 52.26,
                    'Población Ocupada femenina' => 47.74,
                    'Población Desocupada' => 2.01,
                    'Derechohabiencia' => 94.27
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 124,
                    'Hogares Jefatura masculina' => 80.65,
                    'Hogares Jefatura femenina' => 19.35,
                    'Ocupación por Vivienda' => 3.38,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 97.58,
                    'Viviendas con Computadora' => 91.94,
                    'Viviendas con Celular' => 93.55,
                    'Viviendas con Internet' => 85.48
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 6,
                    'Primer actividad nombre' => 'Esparcimiento, Culturales, Deportivos',
                    'Primer actividad porcentaje' => 33.33,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 16.67,
                    'Tercera actividad nombre' => 'Educativos',
                    'Tercera actividad porcentaje' => 16.67,
                    'Cuarta actividad nombre' => 'Comercio Menudeo',
                    'Cuarta actividad porcentaje' => 16.67,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 16.67
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

} // Clase ResidencialLosPortones

?>
