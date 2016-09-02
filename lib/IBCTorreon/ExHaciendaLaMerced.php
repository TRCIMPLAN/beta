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
 * Clase ExHaciendaLaMerced
 */
class ExHaciendaLaMerced extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Ex-Hacienda La Merced';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'ex-hacienda-la-merced';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Ex-Hacienda La Merced de IBC Torreón.';
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
                'Población total' => '86',
                'Porcentaje de población masculina' => '42.90',
                'Porcentaje de población femenina' => '57.10',
                'Porcentaje de población de 0 a 14 años' => '21.22',
                'Porcentaje de población de 15 a 64 años' => '63.19',
                'Porcentaje de población de 65 y más años' => '15.58',
                'Porcentaje de población no especificada' => '0.01',
                'Fecundidad promedio' => '3.02',
                'Porcentaje de población nacida en otro estado' => '21.86',
                'Porcentaje de población con discapacidad' => '6.96'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '8.92',
                'Grado Promedio de Escolaridad masculina' => '9.82',
                'Grado Promedio de Escolaridad femenina' => '8.22'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '50.83',
                'Población Económicamente Activa masculina' => '66.15',
                'Población Económicamente Activa femenina' => '33.85',
                'Población Ocupada' => '83.52',
                'Población Ocupada masculina' => '67.14',
                'Población Ocupada femenina' => '32.86',
                'Población Desocupada' => '16.48',
                'Derechohabiencia' => '70.54'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '70.86',
                'Hogares Jefatura femenina' => '29.14',
                'Ocupación por Vivienda' => '3.44',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '52.72',
                'Viviendas con Computadora' => '48.34',
                'Viviendas con Celular' => '65.41',
                'Viviendas con Internet' => '14.94'
            ),
            'Unidades Económicas' => array(
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '54.55',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '18.18',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '9.09',
                'Cuarta actividad nombre' => 'Gubernamentales',
                'Cuarta actividad porcentaje' => '9.09',
                'Quinta actividad nombre' => 'Industria Manufacturera',
                'Quinta actividad porcentaje' => '9.09'
            )
        );
    } // datos

} // Clase ExHaciendaLaMerced

?>
