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
 * Clase CuartoDeCobianCentro
 */
class CuartoDeCobianCentro extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Cuarto De Cobian (Centro)';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'cuarto-de-cobian-centro';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Cuarto De Cobian (Centro) de IBC Torreón.';
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
                'Población total' => '11164',
                'Porcentaje de población masculina' => '45.90',
                'Porcentaje de población femenina' => '54.10',
                'Porcentaje de población de 0 a 14 años' => '17.37',
                'Porcentaje de población de 15 a 64 años' => '64.37',
                'Porcentaje de población de 65 y más años' => '15.89',
                'Porcentaje de población no especificada' => '2.37',
                'Fecundidad promedio' => '2.21',
                'Porcentaje de población nacida en otro estado' => '19.05',
                'Porcentaje de población con discapacidad' => '5.96'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '11.25',
                'Grado Promedio de Escolaridad masculina' => '11.56',
                'Grado Promedio de Escolaridad femenina' => '10.99'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '51.44',
                'Población Económicamente Activa masculina' => '56.65',
                'Población Económicamente Activa femenina' => '43.35',
                'Población Ocupada' => '91.41',
                'Población Ocupada masculina' => '56.22',
                'Población Ocupada femenina' => '43.78',
                'Población Desocupada' => '8.59',
                'Derechohabiencia' => '72.08'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '62.41',
                'Hogares Jefatura femenina' => '37.59',
                'Ocupación por Vivienda' => '3.30',
                'Viviendas con Electricidad' => '99.49',
                'Viviendas con Agua' => '99.22',
                'Viviendas con Drenaje' => '99.01',
                'Viviendas con Televisión' => '98.03',
                'Viviendas con Automóvil' => '63.03',
                'Viviendas con Computadora' => '46.38',
                'Viviendas con Celular' => '70.28',
                'Viviendas con Internet' => '39.03'
            ),
            'Unidades Económicas' => array(
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '26.69',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '20.02',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '12.93',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '10.09',
                'Quinta actividad nombre' => 'Comercio Mayoreo',
                'Quinta actividad porcentaje' => '7.01'
            )
        );
    } // datos

} // Clase CuartoDeCobianCentro

?>
