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
 * Clase NuevoMexico
 */
class NuevoMexico extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Nuevo Mexico';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'nuevo-mexico';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Nuevo Mexico de IBC Torreón.';
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
                'Población total' => '329',
                'Porcentaje de población masculina' => '51.41',
                'Porcentaje de población femenina' => '48.59',
                'Porcentaje de población de 0 a 14 años' => '26.93',
                'Porcentaje de población de 15 a 64 años' => '62.91',
                'Porcentaje de población de 65 y más años' => '10.16',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '2.64',
                'Porcentaje de población nacida en otro estado' => '12.60',
                'Porcentaje de población con discapacidad' => '5.13'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '7.49',
                'Grado Promedio de Escolaridad masculina' => '7.35',
                'Grado Promedio de Escolaridad femenina' => '7.63'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '46.97',
                'Población Económicamente Activa masculina' => '79.94',
                'Población Económicamente Activa femenina' => '20.06',
                'Población Ocupada' => '81.39',
                'Población Ocupada masculina' => '77.99',
                'Población Ocupada femenina' => '22.01',
                'Población Desocupada' => '18.61',
                'Derechohabiencia' => '67.79'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '77.42',
                'Hogares Jefatura femenina' => '22.58',
                'Ocupación por Vivienda' => '3.83',
                'Viviendas con Electricidad' => '98.64',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '99.82',
                'Viviendas con Televisión' => '98.45',
                'Viviendas con Automóvil' => '9.78',
                'Viviendas con Computadora' => '10.96',
                'Viviendas con Celular' => '51.04',
                'Viviendas con Internet' => '2.23'
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

} // Clase NuevoMexico

?>
