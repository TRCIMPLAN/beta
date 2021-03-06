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
 * Clase RinconDeLasTrojes
 */
class RinconDeLasTrojes extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Rincon De Las Trojes';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'rincon-de-las-trojes';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Rincon De Las Trojes de IBC Torreón.';
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
                'Población total' => '54',
                'Porcentaje de población masculina' => '42.59',
                'Porcentaje de población femenina' => '57.41',
                'Porcentaje de población de 0 a 14 años' => '31.48',
                'Porcentaje de población de 15 a 64 años' => '68.52',
                'Porcentaje de población de 65 y más años' => '0.00',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '1.57',
                'Porcentaje de población nacida en otro estado' => '20.37',
                'Porcentaje de población con discapacidad' => '10.17'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '15.40',
                'Grado Promedio de Escolaridad masculina' => '15.88',
                'Grado Promedio de Escolaridad femenina' => '14.88'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '57.14',
                'Población Económicamente Activa masculina' => '54.17',
                'Población Económicamente Activa femenina' => '45.83',
                'Población Ocupada' => '100.00',
                'Población Ocupada masculina' => '54.17',
                'Población Ocupada femenina' => '45.83',
                'Población Desocupada' => '0.00',
                'Derechohabiencia' => '98.15'
            ),
            'Viviendas' => array(
                'Hogares' => '15',
                'Hogares Jefatura masculina' => '80.00',
                'Hogares Jefatura femenina' => '20.00',
                'Ocupación por Vivienda' => '3.60',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '100.00',
                'Viviendas con Computadora' => '86.67',
                'Viviendas con Celular' => '100.00',
                'Viviendas con Internet' => '47.06'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '10',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '30.00',
                'Segunda actividad nombre' => 'Comercio Mayoreo',
                'Segunda actividad porcentaje' => '20.00',
                'Tercera actividad nombre' => 'Industria Manufacturera',
                'Tercera actividad porcentaje' => '20.00',
                'Cuarta actividad nombre' => 'Manejo de Residuos',
                'Cuarta actividad porcentaje' => '10.00',
                'Quinta actividad nombre' => 'Esparcimiento, Culturales, Deportivos',
                'Quinta actividad porcentaje' => '10.00'
            )
        );
    } // datos

} // Clase RinconDeLasTrojes

?>
