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
 * Clase LasMargaritas
 */
class LasMargaritas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Las Margaritas';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'las-margaritas';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Las Margaritas de IBC Torreón.';
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
                'Población total' => '1494',
                'Porcentaje de población masculina' => '47.32',
                'Porcentaje de población femenina' => '52.68',
                'Porcentaje de población de 0 a 14 años' => '14.67',
                'Porcentaje de población de 15 a 64 años' => '60.58',
                'Porcentaje de población de 65 y más años' => '14.34',
                'Porcentaje de población no especificada' => '10.41',
                'Fecundidad promedio' => '1.94',
                'Porcentaje de población nacida en otro estado' => '22.74',
                'Porcentaje de población con discapacidad' => '4.51'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '14.00',
                'Grado Promedio de Escolaridad masculina' => '14.65',
                'Grado Promedio de Escolaridad femenina' => '13.41'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '54.46',
                'Población Económicamente Activa masculina' => '56.30',
                'Población Económicamente Activa femenina' => '43.70',
                'Población Ocupada' => '92.99',
                'Población Ocupada masculina' => '56.48',
                'Población Ocupada femenina' => '43.52',
                'Población Desocupada' => '7.01',
                'Derechohabiencia' => '68.94'
            ),
            'Viviendas' => array(
                'Hogares' => '398',
                'Hogares Jefatura masculina' => '71.41',
                'Hogares Jefatura femenina' => '28.59',
                'Ocupación por Vivienda' => '3.75',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '99.50',
                'Viviendas con Televisión' => '98.74',
                'Viviendas con Automóvil' => '88.60',
                'Viviendas con Computadora' => '76.69',
                'Viviendas con Celular' => '88.59',
                'Viviendas con Internet' => '71.62'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '81',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '25.93',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '18.52',
                'Tercera actividad nombre' => 'Educativos',
                'Tercera actividad porcentaje' => '9.88',
                'Cuarta actividad nombre' => 'Salud',
                'Cuarta actividad porcentaje' => '7.41',
                'Quinta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                'Quinta actividad porcentaje' => '7.41'
            )
        );
    } // datos

} // Clase LasMargaritas

?>
