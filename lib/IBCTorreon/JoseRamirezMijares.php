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
 * Clase JoseRamirezMijares
 */
class JoseRamirezMijares extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'José Ramírez Mijares';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:09';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'jose-ramirez-mijares';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia José Ramírez Mijares de Torreón.';
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
                    'Población total' => 1914,
                    'Porcentaje de población masculina' => 47.54,
                    'Porcentaje de población femenina' => 52.46,
                    'Porcentaje de población de 0 a 14 años' => 28.44,
                    'Porcentaje de población de 15 a 64 años' => 64.69,
                    'Porcentaje de población de 65 y más años' => 6.80,
                    'Porcentaje de población no especificada' => 0.07,
                    'Fecundidad promedio' => 2.32,
                    'Porcentaje de población nacida en otro estado' => 11.99,
                    'Porcentaje de población con discapacidad' => 6.68,
                    'Porcentaje de población de 15 y más analfabeta' => 1.90,
                    'Porcentaje de población de 18 y más' => 65.70,
                    'Porcentaje de población de 18 y más postbásicos' => 17.25
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 8.17,
                    'Grado Promedio de Escolaridad masculina' => 8.28,
                    'Grado Promedio de Escolaridad femenina' => 8.08
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 49.53,
                    'Población Económicamente Activa masculina' => 71.10,
                    'Población Económicamente Activa femenina' => 28.90,
                    'Población Ocupada' => 93.88,
                    'Población Ocupada masculina' => 70.07,
                    'Población Ocupada femenina' => 29.93,
                    'Población Desocupada' => 6.12,
                    'Derechohabiencia' => 68.75
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 488,
                    'Hogares Jefatura masculina' => 81.01,
                    'Hogares Jefatura femenina' => 18.99,
                    'Ocupación por Vivienda' => 3.92,
                    'Viviendas con Electricidad' => 97.71,
                    'Viviendas con Agua' => 95.85,
                    'Viviendas con Drenaje' => 96.26,
                    'Viviendas con Televisión' => 95.83,
                    'Viviendas con Automóvil' => 32.82,
                    'Viviendas con Computadora' => 15.15,
                    'Viviendas con Celular' => 47.80,
                    'Viviendas con Internet' => 4.59
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 40,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 52.50,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 15.00,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 12.50,
                    'Cuarta actividad nombre' => 'Salud',
                    'Cuarta actividad porcentaje' => 5.00,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 5.00
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
            'Centro latitud'  => 25.5210163245231,
            'Centro longitud' => -103.471146383972
        );
    } // mapas

} // Clase JoseRamirezMijares

?>
