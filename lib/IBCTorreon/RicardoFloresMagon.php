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
 * Clase RicardoFloresMagon
 */
class RicardoFloresMagon extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Ricardo Flores Magon';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'ricardo-flores-magon';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Ricardo Flores Magon de IBC Torreón.';
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
                'Población total' => '320',
                'Porcentaje de población masculina' => '49.38',
                'Porcentaje de población femenina' => '50.62',
                'Porcentaje de población de 0 a 14 años' => '29.06',
                'Porcentaje de población de 15 a 64 años' => '65.00',
                'Porcentaje de población de 65 y más años' => '3.12',
                'Porcentaje de población no especificada' => '2.82',
                'Fecundidad promedio' => '2.40',
                'Porcentaje de población nacida en otro estado' => '7.78',
                'Porcentaje de población con discapacidad' => '0.41'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '7.01',
                'Grado Promedio de Escolaridad masculina' => '6.96',
                'Grado Promedio de Escolaridad femenina' => '7.05'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '58.02',
                'Población Económicamente Activa masculina' => '65.96',
                'Población Económicamente Activa femenina' => '34.04',
                'Población Ocupada' => '85.63',
                'Población Ocupada masculina' => '65.85',
                'Población Ocupada femenina' => '34.15',
                'Población Desocupada' => '14.37',
                'Derechohabiencia' => '51.25'
            ),
            'Viviendas' => array(
                'Hogares' => '73',
                'Hogares Jefatura masculina' => '73.97',
                'Hogares Jefatura femenina' => '26.03',
                'Ocupación por Vivienda' => '4.38',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '35.62',
                'Viviendas con Computadora' => '19.18',
                'Viviendas con Celular' => '69.86',
                'Viviendas con Internet' => '51.47'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '3',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '66.67',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '33.33',
                'Tercera actividad nombre' => 'Salud',
                'Tercera actividad porcentaje' => '0.00',
                'Cuarta actividad nombre' => 'Información Medios Masivos',
                'Cuarta actividad porcentaje' => '0.00',
                'Quinta actividad nombre' => 'Manejo de Residuos',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase RicardoFloresMagon

?>
