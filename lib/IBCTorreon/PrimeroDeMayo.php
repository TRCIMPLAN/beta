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
 * Clase PrimeroDeMayo
 */
class PrimeroDeMayo extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Primero de Mayo';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2017-01-17 13:11:23';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'primero-de-mayo';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Primero de Mayo en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Desagregación, Colonia';
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
                    'Población total' => 2503,
                    'Porcentaje de población masculina' => 49.58,
                    'Porcentaje de población femenina' => 50.42,
                    'Porcentaje de población de 0 a 14 años' => 27.67,
                    'Porcentaje de población de 15 a 64 años' => 63.70,
                    'Porcentaje de población de 65 y más años' => 8.51,
                    'Porcentaje de población no especificada' => 0.12,
                    'Fecundidad promedio' => 2.67,
                    'Porcentaje de población con discapacidad' => 6.66
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 53.44,
                    'Población Económicamente Activa masculina' => 68.48,
                    'Población Económicamente Activa femenina' => 31.52,
                    'Población Ocupada' => 88.45,
                    'Población Ocupada masculina' => 66.08,
                    'Población Ocupada femenina' => 33.92,
                    'Población Desocupada' => 11.55,
                    'Derechohabiencia' => 69.85
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 639,
                    'Ocupación por Vivienda' => 3.92,
                    'Viviendas con Electricidad' => 99.30,
                    'Viviendas con Agua' => 97.27,
                    'Viviendas con Drenaje' => 97.89,
                    'Viviendas con Televisión' => 98.19,
                    'Viviendas con Automóvil' => 32.29,
                    'Viviendas con Computadora' => 19.41
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 29,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 62.07,
                    'Segunda actividad nombre' => 'Educativos',
                    'Segunda actividad porcentaje' => 13.79,
                    'Tercera actividad nombre' => 'Industria Manufacturera',
                    'Tercera actividad porcentaje' => 6.90,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 6.90,
                    'Quinta actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Quinta actividad porcentaje' => 3.45
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
            'Centro latitud'  => 25.5262143142438,
            'Centro longitud' => -103.451493153924
        );
    } // mapas

} // Clase PrimeroDeMayo

?>
