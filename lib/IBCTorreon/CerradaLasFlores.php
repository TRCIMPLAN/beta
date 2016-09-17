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
 * Clase CerradaLasFlores
 */
class CerradaLasFlores extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Cerrada Las Flores';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-17 15:32:58';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'cerrada-las-flores';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Cerrada Las Flores de Torreón.';
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
                'Población total' => 221,
                'Porcentaje de población masculina' => 48.42,
                'Porcentaje de población femenina' => 51.58,
                'Porcentaje de población de 0 a 14 años' => 38.91,
                'Porcentaje de población de 15 a 64 años' => 60.18,
                'Porcentaje de población de 65 y más años' => 0.90,
                'Porcentaje de población no especificada' => 0.01,
                'Fecundidad promedio' => 1.72,
                'Porcentaje de población nacida en otro estado' => 20.36,
                'Porcentaje de población con discapacidad' => 5.43
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => 10.74,
                'Grado Promedio de Escolaridad masculina' => 11.15,
                'Grado Promedio de Escolaridad femenina' => 10.36
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => 57.23,
                'Población Económicamente Activa masculina' => 65.93,
                'Población Económicamente Activa femenina' => 34.07,
                'Población Ocupada' => 96.59,
                'Población Ocupada masculina' => 64.77,
                'Población Ocupada femenina' => 35.23,
                'Población Desocupada' => 3.41,
                'Derechohabiencia' => 89.14
            ),
            'Viviendas' => array(
                'Hogares' => 56,
                'Hogares Jefatura masculina' => 82.14,
                'Hogares Jefatura femenina' => 17.86,
                'Ocupación por Vivienda' => 3.95,
                'Viviendas con Electricidad' => 100.00,
                'Viviendas con Agua' => 100.00,
                'Viviendas con Drenaje' => 100.00,
                'Viviendas con Televisión' => 100.00,
                'Viviendas con Automóvil' => 66.07,
                'Viviendas con Computadora' => 46.43,
                'Viviendas con Celular' => 85.71,
                'Viviendas con Internet' => 32.14
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => 0
            )
        );
    } // datos

} // Clase CerradaLasFlores

?>
