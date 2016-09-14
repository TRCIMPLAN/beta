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
 * Clase NuevaCalifornia
 */
class NuevaCalifornia extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Nueva California';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'nueva-california';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Nueva California de IBC Torreón.';
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
                'Población total' => '817',
                'Porcentaje de población masculina' => '45.09',
                'Porcentaje de población femenina' => '54.91',
                'Porcentaje de población de 0 a 14 años' => '29.89',
                'Porcentaje de población de 15 a 64 años' => '63.45',
                'Porcentaje de población de 65 y más años' => '6.64',
                'Porcentaje de población no especificada' => '0.02',
                'Fecundidad promedio' => '2.40',
                'Porcentaje de población nacida en otro estado' => '12.18',
                'Porcentaje de población con discapacidad' => '5.51'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '8.41',
                'Grado Promedio de Escolaridad masculina' => '8.60',
                'Grado Promedio de Escolaridad femenina' => '8.24'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '51.59',
                'Población Económicamente Activa masculina' => '66.74',
                'Población Económicamente Activa femenina' => '33.26',
                'Población Ocupada' => '84.46',
                'Población Ocupada masculina' => '63.94',
                'Población Ocupada femenina' => '36.06',
                'Población Desocupada' => '15.54',
                'Derechohabiencia' => '67.49'
            ),
            'Viviendas' => array(
                'Hogares' => '186',
                'Hogares Jefatura masculina' => '74.17',
                'Hogares Jefatura femenina' => '25.83',
                'Ocupación por Vivienda' => '4.39',
                'Viviendas con Electricidad' => '99.60',
                'Viviendas con Agua' => '99.06',
                'Viviendas con Drenaje' => '98.52',
                'Viviendas con Televisión' => '99.06',
                'Viviendas con Automóvil' => '44.01',
                'Viviendas con Computadora' => '35.81',
                'Viviendas con Celular' => '68.09',
                'Viviendas con Internet' => '24.05'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '65',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '35.38',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '26.15',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '9.23',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '7.69',
                'Quinta actividad nombre' => 'Comercio Mayoreo',
                'Quinta actividad porcentaje' => '4.62'
            )
        );
    } // datos

} // Clase NuevaCalifornia

?>
