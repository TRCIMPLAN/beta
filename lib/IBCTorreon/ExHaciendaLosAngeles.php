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
 * Clase ExHaciendaLosAngeles
 */
class ExHaciendaLosAngeles extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Ex-Hacienda Los Ángeles';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-16 15:38:41';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'ex-hacienda-los-angeles';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ex-Hacienda Los Ángeles de Torreón.';
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
                    'Población total' => 346,
                    'Porcentaje de población masculina' => 52.44,
                    'Porcentaje de población femenina' => 47.56,
                    'Porcentaje de población de 0 a 14 años' => 21.87,
                    'Porcentaje de población de 15 a 64 años' => 73.47,
                    'Porcentaje de población de 65 y más años' => 4.65,
                    'Porcentaje de población no especificada' => 0.01,
                    'Fecundidad promedio' => 1.84,
                    'Porcentaje de población nacida en otro estado' => 19.84,
                    'Porcentaje de población con discapacidad' => 1.52,
                    'Porcentaje de población de 15 y más analfabeta' => 0.00,
                    'Porcentaje de población de 18 y más' => 72.00,
                    'Porcentaje de población de 18 y más postbásicos' => 62.96
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 13.57,
                    'Grado Promedio de Escolaridad masculina' => 13.99,
                    'Grado Promedio de Escolaridad femenina' => 13.16
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 50.55,
                    'Población Económicamente Activa masculina' => 56.82,
                    'Población Económicamente Activa femenina' => 43.18,
                    'Población Ocupada' => 93.62,
                    'Población Ocupada masculina' => 57.62,
                    'Población Ocupada femenina' => 42.38,
                    'Población Desocupada' => 6.38,
                    'Derechohabiencia' => 86.57
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 94,
                    'Hogares Jefatura masculina' => 67.37,
                    'Hogares Jefatura femenina' => 32.63,
                    'Ocupación por Vivienda' => 3.68,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 99.83,
                    'Viviendas con Automóvil' => 85.92,
                    'Viviendas con Computadora' => 82.16,
                    'Viviendas con Celular' => 87.83,
                    'Viviendas con Internet' => 70.10
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 16,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 43.75,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 37.50,
                    'Tercera actividad nombre' => 'Inmobiliarios',
                    'Tercera actividad porcentaje' => 12.50,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 6.25
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

} // Clase ExHaciendaLosAngeles

?>
