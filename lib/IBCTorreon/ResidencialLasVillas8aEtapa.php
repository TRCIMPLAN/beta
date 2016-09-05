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
 * Clase ResidencialLasVillas8aEtapa
 */
class ResidencialLasVillas8aEtapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Residencial Las Villas 8A. Etapa';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'residencial-las-villas-8a-etapa';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Residencial Las Villas 8A. Etapa de IBC Torreón.';
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
                'Población total' => '55',
                'Porcentaje de población masculina' => '45.45',
                'Porcentaje de población femenina' => '54.55',
                'Porcentaje de población de 0 a 14 años' => '43.64',
                'Porcentaje de población de 15 a 64 años' => '54.55',
                'Porcentaje de población de 65 y más años' => '1.82',
                'Porcentaje de población no especificada' => '-0.01',
                'Fecundidad promedio' => '1.50',
                'Porcentaje de población nacida en otro estado' => '32.73',
                'Porcentaje de población con discapacidad' => '0.00'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '14.87',
                'Grado Promedio de Escolaridad masculina' => '15.57',
                'Grado Promedio de Escolaridad femenina' => '14.29'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '44.74',
                'Población Económicamente Activa masculina' => '76.47',
                'Población Económicamente Activa femenina' => '23.53',
                'Población Ocupada' => '93.77',
                'Población Ocupada masculina' => '75.00',
                'Población Ocupada femenina' => '25.00',
                'Población Desocupada' => '6.23',
                'Derechohabiencia' => '83.64'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '100.00',
                'Hogares Jefatura femenina' => '0.00',
                'Ocupación por Vivienda' => '3.93',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '100.00',
                'Viviendas con Computadora' => '100.00',
                'Viviendas con Celular' => '100.00',
                'Viviendas con Internet' => '100.00'
            )
        );
    } // datos

} // Clase ResidencialLasVillas8aEtapa

?>
