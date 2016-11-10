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
 * Clase CampoNuevoZaragoza
 */
class CampoNuevoZaragoza extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Campo Nuevo Zaragoza';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:28';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'campo-nuevo-zaragoza';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Campo Nuevo Zaragoza de Torreón.';
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
                    'Población total' => 3934,
                    'Porcentaje de población masculina' => 49.52,
                    'Porcentaje de población femenina' => 50.48,
                    'Porcentaje de población de 0 a 14 años' => 38.99,
                    'Porcentaje de población de 15 a 64 años' => 57.55,
                    'Porcentaje de población de 65 y más años' => 1.78,
                    'Porcentaje de población no especificada' => 1.68,
                    'Fecundidad promedio' => 1.81,
                    'Porcentaje de población nacida en otro estado' => 15.18,
                    'Porcentaje de población con discapacidad' => 2.12,
                    'Porcentaje de población de 15 y más analfabeta' => 0.03,
                    'Porcentaje de población de 18 y más' => 54.22,
                    'Porcentaje de población de 18 y más postbásicos' => 32.61
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 11.21,
                    'Grado Promedio de Escolaridad masculina' => 11.43,
                    'Grado Promedio de Escolaridad femenina' => 10.99
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 58.82,
                    'Población Económicamente Activa masculina' => 65.16,
                    'Población Económicamente Activa femenina' => 34.84,
                    'Población Ocupada' => 91.22,
                    'Población Ocupada masculina' => 64.18,
                    'Población Ocupada femenina' => 35.82,
                    'Población Desocupada' => 8.78,
                    'Derechohabiencia' => 80.25
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1013,
                    'Hogares Jefatura masculina' => 85.88,
                    'Hogares Jefatura femenina' => 14.12,
                    'Ocupación por Vivienda' => 3.88,
                    'Viviendas con Electricidad' => 99.90,
                    'Viviendas con Agua' => 99.51,
                    'Viviendas con Drenaje' => 99.80,
                    'Viviendas con Televisión' => 99.11,
                    'Viviendas con Automóvil' => 65.35,
                    'Viviendas con Computadora' => 42.48,
                    'Viviendas con Celular' => 88.35,
                    'Viviendas con Internet' => 28.58
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 86,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 50.00,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 17.44,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 13.95,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 6.98,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 4.65
                )
            )
        );
    } // datos

} // Clase CampoNuevoZaragoza

?>
