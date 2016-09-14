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
 * Clase SateliteDeLaLagunaI
 */
class SateliteDeLaLagunaI extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Satelite De La Laguna I';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'satelite-de-la-laguna-i';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Satelite De La Laguna I de IBC Torreón.';
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
                'Población total' => '449',
                'Porcentaje de población masculina' => '45.21',
                'Porcentaje de población femenina' => '54.79',
                'Porcentaje de población de 0 a 14 años' => '28.06',
                'Porcentaje de población de 15 a 64 años' => '67.93',
                'Porcentaje de población de 65 y más años' => '4.01',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '1.88',
                'Porcentaje de población nacida en otro estado' => '12.92',
                'Porcentaje de población con discapacidad' => '1.86'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '10.75',
                'Grado Promedio de Escolaridad masculina' => '10.89',
                'Grado Promedio de Escolaridad femenina' => '10.65'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '52.37',
                'Población Económicamente Activa masculina' => '58.51',
                'Población Económicamente Activa femenina' => '41.49',
                'Población Ocupada' => '80.88',
                'Población Ocupada masculina' => '59.87',
                'Población Ocupada femenina' => '40.13',
                'Población Desocupada' => '19.12',
                'Derechohabiencia' => '78.40'
            ),
            'Viviendas' => array(
                'Hogares' => '117',
                'Hogares Jefatura masculina' => '64.10',
                'Hogares Jefatura femenina' => '35.90',
                'Ocupación por Vivienda' => '3.84',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '49.55',
                'Viviendas con Computadora' => '43.82',
                'Viviendas con Celular' => '81.20',
                'Viviendas con Internet' => '33.78'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '11',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '63.64',
                'Segunda actividad nombre' => 'Profesionales, Científicos, Técnicos',
                'Segunda actividad porcentaje' => '9.09',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '9.09',
                'Cuarta actividad nombre' => 'Educativos',
                'Cuarta actividad porcentaje' => '9.09',
                'Quinta actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Quinta actividad porcentaje' => '9.09'
            )
        );
    } // datos

} // Clase SateliteDeLaLagunaI

?>
