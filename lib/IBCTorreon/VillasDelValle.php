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
 * Clase VillasDelValle
 */
class VillasDelValle extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Villas Del Valle';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-15 08:36:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'villas-del-valle';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Villas Del Valle de Torreón.';
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
                    'Población total' => 383,
                    'Porcentaje de población masculina' => 49.61,
                    'Porcentaje de población femenina' => 50.39,
                    'Porcentaje de población de 0 a 14 años' => 26.11,
                    'Porcentaje de población de 15 a 64 años' => 68.67,
                    'Porcentaje de población de 65 y más años' => 5.22,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.34,
                    'Porcentaje de población nacida en otro estado' => 18.28,
                    'Porcentaje de población con discapacidad' => 6.53,
                    'Porcentaje de población de 15 y más analfabeta' => 0.14,
                    'Porcentaje de población de 18 y más' => 66.84,
                    'Porcentaje de población de 18 y más postbásicos' => 52.48
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 12.80,
                    'Grado Promedio de Escolaridad masculina' => 13.21,
                    'Grado Promedio de Escolaridad femenina' => 12.41
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 56.41,
                    'Población Económicamente Activa masculina' => 56.82,
                    'Población Económicamente Activa femenina' => 43.18,
                    'Población Ocupada' => 96.47,
                    'Población Ocupada masculina' => 56.47,
                    'Población Ocupada femenina' => 43.53,
                    'Población Desocupada' => 3.53,
                    'Derechohabiencia' => 87.47
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 116,
                    'Hogares Jefatura masculina' => 79.31,
                    'Hogares Jefatura femenina' => 20.69,
                    'Ocupación por Vivienda' => 3.30,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 81.90,
                    'Viviendas con Computadora' => 63.90,
                    'Viviendas con Celular' => 85.34,
                    'Viviendas con Internet' => 52.15
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 6,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 50.00,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 16.67,
                    'Tercera actividad nombre' => 'Comercio Mayoreo',
                    'Tercera actividad porcentaje' => 16.67,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 16.67
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

} // Clase VillasDelValle

?>
