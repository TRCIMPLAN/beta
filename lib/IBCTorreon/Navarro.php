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
 * Clase Navarro
 */
class Navarro extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Navarro';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'navarro';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Navarro de IBC Torreón.';
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
                'Población total' => '1613',
                'Porcentaje de población masculina' => '43.67',
                'Porcentaje de población femenina' => '56.33',
                'Porcentaje de población de 0 a 14 años' => '12.28',
                'Porcentaje de población de 15 a 64 años' => '68.30',
                'Porcentaje de población de 65 y más años' => '15.82',
                'Porcentaje de población no especificada' => '3.60',
                'Fecundidad promedio' => '1.92',
                'Porcentaje de población nacida en otro estado' => '24.87',
                'Porcentaje de población con discapacidad' => '3.31'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '13.87',
                'Grado Promedio de Escolaridad masculina' => '14.80',
                'Grado Promedio de Escolaridad femenina' => '13.15'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '50.85',
                'Población Económicamente Activa masculina' => '57.06',
                'Población Económicamente Activa femenina' => '42.94',
                'Población Ocupada' => '93.03',
                'Población Ocupada masculina' => '57.18',
                'Población Ocupada femenina' => '42.82',
                'Población Desocupada' => '6.97',
                'Derechohabiencia' => '73.82'
            ),
            'Viviendas' => array(
                'Hogares' => '458',
                'Hogares Jefatura masculina' => '70.52',
                'Hogares Jefatura femenina' => '29.48',
                'Ocupación por Vivienda' => '3.52',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '99.84',
                'Viviendas con Drenaje' => '99.84',
                'Viviendas con Televisión' => '99.62',
                'Viviendas con Automóvil' => '87.60',
                'Viviendas con Computadora' => '76.43',
                'Viviendas con Celular' => '86.73',
                'Viviendas con Internet' => '69.03'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '251',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '43.03',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '17.13',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '7.17',
                'Cuarta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                'Cuarta actividad porcentaje' => '6.77',
                'Quinta actividad nombre' => 'Industria Manufacturera',
                'Quinta actividad porcentaje' => '4.38'
            )
        );
    } // datos

} // Clase Navarro

?>
