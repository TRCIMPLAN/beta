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
 * Clase Aviacion
 */
class Aviacion extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Aviacion';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'aviacion';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Aviacion de IBC Torreón.';
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
                'Población total' => '4587',
                'Porcentaje de población masculina' => '49.88',
                'Porcentaje de población femenina' => '50.12',
                'Porcentaje de población de 0 a 14 años' => '28.38',
                'Porcentaje de población de 15 a 64 años' => '64.66',
                'Porcentaje de población de 65 y más años' => '6.44',
                'Porcentaje de población no especificada' => '0.52',
                'Fecundidad promedio' => '2.56',
                'Porcentaje de población nacida en otro estado' => '18.23',
                'Porcentaje de población con discapacidad' => '4.28'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '8.26',
                'Grado Promedio de Escolaridad masculina' => '8.19',
                'Grado Promedio de Escolaridad femenina' => '8.33'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '53.46',
                'Población Económicamente Activa masculina' => '68.28',
                'Población Económicamente Activa femenina' => '31.72',
                'Población Ocupada' => '92.01',
                'Población Ocupada masculina' => '66.76',
                'Población Ocupada femenina' => '33.24',
                'Población Desocupada' => '7.99',
                'Derechohabiencia' => '66.56'
            ),
            'Viviendas' => array(
                'Hogares' => '1082',
                'Hogares Jefatura masculina' => '77.15',
                'Hogares Jefatura femenina' => '22.85',
                'Ocupación por Vivienda' => '4.24',
                'Viviendas con Electricidad' => '99.85',
                'Viviendas con Agua' => '99.02',
                'Viviendas con Drenaje' => '99.67',
                'Viviendas con Televisión' => '97.91',
                'Viviendas con Automóvil' => '43.61',
                'Viviendas con Computadora' => '21.20',
                'Viviendas con Celular' => '67.37',
                'Viviendas con Internet' => '14.11'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '208',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '37.50',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '22.60',
                'Tercera actividad nombre' => 'Industria Manufacturera',
                'Tercera actividad porcentaje' => '14.42',
                'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Cuarta actividad porcentaje' => '10.58',
                'Quinta actividad nombre' => 'Manejo de Residuos',
                'Quinta actividad porcentaje' => '3.85'
            )
        );
    } // datos

} // Clase Aviacion

?>
