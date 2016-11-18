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
 * Clase VillaRomana
 */
class VillaRomana extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Villa Romana';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-18 13:33:45';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'villa-romana';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Villa Romana de Torreón.';
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
                    'Población total' => 139,
                    'Porcentaje de población masculina' => 53.24,
                    'Porcentaje de población femenina' => 46.76,
                    'Porcentaje de población de 0 a 14 años' => 24.92,
                    'Porcentaje de población de 15 a 64 años' => 59.86,
                    'Porcentaje de población de 65 y más años' => 2.21,
                    'Porcentaje de población no especificada' => 13.01,
                    'Fecundidad promedio' => 1.47,
                    'Porcentaje de población nacida en otro estado' => 29.77,
                    'Porcentaje de población con discapacidad' => 1.12,
                    'Porcentaje de población de 15 y más analfabeta' => 0.03,
                    'Porcentaje de población de 18 y más' => 56.25,
                    'Porcentaje de población de 18 y más postbásicos' => 49.99
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 14.09,
                    'Grado Promedio de Escolaridad masculina' => 13.83,
                    'Grado Promedio de Escolaridad femenina' => 14.35
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 57.64,
                    'Población Económicamente Activa masculina' => 58.57,
                    'Población Económicamente Activa femenina' => 41.43,
                    'Población Ocupada' => 96.04,
                    'Población Ocupada masculina' => 56.94,
                    'Población Ocupada femenina' => 43.06,
                    'Población Desocupada' => 3.96,
                    'Derechohabiencia' => 75.01
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 39,
                    'Hogares Jefatura masculina' => 69.32,
                    'Hogares Jefatura femenina' => 30.68,
                    'Ocupación por Vivienda' => 3.56,
                    'Viviendas con Electricidad' => 93.61,
                    'Viviendas con Agua' => 93.59,
                    'Viviendas con Drenaje' => 93.53,
                    'Viviendas con Televisión' => 93.60,
                    'Viviendas con Automóvil' => 85.42,
                    'Viviendas con Computadora' => 80.03,
                    'Viviendas con Celular' => 90.74,
                    'Viviendas con Internet' => 79.96
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 3,
                    'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Primer actividad porcentaje' => 33.33,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 33.33,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 33.33
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

} // Clase VillaRomana

?>
