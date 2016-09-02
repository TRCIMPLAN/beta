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
 * Clase LaOrquidea
 */
class LaOrquidea extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'La Orquidea';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'la-orquidea';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia La Orquidea de IBC Torreón.';
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
                'Población total' => '77',
                'Porcentaje de población masculina' => '47.81',
                'Porcentaje de población femenina' => '52.19',
                'Porcentaje de población de 0 a 14 años' => '24.22',
                'Porcentaje de población de 15 a 64 años' => '66.28',
                'Porcentaje de población de 65 y más años' => '9.47',
                'Porcentaje de población no especificada' => '0.03',
                'Fecundidad promedio' => '3.03',
                'Porcentaje de población nacida en otro estado' => '24.66',
                'Porcentaje de población con discapacidad' => '19.54'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '8.33',
                'Grado Promedio de Escolaridad masculina' => '8.61',
                'Grado Promedio de Escolaridad femenina' => '8.04'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '57.29',
                'Población Económicamente Activa masculina' => '65.05',
                'Población Económicamente Activa femenina' => '34.95',
                'Población Ocupada' => '96.65',
                'Población Ocupada masculina' => '63.93',
                'Población Ocupada femenina' => '36.07',
                'Población Desocupada' => '3.35',
                'Derechohabiencia' => '58.44'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '68.40',
                'Hogares Jefatura femenina' => '31.60',
                'Ocupación por Vivienda' => '3.50',
                'Viviendas con Electricidad' => '99.53',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '94.93',
                'Viviendas con Automóvil' => '72.47',
                'Viviendas con Computadora' => '17.97',
                'Viviendas con Celular' => '83.20',
                'Viviendas con Internet' => '14.44'
            ),
            'Unidades Económicas' => array(
                'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Primer actividad porcentaje' => '100.00',
                'Segunda actividad nombre' => 'Salud',
                'Segunda actividad porcentaje' => '0.00',
                'Tercera actividad nombre' => 'Información Medios Masivos',
                'Tercera actividad porcentaje' => '0.00',
                'Cuarta actividad nombre' => 'Manejo de Residuos',
                'Cuarta actividad porcentaje' => '0.00',
                'Quinta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase LaOrquidea

?>
