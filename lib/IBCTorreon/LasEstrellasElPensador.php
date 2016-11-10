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
 * Clase LasEstrellasElPensador
 */
class LasEstrellasElPensador extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Las Estrellas - El Pensador';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:29';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'las-estrellas-el-pensador';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Las Estrellas - El Pensador de Torreón.';
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
                    'Población total' => 384,
                    'Porcentaje de población masculina' => 52.34,
                    'Porcentaje de población femenina' => 47.66,
                    'Porcentaje de población de 0 a 14 años' => 36.20,
                    'Porcentaje de población de 15 a 64 años' => 59.64,
                    'Porcentaje de población de 65 y más años' => 4.17,
                    'Porcentaje de población no especificada' => -0.01,
                    'Fecundidad promedio' => 3.01,
                    'Porcentaje de población nacida en otro estado' => 21.35,
                    'Porcentaje de población con discapacidad' => 6.25,
                    'Porcentaje de población de 15 y más analfabeta' => 3.91,
                    'Porcentaje de población de 18 y más' => 57.55,
                    'Porcentaje de población de 18 y más postbásicos' => 4.43
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 6.15,
                    'Grado Promedio de Escolaridad masculina' => 6.35,
                    'Grado Promedio de Escolaridad femenina' => 5.90
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 44.40,
                    'Población Económicamente Activa masculina' => 71.54,
                    'Población Económicamente Activa femenina' => 28.46,
                    'Población Ocupada' => 92.15,
                    'Población Ocupada masculina' => 69.30,
                    'Población Ocupada femenina' => 30.70,
                    'Población Desocupada' => 7.85,
                    'Derechohabiencia' => 53.65
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 90,
                    'Hogares Jefatura masculina' => 78.89,
                    'Hogares Jefatura femenina' => 21.11,
                    'Ocupación por Vivienda' => 4.27,
                    'Viviendas con Electricidad' => 97.78,
                    'Viviendas con Agua' => 96.67,
                    'Viviendas con Drenaje' => 93.33,
                    'Viviendas con Televisión' => 91.11,
                    'Viviendas con Automóvil' => 34.44,
                    'Viviendas con Computadora' => 0.00,
                    'Viviendas con Celular' => 62.22,
                    'Viviendas con Internet' => 0.00
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 10,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 50.00,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 20.00,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 10.00
                )
            )
        );
    } // datos

} // Clase LasEstrellasElPensador

?>
