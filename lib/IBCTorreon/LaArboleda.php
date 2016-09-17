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
 * Clase LaArboleda
 */
class LaArboleda extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'La Arboleda';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-17 15:33:00';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'la-arboleda';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia La Arboleda de Torreón.';
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
                'Población total' => 190,
                'Porcentaje de población masculina' => 47.37,
                'Porcentaje de población femenina' => 52.63,
                'Porcentaje de población de 0 a 14 años' => 32.11,
                'Porcentaje de población de 15 a 64 años' => 67.37,
                'Porcentaje de población de 65 y más años' => 0.53,
                'Porcentaje de población no especificada' => -0.01,
                'Fecundidad promedio' => 1.24,
                'Porcentaje de población nacida en otro estado' => 36.84,
                'Porcentaje de población con discapacidad' => 4.04
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => 15.03,
                'Grado Promedio de Escolaridad masculina' => 15.35,
                'Grado Promedio de Escolaridad femenina' => 14.79
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => 65.44,
                'Población Económicamente Activa masculina' => 58.43,
                'Población Económicamente Activa femenina' => 41.57,
                'Población Ocupada' => 98.86,
                'Población Ocupada masculina' => 57.95,
                'Población Ocupada femenina' => 42.05,
                'Población Desocupada' => 1.14,
                'Derechohabiencia' => 84.21
            ),
            'Viviendas' => array(
                'Hogares' => 62,
                'Hogares Jefatura masculina' => 79.03,
                'Hogares Jefatura femenina' => 20.97,
                'Ocupación por Vivienda' => 3.06,
                'Viviendas con Electricidad' => 100.00,
                'Viviendas con Agua' => 98.39,
                'Viviendas con Drenaje' => 98.39,
                'Viviendas con Televisión' => 100.00,
                'Viviendas con Automóvil' => 98.39,
                'Viviendas con Computadora' => 85.48,
                'Viviendas con Celular' => 98.39,
                'Viviendas con Internet' => 70.97
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => 0
            )
        );
    } // datos

} // Clase LaArboleda

?>
