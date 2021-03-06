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
 * Clase FovisssteNuevaCalifornia
 */
class FovisssteNuevaCalifornia extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Fovissste Nueva California';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'fovissste-nueva-california';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Fovissste Nueva California de IBC Torreón.';
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
                'Población total' => '613',
                'Porcentaje de población masculina' => '46.98',
                'Porcentaje de población femenina' => '53.02',
                'Porcentaje de población de 0 a 14 años' => '21.21',
                'Porcentaje de población de 15 a 64 años' => '74.55',
                'Porcentaje de población de 65 y más años' => '3.26',
                'Porcentaje de población no especificada' => '0.98',
                'Fecundidad promedio' => '1.77',
                'Porcentaje de población nacida en otro estado' => '19.58',
                'Porcentaje de población con discapacidad' => '3.63'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '12.70',
                'Grado Promedio de Escolaridad masculina' => '12.99',
                'Grado Promedio de Escolaridad femenina' => '12.45'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '53.40',
                'Población Económicamente Activa masculina' => '54.31',
                'Población Económicamente Activa femenina' => '45.69',
                'Población Ocupada' => '92.81',
                'Población Ocupada masculina' => '54.62',
                'Población Ocupada femenina' => '45.38',
                'Población Desocupada' => '7.19',
                'Derechohabiencia' => '79.77'
            ),
            'Viviendas' => array(
                'Hogares' => '161',
                'Hogares Jefatura masculina' => '73.29',
                'Hogares Jefatura femenina' => '26.71',
                'Ocupación por Vivienda' => '3.81',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '80.12',
                'Viviendas con Computadora' => '68.94',
                'Viviendas con Celular' => '85.09',
                'Viviendas con Internet' => '55.28'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '7',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '57.14',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '28.57',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '14.29',
                'Cuarta actividad nombre' => 'Salud',
                'Cuarta actividad porcentaje' => '0.00',
                'Quinta actividad nombre' => 'Información Medios Masivos',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase FovisssteNuevaCalifornia

?>
