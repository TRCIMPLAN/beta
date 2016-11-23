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
 * Clase ValleOriente
 */
class ValleOriente extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Valle Oriente';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:12';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'valle-oriente';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Valle Oriente de Torreón.';
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
                    'Población total' => 5641,
                    'Porcentaje de población masculina' => 48.45,
                    'Porcentaje de población femenina' => 51.55,
                    'Porcentaje de población de 0 a 14 años' => 22.92,
                    'Porcentaje de población de 15 a 64 años' => 71.41,
                    'Porcentaje de población de 65 y más años' => 4.61,
                    'Porcentaje de población no especificada' => 1.06,
                    'Fecundidad promedio' => 2.21,
                    'Porcentaje de población nacida en otro estado' => 14.77,
                    'Porcentaje de población con discapacidad' => 8.43,
                    'Porcentaje de población de 15 y más analfabeta' => 1.16,
                    'Porcentaje de población de 18 y más' => 70.73,
                    'Porcentaje de población de 18 y más postbásicos' => 31.38
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 9.86,
                    'Grado Promedio de Escolaridad masculina' => 10.11,
                    'Grado Promedio de Escolaridad femenina' => 9.62
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 57.14,
                    'Población Económicamente Activa masculina' => 63.70,
                    'Población Económicamente Activa femenina' => 36.30,
                    'Población Ocupada' => 90.86,
                    'Población Ocupada masculina' => 63.33,
                    'Población Ocupada femenina' => 36.67,
                    'Población Desocupada' => 9.14,
                    'Derechohabiencia' => 78.07
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1465,
                    'Hogares Jefatura masculina' => 75.90,
                    'Hogares Jefatura femenina' => 24.10,
                    'Ocupación por Vivienda' => 3.85,
                    'Viviendas con Electricidad' => 99.93,
                    'Viviendas con Agua' => 99.66,
                    'Viviendas con Drenaje' => 99.59,
                    'Viviendas con Televisión' => 99.52,
                    'Viviendas con Automóvil' => 52.22,
                    'Viviendas con Computadora' => 37.75,
                    'Viviendas con Celular' => 80.96,
                    'Viviendas con Internet' => 24.35
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 162,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 44.44,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 22.22,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 14.20,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 5.56,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 3.70
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

} // Clase ValleOriente

?>
