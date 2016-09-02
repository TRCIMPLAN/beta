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
 * Clase QuintasLaMerced
 */
class QuintasLaMerced extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Quintas La Merced';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'quintas-la-merced';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Quintas La Merced de IBC Torreón.';
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
                'Población total' => '457',
                'Porcentaje de población masculina' => '48.14',
                'Porcentaje de población femenina' => '51.86',
                'Porcentaje de población de 0 a 14 años' => '32.82',
                'Porcentaje de población de 15 a 64 años' => '65.86',
                'Porcentaje de población de 65 y más años' => '1.31',
                'Porcentaje de población no especificada' => '0.01',
                'Fecundidad promedio' => '1.63',
                'Porcentaje de población nacida en otro estado' => '12.91',
                'Porcentaje de población con discapacidad' => '3.37'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '11.84',
                'Grado Promedio de Escolaridad masculina' => '12.11',
                'Grado Promedio de Escolaridad femenina' => '11.62'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '52.15',
                'Población Económicamente Activa masculina' => '60.99',
                'Población Económicamente Activa femenina' => '39.01',
                'Población Ocupada' => '92.35',
                'Población Ocupada masculina' => '61.54',
                'Población Ocupada femenina' => '38.46',
                'Población Desocupada' => '7.65',
                'Derechohabiencia' => '71.99'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '75.21',
                'Hogares Jefatura femenina' => '24.79',
                'Ocupación por Vivienda' => '3.78',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '99.17',
                'Viviendas con Televisión' => '98.35',
                'Viviendas con Automóvil' => '71.07',
                'Viviendas con Computadora' => '49.59',
                'Viviendas con Celular' => '87.60',
                'Viviendas con Internet' => '40.50'
            ),
            'Unidades Económicas' => array(
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '60.00',
                'Segunda actividad nombre' => 'Salud',
                'Segunda actividad porcentaje' => '20.00',
                'Tercera actividad nombre' => 'Esparcimiento, Culturales, Deportivos',
                'Tercera actividad porcentaje' => '20.00',
                'Cuarta actividad nombre' => 'Información Medios Masivos',
                'Cuarta actividad porcentaje' => '0.00',
                'Quinta actividad nombre' => 'Manejo de Residuos',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase QuintasLaMerced

?>
