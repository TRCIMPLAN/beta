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
 * Clase RinconSanJose
 */
class RinconSanJose extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Rincon San Jose';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'rincon-san-jose';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Rincon San Jose de IBC Torreón.';
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
                'Población total' => '122',
                'Porcentaje de población masculina' => '43.44',
                'Porcentaje de población femenina' => '56.56',
                'Porcentaje de población de 0 a 14 años' => '32.79',
                'Porcentaje de población de 15 a 64 años' => '63.93',
                'Porcentaje de población de 65 y más años' => '0.82',
                'Porcentaje de población no especificada' => '2.46',
                'Fecundidad promedio' => '1.36',
                'Porcentaje de población nacida en otro estado' => '20.72',
                'Porcentaje de población con discapacidad' => '0.21'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '14.47',
                'Grado Promedio de Escolaridad masculina' => '14.73',
                'Grado Promedio de Escolaridad femenina' => '14.29'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '69.88',
                'Población Económicamente Activa masculina' => '51.72',
                'Población Económicamente Activa femenina' => '48.28',
                'Población Ocupada' => '96.43',
                'Población Ocupada masculina' => '50.00',
                'Población Ocupada femenina' => '50.00',
                'Población Desocupada' => '3.57',
                'Derechohabiencia' => '86.07'
            ),
            'Viviendas' => array(
                'Hogares' => '39',
                'Hogares Jefatura masculina' => '69.23',
                'Hogares Jefatura femenina' => '30.77',
                'Ocupación por Vivienda' => '3.13',
                'Viviendas con Electricidad' => '97.44',
                'Viviendas con Agua' => '97.44',
                'Viviendas con Drenaje' => '97.44',
                'Viviendas con Televisión' => '97.44',
                'Viviendas con Automóvil' => '84.08',
                'Viviendas con Computadora' => '80.53',
                'Viviendas con Celular' => '94.87',
                'Viviendas con Internet' => '61.54'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '3',
                'Primer actividad nombre' => 'Inmobiliarios',
                'Primer actividad porcentaje' => '66.67',
                'Segunda actividad nombre' => 'Comercio Menudeo',
                'Segunda actividad porcentaje' => '33.33',
                'Tercera actividad nombre' => 'Salud',
                'Tercera actividad porcentaje' => '0.00',
                'Cuarta actividad nombre' => 'Información Medios Masivos',
                'Cuarta actividad porcentaje' => '0.00',
                'Quinta actividad nombre' => 'Manejo de Residuos',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase RinconSanJose

?>
