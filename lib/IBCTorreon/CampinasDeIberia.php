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
 * Clase CampinasDeIberia
 */
class CampinasDeIberia extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Campiñas De Iberia';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'campinas-de-iberia';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Campiñas De Iberia de IBC Torreón.';
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
                'Población total' => '116',
                'Porcentaje de población masculina' => '51.72',
                'Porcentaje de población femenina' => '48.28',
                'Porcentaje de población de 0 a 14 años' => '37.93',
                'Porcentaje de población de 15 a 64 años' => '62.07',
                'Porcentaje de población de 65 y más años' => '0.00',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '1.45',
                'Porcentaje de población nacida en otro estado' => '29.31',
                'Porcentaje de población con discapacidad' => '0.00'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '14.64',
                'Grado Promedio de Escolaridad masculina' => '14.53',
                'Grado Promedio de Escolaridad femenina' => '14.74'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '60.26',
                'Población Económicamente Activa masculina' => '63.83',
                'Población Económicamente Activa femenina' => '36.17',
                'Población Ocupada' => '97.83',
                'Población Ocupada masculina' => '63.04',
                'Población Ocupada femenina' => '36.96',
                'Población Desocupada' => '2.17',
                'Derechohabiencia' => '73.28'
            ),
            'Viviendas' => array(
                'Hogares' => '33',
                'Hogares Jefatura masculina' => '84.85',
                'Hogares Jefatura femenina' => '15.15',
                'Ocupación por Vivienda' => '3.52',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '96.97',
                'Viviendas con Computadora' => '93.94',
                'Viviendas con Celular' => '100.00',
                'Viviendas con Internet' => '87.88'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '33',
                'Primer actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Primer actividad porcentaje' => '33.33',
                'Segunda actividad nombre' => 'Comercio Menudeo',
                'Segunda actividad porcentaje' => '15.15',
                'Tercera actividad nombre' => 'Educativos',
                'Tercera actividad porcentaje' => '12.12',
                'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Cuarta actividad porcentaje' => '9.09',
                'Quinta actividad nombre' => 'Salud',
                'Quinta actividad porcentaje' => '6.06'
            )
        );
    } // datos

} // Clase CampinasDeIberia

?>
