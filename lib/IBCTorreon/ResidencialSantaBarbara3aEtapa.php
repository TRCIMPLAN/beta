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
 * Clase ResidencialSantaBarbara3aEtapa
 */
class ResidencialSantaBarbara3aEtapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Residencial Santa Barbara 3A. Etapa';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-17 15:33:02';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'residencial-santa-barbara-3a-etapa';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial Santa Barbara 3A. Etapa de Torreón.';
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
                'Población total' => 314,
                'Porcentaje de población masculina' => 50.32,
                'Porcentaje de población femenina' => 49.68,
                'Porcentaje de población de 0 a 14 años' => 26.11,
                'Porcentaje de población de 15 a 64 años' => 71.66,
                'Porcentaje de población de 65 y más años' => 0.32,
                'Porcentaje de población no especificada' => 1.91,
                'Fecundidad promedio' => 1.22,
                'Porcentaje de población nacida en otro estado' => 32.17,
                'Porcentaje de población con discapacidad' => 0.28
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => 15.69,
                'Grado Promedio de Escolaridad masculina' => 15.73,
                'Grado Promedio de Escolaridad femenina' => 15.66
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => 67.66,
                'Población Económicamente Activa masculina' => 59.06,
                'Población Económicamente Activa femenina' => 40.94,
                'Población Ocupada' => 98.73,
                'Población Ocupada masculina' => 59.17,
                'Población Ocupada femenina' => 40.83,
                'Población Desocupada' => 1.27,
                'Derechohabiencia' => 82.80
            ),
            'Viviendas' => array(
                'Hogares' => 100,
                'Hogares Jefatura masculina' => 86.54,
                'Hogares Jefatura femenina' => 13.46,
                'Ocupación por Vivienda' => 3.14,
                'Viviendas con Electricidad' => 100.00,
                'Viviendas con Agua' => 99.00,
                'Viviendas con Drenaje' => 99.00,
                'Viviendas con Televisión' => 98.00,
                'Viviendas con Automóvil' => 94.00,
                'Viviendas con Computadora' => 92.00,
                'Viviendas con Celular' => 99.00,
                'Viviendas con Internet' => 82.00
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => 0
            )
        );
    } // datos

} // Clase ResidencialSantaBarbara3aEtapa

?>
