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
 * Clase ClubCampestreMontebello
 */
class ClubCampestreMontebello extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Club Campestre Montebello';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-10 11:03:28';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'club-campestre-montebello';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Club Campestre Montebello de Torreón.';
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
                    'Población total' => 164,
                    'Porcentaje de población masculina' => 49.39,
                    'Porcentaje de población femenina' => 50.61,
                    'Porcentaje de población de 0 a 14 años' => 25.00,
                    'Porcentaje de población de 15 a 64 años' => 67.68,
                    'Porcentaje de población de 65 y más años' => 1.83,
                    'Porcentaje de población no especificada' => 5.49,
                    'Fecundidad promedio' => 1.74,
                    'Porcentaje de población nacida en otro estado' => 26.22,
                    'Porcentaje de población con discapacidad' => 4.42,
                    'Porcentaje de población de 15 y más analfabeta' => 0.00,
                    'Porcentaje de población de 18 y más' => 64.02,
                    'Porcentaje de población de 18 y más postbásicos' => 56.71
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 14.13,
                    'Grado Promedio de Escolaridad masculina' => 14.82,
                    'Grado Promedio de Escolaridad femenina' => 13.57
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 49.61,
                    'Población Económicamente Activa masculina' => 57.14,
                    'Población Económicamente Activa femenina' => 42.86,
                    'Población Ocupada' => 98.39,
                    'Población Ocupada masculina' => 56.45,
                    'Población Ocupada femenina' => 43.55,
                    'Población Desocupada' => 1.61,
                    'Derechohabiencia' => 81.10
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 36,
                    'Hogares Jefatura masculina' => 88.89,
                    'Hogares Jefatura femenina' => 11.11,
                    'Ocupación por Vivienda' => 4.56,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 97.22,
                    'Viviendas con Drenaje' => 97.22,
                    'Viviendas con Televisión' => 97.22,
                    'Viviendas con Automóvil' => 97.22,
                    'Viviendas con Computadora' => 94.44,
                    'Viviendas con Celular' => 94.44,
                    'Viviendas con Internet' => 88.89
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 3,
                    'Primer actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Primer actividad porcentaje' => 33.33,
                    'Segunda actividad nombre' => 'Esparcimiento, Culturales, Deportivos',
                    'Segunda actividad porcentaje' => 33.33,
                    'Tercera actividad nombre' => 'Inmobiliarios',
                    'Tercera actividad porcentaje' => 33.33
                )
            )
        );
    } // datos

} // Clase ClubCampestreMontebello

?>
