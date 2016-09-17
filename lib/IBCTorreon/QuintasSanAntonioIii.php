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
 * Clase QuintasSanAntonioIii
 */
class QuintasSanAntonioIii extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Quintas San Antonio Iii';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-17 15:33:01';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'quintas-san-antonio-iii';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Quintas San Antonio Iii de Torreón.';
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
                'Población total' => 425,
                'Porcentaje de población masculina' => 51.29,
                'Porcentaje de población femenina' => 48.71,
                'Porcentaje de población de 0 a 14 años' => 36.24,
                'Porcentaje de población de 15 a 64 años' => 61.65,
                'Porcentaje de población de 65 y más años' => 1.18,
                'Porcentaje de población no especificada' => 0.93,
                'Fecundidad promedio' => 1.77,
                'Porcentaje de población nacida en otro estado' => 15.79,
                'Porcentaje de población con discapacidad' => 3.67
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => 12.40,
                'Grado Promedio de Escolaridad masculina' => 12.72,
                'Grado Promedio de Escolaridad femenina' => 12.11
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => 59.80,
                'Población Económicamente Activa masculina' => 63.84,
                'Población Económicamente Activa femenina' => 36.16,
                'Población Ocupada' => 98.86,
                'Población Ocupada masculina' => 63.43,
                'Población Ocupada femenina' => 36.57,
                'Población Desocupada' => 1.14,
                'Derechohabiencia' => 83.06
            ),
            'Viviendas' => array(
                'Hogares' => 116,
                'Hogares Jefatura masculina' => 83.62,
                'Hogares Jefatura femenina' => 16.38,
                'Ocupación por Vivienda' => 3.66,
                'Viviendas con Electricidad' => 100.00,
                'Viviendas con Agua' => 100.00,
                'Viviendas con Drenaje' => 100.00,
                'Viviendas con Televisión' => 100.00,
                'Viviendas con Automóvil' => 79.31,
                'Viviendas con Computadora' => 61.46,
                'Viviendas con Celular' => 85.34,
                'Viviendas con Internet' => 44.71
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => 10,
                'Primer actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Primer actividad porcentaje' => 30.00,
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => 20.00,
                'Tercera actividad nombre' => 'Comercio Mayoreo',
                'Tercera actividad porcentaje' => 10.00,
                'Cuarta actividad nombre' => 'Educativos',
                'Cuarta actividad porcentaje' => 10.00,
                'Quinta actividad nombre' => 'Manejo de Residuos',
                'Quinta actividad porcentaje' => 10.00
            )
        );
    } // datos

} // Clase QuintasSanAntonioIii

?>
