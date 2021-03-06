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
 * Clase VistaHermosa
 */
class VistaHermosa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Vista Hermosa';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'vista-hermosa';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Vista Hermosa de IBC Torreón.';
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
                'Población total' => '641',
                'Porcentaje de población masculina' => '51.57',
                'Porcentaje de población femenina' => '48.43',
                'Porcentaje de población de 0 a 14 años' => '30.13',
                'Porcentaje de población de 15 a 64 años' => '63.56',
                'Porcentaje de población de 65 y más años' => '6.31',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '2.79',
                'Porcentaje de población nacida en otro estado' => '2.59',
                'Porcentaje de población con discapacidad' => '5.95'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '6.97',
                'Grado Promedio de Escolaridad masculina' => '7.02',
                'Grado Promedio de Escolaridad femenina' => '6.93'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '54.72',
                'Población Económicamente Activa masculina' => '73.66',
                'Población Económicamente Activa femenina' => '26.34',
                'Población Ocupada' => '96.87',
                'Población Ocupada masculina' => '73.23',
                'Población Ocupada femenina' => '26.77',
                'Población Desocupada' => '3.13',
                'Derechohabiencia' => '59.95'
            ),
            'Viviendas' => array(
                'Hogares' => '158',
                'Hogares Jefatura masculina' => '72.57',
                'Hogares Jefatura femenina' => '27.43',
                'Ocupación por Vivienda' => '4.06',
                'Viviendas con Electricidad' => '99.83',
                'Viviendas con Agua' => '94.71',
                'Viviendas con Drenaje' => '94.08',
                'Viviendas con Televisión' => '97.91',
                'Viviendas con Automóvil' => '20.77',
                'Viviendas con Computadora' => '10.86',
                'Viviendas con Celular' => '54.79',
                'Viviendas con Internet' => '3.79'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '9',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '55.56',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '22.22',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '11.11',
                'Cuarta actividad nombre' => 'Gubernamentales',
                'Cuarta actividad porcentaje' => '11.11',
                'Quinta actividad nombre' => 'Salud',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase VistaHermosa

?>
