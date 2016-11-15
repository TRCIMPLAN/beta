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
 * Clase PlanDeSanLuis
 */
class PlanDeSanLuis extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Plan De San Luis';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-15 08:36:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'plan-de-san-luis';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Plan De San Luis de Torreón.';
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
                    'Población total' => 859,
                    'Porcentaje de población masculina' => 49.59,
                    'Porcentaje de población femenina' => 50.41,
                    'Porcentaje de población de 0 a 14 años' => 24.10,
                    'Porcentaje de población de 15 a 64 años' => 72.41,
                    'Porcentaje de población de 65 y más años' => 3.14,
                    'Porcentaje de población no especificada' => 0.35,
                    'Fecundidad promedio' => 1.84,
                    'Porcentaje de población nacida en otro estado' => 19.03,
                    'Porcentaje de población con discapacidad' => 3.93,
                    'Porcentaje de población de 15 y más analfabeta' => 0.10,
                    'Porcentaje de población de 18 y más' => 68.80,
                    'Porcentaje de población de 18 y más postbásicos' => 40.16
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 11.07,
                    'Grado Promedio de Escolaridad masculina' => 11.25,
                    'Grado Promedio de Escolaridad femenina' => 10.88
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 56.88,
                    'Población Económicamente Activa masculina' => 62.47,
                    'Población Económicamente Activa femenina' => 37.53,
                    'Población Ocupada' => 94.15,
                    'Población Ocupada masculina' => 61.07,
                    'Población Ocupada femenina' => 38.93,
                    'Población Desocupada' => 5.85,
                    'Derechohabiencia' => 70.66
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 231,
                    'Hogares Jefatura masculina' => 81.39,
                    'Hogares Jefatura femenina' => 18.61,
                    'Ocupación por Vivienda' => 3.72,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 98.70,
                    'Viviendas con Automóvil' => 60.61,
                    'Viviendas con Computadora' => 48.24,
                    'Viviendas con Celular' => 80.95,
                    'Viviendas con Internet' => 37.59
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 20,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 40.00,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 10.00,
                    'Cuarta actividad nombre' => 'Comercio Mayoreo',
                    'Cuarta actividad porcentaje' => 10.00,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 10.00
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

} // Clase PlanDeSanLuis

?>
