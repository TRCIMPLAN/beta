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
 * Clase ColoniaPrimitivoCentro
 */
class ColoniaPrimitivoCentro extends \IBCBase\PublicacionFicha {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Colonia Primitivo Centro';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-08-30 10:50:08';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'colonia-primitivo-centro';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Colonia Primitivo Centro de IBC Torreón.';
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
                'Población total' => '1527',
                'Porcentaje de población masculina' => '45.32',
                'Porcentaje de población femenina' => '54.68',
                'Porcentaje de población de 0 a 14 años' => '18.76',
                'Porcentaje de población de 15 a 64 años' => '60.71',
                'Porcentaje de población de 65 y más años' => '15.41',
                'Porcentaje de población no especificada' => '5.12',
                'Fecundidad promedio' => '1.97',
                'Porcentaje de población nacida en otro estado' => '19.54',
                'Porcentaje de población con discapacidad' => '8.83'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '9.97',
                'Grado Promedio de Escolaridad masculina' => '10.38',
                'Grado Promedio de Escolaridad femenina' => '9.67'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '58.44',
                'Población Económicamente Activa masculina' => '55.47',
                'Población Económicamente Activa femenina' => '44.53',
                'Población Ocupada' => '93.40',
                'Población Ocupada masculina' => '54.74',
                'Población Ocupada femenina' => '45.26',
                'Población Desocupada' => '6.60',
                'Derechohabiencia' => '58.61'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '58.57',
                'Hogares Jefatura femenina' => '41.43',
                'Ocupación por Vivienda' => '3.53',
                'Viviendas con Electricidad' => '99.94',
                'Viviendas con Agua' => '99.69',
                'Viviendas con Drenaje' => '99.47',
                'Viviendas con Televisión' => '98.45',
                'Viviendas con Automóvil' => '40.56',
                'Viviendas con Computadora' => '30.60',
                'Viviendas con Celular' => '70.80',
                'Viviendas con Internet' => '21.97'
            ),
            'Unidades Económicas' => array(
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '50.29',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '12.12',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '11.51',
                'Cuarta actividad nombre' => 'Comercio Mayoreo',
                'Cuarta actividad porcentaje' => '8.15',
                'Quinta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                'Quinta actividad porcentaje' => '3.60'
            )
        );
    } // datos

} // Clase ColoniaPrimitivoCentro

?>
