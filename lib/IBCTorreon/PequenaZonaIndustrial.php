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
 * Clase PequenaZonaIndustrial
 */
class PequenaZonaIndustrial extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Pequeña Zona Industrial';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-15 08:36:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'pequena-zona-industrial';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Pequeña Zona Industrial de Torreón.';
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
                    'Porcentaje de población masculina' => 47.97,
                    'Porcentaje de población femenina' => 52.03,
                    'Porcentaje de población de 0 a 14 años' => 28.06,
                    'Porcentaje de población de 15 a 64 años' => 67.22,
                    'Porcentaje de población de 65 y más años' => 3.56,
                    'Porcentaje de población no especificada' => 1.16,
                    'Fecundidad promedio' => 1.80,
                    'Porcentaje de población nacida en otro estado' => 16.38,
                    'Porcentaje de población con discapacidad' => 9.19,
                    'Porcentaje de población de 15 y más analfabeta' => 0.28,
                    'Porcentaje de población de 18 y más' => 64.56,
                    'Porcentaje de población de 18 y más postbásicos' => 44.69
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 11.97,
                    'Grado Promedio de Escolaridad masculina' => 12.17,
                    'Grado Promedio de Escolaridad femenina' => 11.79
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 56.53,
                    'Población Económicamente Activa masculina' => 58.26,
                    'Población Económicamente Activa femenina' => 41.74,
                    'Población Ocupada' => 94.98,
                    'Población Ocupada masculina' => 57.81,
                    'Población Ocupada femenina' => 42.19,
                    'Población Desocupada' => 5.02,
                    'Derechohabiencia' => 80.03
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 0
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 31,
                    'Primer actividad nombre' => 'Industria Manufacturera',
                    'Primer actividad porcentaje' => 32.26,
                    'Segunda actividad nombre' => 'Comercio Mayoreo',
                    'Segunda actividad porcentaje' => 22.58,
                    'Tercera actividad nombre' => 'Comercio Menudeo',
                    'Tercera actividad porcentaje' => 19.35,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 12.90,
                    'Quinta actividad nombre' => 'Transportes, Correo, Almacenamiento',
                    'Quinta actividad porcentaje' => 6.45
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

} // Clase PequenaZonaIndustrial

?>
