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
 * Clase RinconAurora
 */
class RinconAurora extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Rincon Aurora';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'rincon-aurora';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Rincon Aurora de Torreón.';
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
                'Población total' => '110',
                'Porcentaje de población masculina' => '48.18',
                'Porcentaje de población femenina' => '51.82',
                'Porcentaje de población de 0 a 14 años' => '26.36',
                'Porcentaje de población de 15 a 64 años' => '65.45',
                'Porcentaje de población de 65 y más años' => '0.00',
                'Porcentaje de población no especificada' => '8.19',
                'Fecundidad promedio' => '1.37',
                'Porcentaje de población nacida en otro estado' => '15.45',
                'Porcentaje de población con discapacidad' => '0.00'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '14.76',
                'Grado Promedio de Escolaridad masculina' => '14.65',
                'Grado Promedio de Escolaridad femenina' => '14.85'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '64.20',
                'Población Económicamente Activa masculina' => '46.15',
                'Población Económicamente Activa femenina' => '53.85',
                'Población Ocupada' => '96.01',
                'Población Ocupada masculina' => '46.00',
                'Población Ocupada femenina' => '54.00',
                'Población Desocupada' => '3.99',
                'Derechohabiencia' => '84.55'
            ),
            'Viviendas' => array(
                'Hogares' => '31',
                'Hogares Jefatura masculina' => '77.42',
                'Hogares Jefatura femenina' => '22.58',
                'Ocupación por Vivienda' => '3.55',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '93.55',
                'Viviendas con Computadora' => '100.00',
                'Viviendas con Celular' => '100.00',
                'Viviendas con Internet' => '83.87'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '0'
            )
        );
    } // datos

} // Clase RinconAurora

?>
