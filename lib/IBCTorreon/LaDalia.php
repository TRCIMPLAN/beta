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
 * Clase LaDalia
 */
class LaDalia extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'La Dalia';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-16 15:38:41';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'la-dalia';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia La Dalia de Torreón.';
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
                    'Población total' => 4351,
                    'Porcentaje de población masculina' => 48.79,
                    'Porcentaje de población femenina' => 51.21,
                    'Porcentaje de población de 0 a 14 años' => 25.42,
                    'Porcentaje de población de 15 a 64 años' => 71.36,
                    'Porcentaje de población de 65 y más años' => 3.15,
                    'Porcentaje de población no especificada' => 0.07,
                    'Fecundidad promedio' => 2.20,
                    'Porcentaje de población nacida en otro estado' => 15.42,
                    'Porcentaje de población con discapacidad' => 7.06,
                    'Porcentaje de población de 15 y más analfabeta' => 0.42,
                    'Porcentaje de población de 18 y más' => 68.60,
                    'Porcentaje de población de 18 y más postbásicos' => 30.54
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 9.81,
                    'Grado Promedio de Escolaridad masculina' => 9.95,
                    'Grado Promedio de Escolaridad femenina' => 9.67
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 56.28,
                    'Población Económicamente Activa masculina' => 64.84,
                    'Población Económicamente Activa femenina' => 35.16,
                    'Población Ocupada' => 89.88,
                    'Población Ocupada masculina' => 63.64,
                    'Población Ocupada femenina' => 36.36,
                    'Población Desocupada' => 10.12,
                    'Derechohabiencia' => 77.52
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1087,
                    'Hogares Jefatura masculina' => 76.54,
                    'Hogares Jefatura femenina' => 23.46,
                    'Ocupación por Vivienda' => 4.00,
                    'Viviendas con Electricidad' => 99.91,
                    'Viviendas con Agua' => 99.63,
                    'Viviendas con Drenaje' => 99.82,
                    'Viviendas con Televisión' => 99.17,
                    'Viviendas con Automóvil' => 52.71,
                    'Viviendas con Computadora' => 36.25,
                    'Viviendas con Celular' => 74.70,
                    'Viviendas con Internet' => 26.12
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 88,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 51.14,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 18.18,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 12.50,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 5.68,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 4.55
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

} // Clase LaDalia

?>
