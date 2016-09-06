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
 * Clase ResidencialSaulo
 */
class ResidencialSaulo extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Residencial Saulo';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'residencial-saulo';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Residencial Saulo de IBC Torreón.';
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
                'Población total' => '69',
                'Porcentaje de población masculina' => '49.77',
                'Porcentaje de población femenina' => '50.23',
                'Porcentaje de población de 0 a 14 años' => '32.96',
                'Porcentaje de población de 15 a 64 años' => '66.20',
                'Porcentaje de población de 65 y más años' => '0.37',
                'Porcentaje de población no especificada' => '0.47',
                'Fecundidad promedio' => '1.09',
                'Porcentaje de población nacida en otro estado' => '30.96',
                'Porcentaje de población con discapacidad' => '0.19'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '14.80',
                'Grado Promedio de Escolaridad masculina' => '15.78',
                'Grado Promedio de Escolaridad femenina' => '13.98'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '52.64',
                'Población Económicamente Activa masculina' => '53.50',
                'Población Económicamente Activa femenina' => '46.50',
                'Población Ocupada' => '99.71',
                'Población Ocupada masculina' => '53.31',
                'Población Ocupada femenina' => '46.69',
                'Población Desocupada' => '0.29',
                'Derechohabiencia' => '67.81'
            ),
            'Viviendas' => array(
                'Hogares' => '14',
                'Hogares Jefatura masculina' => '63.69',
                'Hogares Jefatura femenina' => '36.31',
                'Ocupación por Vivienda' => '4.93',
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
                'Total Actividades Económicas' => '5',
                'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Primer actividad porcentaje' => '40.00',
                'Segunda actividad nombre' => 'Educativos',
                'Segunda actividad porcentaje' => '20.00',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '20.00',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '20.00',
                'Quinta actividad nombre' => 'Salud',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase ResidencialSaulo

?>