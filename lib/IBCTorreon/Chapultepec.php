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
 * Clase Chapultepec
 */
class Chapultepec extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Chapultepec';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-17 15:32:58';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'chapultepec';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Chapultepec de Torreón.';
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
                'Población total' => 338,
                'Porcentaje de población masculina' => 45.86,
                'Porcentaje de población femenina' => 54.14,
                'Porcentaje de población de 0 a 14 años' => 34.62,
                'Porcentaje de población de 15 a 64 años' => 63.02,
                'Porcentaje de población de 65 y más años' => 1.48,
                'Porcentaje de población no especificada' => 0.88,
                'Fecundidad promedio' => 1.45,
                'Porcentaje de población nacida en otro estado' => 20.33,
                'Porcentaje de población con discapacidad' => 1.69
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => 14.50,
                'Grado Promedio de Escolaridad masculina' => 15.06,
                'Grado Promedio de Escolaridad femenina' => 14.02
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => 65.67,
                'Población Económicamente Activa masculina' => 57.84,
                'Población Económicamente Activa femenina' => 42.16,
                'Población Ocupada' => 94.50,
                'Población Ocupada masculina' => 57.81,
                'Población Ocupada femenina' => 42.19,
                'Población Desocupada' => 5.50,
                'Derechohabiencia' => 84.62
            ),
            'Viviendas' => array(
                'Hogares' => 95,
                'Hogares Jefatura masculina' => 83.58,
                'Hogares Jefatura femenina' => 16.42,
                'Ocupación por Vivienda' => 3.56,
                'Viviendas con Electricidad' => 100.00,
                'Viviendas con Agua' => 100.00,
                'Viviendas con Drenaje' => 100.00,
                'Viviendas con Televisión' => 100.00,
                'Viviendas con Automóvil' => 95.79,
                'Viviendas con Computadora' => 78.19,
                'Viviendas con Celular' => 96.84,
                'Viviendas con Internet' => 60.30
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => 11,
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => 27.27,
                'Segunda actividad nombre' => 'Esparcimiento, Culturales, Deportivos',
                'Segunda actividad porcentaje' => 18.18,
                'Tercera actividad nombre' => 'Inmobiliarios',
                'Tercera actividad porcentaje' => 18.18,
                'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Cuarta actividad porcentaje' => 18.18,
                'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Quinta actividad porcentaje' => 9.09
            )
        );
    } // datos

} // Clase Chapultepec

?>
