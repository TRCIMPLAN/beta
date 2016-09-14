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
 * Clase AmpliacionSanIgnacio
 */
class AmpliacionSanIgnacio extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Ampliacion San Ignacio';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'ampliacion-san-ignacio';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Ampliacion San Ignacio de IBC Torreón.';
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
                'Población total' => '242',
                'Porcentaje de población masculina' => '49.59',
                'Porcentaje de población femenina' => '50.41',
                'Porcentaje de población de 0 a 14 años' => '32.64',
                'Porcentaje de población de 15 a 64 años' => '64.88',
                'Porcentaje de población de 65 y más años' => '2.48',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '1.87',
                'Porcentaje de población nacida en otro estado' => '21.07',
                'Porcentaje de población con discapacidad' => '1.87'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '12.05',
                'Grado Promedio de Escolaridad masculina' => '12.73',
                'Grado Promedio de Escolaridad femenina' => '11.42'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '60.45',
                'Población Económicamente Activa masculina' => '60.75',
                'Población Económicamente Activa femenina' => '39.25',
                'Población Ocupada' => '81.66',
                'Población Ocupada masculina' => '63.33',
                'Población Ocupada femenina' => '36.67',
                'Población Desocupada' => '18.34',
                'Derechohabiencia' => '82.23'
            ),
            'Viviendas' => array(
                'Hogares' => '70',
                'Hogares Jefatura masculina' => '67.14',
                'Hogares Jefatura femenina' => '32.86',
                'Ocupación por Vivienda' => '3.46',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '61.43',
                'Viviendas con Computadora' => '40.00',
                'Viviendas con Celular' => '87.14',
                'Viviendas con Internet' => '24.29'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '12',
                'Primer actividad nombre' => 'Comercio Mayoreo',
                'Primer actividad porcentaje' => '33.33',
                'Segunda actividad nombre' => 'Industria Manufacturera',
                'Segunda actividad porcentaje' => '25.00',
                'Tercera actividad nombre' => 'Transportes, Correo, Almacenamiento',
                'Tercera actividad porcentaje' => '8.33',
                'Cuarta actividad nombre' => 'Manejo de Residuos',
                'Cuarta actividad porcentaje' => '8.33',
                'Quinta actividad nombre' => 'Minería',
                'Quinta actividad porcentaje' => '8.33'
            )
        );
    } // datos

} // Clase AmpliacionSanIgnacio

?>
