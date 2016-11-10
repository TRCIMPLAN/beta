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
 * Clase ResidencialElFresno
 */
class ResidencialElFresno extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Residencial El Fresno';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:30';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'residencial-el-fresno';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial El Fresno de Torreón.';
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
                    'Población total' => 1078,
                    'Porcentaje de población masculina' => 46.95,
                    'Porcentaje de población femenina' => 53.05,
                    'Porcentaje de población de 0 a 14 años' => 25.52,
                    'Porcentaje de población de 15 a 64 años' => 68.73,
                    'Porcentaje de población de 65 y más años' => 5.10,
                    'Porcentaje de población no especificada' => 0.65,
                    'Fecundidad promedio' => 1.62,
                    'Porcentaje de población nacida en otro estado' => 20.41,
                    'Porcentaje de población con discapacidad' => 2.91,
                    'Porcentaje de población de 15 y más analfabeta' => 0.08,
                    'Porcentaje de población de 18 y más' => 67.80,
                    'Porcentaje de población de 18 y más postbásicos' => 59.19
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 14.19,
                    'Grado Promedio de Escolaridad masculina' => 14.97,
                    'Grado Promedio de Escolaridad femenina' => 13.56
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 51.61,
                    'Población Económicamente Activa masculina' => 57.94,
                    'Población Económicamente Activa femenina' => 42.06,
                    'Población Ocupada' => 99.41,
                    'Población Ocupada masculina' => 57.98,
                    'Población Ocupada femenina' => 42.02,
                    'Población Desocupada' => 0.59,
                    'Derechohabiencia' => 86.11
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 282,
                    'Hogares Jefatura masculina' => 87.29,
                    'Hogares Jefatura femenina' => 12.71,
                    'Ocupación por Vivienda' => 3.82,
                    'Viviendas con Electricidad' => 99.68,
                    'Viviendas con Agua' => 99.68,
                    'Viviendas con Drenaje' => 99.68,
                    'Viviendas con Televisión' => 99.29,
                    'Viviendas con Automóvil' => 97.94,
                    'Viviendas con Computadora' => 92.79,
                    'Viviendas con Celular' => 95.49,
                    'Viviendas con Internet' => 86.61
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 154,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 30.52,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 18.18,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 10.39,
                    'Cuarta actividad nombre' => 'Financieros y Seguros',
                    'Cuarta actividad porcentaje' => 9.09,
                    'Quinta actividad nombre' => 'Comercio Mayoreo',
                    'Quinta actividad porcentaje' => 4.55
                )
            )
        );
    } // datos

} // Clase ResidencialElFresno

?>
