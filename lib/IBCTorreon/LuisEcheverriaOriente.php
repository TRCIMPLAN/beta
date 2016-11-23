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
 * Clase LuisEcheverriaOriente
 */
class LuisEcheverriaOriente extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Luis Echeverría Oriente';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:09';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'luis-echeverria-oriente';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Luis Echeverría Oriente de Torreón.';
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
                    'Población total' => 1027,
                    'Porcentaje de población masculina' => 47.32,
                    'Porcentaje de población femenina' => 52.68,
                    'Porcentaje de población de 0 a 14 años' => 21.13,
                    'Porcentaje de población de 15 a 64 años' => 68.84,
                    'Porcentaje de población de 65 y más años' => 9.74,
                    'Porcentaje de población no especificada' => 0.29,
                    'Fecundidad promedio' => 2.29,
                    'Porcentaje de población nacida en otro estado' => 19.47,
                    'Porcentaje de población con discapacidad' => 5.22,
                    'Porcentaje de población de 15 y más analfabeta' => 1.49,
                    'Porcentaje de población de 18 y más' => 73.71,
                    'Porcentaje de población de 18 y más postbásicos' => 39.34
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 10.27,
                    'Grado Promedio de Escolaridad masculina' => 10.36,
                    'Grado Promedio de Escolaridad femenina' => 10.19
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.77,
                    'Población Económicamente Activa masculina' => 61.16,
                    'Población Económicamente Activa femenina' => 38.84,
                    'Población Ocupada' => 88.15,
                    'Población Ocupada masculina' => 61.00,
                    'Población Ocupada femenina' => 39.00,
                    'Población Desocupada' => 11.85,
                    'Derechohabiencia' => 75.07
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 273,
                    'Hogares Jefatura masculina' => 72.53,
                    'Hogares Jefatura femenina' => 27.47,
                    'Ocupación por Vivienda' => 3.76,
                    'Viviendas con Electricidad' => 99.27,
                    'Viviendas con Agua' => 99.27,
                    'Viviendas con Drenaje' => 99.27,
                    'Viviendas con Televisión' => 97.07,
                    'Viviendas con Automóvil' => 53.11,
                    'Viviendas con Computadora' => 41.03,
                    'Viviendas con Celular' => 77.29,
                    'Viviendas con Internet' => 35.53
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 54,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 31.48,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 14.81,
                    'Tercera actividad nombre' => 'Educativos',
                    'Tercera actividad porcentaje' => 12.96,
                    'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Cuarta actividad porcentaje' => 11.11,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 11.11
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

} // Clase LuisEcheverriaOriente

?>
