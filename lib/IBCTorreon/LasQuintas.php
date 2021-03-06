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
 * Clase LasQuintas
 */
class LasQuintas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Las Quintas';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'las-quintas';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Las Quintas de IBC Torreón.';
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
                'Población total' => '535',
                'Porcentaje de población masculina' => '46.73',
                'Porcentaje de población femenina' => '53.27',
                'Porcentaje de población de 0 a 14 años' => '27.66',
                'Porcentaje de población de 15 a 64 años' => '66.73',
                'Porcentaje de población de 65 y más años' => '1.68',
                'Porcentaje de población no especificada' => '3.93',
                'Fecundidad promedio' => '1.49',
                'Porcentaje de población nacida en otro estado' => '22.15',
                'Porcentaje de población con discapacidad' => '0.99'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '14.58',
                'Grado Promedio de Escolaridad masculina' => '15.19',
                'Grado Promedio de Escolaridad femenina' => '14.06'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '52.87',
                'Población Económicamente Activa masculina' => '57.50',
                'Población Económicamente Activa femenina' => '42.50',
                'Población Ocupada' => '98.56',
                'Población Ocupada masculina' => '56.89',
                'Población Ocupada femenina' => '43.11',
                'Población Desocupada' => '1.44',
                'Derechohabiencia' => '85.79'
            ),
            'Viviendas' => array(
                'Hogares' => '124',
                'Hogares Jefatura masculina' => '83.87',
                'Hogares Jefatura femenina' => '16.13',
                'Ocupación por Vivienda' => '4.31',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '99.19',
                'Viviendas con Drenaje' => '97.58',
                'Viviendas con Televisión' => '98.39',
                'Viviendas con Automóvil' => '97.58',
                'Viviendas con Computadora' => '95.16',
                'Viviendas con Celular' => '96.77',
                'Viviendas con Internet' => '92.81'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '0'
            )
        );
    } // datos

} // Clase LasQuintas

?>
