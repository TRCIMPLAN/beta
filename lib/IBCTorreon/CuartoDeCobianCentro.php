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
 * Clase CuartoDeCobianCentro
 */
class CuartoDeCobianCentro extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Cuarto de Cobián (Centro)';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:08';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'cuarto-de-cobian-centro';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Cuarto de Cobián (Centro) de Torreón.';
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
                    'Población total' => 11116,
                    'Porcentaje de población masculina' => 45.86,
                    'Porcentaje de población femenina' => 54.14,
                    'Porcentaje de población de 0 a 14 años' => 17.37,
                    'Porcentaje de población de 15 a 64 años' => 64.34,
                    'Porcentaje de población de 65 y más años' => 15.91,
                    'Porcentaje de población no especificada' => 2.38,
                    'Fecundidad promedio' => 2.21,
                    'Porcentaje de población nacida en otro estado' => 19.09,
                    'Porcentaje de población con discapacidad' => 5.97,
                    'Porcentaje de población de 15 y más analfabeta' => 0.44,
                    'Porcentaje de población de 18 y más' => 75.78,
                    'Porcentaje de población de 18 y más postbásicos' => 45.39
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 11.25,
                    'Grado Promedio de Escolaridad masculina' => 11.58,
                    'Grado Promedio de Escolaridad femenina' => 10.99
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 51.42,
                    'Población Económicamente Activa masculina' => 56.63,
                    'Población Económicamente Activa femenina' => 43.37,
                    'Población Ocupada' => 91.39,
                    'Población Ocupada masculina' => 56.21,
                    'Población Ocupada femenina' => 43.79,
                    'Población Desocupada' => 8.61,
                    'Derechohabiencia' => 72.18
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 3374,
                    'Hogares Jefatura masculina' => 62.46,
                    'Hogares Jefatura femenina' => 37.54,
                    'Ocupación por Vivienda' => 3.29,
                    'Viviendas con Electricidad' => 99.49,
                    'Viviendas con Agua' => 99.22,
                    'Viviendas con Drenaje' => 99.01,
                    'Viviendas con Televisión' => 98.03,
                    'Viviendas con Automóvil' => 63.02,
                    'Viviendas con Computadora' => 46.39,
                    'Viviendas con Celular' => 70.35,
                    'Viviendas con Internet' => 39.01
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 1175,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 26.72,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 19.83,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 13.02,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 9.87,
                    'Quinta actividad nombre' => 'Comercio Mayoreo',
                    'Quinta actividad porcentaje' => 7.06
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
            'Centro latitud'  => 25.5411547570837,
            'Centro longitud' => -103.419796264336
        );
    } // mapas

} // Clase CuartoDeCobianCentro

?>
