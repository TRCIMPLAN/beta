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
 * Clase JacoboMeyer
 */
class JacoboMeyer extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Jacobo Meyer';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'jacobo-meyer';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Jacobo Meyer de Torreón.';
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
                    'Población total' => 912,
                    'Porcentaje de población masculina' => 49.45,
                    'Porcentaje de población femenina' => 50.55,
                    'Porcentaje de población de 0 a 14 años' => 30.24,
                    'Porcentaje de población de 15 a 64 años' => 62.70,
                    'Porcentaje de población de 65 y más años' => 6.96,
                    'Porcentaje de población no especificada' => 0.10,
                    'Fecundidad promedio' => 2.39,
                    'Porcentaje de población nacida en otro estado' => 22.89,
                    'Porcentaje de población con discapacidad' => 12.83
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 7.57,
                    'Grado Promedio de Escolaridad masculina' => 7.44,
                    'Grado Promedio de Escolaridad femenina' => 7.70
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.52,
                    'Población Económicamente Activa masculina' => 68.89,
                    'Población Económicamente Activa femenina' => 31.11,
                    'Población Ocupada' => 86.10,
                    'Población Ocupada masculina' => 68.51,
                    'Población Ocupada femenina' => 31.49,
                    'Población Desocupada' => 13.90,
                    'Derechohabiencia' => 53.44
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 229,
                    'Hogares Jefatura masculina' => 79.34,
                    'Hogares Jefatura femenina' => 20.66,
                    'Ocupación por Vivienda' => 3.98,
                    'Viviendas con Electricidad' => 99.35,
                    'Viviendas con Agua' => 96.69,
                    'Viviendas con Drenaje' => 98.47,
                    'Viviendas con Televisión' => 94.52,
                    'Viviendas con Automóvil' => 27.65,
                    'Viviendas con Computadora' => 12.09,
                    'Viviendas con Celular' => 57.58,
                    'Viviendas con Internet' => 6.33
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 15,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 46.67,
                    'Segunda actividad nombre' => 'Salud',
                    'Segunda actividad porcentaje' => 13.33,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 13.33,
                    'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Cuarta actividad porcentaje' => 13.33,
                    'Quinta actividad nombre' => 'Manejo de Residuos',
                    'Quinta actividad porcentaje' => 6.67
                )
            )
        );
    } // datos

} // Clase JacoboMeyer

?>
