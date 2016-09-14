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
 * Clase NuevoSanIsidro
 */
class NuevoSanIsidro extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Nuevo San Isidro';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'nuevo-san-isidro';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Nuevo San Isidro de IBC Torreón.';
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
                'Población total' => '938',
                'Porcentaje de población masculina' => '48.19',
                'Porcentaje de población femenina' => '51.81',
                'Porcentaje de población de 0 a 14 años' => '13.18',
                'Porcentaje de población de 15 a 64 años' => '75.26',
                'Porcentaje de población de 65 y más años' => '8.97',
                'Porcentaje de población no especificada' => '2.59',
                'Fecundidad promedio' => '1.69',
                'Porcentaje de población nacida en otro estado' => '26.03',
                'Porcentaje de población con discapacidad' => '4.07'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '14.33',
                'Grado Promedio de Escolaridad masculina' => '14.89',
                'Grado Promedio de Escolaridad femenina' => '13.84'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '55.06',
                'Población Económicamente Activa masculina' => '55.23',
                'Población Económicamente Activa femenina' => '44.77',
                'Población Ocupada' => '93.08',
                'Población Ocupada masculina' => '54.37',
                'Población Ocupada femenina' => '45.63',
                'Población Desocupada' => '6.92',
                'Derechohabiencia' => '74.20'
            ),
            'Viviendas' => array(
                'Hogares' => '283',
                'Hogares Jefatura masculina' => '73.94',
                'Hogares Jefatura femenina' => '26.06',
                'Ocupación por Vivienda' => '3.31',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '99.28',
                'Viviendas con Drenaje' => '99.64',
                'Viviendas con Televisión' => '98.93',
                'Viviendas con Automóvil' => '93.59',
                'Viviendas con Computadora' => '78.97',
                'Viviendas con Celular' => '92.13',
                'Viviendas con Internet' => '72.67'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '40',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '32.50',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '12.50',
                'Tercera actividad nombre' => 'Comercio Mayoreo',
                'Tercera actividad porcentaje' => '10.00',
                'Cuarta actividad nombre' => 'Financieros y Seguros',
                'Cuarta actividad porcentaje' => '10.00',
                'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Quinta actividad porcentaje' => '10.00'
            )
        );
    } // datos

} // Clase NuevoSanIsidro

?>
