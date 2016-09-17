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
 * Clase Amistad
 */
class Amistad extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Amistad';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-17 15:32:58';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'amistad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Amistad de Torreón.';
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
                'Población total' => 4882,
                'Porcentaje de población masculina' => 49.24,
                'Porcentaje de población femenina' => 50.76,
                'Porcentaje de población de 0 a 14 años' => 34.35,
                'Porcentaje de población de 15 a 64 años' => 62.45,
                'Porcentaje de población de 65 y más años' => 1.41,
                'Porcentaje de población no especificada' => 1.79,
                'Fecundidad promedio' => 1.69,
                'Porcentaje de población nacida en otro estado' => 17.99,
                'Porcentaje de población con discapacidad' => 3.54
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => 11.34,
                'Grado Promedio de Escolaridad masculina' => 11.54,
                'Grado Promedio de Escolaridad femenina' => 11.16
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => 60.16,
                'Población Económicamente Activa masculina' => 60.97,
                'Población Económicamente Activa femenina' => 39.03,
                'Población Ocupada' => 93.38,
                'Población Ocupada masculina' => 60.99,
                'Población Ocupada femenina' => 39.01,
                'Población Desocupada' => 6.62,
                'Derechohabiencia' => 78.39
            ),
            'Viviendas' => array(
                'Hogares' => 1381,
                'Hogares Jefatura masculina' => 78.07,
                'Hogares Jefatura femenina' => 21.93,
                'Ocupación por Vivienda' => 3.54,
                'Viviendas con Electricidad' => 99.81,
                'Viviendas con Agua' => 99.81,
                'Viviendas con Drenaje' => 99.88,
                'Viviendas con Televisión' => 99.30,
                'Viviendas con Automóvil' => 56.74,
                'Viviendas con Computadora' => 39.98,
                'Viviendas con Celular' => 89.12,
                'Viviendas con Internet' => 25.59
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => 62,
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => 48.39,
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => 17.74,
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => 14.52,
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => 4.84,
                'Quinta actividad nombre' => 'Educativos',
                'Quinta actividad porcentaje' => 3.23
            )
        );
    } // datos

} // Clase Amistad

?>
