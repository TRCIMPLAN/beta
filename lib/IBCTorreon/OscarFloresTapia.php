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
 * Clase OscarFloresTapia
 */
class OscarFloresTapia extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Oscar Flores Tapia';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'oscar-flores-tapia';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Oscar Flores Tapia de IBC Torreón.';
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
                'Población total' => '522',
                'Porcentaje de población masculina' => '47.89',
                'Porcentaje de población femenina' => '52.11',
                'Porcentaje de población de 0 a 14 años' => '25.32',
                'Porcentaje de población de 15 a 64 años' => '68.32',
                'Porcentaje de población de 65 y más años' => '6.12',
                'Porcentaje de población no especificada' => '0.24',
                'Fecundidad promedio' => '2.35',
                'Porcentaje de población nacida en otro estado' => '21.89',
                'Porcentaje de población con discapacidad' => '10.58'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '10.43',
                'Grado Promedio de Escolaridad masculina' => '10.56',
                'Grado Promedio de Escolaridad femenina' => '10.34'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '56.73',
                'Población Económicamente Activa masculina' => '57.63',
                'Población Económicamente Activa femenina' => '42.37',
                'Población Ocupada' => '91.31',
                'Población Ocupada masculina' => '56.68',
                'Población Ocupada femenina' => '43.32',
                'Población Desocupada' => '8.69',
                'Derechohabiencia' => '75.67'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '70.75',
                'Hogares Jefatura femenina' => '29.25',
                'Ocupación por Vivienda' => '3.55',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '99.32',
                'Viviendas con Drenaje' => '98.64',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '63.55',
                'Viviendas con Computadora' => '39.96',
                'Viviendas con Celular' => '83.67',
                'Viviendas con Internet' => '19.61'
            ),
            'Unidades Económicas' => array(
                'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Primer actividad porcentaje' => '44.83',
                'Segunda actividad nombre' => 'Comercio Menudeo',
                'Segunda actividad porcentaje' => '27.59',
                'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Tercera actividad porcentaje' => '13.79',
                'Cuarta actividad nombre' => 'Industria Manufacturera',
                'Cuarta actividad porcentaje' => '10.34',
                'Quinta actividad nombre' => 'Inmobiliarios',
                'Quinta actividad porcentaje' => '3.45'
            )
        );
    } // datos

} // Clase OscarFloresTapia

?>
