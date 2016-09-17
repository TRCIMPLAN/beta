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
 * Clase AngelesResidencialI
 */
class AngelesResidencialI extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Angeles Residencial I';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-17 15:32:58';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'angeles-residencial-i';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Angeles Residencial I de Torreón.';
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
                'Población total' => 117,
                'Porcentaje de población masculina' => 48.72,
                'Porcentaje de población femenina' => 51.28,
                'Porcentaje de población de 0 a 14 años' => 19.66,
                'Porcentaje de población de 15 a 64 años' => 74.36,
                'Porcentaje de población de 65 y más años' => 3.42,
                'Porcentaje de población no especificada' => 2.56,
                'Fecundidad promedio' => 1.59,
                'Porcentaje de población nacida en otro estado' => 15.38,
                'Porcentaje de población con discapacidad' => 0.76
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => 15.42,
                'Grado Promedio de Escolaridad masculina' => 15.51,
                'Grado Promedio de Escolaridad femenina' => 15.34
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => 56.04,
                'Población Económicamente Activa masculina' => 50.98,
                'Población Económicamente Activa femenina' => 49.02,
                'Población Ocupada' => 95.92,
                'Población Ocupada masculina' => 51.02,
                'Población Ocupada femenina' => 48.98,
                'Población Desocupada' => 4.08,
                'Derechohabiencia' => 82.91
            ),
            'Viviendas' => array(
                'Hogares' => 33,
                'Hogares Jefatura masculina' => 81.82,
                'Hogares Jefatura femenina' => 18.18,
                'Ocupación por Vivienda' => 3.55,
                'Viviendas con Electricidad' => 100.00,
                'Viviendas con Agua' => 100.00,
                'Viviendas con Drenaje' => 100.00,
                'Viviendas con Televisión' => 100.00,
                'Viviendas con Automóvil' => 96.97,
                'Viviendas con Computadora' => 84.85,
                'Viviendas con Celular' => 96.97,
                'Viviendas con Internet' => 81.82
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => 1,
                'Primer actividad nombre' => 'Salud',
                'Primer actividad porcentaje' => 100.00
            )
        );
    } // datos

} // Clase AngelesResidencialI

?>
