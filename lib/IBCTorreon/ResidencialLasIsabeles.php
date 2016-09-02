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
 * Clase ResidencialLasIsabeles
 */
class ResidencialLasIsabeles extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Residencial Las Isabeles';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'residencial-las-isabeles';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Residencial Las Isabeles de IBC Torreón.';
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
                'Población total' => '735',
                'Porcentaje de población masculina' => '48.44',
                'Porcentaje de población femenina' => '51.56',
                'Porcentaje de población de 0 a 14 años' => '30.07',
                'Porcentaje de población de 15 a 64 años' => '60.95',
                'Porcentaje de población de 65 y más años' => '1.63',
                'Porcentaje de población no especificada' => '7.35',
                'Fecundidad promedio' => '1.54',
                'Porcentaje de población nacida en otro estado' => '19.20',
                'Porcentaje de población con discapacidad' => '0.84'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '14.92',
                'Grado Promedio de Escolaridad masculina' => '15.29',
                'Grado Promedio de Escolaridad femenina' => '14.57'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '52.94',
                'Población Económicamente Activa masculina' => '65.56',
                'Población Económicamente Activa femenina' => '34.44',
                'Población Ocupada' => '98.50',
                'Población Ocupada masculina' => '65.04',
                'Población Ocupada femenina' => '34.96',
                'Población Desocupada' => '1.50',
                'Derechohabiencia' => '83.30'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '88.48',
                'Hogares Jefatura femenina' => '11.52',
                'Ocupación por Vivienda' => '4.45',
                'Viviendas con Electricidad' => '98.79',
                'Viviendas con Agua' => '96.97',
                'Viviendas con Drenaje' => '97.58',
                'Viviendas con Televisión' => '98.79',
                'Viviendas con Automóvil' => '98.18',
                'Viviendas con Computadora' => '95.15',
                'Viviendas con Celular' => '96.36',
                'Viviendas con Internet' => '92.73'
            ),
            'Unidades Económicas' => array(
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '80.00',
                'Segunda actividad nombre' => 'Educativos',
                'Segunda actividad porcentaje' => '20.00',
                'Tercera actividad nombre' => 'Salud',
                'Tercera actividad porcentaje' => '0.00',
                'Cuarta actividad nombre' => 'Información Medios Masivos',
                'Cuarta actividad porcentaje' => '0.00',
                'Quinta actividad nombre' => 'Manejo de Residuos',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase ResidencialLasIsabeles

?>
