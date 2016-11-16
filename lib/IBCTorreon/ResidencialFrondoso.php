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
 * Clase ResidencialFrondoso
 */
class ResidencialFrondoso extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Residencial Frondoso';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-16 15:38:41';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'residencial-frondoso';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial Frondoso de Torreón.';
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
                    'Población total' => 271,
                    'Porcentaje de población masculina' => 48.71,
                    'Porcentaje de población femenina' => 51.29,
                    'Porcentaje de población de 0 a 14 años' => 26.94,
                    'Porcentaje de población de 15 a 64 años' => 62.36,
                    'Porcentaje de población de 65 y más años' => 4.06,
                    'Porcentaje de población no especificada' => 6.64,
                    'Fecundidad promedio' => 1.49,
                    'Porcentaje de población nacida en otro estado' => 19.56,
                    'Porcentaje de población con discapacidad' => 1.48,
                    'Porcentaje de población de 15 y más analfabeta' => 0.00,
                    'Porcentaje de población de 18 y más' => 59.41,
                    'Porcentaje de población de 18 y más postbásicos' => 57.20
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 14.86,
                    'Grado Promedio de Escolaridad masculina' => 15.06,
                    'Grado Promedio de Escolaridad femenina' => 14.66
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 54.04,
                    'Población Económicamente Activa masculina' => 60.75,
                    'Población Económicamente Activa femenina' => 39.25,
                    'Población Ocupada' => 99.06,
                    'Población Ocupada masculina' => 60.38,
                    'Población Ocupada femenina' => 39.62,
                    'Población Desocupada' => 0.94,
                    'Derechohabiencia' => 82.29
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 65,
                    'Hogares Jefatura masculina' => 87.69,
                    'Hogares Jefatura femenina' => 12.31,
                    'Ocupación por Vivienda' => 4.17,
                    'Viviendas con Electricidad' => 98.46,
                    'Viviendas con Agua' => 96.92,
                    'Viviendas con Drenaje' => 96.92,
                    'Viviendas con Televisión' => 98.46,
                    'Viviendas con Automóvil' => 96.92,
                    'Viviendas con Computadora' => 90.77,
                    'Viviendas con Celular' => 95.38,
                    'Viviendas con Internet' => 87.69
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

} // Clase ResidencialFrondoso

?>
