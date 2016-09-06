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
 * Clase QuintasLaguna
 */
class QuintasLaguna extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Quintas Laguna';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'quintas-laguna';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Quintas Laguna de IBC Torreón.';
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
                'Población total' => '300',
                'Porcentaje de población masculina' => '51.33',
                'Porcentaje de población femenina' => '48.67',
                'Porcentaje de población de 0 a 14 años' => '38.67',
                'Porcentaje de población de 15 a 64 años' => '59.00',
                'Porcentaje de población de 65 y más años' => '2.33',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '1.88',
                'Porcentaje de población nacida en otro estado' => '14.00',
                'Porcentaje de población con discapacidad' => '1.90'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '10.93',
                'Grado Promedio de Escolaridad masculina' => '10.73',
                'Grado Promedio de Escolaridad femenina' => '11.13'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '62.44',
                'Población Económicamente Activa masculina' => '61.79',
                'Población Económicamente Activa femenina' => '38.21',
                'Población Ocupada' => '91.21',
                'Población Ocupada masculina' => '61.95',
                'Población Ocupada femenina' => '38.05',
                'Población Desocupada' => '8.79',
                'Derechohabiencia' => '78.67'
            ),
            'Viviendas' => array(
                'Hogares' => '77',
                'Hogares Jefatura masculina' => '85.71',
                'Hogares Jefatura femenina' => '14.29',
                'Ocupación por Vivienda' => '3.90',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '98.70',
                'Viviendas con Automóvil' => '72.73',
                'Viviendas con Computadora' => '40.26',
                'Viviendas con Celular' => '87.01',
                'Viviendas con Internet' => '23.38'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '2',
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

} // Clase QuintasLaguna

?>
