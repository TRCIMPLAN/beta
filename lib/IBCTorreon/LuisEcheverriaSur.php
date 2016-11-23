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
 * Clase LuisEcheverriaSur
 */
class LuisEcheverriaSur extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Luis Echeverría Sur';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:09';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'luis-echeverria-sur';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Luis Echeverría Sur de Torreón.';
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
                    'Población total' => 5,
                    'Porcentaje de población masculina' => 60.00,
                    'Porcentaje de población femenina' => 40.00,
                    'Porcentaje de población de 0 a 14 años' => 0.00,
                    'Porcentaje de población de 15 a 64 años' => 60.00,
                    'Porcentaje de población de 65 y más años' => 40.00,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 4.50,
                    'Porcentaje de población nacida en otro estado' => 14.83,
                    'Porcentaje de población con discapacidad' => 7.81,
                    'Porcentaje de población de 15 y más analfabeta' => 2.93,
                    'Porcentaje de población de 18 y más' => 100.00,
                    'Porcentaje de población de 18 y más postbásicos' => 26.24
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 6.00,
                    'Grado Promedio de Escolaridad masculina' => 8.33,
                    'Grado Promedio de Escolaridad femenina' => 2.50
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 0.00,
                    'Derechohabiencia' => 60.00
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 3,
                    'Hogares Jefatura masculina' => 100.00,
                    'Hogares Jefatura femenina' => 0.00,
                    'Ocupación por Vivienda' => 1.67,
                    'Viviendas con Electricidad' => 99.50,
                    'Viviendas con Agua' => 99.34,
                    'Viviendas con Drenaje' => 99.17,
                    'Viviendas con Televisión' => 97.52,
                    'Viviendas con Automóvil' => 0.00,
                    'Viviendas con Computadora' => 0.00,
                    'Viviendas con Celular' => 55.63,
                    'Viviendas con Internet' => 0.00
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 1,
                    'Primer actividad nombre' => 'Industria Manufacturera',
                    'Primer actividad porcentaje' => 100.00
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

} // Clase LuisEcheverriaSur

?>
