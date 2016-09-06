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
 * Clase DianaMariaGalindo
 */
class DianaMariaGalindo extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Diana Maria Galindo';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'diana-maria-galindo';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Diana Maria Galindo de IBC Torreón.';
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
                'Población total' => '33',
                'Porcentaje de población masculina' => '60.61',
                'Porcentaje de población femenina' => '39.39',
                'Porcentaje de población de 0 a 14 años' => '24.24',
                'Porcentaje de población de 15 a 64 años' => '75.76',
                'Porcentaje de población de 65 y más años' => '0.00',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '3.33',
                'Porcentaje de población nacida en otro estado' => '33.33',
                'Porcentaje de población con discapacidad' => '2.21'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '6.96',
                'Grado Promedio de Escolaridad masculina' => '7.82',
                'Grado Promedio de Escolaridad femenina' => '5.12'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '76.92',
                'Población Económicamente Activa masculina' => '80.00',
                'Población Económicamente Activa femenina' => '20.00',
                'Población Ocupada' => '82.81',
                'Población Ocupada masculina' => '82.35',
                'Población Ocupada femenina' => '17.65',
                'Población Desocupada' => '17.19',
                'Derechohabiencia' => '39.39'
            ),
            'Viviendas' => array(
                'Hogares' => '11',
                'Hogares Jefatura masculina' => '81.82',
                'Hogares Jefatura femenina' => '18.18',
                'Ocupación por Vivienda' => '3.00',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '90.91',
                'Viviendas con Televisión' => '81.82',
                'Viviendas con Automóvil' => '22.83',
                'Viviendas con Computadora' => '0.00',
                'Viviendas con Celular' => '54.55',
                'Viviendas con Internet' => '0.00'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '0'
            )
        );
    } // datos

} // Clase DianaMariaGalindo

?>
