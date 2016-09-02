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
 * Clase NuevoZaragozaIi
 */
class NuevoZaragozaIi extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Nuevo Zaragoza Ii';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'nuevo-zaragoza-ii';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Nuevo Zaragoza Ii de IBC Torreón.';
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
                'Población total' => '23',
                'Porcentaje de población masculina' => '43.48',
                'Porcentaje de población femenina' => '56.52',
                'Porcentaje de población de 0 a 14 años' => '39.13',
                'Porcentaje de población de 15 a 64 años' => '60.87',
                'Porcentaje de población de 65 y más años' => '0.00',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '1.13',
                'Porcentaje de población nacida en otro estado' => '13.04',
                'Porcentaje de población con discapacidad' => '1.86'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '11.93',
                'Grado Promedio de Escolaridad masculina' => '13.14',
                'Grado Promedio de Escolaridad femenina' => '10.71'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '73.33',
                'Población Económicamente Activa masculina' => '63.64',
                'Población Económicamente Activa femenina' => '36.36',
                'Población Ocupada' => '78.64',
                'Población Ocupada masculina' => '55.56',
                'Población Ocupada femenina' => '44.44',
                'Población Desocupada' => '21.36',
                'Derechohabiencia' => '86.96'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '100.00',
                'Hogares Jefatura femenina' => '0.00',
                'Ocupación por Vivienda' => '3.29',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '57.14',
                'Viviendas con Computadora' => '42.86',
                'Viviendas con Celular' => '100.00',
                'Viviendas con Internet' => '0.00'
            ),
            'Unidades Económicas' => array(
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '100.00',
                'Segunda actividad nombre' => 'Salud',
                'Segunda actividad porcentaje' => '0.00',
                'Tercera actividad nombre' => 'Información Medios Masivos',
                'Tercera actividad porcentaje' => '0.00',
                'Cuarta actividad nombre' => 'Manejo de Residuos',
                'Cuarta actividad porcentaje' => '0.00',
                'Quinta actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase NuevoZaragozaIi

?>
