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
 * Clase JesusMariaDelBosque
 */
class JesusMariaDelBosque extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Jesus Maria Del Bosque';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'jesus-maria-del-bosque';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Jesus Maria Del Bosque de IBC Torreón.';
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
                'Población total' => '19',
                'Porcentaje de población masculina' => '48.22',
                'Porcentaje de población femenina' => '51.78',
                'Porcentaje de población de 0 a 14 años' => '22.86',
                'Porcentaje de población de 15 a 64 años' => '68.19',
                'Porcentaje de población de 65 y más años' => '8.58',
                'Porcentaje de población no especificada' => '0.37',
                'Fecundidad promedio' => '2.31',
                'Porcentaje de población nacida en otro estado' => '16.78',
                'Porcentaje de población con discapacidad' => '6.29'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '9.83',
                'Grado Promedio de Escolaridad masculina' => '9.98',
                'Grado Promedio de Escolaridad femenina' => '9.70'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '53.25',
                'Población Económicamente Activa masculina' => '62.64',
                'Población Económicamente Activa femenina' => '37.36',
                'Población Ocupada' => '87.54',
                'Población Ocupada masculina' => '62.08',
                'Población Ocupada femenina' => '37.92',
                'Población Desocupada' => '12.46',
                'Derechohabiencia' => '73.15'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '70.78',
                'Hogares Jefatura femenina' => '29.22',
                'Ocupación por Vivienda' => '4.75',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '58.90',
                'Viviendas con Computadora' => '43.66',
                'Viviendas con Celular' => '91.64',
                'Viviendas con Internet' => '35.03'
            ),
            'Unidades Económicas' => array(
        );
    } // datos

} // Clase JesusMariaDelBosque

?>
