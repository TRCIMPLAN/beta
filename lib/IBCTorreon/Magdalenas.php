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
 * Clase Magdalenas
 */
class Magdalenas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Magdalenas';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-14 14:03:30';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'magdalenas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Magdalenas de Torreón.';
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
                    'Población total' => 4329,
                    'Porcentaje de población masculina' => 48.79,
                    'Porcentaje de población femenina' => 51.21,
                    'Porcentaje de población de 0 a 14 años' => 26.15,
                    'Porcentaje de población de 15 a 64 años' => 62.98,
                    'Porcentaje de población de 65 y más años' => 9.05,
                    'Porcentaje de población no especificada' => 1.82,
                    'Fecundidad promedio' => 2.60,
                    'Porcentaje de población nacida en otro estado' => 13.90,
                    'Porcentaje de población con discapacidad' => 3.22,
                    'Porcentaje de población de 15 y más analfabeta' => 3.21,
                    'Porcentaje de población de 18 y más' => 66.72,
                    'Porcentaje de población de 18 y más postbásicos' => 21.33
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 8.55,
                    'Grado Promedio de Escolaridad masculina' => 8.71,
                    'Grado Promedio de Escolaridad femenina' => 8.39
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 50.94,
                    'Población Económicamente Activa masculina' => 67.55,
                    'Población Económicamente Activa femenina' => 32.45,
                    'Población Ocupada' => 94.33,
                    'Población Ocupada masculina' => 66.70,
                    'Población Ocupada femenina' => 33.30,
                    'Población Desocupada' => 5.67,
                    'Derechohabiencia' => 64.05
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1054,
                    'Hogares Jefatura masculina' => 71.36,
                    'Hogares Jefatura femenina' => 28.64,
                    'Ocupación por Vivienda' => 4.11,
                    'Viviendas con Electricidad' => 99.86,
                    'Viviendas con Agua' => 99.57,
                    'Viviendas con Drenaje' => 99.48,
                    'Viviendas con Televisión' => 98.43,
                    'Viviendas con Automóvil' => 46.00,
                    'Viviendas con Computadora' => 28.83,
                    'Viviendas con Celular' => 65.91,
                    'Viviendas con Internet' => 20.20
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 268,
                    'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Primer actividad porcentaje' => 29.10,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 26.49,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 19.40,
                    'Cuarta actividad nombre' => 'Comercio Mayoreo',
                    'Cuarta actividad porcentaje' => 6.72,
                    'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Quinta actividad porcentaje' => 4.85
                )
            )
        );
    } // datos

    /**
     * Mapas
     *
     * @return string
     */
    public function mapas() {
        return array('Límites' => \Configuracion\IBCTorreonConfig::LIMITES);
    } // mapas

} // Clase Magdalenas

?>
