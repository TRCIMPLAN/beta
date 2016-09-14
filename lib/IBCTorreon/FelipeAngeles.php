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
 * Clase FelipeAngeles
 */
class FelipeAngeles extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Felipe Angeles';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'felipe-angeles';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Felipe Angeles de IBC Torreón.';
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
                'Población total' => '1023',
                'Porcentaje de población masculina' => '48.78',
                'Porcentaje de población femenina' => '51.22',
                'Porcentaje de población de 0 a 14 años' => '21.11',
                'Porcentaje de población de 15 a 64 años' => '68.52',
                'Porcentaje de población de 65 y más años' => '8.90',
                'Porcentaje de población no especificada' => '1.47',
                'Fecundidad promedio' => '2.42',
                'Porcentaje de población nacida en otro estado' => '21.02',
                'Porcentaje de población con discapacidad' => '5.81'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '9.95',
                'Grado Promedio de Escolaridad masculina' => '10.07',
                'Grado Promedio de Escolaridad femenina' => '9.84'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '51.24',
                'Población Económicamente Activa masculina' => '63.51',
                'Población Económicamente Activa femenina' => '36.49',
                'Población Ocupada' => '83.68',
                'Población Ocupada masculina' => '60.38',
                'Población Ocupada femenina' => '39.62',
                'Población Desocupada' => '16.32',
                'Derechohabiencia' => '63.64'
            ),
            'Viviendas' => array(
                'Hogares' => '283',
                'Hogares Jefatura masculina' => '65.97',
                'Hogares Jefatura femenina' => '34.03',
                'Ocupación por Vivienda' => '3.61',
                'Viviendas con Electricidad' => '99.65',
                'Viviendas con Agua' => '98.94',
                'Viviendas con Drenaje' => '98.23',
                'Viviendas con Televisión' => '98.94',
                'Viviendas con Automóvil' => '52.30',
                'Viviendas con Computadora' => '44.40',
                'Viviendas con Celular' => '71.38',
                'Viviendas con Internet' => '34.65'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '90',
                'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Primer actividad porcentaje' => '28.89',
                'Segunda actividad nombre' => 'Comercio Menudeo',
                'Segunda actividad porcentaje' => '26.67',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '8.89',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '7.78',
                'Quinta actividad nombre' => 'Comercio Mayoreo',
                'Quinta actividad porcentaje' => '7.78'
            )
        );
    } // datos

} // Clase FelipeAngeles

?>
