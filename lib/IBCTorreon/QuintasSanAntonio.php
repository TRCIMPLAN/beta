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
 * Clase QuintasSanAntonio
 */
class QuintasSanAntonio extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Quintas San Antonio';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'quintas-san-antonio';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Quintas San Antonio de Torreón.';
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
                    'Población total' => 595,
                    'Porcentaje de población masculina' => 47.39,
                    'Porcentaje de población femenina' => 52.61,
                    'Porcentaje de población de 0 a 14 años' => 36.92,
                    'Porcentaje de población de 15 a 64 años' => 60.19,
                    'Porcentaje de población de 65 y más años' => 2.88,
                    'Porcentaje de población no especificada' => 0.01,
                    'Fecundidad promedio' => 1.54,
                    'Porcentaje de población nacida en otro estado' => 24.70,
                    'Porcentaje de población con discapacidad' => 1.63
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 14.59,
                    'Grado Promedio de Escolaridad masculina' => 14.90,
                    'Grado Promedio de Escolaridad femenina' => 14.33
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 62.76,
                    'Población Económicamente Activa masculina' => 57.54,
                    'Población Económicamente Activa femenina' => 42.46,
                    'Población Ocupada' => 96.21,
                    'Población Ocupada masculina' => 56.76,
                    'Población Ocupada femenina' => 43.24,
                    'Población Desocupada' => 3.79,
                    'Derechohabiencia' => 84.30
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 164,
                    'Hogares Jefatura masculina' => 44.98,
                    'Hogares Jefatura femenina' => 55.02,
                    'Ocupación por Vivienda' => 3.63,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 95.13,
                    'Viviendas con Computadora' => 85.24,
                    'Viviendas con Celular' => 95.40,
                    'Viviendas con Internet' => 77.17
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 10,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 40.00,
                    'Segunda actividad nombre' => 'Inmobiliarios',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 10.00,
                    'Cuarta actividad nombre' => 'Financieros y Seguros',
                    'Cuarta actividad porcentaje' => 10.00,
                    'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Quinta actividad porcentaje' => 10.00
                )
            )
        );
    } // datos

} // Clase QuintasSanAntonio

?>
