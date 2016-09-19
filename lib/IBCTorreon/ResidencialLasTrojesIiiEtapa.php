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
 * Clase ResidencialLasTrojesIiiEtapa
 */
class ResidencialLasTrojesIiiEtapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Residencial Las Trojes Iii Etapa';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'residencial-las-trojes-iii-etapa';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial Las Trojes Iii Etapa de Torreón.';
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
                    'Población total' => 181,
                    'Porcentaje de población masculina' => 50.28,
                    'Porcentaje de población femenina' => 49.72,
                    'Porcentaje de población de 0 a 14 años' => 37.02,
                    'Porcentaje de población de 15 a 64 años' => 61.33,
                    'Porcentaje de población de 65 y más años' => 1.66,
                    'Porcentaje de población no especificada' => -0.01,
                    'Fecundidad promedio' => 1.75,
                    'Porcentaje de población nacida en otro estado' => 14.92,
                    'Porcentaje de población con discapacidad' => 0.00
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 11.37,
                    'Grado Promedio de Escolaridad masculina' => 11.51,
                    'Grado Promedio de Escolaridad femenina' => 11.25
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 63.49,
                    'Población Económicamente Activa masculina' => 65.00,
                    'Población Económicamente Activa femenina' => 35.00,
                    'Población Ocupada' => 98.73,
                    'Población Ocupada masculina' => 65.82,
                    'Población Ocupada femenina' => 34.18,
                    'Población Desocupada' => 1.27,
                    'Derechohabiencia' => 88.95
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 50,
                    'Hogares Jefatura masculina' => 90.00,
                    'Hogares Jefatura femenina' => 10.00,
                    'Ocupación por Vivienda' => 3.62,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 100.00,
                    'Viviendas con Drenaje' => 100.00,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 72.00,
                    'Viviendas con Computadora' => 44.00,
                    'Viviendas con Celular' => 86.00,
                    'Viviendas con Internet' => 44.00
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 2,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 100.00
                )
            )
        );
    } // datos

} // Clase ResidencialLasTrojesIiiEtapa

?>
