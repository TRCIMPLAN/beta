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
 * Clase ZaragozaNorte
 */
class ZaragozaNorte extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Zaragoza Norte';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'zaragoza-norte';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Zaragoza Norte de IBC Torreón.';
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
                'Población total' => '131',
                'Porcentaje de población masculina' => '47.24',
                'Porcentaje de población femenina' => '52.76',
                'Porcentaje de población de 0 a 14 años' => '42.95',
                'Porcentaje de población de 15 a 64 años' => '55.32',
                'Porcentaje de población de 65 y más años' => '0.90',
                'Porcentaje de población no especificada' => '0.83',
                'Fecundidad promedio' => '2.34',
                'Porcentaje de población nacida en otro estado' => '14.94',
                'Porcentaje de población con discapacidad' => '3.04'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '7.96',
                'Grado Promedio de Escolaridad masculina' => '8.24',
                'Grado Promedio de Escolaridad femenina' => '7.73'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '52.62',
                'Población Económicamente Activa masculina' => '69.21',
                'Población Económicamente Activa femenina' => '30.79',
                'Población Ocupada' => '84.96',
                'Población Ocupada masculina' => '69.51',
                'Población Ocupada femenina' => '30.49',
                'Población Desocupada' => '15.04',
                'Derechohabiencia' => '74.92'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '76.47',
                'Hogares Jefatura femenina' => '23.53',
                'Ocupación por Vivienda' => '4.23',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '94.03',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '49.33',
                'Viviendas con Computadora' => '38.03',
                'Viviendas con Celular' => '67.25',
                'Viviendas con Internet' => '2.28'
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

} // Clase ZaragozaNorte

?>
