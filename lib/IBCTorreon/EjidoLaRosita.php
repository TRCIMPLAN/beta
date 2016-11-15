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
 * Clase EjidoLaRosita
 */
class EjidoLaRosita extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Ejido La Rosita';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-15 08:36:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'ejido-la-rosita';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ejido La Rosita de Torreón.';
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
                    'Población total' => 603,
                    'Porcentaje de población masculina' => 49.50,
                    'Porcentaje de población femenina' => 50.50,
                    'Porcentaje de población de 0 a 14 años' => 33.27,
                    'Porcentaje de población de 15 a 64 años' => 60.83,
                    'Porcentaje de población de 65 y más años' => 5.88,
                    'Porcentaje de población no especificada' => 0.02,
                    'Fecundidad promedio' => 2.46,
                    'Porcentaje de población nacida en otro estado' => 13.62,
                    'Porcentaje de población con discapacidad' => 6.02,
                    'Porcentaje de población de 15 y más analfabeta' => 4.30,
                    'Porcentaje de población de 18 y más' => 59.60,
                    'Porcentaje de población de 18 y más postbásicos' => 9.83
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 6.61,
                    'Grado Promedio de Escolaridad masculina' => 6.43,
                    'Grado Promedio de Escolaridad femenina' => 6.80
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 47.01,
                    'Población Económicamente Activa masculina' => 78.63,
                    'Población Económicamente Activa femenina' => 21.37,
                    'Población Ocupada' => 82.60,
                    'Población Ocupada masculina' => 75.87,
                    'Población Ocupada femenina' => 24.13,
                    'Población Desocupada' => 17.40,
                    'Derechohabiencia' => 57.21
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 149,
                    'Hogares Jefatura masculina' => 82.77,
                    'Hogares Jefatura femenina' => 17.23,
                    'Ocupación por Vivienda' => 4.05,
                    'Viviendas con Electricidad' => 99.35,
                    'Viviendas con Agua' => 92.61,
                    'Viviendas con Drenaje' => 85.85,
                    'Viviendas con Televisión' => 94.50,
                    'Viviendas con Automóvil' => 34.39,
                    'Viviendas con Computadora' => 15.08,
                    'Viviendas con Celular' => 59.84,
                    'Viviendas con Internet' => 4.45
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 15,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 33.33,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Educativos',
                    'Tercera actividad porcentaje' => 20.00,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 13.33,
                    'Quinta actividad nombre' => 'Gubernamentales',
                    'Quinta actividad porcentaje' => 6.67
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

} // Clase EjidoLaRosita

?>
