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
 * Clase VillaFlorida
 */
class VillaFlorida extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Villa Florida';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:12';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'villa-florida';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Villa Florida de Torreón.';
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
                    'Población total' => 2636,
                    'Porcentaje de población masculina' => 49.28,
                    'Porcentaje de población femenina' => 50.72,
                    'Porcentaje de población de 0 a 14 años' => 22.53,
                    'Porcentaje de población de 15 a 64 años' => 71.93,
                    'Porcentaje de población de 65 y más años' => 3.83,
                    'Porcentaje de población no especificada' => 1.71,
                    'Fecundidad promedio' => 1.84,
                    'Porcentaje de población nacida en otro estado' => 19.46,
                    'Porcentaje de población con discapacidad' => 4.44,
                    'Porcentaje de población de 15 y más analfabeta' => 0.06,
                    'Porcentaje de población de 18 y más' => 69.80,
                    'Porcentaje de población de 18 y más postbásicos' => 48.63
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 11.83,
                    'Grado Promedio de Escolaridad masculina' => 12.16,
                    'Grado Promedio de Escolaridad femenina' => 11.53
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 55.99,
                    'Población Económicamente Activa masculina' => 58.80,
                    'Población Económicamente Activa femenina' => 41.20,
                    'Población Ocupada' => 94.32,
                    'Población Ocupada masculina' => 58.06,
                    'Población Ocupada femenina' => 41.94,
                    'Población Desocupada' => 5.68,
                    'Derechohabiencia' => 70.64
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 722,
                    'Hogares Jefatura masculina' => 73.55,
                    'Hogares Jefatura femenina' => 26.45,
                    'Ocupación por Vivienda' => 3.65,
                    'Viviendas con Electricidad' => 99.72,
                    'Viviendas con Agua' => 98.89,
                    'Viviendas con Drenaje' => 98.61,
                    'Viviendas con Televisión' => 99.17,
                    'Viviendas con Automóvil' => 71.88,
                    'Viviendas con Computadora' => 60.25,
                    'Viviendas con Celular' => 83.10,
                    'Viviendas con Internet' => 44.46
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 53,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 41.51,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 24.53,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 20.75,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 3.77,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 3.77
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
            'Centro latitud'  => 25.5877103409075,
            'Centro longitud' => -103.411096738169
        );
    } // mapas

} // Clase VillaFlorida

?>
