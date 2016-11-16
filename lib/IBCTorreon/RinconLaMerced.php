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
 * Clase RinconLaMerced
 */
class RinconLaMerced extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Rincón la Merced';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-16 15:38:41';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'rincon-la-merced';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Rincón la Merced de Torreón.';
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
                    'Población total' => 15507,
                    'Porcentaje de población masculina' => 49.13,
                    'Porcentaje de población femenina' => 50.87,
                    'Porcentaje de población de 0 a 14 años' => 33.62,
                    'Porcentaje de población de 15 a 64 años' => 62.44,
                    'Porcentaje de población de 65 y más años' => 2.90,
                    'Porcentaje de población no especificada' => 1.04,
                    'Fecundidad promedio' => 1.84,
                    'Porcentaje de población nacida en otro estado' => 12.56,
                    'Porcentaje de población con discapacidad' => 2.39,
                    'Porcentaje de población de 15 y más analfabeta' => 0.27,
                    'Porcentaje de población de 18 y más' => 56.99,
                    'Porcentaje de población de 18 y más postbásicos' => 30.11
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 10.44,
                    'Grado Promedio de Escolaridad masculina' => 10.69,
                    'Grado Promedio de Escolaridad femenina' => 10.19
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 53.90,
                    'Población Económicamente Activa masculina' => 63.67,
                    'Población Económicamente Activa femenina' => 36.33,
                    'Población Ocupada' => 92.42,
                    'Población Ocupada masculina' => 62.92,
                    'Población Ocupada femenina' => 37.08,
                    'Población Desocupada' => 7.58,
                    'Derechohabiencia' => 72.68
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 3946,
                    'Hogares Jefatura masculina' => 79.70,
                    'Hogares Jefatura femenina' => 20.30,
                    'Ocupación por Vivienda' => 3.93,
                    'Viviendas con Electricidad' => 99.79,
                    'Viviendas con Agua' => 99.46,
                    'Viviendas con Drenaje' => 99.33,
                    'Viviendas con Televisión' => 98.90,
                    'Viviendas con Automóvil' => 56.62,
                    'Viviendas con Computadora' => 40.73,
                    'Viviendas con Celular' => 85.28,
                    'Viviendas con Internet' => 29.52
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 309,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 45.63,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 16.18,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 15.53,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 6.15,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 5.50
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

} // Clase RinconLaMerced

?>
