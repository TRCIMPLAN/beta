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
 * Clase ResidencialSantaBarbara1aEtapa
 */
class ResidencialSantaBarbara1aEtapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Residencial Santa Barbara 1A. Etapa';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'residencial-santa-barbara-1a-etapa';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Residencial Santa Barbara 1A. Etapa de IBC Torreón.';
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
                'Población total' => '265',
                'Porcentaje de población masculina' => '50.57',
                'Porcentaje de población femenina' => '49.43',
                'Porcentaje de población de 0 a 14 años' => '35.47',
                'Porcentaje de población de 15 a 64 años' => '58.49',
                'Porcentaje de población de 65 y más años' => '2.64',
                'Porcentaje de población no especificada' => '3.40',
                'Fecundidad promedio' => '1.67',
                'Porcentaje de población nacida en otro estado' => '18.45',
                'Porcentaje de población con discapacidad' => '0.00'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '15.02',
                'Grado Promedio de Escolaridad masculina' => '15.65',
                'Grado Promedio de Escolaridad femenina' => '14.34'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '59.54',
                'Población Económicamente Activa masculina' => '66.99',
                'Población Económicamente Activa femenina' => '33.01',
                'Población Ocupada' => '98.02',
                'Población Ocupada masculina' => '67.33',
                'Población Ocupada femenina' => '32.67',
                'Población Desocupada' => '1.98',
                'Derechohabiencia' => '76.23'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '87.01',
                'Hogares Jefatura femenina' => '12.99',
                'Ocupación por Vivienda' => '3.44',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '98.70',
                'Viviendas con Drenaje' => '98.70',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '100.00',
                'Viviendas con Computadora' => '94.81',
                'Viviendas con Celular' => '98.70',
                'Viviendas con Internet' => '88.31'
            ),
            'Unidades Económicas' => array(
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '42.31',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '19.23',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '15.38',
                'Cuarta actividad nombre' => 'Educativos',
                'Cuarta actividad porcentaje' => '7.69',
                'Quinta actividad nombre' => 'Industria Manufacturera',
                'Quinta actividad porcentaje' => '7.69'
            )
        );
    } // datos

} // Clase ResidencialSantaBarbara1aEtapa

?>
