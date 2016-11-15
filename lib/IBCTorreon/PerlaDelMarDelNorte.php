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
 * Clase PerlaDelMarDelNorte
 */
class PerlaDelMarDelNorte extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Perla Del Mar Del Norte';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-15 08:36:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'perla-del-mar-del-norte';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Perla Del Mar Del Norte de Torreón.';
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
                    'Población total' => 16,
                    'Porcentaje de población masculina' => 50.00,
                    'Porcentaje de población femenina' => 50.00,
                    'Porcentaje de población de 0 a 14 años' => 25.00,
                    'Porcentaje de población de 15 a 64 años' => 37.50,
                    'Porcentaje de población de 65 y más años' => 0.00,
                    'Porcentaje de población no especificada' => 37.50,
                    'Fecundidad promedio' => 1.33,
                    'Porcentaje de población nacida en otro estado' => 31.25,
                    'Porcentaje de población con discapacidad' => 0.00,
                    'Porcentaje de población de 15 y más analfabeta' => 0.00,
                    'Porcentaje de población de 18 y más' => 37.50,
                    'Porcentaje de población de 18 y más postbásicos' => 37.50
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 16.17,
                    'Grado Promedio de Escolaridad masculina' => 16.00,
                    'Grado Promedio de Escolaridad femenina' => 16.33
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 66.67,
                    'Población Económicamente Activa masculina' => 75.00,
                    'Población Económicamente Activa femenina' => 25.00,
                    'Población Ocupada' => 100.00,
                    'Población Ocupada masculina' => 75.00,
                    'Población Ocupada femenina' => 25.00,
                    'Población Desocupada' => 0.00,
                    'Derechohabiencia' => 37.50
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 3,
                    'Hogares Jefatura masculina' => 75.98,
                    'Hogares Jefatura femenina' => 24.02,
                    'Ocupación por Vivienda' => 5.33,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 100.00,
                    'Viviendas con Computadora' => 46.86,
                    'Viviendas con Celular' => 85.49,
                    'Viviendas con Internet' => 32.66
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 0
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

} // Clase PerlaDelMarDelNorte

?>
