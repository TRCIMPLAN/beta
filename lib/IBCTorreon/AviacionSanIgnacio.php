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
 * Clase AviacionSanIgnacio
 */
class AviacionSanIgnacio extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Aviacion San Ignacio';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'aviacion-san-ignacio';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Aviacion San Ignacio de IBC Torreón.';
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
                'Población total' => '890',
                'Porcentaje de población masculina' => '48.53',
                'Porcentaje de población femenina' => '51.47',
                'Porcentaje de población de 0 a 14 años' => '34.71',
                'Porcentaje de población de 15 a 64 años' => '63.36',
                'Porcentaje de población de 65 y más años' => '1.59',
                'Porcentaje de población no especificada' => '0.34',
                'Fecundidad promedio' => '1.76',
                'Porcentaje de población nacida en otro estado' => '15.96',
                'Porcentaje de población con discapacidad' => '2.22'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '11.18',
                'Grado Promedio de Escolaridad masculina' => '11.47',
                'Grado Promedio de Escolaridad femenina' => '10.91'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '58.83',
                'Población Económicamente Activa masculina' => '63.02',
                'Población Económicamente Activa femenina' => '36.98',
                'Población Ocupada' => '96.11',
                'Población Ocupada masculina' => '63.25',
                'Población Ocupada femenina' => '36.75',
                'Población Desocupada' => '3.89',
                'Derechohabiencia' => '76.73'
            ),
            'Viviendas' => array(
                'Hogares' => '239',
                'Hogares Jefatura masculina' => '75.28',
                'Hogares Jefatura femenina' => '24.72',
                'Ocupación por Vivienda' => '3.72',
                'Viviendas con Electricidad' => '99.85',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '99.01',
                'Viviendas con Automóvil' => '74.09',
                'Viviendas con Computadora' => '54.15',
                'Viviendas con Celular' => '89.72',
                'Viviendas con Internet' => '37.97'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '20',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '45.00',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '30.00',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '10.00',
                'Cuarta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                'Cuarta actividad porcentaje' => '5.00',
                'Quinta actividad nombre' => 'Educativos',
                'Quinta actividad porcentaje' => '5.00'
            )
        );
    } // datos

} // Clase AviacionSanIgnacio

?>
