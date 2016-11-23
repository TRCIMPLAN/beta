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
 * Clase FidelVelazquez
 */
class FidelVelazquez extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Fidel Velázquez';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:08';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'fidel-velazquez';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Fidel Velázquez de Torreón.';
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
                    'Población total' => 3367,
                    'Porcentaje de población masculina' => 49.99,
                    'Porcentaje de población femenina' => 50.01,
                    'Porcentaje de población de 0 a 14 años' => 22.54,
                    'Porcentaje de población de 15 a 64 años' => 72.65,
                    'Porcentaje de población de 65 y más años' => 4.63,
                    'Porcentaje de población no especificada' => 0.18,
                    'Fecundidad promedio' => 2.27,
                    'Porcentaje de población nacida en otro estado' => 20.29,
                    'Porcentaje de población con discapacidad' => 4.37,
                    'Porcentaje de población de 15 y más analfabeta' => 0.87,
                    'Porcentaje de población de 18 y más' => 72.53,
                    'Porcentaje de población de 18 y más postbásicos' => 33.80
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 10.12,
                    'Grado Promedio de Escolaridad masculina' => 10.44,
                    'Grado Promedio de Escolaridad femenina' => 9.80
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 56.48,
                    'Población Económicamente Activa masculina' => 62.63,
                    'Población Económicamente Activa femenina' => 37.37,
                    'Población Ocupada' => 86.44,
                    'Población Ocupada masculina' => 61.95,
                    'Población Ocupada femenina' => 38.05,
                    'Población Desocupada' => 13.56,
                    'Derechohabiencia' => 74.19
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 877,
                    'Hogares Jefatura masculina' => 74.00,
                    'Hogares Jefatura femenina' => 26.00,
                    'Ocupación por Vivienda' => 3.84,
                    'Viviendas con Electricidad' => 99.43,
                    'Viviendas con Agua' => 99.09,
                    'Viviendas con Drenaje' => 98.63,
                    'Viviendas con Televisión' => 98.75,
                    'Viviendas con Automóvil' => 52.68,
                    'Viviendas con Computadora' => 40.89,
                    'Viviendas con Celular' => 75.14,
                    'Viviendas con Internet' => 25.78
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 55,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 47.27,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 18.18,
                    'Tercera actividad nombre' => 'Salud',
                    'Tercera actividad porcentaje' => 7.27,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 7.27,
                    'Quinta actividad nombre' => 'Manejo de Residuos',
                    'Quinta actividad porcentaje' => 5.45
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

} // Clase FidelVelazquez

?>
