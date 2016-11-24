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
 * Clase EjidoLaConcha
 */
class EjidoLaConcha extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Ejido La Concha';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:08';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'ejido-la-concha';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ejido La Concha de Torreón.';
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
                    'Población total' => 3586,
                    'Porcentaje de población masculina' => 50.41,
                    'Porcentaje de población femenina' => 49.59,
                    'Porcentaje de población de 0 a 14 años' => 31.70,
                    'Porcentaje de población de 15 a 64 años' => 63.15,
                    'Porcentaje de población de 65 y más años' => 4.89,
                    'Porcentaje de población no especificada' => 0.26,
                    'Fecundidad promedio' => 2.44,
                    'Porcentaje de población nacida en otro estado' => 9.98,
                    'Porcentaje de población con discapacidad' => 4.92,
                    'Porcentaje de población de 15 y más analfabeta' => 2.44,
                    'Porcentaje de población de 18 y más' => 60.82,
                    'Porcentaje de población de 18 y más postbásicos' => 15.46
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 8.01,
                    'Grado Promedio de Escolaridad masculina' => 8.14,
                    'Grado Promedio de Escolaridad femenina' => 7.89
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 50.11,
                    'Población Económicamente Activa masculina' => 71.10,
                    'Población Económicamente Activa femenina' => 28.90,
                    'Población Ocupada' => 91.02,
                    'Población Ocupada masculina' => 69.41,
                    'Población Ocupada femenina' => 30.59,
                    'Población Desocupada' => 8.98,
                    'Derechohabiencia' => 65.60
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 852,
                    'Hogares Jefatura masculina' => 81.60,
                    'Hogares Jefatura femenina' => 18.40,
                    'Ocupación por Vivienda' => 4.21,
                    'Viviendas con Electricidad' => 99.79,
                    'Viviendas con Agua' => 96.55,
                    'Viviendas con Drenaje' => 94.88,
                    'Viviendas con Televisión' => 98.83,
                    'Viviendas con Automóvil' => 48.17,
                    'Viviendas con Computadora' => 22.15,
                    'Viviendas con Celular' => 64.08,
                    'Viviendas con Internet' => 12.34
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 89,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 48.31,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 14.61,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 7.87,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 7.87,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 5.62
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
            'Centro latitud'  => 25.6360542069703,
            'Centro longitud' => -103.377356881204
        );
    } // mapas

} // Clase EjidoLaConcha

?>
