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
 * Clase VillasDeSanAngel
 */
class VillasDeSanAngel extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Villas de San Ángel';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-23 16:15:12';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'villas-de-san-angel';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Villas de San Ángel de Torreón.';
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
                    'Población total' => 195,
                    'Porcentaje de población masculina' => 54.87,
                    'Porcentaje de población femenina' => 45.13,
                    'Porcentaje de población de 0 a 14 años' => 36.92,
                    'Porcentaje de población de 15 a 64 años' => 61.03,
                    'Porcentaje de población de 65 y más años' => 2.05,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 1.95,
                    'Porcentaje de población nacida en otro estado' => 16.41,
                    'Porcentaje de población con discapacidad' => 1.86,
                    'Porcentaje de población de 15 y más analfabeta' => 2.05,
                    'Porcentaje de población de 18 y más' => 57.95,
                    'Porcentaje de población de 18 y más postbásicos' => 16.41
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 6.41,
                    'Grado Promedio de Escolaridad masculina' => 6.23,
                    'Grado Promedio de Escolaridad femenina' => 6.61
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 60.31,
                    'Población Económicamente Activa masculina' => 72.15,
                    'Población Económicamente Activa femenina' => 27.85,
                    'Población Ocupada' => 82.56,
                    'Población Ocupada masculina' => 71.64,
                    'Población Ocupada femenina' => 28.36,
                    'Población Desocupada' => 17.44,
                    'Derechohabiencia' => 65.64
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 51,
                    'Hogares Jefatura masculina' => 78.43,
                    'Hogares Jefatura femenina' => 21.57,
                    'Ocupación por Vivienda' => 3.82,
                    'Viviendas con Electricidad' => 100.00,
                    'Viviendas con Agua' => 98.04,
                    'Viviendas con Drenaje' => 98.04,
                    'Viviendas con Televisión' => 100.00,
                    'Viviendas con Automóvil' => 33.33,
                    'Viviendas con Computadora' => 9.80,
                    'Viviendas con Celular' => 76.47,
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
        return array(
            'Límites'         => \Configuracion\IBCTorreonConfig::LIMITES,
            'Centro latitud'  => 25.5417372684198,
            'Centro longitud' => -103.342683761093
        );
    } // mapas

} // Clase VillasDeSanAngel

?>
