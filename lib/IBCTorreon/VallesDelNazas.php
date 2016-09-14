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
 * Clase VallesDelNazas
 */
class VallesDelNazas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Valles Del Nazas';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'valles-del-nazas';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Valles Del Nazas de IBC Torreón.';
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
                'Población total' => '1941',
                'Porcentaje de población masculina' => '48.84',
                'Porcentaje de población femenina' => '51.16',
                'Porcentaje de población de 0 a 14 años' => '34.88',
                'Porcentaje de población de 15 a 64 años' => '60.64',
                'Porcentaje de población de 65 y más años' => '2.94',
                'Porcentaje de población no especificada' => '1.54',
                'Fecundidad promedio' => '1.72',
                'Porcentaje de población nacida en otro estado' => '14.32',
                'Porcentaje de población con discapacidad' => '1.98'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '11.83',
                'Grado Promedio de Escolaridad masculina' => '11.97',
                'Grado Promedio de Escolaridad femenina' => '11.70'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '54.55',
                'Población Económicamente Activa masculina' => '61.64',
                'Población Económicamente Activa femenina' => '38.36',
                'Población Ocupada' => '96.16',
                'Población Ocupada masculina' => '61.40',
                'Población Ocupada femenina' => '38.60',
                'Población Desocupada' => '3.84',
                'Derechohabiencia' => '78.67'
            ),
            'Viviendas' => array(
                'Hogares' => '497',
                'Hogares Jefatura masculina' => '77.26',
                'Hogares Jefatura femenina' => '22.74',
                'Ocupación por Vivienda' => '3.91',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '98.59',
                'Viviendas con Automóvil' => '68.01',
                'Viviendas con Computadora' => '55.94',
                'Viviendas con Celular' => '89.34',
                'Viviendas con Internet' => '40.24'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '49',
                'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Primer actividad porcentaje' => '38.78',
                'Segunda actividad nombre' => 'Comercio Menudeo',
                'Segunda actividad porcentaje' => '26.53',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '14.29',
                'Cuarta actividad nombre' => 'Educativos',
                'Cuarta actividad porcentaje' => '6.12',
                'Quinta actividad nombre' => 'Industria Manufacturera',
                'Quinta actividad porcentaje' => '4.08'
            )
        );
    } // datos

} // Clase VallesDelNazas

?>
