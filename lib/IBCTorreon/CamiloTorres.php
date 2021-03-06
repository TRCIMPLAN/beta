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
 * Clase CamiloTorres
 */
class CamiloTorres extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Camilo Torres';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'camilo-torres';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Camilo Torres de IBC Torreón.';
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
                'Población total' => '878',
                'Porcentaje de población masculina' => '46.94',
                'Porcentaje de población femenina' => '53.06',
                'Porcentaje de población de 0 a 14 años' => '28.89',
                'Porcentaje de población de 15 a 64 años' => '66.89',
                'Porcentaje de población de 65 y más años' => '4.21',
                'Porcentaje de población no especificada' => '0.01',
                'Fecundidad promedio' => '2.42',
                'Porcentaje de población nacida en otro estado' => '15.82',
                'Porcentaje de población con discapacidad' => '3.03'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '7.47',
                'Grado Promedio de Escolaridad masculina' => '7.62',
                'Grado Promedio de Escolaridad femenina' => '7.33'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '54.12',
                'Población Económicamente Activa masculina' => '69.99',
                'Población Económicamente Activa femenina' => '30.01',
                'Población Ocupada' => '94.94',
                'Población Ocupada masculina' => '69.35',
                'Población Ocupada femenina' => '30.65',
                'Población Desocupada' => '5.06',
                'Derechohabiencia' => '72.44'
            ),
            'Viviendas' => array(
                'Hogares' => '227',
                'Hogares Jefatura masculina' => '79.55',
                'Hogares Jefatura femenina' => '20.45',
                'Ocupación por Vivienda' => '3.87',
                'Viviendas con Electricidad' => '99.86',
                'Viviendas con Agua' => '94.44',
                'Viviendas con Drenaje' => '97.13',
                'Viviendas con Televisión' => '98.96',
                'Viviendas con Automóvil' => '20.38',
                'Viviendas con Computadora' => '2.56',
                'Viviendas con Celular' => '37.49',
                'Viviendas con Internet' => '0.07'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '21',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '66.67',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '23.81',
                'Tercera actividad nombre' => 'Gubernamentales',
                'Tercera actividad porcentaje' => '4.76',
                'Cuarta actividad nombre' => 'Educativos',
                'Cuarta actividad porcentaje' => '4.76',
                'Quinta actividad nombre' => 'Salud',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase CamiloTorres

?>
