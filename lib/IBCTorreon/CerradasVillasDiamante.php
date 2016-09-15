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
 * Clase CerradasVillasDiamante
 */
class CerradasVillasDiamante extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Cerradas Villas Diamante';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'cerradas-villas-diamante';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Cerradas Villas Diamante de Torreón.';
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
                'Población total' => '109',
                'Porcentaje de población masculina' => '51.38',
                'Porcentaje de población femenina' => '48.62',
                'Porcentaje de población de 0 a 14 años' => '27.52',
                'Porcentaje de población de 15 a 64 años' => '69.72',
                'Porcentaje de población de 65 y más años' => '0.00',
                'Porcentaje de población no especificada' => '2.76',
                'Fecundidad promedio' => '1.44',
                'Porcentaje de población nacida en otro estado' => '12.84',
                'Porcentaje de población con discapacidad' => '0.00'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '13.54',
                'Grado Promedio de Escolaridad masculina' => '13.89',
                'Grado Promedio de Escolaridad femenina' => '13.12'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '67.50',
                'Población Económicamente Activa masculina' => '61.11',
                'Población Económicamente Activa femenina' => '38.89',
                'Población Ocupada' => '96.16',
                'Población Ocupada masculina' => '61.54',
                'Población Ocupada femenina' => '38.46',
                'Población Desocupada' => '3.84',
                'Derechohabiencia' => '83.49'
            ),
            'Viviendas' => array(
                'Hogares' => '29',
                'Hogares Jefatura masculina' => '93.10',
                'Hogares Jefatura femenina' => '6.90',
                'Ocupación por Vivienda' => '3.76',
                'Viviendas con Electricidad' => '96.55',
                'Viviendas con Agua' => '96.55',
                'Viviendas con Drenaje' => '96.55',
                'Viviendas con Televisión' => '96.55',
                'Viviendas con Automóvil' => '86.21',
                'Viviendas con Computadora' => '82.76',
                'Viviendas con Celular' => '96.55',
                'Viviendas con Internet' => '82.76'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '0'
            )
        );
    } // datos

} // Clase CerradasVillasDiamante

?>
