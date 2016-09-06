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
 * Clase GranjasSanIsidro
 */
class GranjasSanIsidro extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Granjas San Isidro';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'granjas-san-isidro';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Granjas San Isidro de IBC Torreón.';
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
                'Población total' => '461',
                'Porcentaje de población masculina' => '46.34',
                'Porcentaje de población femenina' => '53.66',
                'Porcentaje de población de 0 a 14 años' => '12.68',
                'Porcentaje de población de 15 a 64 años' => '59.21',
                'Porcentaje de población de 65 y más años' => '15.86',
                'Porcentaje de población no especificada' => '12.25',
                'Fecundidad promedio' => '2.01',
                'Porcentaje de población nacida en otro estado' => '16.67',
                'Porcentaje de población con discapacidad' => '3.57'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '13.95',
                'Grado Promedio de Escolaridad masculina' => '15.02',
                'Grado Promedio de Escolaridad femenina' => '12.92'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '47.04',
                'Población Económicamente Activa masculina' => '57.71',
                'Población Económicamente Activa femenina' => '42.29',
                'Población Ocupada' => '97.99',
                'Población Ocupada masculina' => '58.24',
                'Población Ocupada femenina' => '41.76',
                'Población Desocupada' => '2.01',
                'Derechohabiencia' => '67.43'
            ),
            'Viviendas' => array(
                'Hogares' => '117',
                'Hogares Jefatura masculina' => '76.01',
                'Hogares Jefatura femenina' => '23.99',
                'Ocupación por Vivienda' => '3.94',
                'Viviendas con Electricidad' => '98.66',
                'Viviendas con Agua' => '98.60',
                'Viviendas con Drenaje' => '99.52',
                'Viviendas con Televisión' => '96.13',
                'Viviendas con Automóvil' => '93.89',
                'Viviendas con Computadora' => '84.61',
                'Viviendas con Celular' => '90.59',
                'Viviendas con Internet' => '85.54'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '54',
                'Primer actividad nombre' => 'Financieros y Seguros',
                'Primer actividad porcentaje' => '22.22',
                'Segunda actividad nombre' => 'Comercio Menudeo',
                'Segunda actividad porcentaje' => '20.37',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '12.96',
                'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Cuarta actividad porcentaje' => '11.11',
                'Quinta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                'Quinta actividad porcentaje' => '9.26'
            )
        );
    } // datos

} // Clase GranjasSanIsidro

?>
