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
 * Clase ResidencialLosCedros
 */
class ResidencialLosCedros extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Residencial Los Cedros';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'residencial-los-cedros';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Residencial Los Cedros de IBC Torreón.';
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
                'Población total' => '0'
            ),
            'Educación' => array(
        
            ),
            'Características Económicas' => array(
        
            ),
            'Viviendas' => array(
                'Hogares' => '0'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '5',
                'Primer actividad nombre' => 'Educativos',
                'Primer actividad porcentaje' => '40.00',
                'Segunda actividad nombre' => 'Información Medios Masivos',
                'Segunda actividad porcentaje' => '20.00',
                'Tercera actividad nombre' => 'Manejo de Residuos',
                'Tercera actividad porcentaje' => '20.00',
                'Cuarta actividad nombre' => 'Financieros y Seguros',
                'Cuarta actividad porcentaje' => '20.00',
                'Quinta actividad nombre' => 'Salud',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase ResidencialLosCedros

?>