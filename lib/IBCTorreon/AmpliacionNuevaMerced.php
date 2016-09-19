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
 * Clase AmpliacionNuevaMerced
 */
class AmpliacionNuevaMerced extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Ampliacion Nueva Merced';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'ampliacion-nueva-merced';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ampliacion Nueva Merced de Torreón.';
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
                    'Población total' => 2179,
                    'Porcentaje de población masculina' => 50.07,
                    'Porcentaje de población femenina' => 49.93,
                    'Porcentaje de población de 0 a 14 años' => 33.83,
                    'Porcentaje de población de 15 a 64 años' => 61.99,
                    'Porcentaje de población de 65 y más años' => 3.34,
                    'Porcentaje de población no especificada' => 0.84,
                    'Fecundidad promedio' => 2.39,
                    'Porcentaje de población nacida en otro estado' => 20.18,
                    'Porcentaje de población con discapacidad' => 4.84
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 7.36,
                    'Grado Promedio de Escolaridad masculina' => 7.37,
                    'Grado Promedio de Escolaridad femenina' => 7.35
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.65,
                    'Población Económicamente Activa masculina' => 69.06,
                    'Población Económicamente Activa femenina' => 30.94,
                    'Población Ocupada' => 87.11,
                    'Población Ocupada masculina' => 69.55,
                    'Población Ocupada femenina' => 30.45,
                    'Población Desocupada' => 12.89,
                    'Derechohabiencia' => 61.71
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 497,
                    'Hogares Jefatura masculina' => 79.27,
                    'Hogares Jefatura femenina' => 20.73,
                    'Ocupación por Vivienda' => 4.38,
                    'Viviendas con Electricidad' => 98.89,
                    'Viviendas con Agua' => 97.87,
                    'Viviendas con Drenaje' => 95.02,
                    'Viviendas con Televisión' => 95.43,
                    'Viviendas con Automóvil' => 34.73,
                    'Viviendas con Computadora' => 13.02,
                    'Viviendas con Celular' => 61.90,
                    'Viviendas con Internet' => 2.66
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 37,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 48.65,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 24.32,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 8.11,
                    'Cuarta actividad nombre' => 'Salud',
                    'Cuarta actividad porcentaje' => 5.41,
                    'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Quinta actividad porcentaje' => 5.41
                )
            )
        );
    } // datos

} // Clase AmpliacionNuevaMerced

?>
