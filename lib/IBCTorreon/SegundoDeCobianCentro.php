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
 * Clase SegundoDeCobianCentro
 */
class SegundoDeCobianCentro extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Segundo De Cobian (Centro)';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'segundo-de-cobian-centro';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Segundo De Cobian (Centro) de IBC Torreón.';
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
                'Población total' => '8015',
                'Porcentaje de población masculina' => '46.37',
                'Porcentaje de población femenina' => '53.63',
                'Porcentaje de población de 0 a 14 años' => '17.18',
                'Porcentaje de población de 15 a 64 años' => '64.10',
                'Porcentaje de población de 65 y más años' => '16.36',
                'Porcentaje de población no especificada' => '2.36',
                'Fecundidad promedio' => '2.07',
                'Porcentaje de población nacida en otro estado' => '18.78',
                'Porcentaje de población con discapacidad' => '9.42'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '11.12',
                'Grado Promedio de Escolaridad masculina' => '11.67',
                'Grado Promedio de Escolaridad femenina' => '10.64'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '54.02',
                'Población Económicamente Activa masculina' => '58.81',
                'Población Económicamente Activa femenina' => '41.19',
                'Población Ocupada' => '93.34',
                'Población Ocupada masculina' => '57.94',
                'Población Ocupada femenina' => '42.06',
                'Población Desocupada' => '6.66',
                'Derechohabiencia' => '67.95'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '60.38',
                'Hogares Jefatura femenina' => '39.62',
                'Ocupación por Vivienda' => '3.13',
                'Viviendas con Electricidad' => '99.37',
                'Viviendas con Agua' => '99.13',
                'Viviendas con Drenaje' => '99.01',
                'Viviendas con Televisión' => '97.41',
                'Viviendas con Automóvil' => '53.01',
                'Viviendas con Computadora' => '43.28',
                'Viviendas con Celular' => '67.60',
                'Viviendas con Internet' => '34.25'
            ),
            'Unidades Económicas' => array(
                'Primer actividad nombre' => 'Salud',
                'Primer actividad porcentaje' => '22.25',
                'Segunda actividad nombre' => 'Comercio Menudeo',
                'Segunda actividad porcentaje' => '18.43',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '13.28',
                'Cuarta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                'Cuarta actividad porcentaje' => '10.51',
                'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Quinta actividad porcentaje' => '10.13'
            )
        );
    } // datos

} // Clase SegundoDeCobianCentro

?>
