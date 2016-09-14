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
 * Clase ParaisoDelNazas
 */
class ParaisoDelNazas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Paraiso Del Nazas';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'paraiso-del-nazas';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Paraiso Del Nazas de IBC Torreón.';
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
                'Población total' => '623',
                'Porcentaje de población masculina' => '48.92',
                'Porcentaje de población femenina' => '51.08',
                'Porcentaje de población de 0 a 14 años' => '31.24',
                'Porcentaje de población de 15 a 64 años' => '58.41',
                'Porcentaje de población de 65 y más años' => '5.52',
                'Porcentaje de población no especificada' => '4.83',
                'Fecundidad promedio' => '2.01',
                'Porcentaje de población nacida en otro estado' => '18.40',
                'Porcentaje de población con discapacidad' => '3.38'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '10.72',
                'Grado Promedio de Escolaridad masculina' => '10.76',
                'Grado Promedio de Escolaridad femenina' => '10.70'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '48.64',
                'Población Económicamente Activa masculina' => '67.70',
                'Población Económicamente Activa femenina' => '32.30',
                'Población Ocupada' => '88.00',
                'Población Ocupada masculina' => '65.52',
                'Población Ocupada femenina' => '34.48',
                'Población Desocupada' => '12.00',
                'Derechohabiencia' => '63.48'
            ),
            'Viviendas' => array(
                'Hogares' => '154',
                'Hogares Jefatura masculina' => '39.44',
                'Hogares Jefatura femenina' => '60.56',
                'Ocupación por Vivienda' => '4.05',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '99.09',
                'Viviendas con Drenaje' => '95.78',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '72.81',
                'Viviendas con Computadora' => '43.77',
                'Viviendas con Celular' => '83.78',
                'Viviendas con Internet' => '32.64'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '27',
                'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Primer actividad porcentaje' => '44.44',
                'Segunda actividad nombre' => 'Comercio Menudeo',
                'Segunda actividad porcentaje' => '25.93',
                'Tercera actividad nombre' => 'Industria Manufacturera',
                'Tercera actividad porcentaje' => '14.81',
                'Cuarta actividad nombre' => 'Comercio Mayoreo',
                'Cuarta actividad porcentaje' => '11.11',
                'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Quinta actividad porcentaje' => '3.70'
            )
        );
    } // datos

} // Clase ParaisoDelNazas

?>
