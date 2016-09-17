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
 * Clase SolDeOriente
 */
class SolDeOriente extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Sol De Oriente';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-17 15:33:02';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'sol-de-oriente';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Sol De Oriente de Torreón.';
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
                'Población total' => 2182,
                'Porcentaje de población masculina' => 49.95,
                'Porcentaje de población femenina' => 50.05,
                'Porcentaje de población de 0 a 14 años' => 36.43,
                'Porcentaje de población de 15 a 64 años' => 61.78,
                'Porcentaje de población de 65 y más años' => 1.10,
                'Porcentaje de población no especificada' => 0.69,
                'Fecundidad promedio' => 1.92,
                'Porcentaje de población nacida en otro estado' => 16.41,
                'Porcentaje de población con discapacidad' => 2.79
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => 10.95,
                'Grado Promedio de Escolaridad masculina' => 11.03,
                'Grado Promedio de Escolaridad femenina' => 10.88
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => 62.08,
                'Población Económicamente Activa masculina' => 64.32,
                'Población Económicamente Activa femenina' => 35.68,
                'Población Ocupada' => 91.99,
                'Población Ocupada masculina' => 63.43,
                'Población Ocupada femenina' => 36.57,
                'Población Desocupada' => 8.01,
                'Derechohabiencia' => 76.40
            ),
            'Viviendas' => array(
                'Hogares' => 597,
                'Hogares Jefatura masculina' => 82.08,
                'Hogares Jefatura femenina' => 17.92,
                'Ocupación por Vivienda' => 3.65,
                'Viviendas con Electricidad' => 100.00,
                'Viviendas con Agua' => 99.66,
                'Viviendas con Drenaje' => 99.50,
                'Viviendas con Televisión' => 98.66,
                'Viviendas con Automóvil' => 57.29,
                'Viviendas con Computadora' => 34.84,
                'Viviendas con Celular' => 87.44,
                'Viviendas con Internet' => 20.67
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => 86,
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => 36.05,
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => 22.09,
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => 18.60,
                'Cuarta actividad nombre' => 'Educativos',
                'Cuarta actividad porcentaje' => 4.65,
                'Quinta actividad nombre' => 'Industria Manufacturera',
                'Quinta actividad porcentaje' => 4.65
            )
        );
    } // datos

} // Clase SolDeOriente

?>
