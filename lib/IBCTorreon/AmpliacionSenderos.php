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
 * Clase AmpliacionSenderos
 */
class AmpliacionSenderos extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Ampliacion Senderos';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-15 08:36:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'ampliacion-senderos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ampliacion Senderos de Torreón.';
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
                    'Población total' => 125,
                    'Porcentaje de población masculina' => 45.46,
                    'Porcentaje de población femenina' => 54.54,
                    'Porcentaje de población de 0 a 14 años' => 25.70,
                    'Porcentaje de población de 15 a 64 años' => 54.19,
                    'Porcentaje de población de 65 y más años' => 3.27,
                    'Porcentaje de población no especificada' => 16.84,
                    'Fecundidad promedio' => 1.60,
                    'Porcentaje de población nacida en otro estado' => 22.26,
                    'Porcentaje de población con discapacidad' => 1.56,
                    'Porcentaje de población de 15 y más analfabeta' => 0.00,
                    'Porcentaje de población de 18 y más' => 53.72,
                    'Porcentaje de población de 18 y más postbásicos' => 52.06
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 15.36,
                    'Grado Promedio de Escolaridad masculina' => 15.55,
                    'Grado Promedio de Escolaridad femenina' => 15.14
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 72.72,
                    'Población Económicamente Activa masculina' => 56.20,
                    'Población Económicamente Activa femenina' => 43.80,
                    'Población Ocupada' => 99.83,
                    'Población Ocupada masculina' => 56.15,
                    'Población Ocupada femenina' => 43.85,
                    'Población Desocupada' => 0.17,
                    'Derechohabiencia' => 70.46
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 35,
                    'Hogares Jefatura masculina' => 82.37,
                    'Hogares Jefatura femenina' => 17.63,
                    'Ocupación por Vivienda' => 3.57,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 93.79,
                    'Viviendas con Computadora' => 79.00,
                    'Viviendas con Celular' => 100.00,
                    'Viviendas con Internet' => 47.01
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 5,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 40.00,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 20.00,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 20.00,
                    'Cuarta actividad nombre' => 'Salud',
                    'Cuarta actividad porcentaje' => 20.00
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

} // Clase AmpliacionSenderos

?>
