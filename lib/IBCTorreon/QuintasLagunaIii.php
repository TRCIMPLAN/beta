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
 * Clase QuintasLagunaIii
 */
class QuintasLagunaIii extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Quintas Laguna Iii';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'quintas-laguna-iii';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Quintas Laguna Iii de Torreón.';
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
                    'Población total' => 146,
                    'Porcentaje de población masculina' => 47.95,
                    'Porcentaje de población femenina' => 52.05,
                    'Porcentaje de población de 0 a 14 años' => 32.88,
                    'Porcentaje de población de 15 a 64 años' => 58.22,
                    'Porcentaje de población de 65 y más años' => 2.74,
                    'Porcentaje de población no especificada' => 6.16,
                    'Fecundidad promedio' => 2.11,
                    'Porcentaje de población nacida en otro estado' => 10.27,
                    'Porcentaje de población con discapacidad' => 1.29
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 9.27,
                    'Grado Promedio de Escolaridad masculina' => 9.87,
                    'Grado Promedio de Escolaridad femenina' => 8.71
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 56.99,
                    'Población Económicamente Activa masculina' => 73.58,
                    'Población Económicamente Activa femenina' => 26.42,
                    'Población Ocupada' => 100.00,
                    'Población Ocupada masculina' => 73.58,
                    'Población Ocupada femenina' => 26.42,
                    'Población Desocupada' => 0.00,
                    'Derechohabiencia' => 72.60
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 36,
                    'Hogares Jefatura masculina' => 66.67,
                    'Hogares Jefatura femenina' => 33.33,
                    'Ocupación por Vivienda' => 4.06,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 50.00,
                    'Viviendas con Computadora' => 20.05,
                    'Viviendas con Celular' => 83.33,
                    'Viviendas con Internet' => 32.66
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 9,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 55.56,
                    'Segunda actividad nombre' => 'Salud',
                    'Segunda actividad porcentaje' => 11.11,
                    'Tercera actividad nombre' => 'Financieros y Seguros',
                    'Tercera actividad porcentaje' => 11.11,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 11.11,
                    'Quinta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Quinta actividad porcentaje' => 11.11
                )
            )
        );
    } // datos

} // Clase QuintasLagunaIii

?>
