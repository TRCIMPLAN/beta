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
 * Clase MariaMercadoDeLopezSanchez
 */
class MariaMercadoDeLopezSanchez extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre      = 'Maria Mercado De Lopez Sanchez';
        $this->autor       = 'IMPLAN Torreón Staff';
        $this->fecha       = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo     = 'maria-mercado-de-lopez-sanchez';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Maria Mercado De Lopez Sanchez de Torreón.';
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
                'Población total' => '2527',
                'Porcentaje de población masculina' => '50.80',
                'Porcentaje de población femenina' => '49.20',
                'Porcentaje de población de 0 a 14 años' => '36.88',
                'Porcentaje de población de 15 a 64 años' => '52.26',
                'Porcentaje de población de 65 y más años' => '2.37',
                'Porcentaje de población no especificada' => '8.49',
                'Fecundidad promedio' => '2.49',
                'Porcentaje de población nacida en otro estado' => '17.02',
                'Porcentaje de población con discapacidad' => '2.92'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '7.08',
                'Grado Promedio de Escolaridad masculina' => '6.95',
                'Grado Promedio de Escolaridad femenina' => '7.21'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '53.17',
                'Población Económicamente Activa masculina' => '78.35',
                'Población Económicamente Activa femenina' => '21.65',
                'Población Ocupada' => '91.77',
                'Población Ocupada masculina' => '77.90',
                'Población Ocupada femenina' => '22.10',
                'Población Desocupada' => '8.23',
                'Derechohabiencia' => '46.25'
            ),
            'Viviendas' => array(
                'Hogares' => '653',
                'Hogares Jefatura masculina' => '83.45',
                'Hogares Jefatura femenina' => '16.55',
                'Ocupación por Vivienda' => '3.87',
                'Viviendas con Electricidad' => '82.57',
                'Viviendas con Agua' => '33.12',
                'Viviendas con Drenaje' => '59.62',
                'Viviendas con Televisión' => '74.88',
                'Viviendas con Automóvil' => '28.23',
                'Viviendas con Computadora' => '4.42',
                'Viviendas con Celular' => '48.19',
                'Viviendas con Internet' => '1.91'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '143',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '39.16',
                'Segunda actividad nombre' => 'Inmobiliarios',
                'Segunda actividad porcentaje' => '18.88',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '13.99',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '7.69',
                'Quinta actividad nombre' => 'Comercio Mayoreo',
                'Quinta actividad porcentaje' => '7.69'
            )
        );
    } // datos

} // Clase MariaMercadoDeLopezSanchez

?>
