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
 * Clase SendasDelBosque
 */
class SendasDelBosque extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Sendas Del Bosque';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-16 15:38:41';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'sendas-del-bosque';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Sendas Del Bosque de Torreón.';
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
                    'Población total' => 174,
                    'Porcentaje de población masculina' => 51.15,
                    'Porcentaje de población femenina' => 48.85,
                    'Porcentaje de población de 0 a 14 años' => 27.59,
                    'Porcentaje de población de 15 a 64 años' => 63.79,
                    'Porcentaje de población de 65 y más años' => 8.62,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 3.16,
                    'Porcentaje de población nacida en otro estado' => 6.90,
                    'Porcentaje de población con discapacidad' => 1.72,
                    'Porcentaje de población de 15 y más analfabeta' => 4.60,
                    'Porcentaje de población de 18 y más' => 70.69,
                    'Porcentaje de población de 18 y más postbásicos' => 13.79
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 7.49,
                    'Grado Promedio de Escolaridad masculina' => 7.75,
                    'Grado Promedio de Escolaridad femenina' => 7.24
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.59,
                    'Población Económicamente Activa masculina' => 74.65,
                    'Población Económicamente Activa femenina' => 25.35,
                    'Población Ocupada' => 94.05,
                    'Población Ocupada masculina' => 76.12,
                    'Población Ocupada femenina' => 23.88,
                    'Población Desocupada' => 5.95,
                    'Derechohabiencia' => 76.44
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 42,
                    'Hogares Jefatura masculina' => 83.33,
                    'Hogares Jefatura femenina' => 16.67,
                    'Ocupación por Vivienda' => 4.14,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 57.14,
                    'Viviendas con Computadora' => 30.95,
                    'Viviendas con Celular' => 66.67,
                    'Viviendas con Internet' => 16.67
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 11,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 45.45,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 27.27,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 18.18,
                    'Cuarta actividad nombre' => 'Inmobiliarios',
                    'Cuarta actividad porcentaje' => 9.09
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

} // Clase SendasDelBosque

?>
