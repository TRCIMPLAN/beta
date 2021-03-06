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
 * Clase PalmasLaRosita
 */
class PalmasLaRosita extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Palmas La Rosita';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'palmas-la-rosita';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Palmas La Rosita de IBC Torreón.';
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
                'Población total' => '141',
                'Porcentaje de población masculina' => '53.19',
                'Porcentaje de población femenina' => '46.81',
                'Porcentaje de población de 0 a 14 años' => '20.57',
                'Porcentaje de población de 15 a 64 años' => '67.38',
                'Porcentaje de población de 65 y más años' => '5.67',
                'Porcentaje de población no especificada' => '6.38',
                'Fecundidad promedio' => '1.98',
                'Porcentaje de población nacida en otro estado' => '7.09',
                'Porcentaje de población con discapacidad' => '1.31'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '15.15',
                'Grado Promedio de Escolaridad masculina' => '15.71',
                'Grado Promedio de Escolaridad femenina' => '14.56'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '44.14',
                'Población Económicamente Activa masculina' => '77.55',
                'Población Económicamente Activa femenina' => '22.45',
                'Población Ocupada' => '100.00',
                'Población Ocupada masculina' => '77.55',
                'Población Ocupada femenina' => '22.45',
                'Población Desocupada' => '0.00',
                'Derechohabiencia' => '89.36'
            ),
            'Viviendas' => array(
                'Hogares' => '36',
                'Hogares Jefatura masculina' => '86.11',
                'Hogares Jefatura femenina' => '13.89',
                'Ocupación por Vivienda' => '3.92',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '100.00',
                'Viviendas con Computadora' => '100.00',
                'Viviendas con Celular' => '100.00',
                'Viviendas con Internet' => '97.22'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '5',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '40.00',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '40.00',
                'Tercera actividad nombre' => 'Profesionales, Científicos, Técnicos',
                'Tercera actividad porcentaje' => '20.00',
                'Cuarta actividad nombre' => 'Salud',
                'Cuarta actividad porcentaje' => '0.00',
                'Quinta actividad nombre' => 'Información Medios Masivos',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase PalmasLaRosita

?>
