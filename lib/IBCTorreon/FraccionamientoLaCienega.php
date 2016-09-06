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
 * Clase FraccionamientoLaCienega
 */
class FraccionamientoLaCienega extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Fraccionamiento La Cienega';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'fraccionamiento-la-cienega';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Fraccionamiento La Cienega de IBC Torreón.';
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
                'Población total' => '114',
                'Porcentaje de población masculina' => '50.00',
                'Porcentaje de población femenina' => '50.00',
                'Porcentaje de población de 0 a 14 años' => '25.44',
                'Porcentaje de población de 15 a 64 años' => '73.68',
                'Porcentaje de población de 65 y más años' => '0.88',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '1.32',
                'Porcentaje de población nacida en otro estado' => '37.72',
                'Porcentaje de población con discapacidad' => '0.00'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '15.13',
                'Grado Promedio de Escolaridad masculina' => '14.86',
                'Grado Promedio de Escolaridad femenina' => '15.40'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '65.56',
                'Población Económicamente Activa masculina' => '59.32',
                'Población Económicamente Activa femenina' => '40.68',
                'Población Ocupada' => '92.76',
                'Población Ocupada masculina' => '60.00',
                'Población Ocupada femenina' => '40.00',
                'Población Desocupada' => '7.24',
                'Derechohabiencia' => '79.82'
            ),
            'Viviendas' => array(
                'Hogares' => '33',
                'Hogares Jefatura masculina' => '90.91',
                'Hogares Jefatura femenina' => '9.09',
                'Ocupación por Vivienda' => '3.45',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '100.00',
                'Viviendas con Computadora' => '96.97',
                'Viviendas con Celular' => '100.00',
                'Viviendas con Internet' => '90.91'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '13',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '30.77',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '23.08',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '23.08',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '15.38',
                'Quinta actividad nombre' => 'Salud',
                'Quinta actividad porcentaje' => '7.69'
            )
        );
    } // datos

} // Clase FraccionamientoLaCienega

?>
