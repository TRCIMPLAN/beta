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
 * Clase SantaAnita
 */
class SantaAnita extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Santa Anita';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:11';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'santa-anita';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Santa Anita de Torreón.';
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
                    'Población total' => 564,
                    'Porcentaje de población masculina' => 46.63,
                    'Porcentaje de población femenina' => 53.37,
                    'Porcentaje de población de 0 a 14 años' => 26.95,
                    'Porcentaje de población de 15 a 64 años' => 67.91,
                    'Porcentaje de población de 65 y más años' => 5.14,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.59,
                    'Porcentaje de población nacida en otro estado' => 27.13,
                    'Porcentaje de población con discapacidad' => 1.85,
                    'Porcentaje de población de 15 y más analfabeta' => 0.00,
                    'Porcentaje de población de 18 y más' => 67.02,
                    'Porcentaje de población de 18 y más postbásicos' => 61.70
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 14.57,
                    'Grado Promedio de Escolaridad masculina' => 14.92,
                    'Grado Promedio de Escolaridad femenina' => 14.27
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 53.11,
                    'Población Económicamente Activa masculina' => 60.67,
                    'Población Económicamente Activa femenina' => 39.33,
                    'Población Ocupada' => 99.16,
                    'Población Ocupada masculina' => 60.34,
                    'Población Ocupada femenina' => 39.66,
                    'Población Desocupada' => 0.84,
                    'Derechohabiencia' => 82.98
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 157,
                    'Hogares Jefatura masculina' => 83.19,
                    'Hogares Jefatura femenina' => 16.81,
                    'Ocupación por Vivienda' => 3.59,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 98.50,
                    'Viviendas con Drenaje' => 99.78,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 97.10,
                    'Viviendas con Computadora' => 82.89,
                    'Viviendas con Celular' => 95.23,
                    'Viviendas con Internet' => 75.73
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 47,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 42.55,
                    'Segunda actividad nombre' => 'Financieros y Seguros',
                    'Segunda actividad porcentaje' => 12.77,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 10.64,
                    'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Cuarta actividad porcentaje' => 10.64,
                    'Quinta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                    'Quinta actividad porcentaje' => 4.26
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
        return array(
            'Límites'         => \Configuracion\IBCTorreonConfig::LIMITES,
            'Centro latitud'  => 25.0,
            'Centro longitud' => -103.5);
    } // mapas

} // Clase SantaAnita

?>
