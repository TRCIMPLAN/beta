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
 * Clase AmpliacionLaDalia
 */
class AmpliacionLaDalia extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Ampliacion La Dalia';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-17 15:32:58';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'ampliacion-la-dalia';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ampliacion La Dalia de Torreón.';
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
                'Población total' => 139,
                'Porcentaje de población masculina' => 46.76,
                'Porcentaje de población femenina' => 53.24,
                'Porcentaje de población de 0 a 14 años' => 33.81,
                'Porcentaje de población de 15 a 64 años' => 66.19,
                'Porcentaje de población de 65 y más años' => 0.00,
                'Porcentaje de población no especificada' => 0.00,
                'Fecundidad promedio' => 1.66,
                'Porcentaje de población nacida en otro estado' => 6.47,
                'Porcentaje de población con discapacidad' => 4.51
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => 11.21,
                'Grado Promedio de Escolaridad masculina' => 11.42,
                'Grado Promedio de Escolaridad femenina' => 11.00
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => 60.61,
                'Población Económicamente Activa masculina' => 70.00,
                'Población Económicamente Activa femenina' => 30.00,
                'Población Ocupada' => 92.89,
                'Población Ocupada masculina' => 67.86,
                'Población Ocupada femenina' => 32.14,
                'Población Desocupada' => 7.11,
                'Derechohabiencia' => 87.77
            ),
            'Viviendas' => array(
                'Hogares' => 37,
                'Hogares Jefatura masculina' => 94.59,
                'Hogares Jefatura femenina' => 5.41,
                'Ocupación por Vivienda' => 3.76,
                'Viviendas con Electricidad' => 100.00,
                'Viviendas con Agua' => 100.00,
                'Viviendas con Drenaje' => 100.00,
                'Viviendas con Televisión' => 100.00,
                'Viviendas con Automóvil' => 72.97,
                'Viviendas con Computadora' => 37.84,
                'Viviendas con Celular' => 75.68,
                'Viviendas con Internet' => 24.32
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => 4,
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => 50.00,
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => 25.00,
                'Tercera actividad nombre' => 'Financieros y Seguros',
                'Tercera actividad porcentaje' => 25.00
            )
        );
    } // datos

} // Clase AmpliacionLaDalia

?>
