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
 * Clase ResidencialCumbres
 */
class ResidencialCumbres extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Residencial Cumbres';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'residencial-cumbres';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Residencial Cumbres de IBC Torreón.';
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
                'Población total' => '21',
                'Porcentaje de población masculina' => '44.16',
                'Porcentaje de población femenina' => '55.84',
                'Porcentaje de población de 0 a 14 años' => '29.30',
                'Porcentaje de población de 15 a 64 años' => '67.43',
                'Porcentaje de población de 65 y más años' => '2.65',
                'Porcentaje de población no especificada' => '0.62',
                'Fecundidad promedio' => '1.55',
                'Porcentaje de población nacida en otro estado' => '11.79',
                'Porcentaje de población con discapacidad' => '0.81'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '14.78',
                'Grado Promedio de Escolaridad masculina' => '15.09',
                'Grado Promedio de Escolaridad femenina' => '14.55'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '48.26',
                'Población Económicamente Activa masculina' => '68.99',
                'Población Económicamente Activa femenina' => '31.01',
                'Población Ocupada' => '98.03',
                'Población Ocupada masculina' => '68.71',
                'Población Ocupada femenina' => '31.29',
                'Población Desocupada' => '1.97',
                'Derechohabiencia' => '86.11'
            ),
            'Viviendas' => array(
                'Hogares' => '5',
                'Hogares Jefatura masculina' => '93.58',
                'Hogares Jefatura femenina' => '6.42',
                'Ocupación por Vivienda' => '4.20',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '100.00',
                'Viviendas con Computadora' => '100.00',
                'Viviendas con Celular' => '100.00',
                'Viviendas con Internet' => '100.00'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '0'
            )
        );
    } // datos

} // Clase ResidencialCumbres

?>
