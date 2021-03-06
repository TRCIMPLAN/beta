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
 * Clase Jacarandas
 */
class Jacarandas extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Jacarandas';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'jacarandas';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Jacarandas de IBC Torreón.';
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
                'Población total' => '1756',
                'Porcentaje de población masculina' => '48.41',
                'Porcentaje de población femenina' => '51.59',
                'Porcentaje de población de 0 a 14 años' => '21.01',
                'Porcentaje de población de 15 a 64 años' => '64.52',
                'Porcentaje de población de 65 y más años' => '8.66',
                'Porcentaje de población no especificada' => '5.81',
                'Fecundidad promedio' => '2.31',
                'Porcentaje de población nacida en otro estado' => '11.90',
                'Porcentaje de población con discapacidad' => '5.13'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '10.14',
                'Grado Promedio de Escolaridad masculina' => '10.19',
                'Grado Promedio de Escolaridad femenina' => '10.10'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '51.35',
                'Población Económicamente Activa masculina' => '59.80',
                'Población Económicamente Activa femenina' => '40.20',
                'Población Ocupada' => '87.71',
                'Población Ocupada masculina' => '58.95',
                'Población Ocupada femenina' => '41.05',
                'Población Desocupada' => '12.29',
                'Derechohabiencia' => '77.96'
            ),
            'Viviendas' => array(
                'Hogares' => '480',
                'Hogares Jefatura masculina' => '47.50',
                'Hogares Jefatura femenina' => '52.50',
                'Ocupación por Vivienda' => '3.66',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '99.58',
                'Viviendas con Drenaje' => '99.38',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '57.50',
                'Viviendas con Computadora' => '40.62',
                'Viviendas con Celular' => '71.67',
                'Viviendas con Internet' => '30.09'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '79',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '56.96',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '12.66',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '12.66',
                'Cuarta actividad nombre' => 'Manejo de Residuos',
                'Cuarta actividad porcentaje' => '5.06',
                'Quinta actividad nombre' => 'Industria Manufacturera',
                'Quinta actividad porcentaje' => '3.80'
            )
        );
    } // datos

} // Clase Jacarandas

?>
