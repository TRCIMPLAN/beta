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
 * Clase LaFe
 */
class LaFe extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'La Fe';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'la-fe';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia La Fe de IBC Torreón.';
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
                'Población total' => '566',
                'Porcentaje de población masculina' => '49.28',
                'Porcentaje de población femenina' => '50.72',
                'Porcentaje de población de 0 a 14 años' => '23.68',
                'Porcentaje de población de 15 a 64 años' => '65.59',
                'Porcentaje de población de 65 y más años' => '10.73',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '2.77',
                'Porcentaje de población nacida en otro estado' => '16.41',
                'Porcentaje de población con discapacidad' => '13.49'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '8.12',
                'Grado Promedio de Escolaridad masculina' => '8.44',
                'Grado Promedio de Escolaridad femenina' => '7.82'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '47.02',
                'Población Económicamente Activa masculina' => '68.66',
                'Población Económicamente Activa femenina' => '31.34',
                'Población Ocupada' => '88.58',
                'Población Ocupada masculina' => '65.07',
                'Población Ocupada femenina' => '34.93',
                'Población Desocupada' => '11.42',
                'Derechohabiencia' => '72.99'
            ),
            'Viviendas' => array(
                'Hogares' => '166',
                'Hogares Jefatura masculina' => '70.78',
                'Hogares Jefatura femenina' => '29.22',
                'Ocupación por Vivienda' => '3.41',
                'Viviendas con Electricidad' => '99.43',
                'Viviendas con Agua' => '95.80',
                'Viviendas con Drenaje' => '98.82',
                'Viviendas con Televisión' => '96.39',
                'Viviendas con Automóvil' => '15.15',
                'Viviendas con Computadora' => '13.17',
                'Viviendas con Celular' => '58.37',
                'Viviendas con Internet' => '6.44'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '5',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '60.00',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '20.00',
                'Tercera actividad nombre' => 'Comercio Mayoreo',
                'Tercera actividad porcentaje' => '20.00',
                'Cuarta actividad nombre' => 'Salud',
                'Cuarta actividad porcentaje' => '0.00',
                'Quinta actividad nombre' => 'Información Medios Masivos',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase LaFe

?>
