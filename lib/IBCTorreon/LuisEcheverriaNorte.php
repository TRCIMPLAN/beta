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
 * Clase LuisEcheverriaNorte
 */
class LuisEcheverriaNorte extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Luis Echeverría Norte';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-18 13:33:45';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'luis-echeverria-norte';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Luis Echeverría Norte de Torreón.';
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
                    'Población total' => 2867,
                    'Porcentaje de población masculina' => 48.13,
                    'Porcentaje de población femenina' => 51.87,
                    'Porcentaje de población de 0 a 14 años' => 25.04,
                    'Porcentaje de población de 15 a 64 años' => 66.24,
                    'Porcentaje de población de 65 y más años' => 8.62,
                    'Porcentaje de población no especificada' => 0.10,
                    'Fecundidad promedio' => 2.38,
                    'Porcentaje de población nacida en otro estado' => 15.85,
                    'Porcentaje de población con discapacidad' => 5.73,
                    'Porcentaje de población de 15 y más analfabeta' => 1.18,
                    'Porcentaje de población de 18 y más' => 70.18,
                    'Porcentaje de población de 18 y más postbásicos' => 28.92
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 9.42,
                    'Grado Promedio de Escolaridad masculina' => 9.53,
                    'Grado Promedio de Escolaridad femenina' => 9.32
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 51.59,
                    'Población Económicamente Activa masculina' => 65.20,
                    'Población Económicamente Activa femenina' => 34.80,
                    'Población Ocupada' => 88.82,
                    'Población Ocupada masculina' => 63.81,
                    'Población Ocupada femenina' => 36.19,
                    'Población Desocupada' => 11.18,
                    'Derechohabiencia' => 72.45
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 731,
                    'Hogares Jefatura masculina' => 68.40,
                    'Hogares Jefatura femenina' => 31.60,
                    'Ocupación por Vivienda' => 3.92,
                    'Viviendas con Electricidad' => 99.18,
                    'Viviendas con Agua' => 98.63,
                    'Viviendas con Drenaje' => 98.63,
                    'Viviendas con Televisión' => 98.63,
                    'Viviendas con Automóvil' => 44.05,
                    'Viviendas con Computadora' => 30.92,
                    'Viviendas con Celular' => 67.72,
                    'Viviendas con Internet' => 21.46
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 92,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 33.70,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 13.04,
                    'Tercera actividad nombre' => 'Gubernamentales',
                    'Tercera actividad porcentaje' => 13.04,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 11.96,
                    'Quinta actividad nombre' => 'Salud',
                    'Quinta actividad porcentaje' => 7.61
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

} // Clase LuisEcheverriaNorte

?>
