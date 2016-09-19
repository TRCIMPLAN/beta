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
 * Clase NuevaMerced
 */
class NuevaMerced extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Nueva Merced';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'nueva-merced';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Nueva Merced de Torreón.';
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
                    'Población total' => 1479,
                    'Porcentaje de población masculina' => 49.63,
                    'Porcentaje de población femenina' => 50.37,
                    'Porcentaje de población de 0 a 14 años' => 33.91,
                    'Porcentaje de población de 15 a 64 años' => 62.47,
                    'Porcentaje de población de 65 y más años' => 3.41,
                    'Porcentaje de población no especificada' => 0.21,
                    'Fecundidad promedio' => 2.43,
                    'Porcentaje de población nacida en otro estado' => 14.31,
                    'Porcentaje de población con discapacidad' => 3.82
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 7.64,
                    'Grado Promedio de Escolaridad masculina' => 7.53,
                    'Grado Promedio de Escolaridad femenina' => 7.74
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 49.71,
                    'Población Económicamente Activa masculina' => 78.43,
                    'Población Económicamente Activa femenina' => 21.57,
                    'Población Ocupada' => 91.94,
                    'Población Ocupada masculina' => 77.50,
                    'Población Ocupada femenina' => 22.50,
                    'Población Desocupada' => 8.06,
                    'Derechohabiencia' => 49.42
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 352,
                    'Hogares Jefatura masculina' => 82.93,
                    'Hogares Jefatura femenina' => 17.07,
                    'Ocupación por Vivienda' => 4.20,
                    'Viviendas con Electricidad' => 99.52,
                    'Viviendas con Agua' => 98.09,
                    'Viviendas con Drenaje' => 98.66,
                    'Viviendas con Televisión' => 98.38,
                    'Viviendas con Automóvil' => 36.49,
                    'Viviendas con Computadora' => 15.87,
                    'Viviendas con Celular' => 66.78,
                    'Viviendas con Internet' => 2.53
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 42,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 52.38,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 14.29,
                    'Tercera actividad nombre' => 'Educativos',
                    'Tercera actividad porcentaje' => 11.90,
                    'Cuarta actividad nombre' => 'Comercio Mayoreo',
                    'Cuarta actividad porcentaje' => 9.52,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 7.14
                )
            )
        );
    } // datos

} // Clase NuevaMerced

?>
