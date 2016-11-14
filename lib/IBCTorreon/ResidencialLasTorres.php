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
 * Clase ResidencialLasTorres
 */
class ResidencialLasTorres extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Residencial Las Torres';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-11-14 14:03:31';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'residencial-las-torres';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Residencial Las Torres de Torreón.';
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
                    'Población total' => 6074,
                    'Porcentaje de población masculina' => 48.68,
                    'Porcentaje de población femenina' => 51.32,
                    'Porcentaje de población de 0 a 14 años' => 21.30,
                    'Porcentaje de población de 15 a 64 años' => 70.91,
                    'Porcentaje de población de 65 y más años' => 5.80,
                    'Porcentaje de población no especificada' => 1.99,
                    'Fecundidad promedio' => 1.89,
                    'Porcentaje de población nacida en otro estado' => 17.90,
                    'Porcentaje de población con discapacidad' => 2.99,
                    'Porcentaje de población de 15 y más analfabeta' => 0.46,
                    'Porcentaje de población de 18 y más' => 69.39,
                    'Porcentaje de población de 18 y más postbásicos' => 51.70
                )
            ),
            'Educación' => array(
                '2010' => array(
                    'Grado Promedio de Escolaridad' => 12.42,
                    'Grado Promedio de Escolaridad masculina' => 12.82,
                    'Grado Promedio de Escolaridad femenina' => 12.06
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.42,
                    'Población Económicamente Activa masculina' => 59.07,
                    'Población Económicamente Activa femenina' => 40.93,
                    'Población Ocupada' => 92.97,
                    'Población Ocupada masculina' => 58.16,
                    'Población Ocupada femenina' => 41.84,
                    'Población Desocupada' => 7.03,
                    'Derechohabiencia' => 76.87
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1615,
                    'Hogares Jefatura masculina' => 74.61,
                    'Hogares Jefatura femenina' => 25.39,
                    'Ocupación por Vivienda' => 3.76,
                    'Viviendas con Electricidad' => 99.88,
                    'Viviendas con Agua' => 99.75,
                    'Viviendas con Drenaje' => 99.75,
                    'Viviendas con Televisión' => 99.32,
                    'Viviendas con Automóvil' => 75.42,
                    'Viviendas con Computadora' => 64.67,
                    'Viviendas con Celular' => 85.33,
                    'Viviendas con Internet' => 51.68
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 132,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 40.91,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 12.12,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 10.61,
                    'Cuarta actividad nombre' => 'Salud',
                    'Cuarta actividad porcentaje' => 7.58,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 6.06
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

} // Clase ResidencialLasTorres

?>
