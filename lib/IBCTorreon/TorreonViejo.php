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
 * Clase TorreonViejo
 */
class TorreonViejo extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Torreon Viejo';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'torreon-viejo';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Torreon Viejo de IBC Torreón.';
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
                'Población total' => '476',
                'Porcentaje de población masculina' => '47.35',
                'Porcentaje de población femenina' => '52.65',
                'Porcentaje de población de 0 a 14 años' => '32.01',
                'Porcentaje de población de 15 a 64 años' => '59.60',
                'Porcentaje de población de 65 y más años' => '8.39',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '2.42',
                'Porcentaje de población nacida en otro estado' => '23.10',
                'Porcentaje de población con discapacidad' => '11.45'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '7.43',
                'Grado Promedio de Escolaridad masculina' => '7.51',
                'Grado Promedio de Escolaridad femenina' => '7.36'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '55.62',
                'Población Económicamente Activa masculina' => '65.97',
                'Población Económicamente Activa femenina' => '34.03',
                'Población Ocupada' => '99.47',
                'Población Ocupada masculina' => '65.79',
                'Población Ocupada femenina' => '34.21',
                'Población Desocupada' => '0.53',
                'Derechohabiencia' => '45.31'
            ),
            'Viviendas' => array(
                'Hogares' => '124',
                'Hogares Jefatura masculina' => '66.38',
                'Hogares Jefatura femenina' => '33.62',
                'Ocupación por Vivienda' => '3.84',
                'Viviendas con Electricidad' => '98.07',
                'Viviendas con Agua' => '98.06',
                'Viviendas con Drenaje' => '98.89',
                'Viviendas con Televisión' => '96.41',
                'Viviendas con Automóvil' => '6.87',
                'Viviendas con Computadora' => '8.23',
                'Viviendas con Celular' => '62.59',
                'Viviendas con Internet' => '8.05'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '11',
                'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Primer actividad porcentaje' => '45.45',
                'Segunda actividad nombre' => 'Comercio Menudeo',
                'Segunda actividad porcentaje' => '36.36',
                'Tercera actividad nombre' => 'Inmobiliarios',
                'Tercera actividad porcentaje' => '9.09',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '9.09',
                'Quinta actividad nombre' => 'Salud',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase TorreonViejo

?>
