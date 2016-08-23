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
 * Clase TerceroDeCobianCentro
 */
class TerceroDeCobianCentro extends \IBCBase\PublicacionSchemaDataset {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Tercero De Cobian Centro';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-08-22 15:46:47';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'tercero-de-cobian-centro';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Tercero De Cobian Centro de IBC Torreón.';
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
                'Población total' => '9277',
                'Porcentaje de población masculina' => '45.90',
                'Porcentaje de población femenina' => '54.10',
                'Porcentaje de población de 0 a 14 años' => '17.51',
                'Porcentaje de población de 15 a 64 años' => '65.08',
                'Porcentaje de población de 65 y más años' => '15.36',
                'Porcentaje de población no especificada' => '2.05',
                'Fecundidad promedio' => '2.19',
                'Porcentaje de población nacida en otro estado' => '17.86',
                'Porcentaje de población con discapacidad' => '7.40'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '10.76',
                'Grado Promedio de Escolaridad masculina' => '11.09',
                'Grado Promedio de Escolaridad femenina' => '10.50'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '52.62',
                'Población Económicamente Activa masculina' => '56.95',
                'Población Económicamente Activa femenina' => '43.05',
                'Población Ocupada' => '92.26',
                'Población Ocupada masculina' => '56.38',
                'Población Ocupada femenina' => '43.62',
                'Población Desocupada' => '7.74',
                'Derechohabiencia' => '68.92'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '59.66',
                'Hogares Jefatura femenina' => '40.34',
                'Ocupación por Vivienda' => '3.27',
                'Viviendas con Electricidad' => '99.71',
                'Viviendas con Agua' => '98.81',
                'Viviendas con Drenaje' => '98.66',
                'Viviendas con Televisión' => '97.60',
                'Viviendas con Automóvil' => '53.08',
                'Viviendas con Computadora' => '42.49',
                'Viviendas con Celular' => '69.64',
                'Viviendas con Internet' => '33.47'
            ),
            'Unidades Económicas' => array(
                'Primer actividad' => 'AEComercioMenu 25.57%',
                'Segunda actividad' => 'AEOtros 18.87%',
                'Tercera actividad' => 'AESalud 12.23%',
                'Cuarta actividad' => 'AEAlimentos 10.62%',
                'Quinta actividad' => 'AEManufactura 8.4%'
            )
        );
    } // datos

} // Clase TerceroDeCobianCentro

?>
