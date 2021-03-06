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
 * Clase SalvadorAllende
 */
class SalvadorAllende extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Salvador Allende';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'salvador-allende';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Salvador Allende de IBC Torreón.';
        $this->claves          = 'IMPLAN, Torreon, Desagregación';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio      = 'ibc-torreon';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu     = 'IBC > IBC Torreón';
        // Para el Organizador
        $this->categorias      = array();
        $this->fuentes         = array();
        $this->regiones        = array();
    } // constructor

    /**
     * Datos
     *
     * @return array Arreglo asociativo
     */
    public function datos() {
        return array(
            'Demografía' => array(
                'Población total' => '2544',
                'Porcentaje de población masculina' => '48.07',
                'Porcentaje de población femenina' => '51.93',
                'Porcentaje de población de 0 a 14 años' => '29.80',
                'Porcentaje de población de 15 a 64 años' => '62.85',
                'Porcentaje de población de 65 y más años' => '6.25',
                'Porcentaje de población no especificada' => '1.10',
                'Fecundidad promedio' => '2.62',
                'Porcentaje de población nacida en otro estado' => '17.10',
                'Porcentaje de población con discapacidad' => '4.01'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '8.10',
                'Grado Promedio de Escolaridad masculina' => '8.10',
                'Grado Promedio de Escolaridad femenina' => '8.10'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '50.32',
                'Población Económicamente Activa masculina' => '67.12',
                'Población Económicamente Activa femenina' => '32.88',
                'Población Ocupada' => '91.41',
                'Población Ocupada masculina' => '66.44',
                'Población Ocupada femenina' => '33.56',
                'Población Desocupada' => '8.59',
                'Derechohabiencia' => '66.78'
            ),
            'Viviendas' => array(
                'Hogares' => '598',
                'Hogares Jefatura masculina' => '72.74',
                'Hogares Jefatura femenina' => '27.26',
                'Ocupación por Vivienda' => '4.25',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '99.16',
                'Viviendas con Drenaje' => '98.83',
                'Viviendas con Televisión' => '99.50',
                'Viviendas con Automóvil' => '40.13',
                'Viviendas con Computadora' => '21.04',
                'Viviendas con Celular' => '66.89',
                'Viviendas con Internet' => '13.14'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '85',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '40.00',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '22.35',
                'Tercera actividad nombre' => 'Industria Manufacturera',
                'Tercera actividad porcentaje' => '14.12',
                'Cuarta actividad nombre' => 'Comercio Mayoreo',
                'Cuarta actividad porcentaje' => '7.06',
                'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Quinta actividad porcentaje' => '7.06'
            )
        );
    } // datos

} // Clase SalvadorAllende

?>
