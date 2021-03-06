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
 * Clase LaHaciendaOriente
 */
class LaHaciendaOriente extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'La Hacienda Oriente';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'la-hacienda-oriente';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia La Hacienda Oriente de IBC Torreón.';
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
                'Población total' => '278',
                'Porcentaje de población masculina' => '47.12',
                'Porcentaje de población femenina' => '52.88',
                'Porcentaje de población de 0 a 14 años' => '20.33',
                'Porcentaje de población de 15 a 64 años' => '74.59',
                'Porcentaje de población de 65 y más años' => '5.07',
                'Porcentaje de población no especificada' => '0.01',
                'Fecundidad promedio' => '1.63',
                'Porcentaje de población nacida en otro estado' => '21.72',
                'Porcentaje de población con discapacidad' => '2.52'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '14.65',
                'Grado Promedio de Escolaridad masculina' => '15.06',
                'Grado Promedio de Escolaridad femenina' => '14.30'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '55.41',
                'Población Económicamente Activa masculina' => '52.42',
                'Población Económicamente Activa femenina' => '47.58',
                'Población Ocupada' => '95.07',
                'Población Ocupada masculina' => '52.52',
                'Población Ocupada femenina' => '47.48',
                'Población Desocupada' => '4.93',
                'Derechohabiencia' => '86.50'
            ),
            'Viviendas' => array(
                'Hogares' => '80',
                'Hogares Jefatura masculina' => '82.44',
                'Hogares Jefatura femenina' => '17.56',
                'Ocupación por Vivienda' => '3.48',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '95.43',
                'Viviendas con Computadora' => '87.80',
                'Viviendas con Celular' => '96.77',
                'Viviendas con Internet' => '80.24'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '25',
                'Primer actividad nombre' => 'Salud',
                'Primer actividad porcentaje' => '44.00',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '16.00',
                'Tercera actividad nombre' => 'Comercio Menudeo',
                'Tercera actividad porcentaje' => '12.00',
                'Cuarta actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Cuarta actividad porcentaje' => '4.00',
                'Quinta actividad nombre' => 'Transportes, Correo, Almacenamiento',
                'Quinta actividad porcentaje' => '4.00'
            )
        );
    } // datos

} // Clase LaHaciendaOriente

?>
