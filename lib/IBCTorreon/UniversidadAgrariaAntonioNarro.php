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
 * Clase UniversidadAgrariaAntonioNarro
 */
class UniversidadAgrariaAntonioNarro extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Universidad Agraria Antonio Narro';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-15 08:36:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'universidad-agraria-antonio-narro';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Universidad Agraria Antonio Narro de Torreón.';
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
                    'Población total' => 3,
                    'Porcentaje de población masculina' => 47.61,
                    'Porcentaje de población femenina' => 52.39,
                    'Porcentaje de población de 0 a 14 años' => 27.30,
                    'Porcentaje de población de 15 a 64 años' => 65.53,
                    'Porcentaje de población de 65 y más años' => 6.40,
                    'Porcentaje de población no especificada' => 0.77,
                    'Fecundidad promedio' => 2.41,
                    'Porcentaje de población nacida en otro estado' => 13.57,
                    'Porcentaje de población con discapacidad' => 6.23,
                    'Porcentaje de población de 15 y más analfabeta' => 2.56,
                    'Porcentaje de población de 18 y más' => 65.44,
                    'Porcentaje de población de 18 y más postbásicos' => 17.15
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 8.25,
                    'Grado Promedio de Escolaridad masculina' => 8.37,
                    'Grado Promedio de Escolaridad femenina' => 8.14
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.55,
                    'Población Económicamente Activa masculina' => 67.07,
                    'Población Económicamente Activa femenina' => 32.93,
                    'Población Ocupada' => 90.50,
                    'Población Ocupada masculina' => 65.48,
                    'Población Ocupada femenina' => 34.52,
                    'Población Desocupada' => 9.50,
                    'Derechohabiencia' => 70.48
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 0
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 11,
                    'Primer actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Primer actividad porcentaje' => 63.64,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 9.09,
                    'Tercera actividad nombre' => 'Profesionales, Científicos, Técnicos',
                    'Tercera actividad porcentaje' => 9.09,
                    'Cuarta actividad nombre' => 'Comercio Mayoreo',
                    'Cuarta actividad porcentaje' => 9.09,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 9.09
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

} // Clase UniversidadAgrariaAntonioNarro

?>
