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
 * Clase AmpliacionSeccion38
 */
class AmpliacionSeccion38 extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Ampliación Sección 38';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-16 15:38:41';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'ampliacion-seccion-38';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ampliación Sección 38 de Torreón.';
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
                    'Población total' => 152,
                    'Porcentaje de población masculina' => 47.37,
                    'Porcentaje de población femenina' => 52.63,
                    'Porcentaje de población de 0 a 14 años' => 30.92,
                    'Porcentaje de población de 15 a 64 años' => 64.47,
                    'Porcentaje de población de 65 y más años' => 4.61,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.88,
                    'Porcentaje de población nacida en otro estado' => 21.71,
                    'Porcentaje de población con discapacidad' => 0.00,
                    'Porcentaje de población de 15 y más analfabeta' => 0.08,
                    'Porcentaje de población de 18 y más' => 57.89,
                    'Porcentaje de población de 18 y más postbásicos' => 51.97
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 13.74,
                    'Grado Promedio de Escolaridad masculina' => 14.81,
                    'Grado Promedio de Escolaridad femenina' => 12.82
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.25,
                    'Población Económicamente Activa masculina' => 58.62,
                    'Población Económicamente Activa femenina' => 41.38,
                    'Población Ocupada' => 100.00,
                    'Población Ocupada masculina' => 58.62,
                    'Población Ocupada femenina' => 41.38,
                    'Población Desocupada' => 0.00,
                    'Derechohabiencia' => 87.50
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 37,
                    'Hogares Jefatura masculina' => 75.68,
                    'Hogares Jefatura femenina' => 24.32,
                    'Ocupación por Vivienda' => 4.11,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 97.30,
                    'Viviendas con Computadora' => 91.89,
                    'Viviendas con Celular' => 100.00,
                    'Viviendas con Internet' => 89.19
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 5,
                    'Primer actividad nombre' => 'Educativos',
                    'Primer actividad porcentaje' => 40.00,
                    'Segunda actividad nombre' => 'Salud',
                    'Segunda actividad porcentaje' => 40.00,
                    'Tercera actividad nombre' => 'Inmobiliarios',
                    'Tercera actividad porcentaje' => 20.00
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

} // Clase AmpliacionSeccion38

?>
