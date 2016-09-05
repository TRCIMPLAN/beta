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
 * Clase ResidencialLasVillas1aEtapa
 */
class ResidencialLasVillas1aEtapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Residencial Las Villas 1A. Etapa';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'residencial-las-villas-1a-etapa';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Residencial Las Villas 1A. Etapa de IBC Torreón.';
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
                'Población total' => '59',
                'Porcentaje de población masculina' => '52.54',
                'Porcentaje de población femenina' => '47.46',
                'Porcentaje de población de 0 a 14 años' => '32.20',
                'Porcentaje de población de 15 a 64 años' => '62.71',
                'Porcentaje de población de 65 y más años' => '5.08',
                'Porcentaje de población no especificada' => '0.01',
                'Fecundidad promedio' => '1.67',
                'Porcentaje de población nacida en otro estado' => '23.73',
                'Porcentaje de población con discapacidad' => '0.00'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '13.80',
                'Grado Promedio de Escolaridad masculina' => '14.04',
                'Grado Promedio de Escolaridad femenina' => '13.47'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '52.17',
                'Población Económicamente Activa masculina' => '66.67',
                'Población Económicamente Activa femenina' => '33.33',
                'Población Ocupada' => '100.00',
                'Población Ocupada masculina' => '66.67',
                'Población Ocupada femenina' => '33.33',
                'Población Desocupada' => '0.00',
                'Derechohabiencia' => '84.75'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '87.50',
                'Hogares Jefatura femenina' => '12.50',
                'Ocupación por Vivienda' => '3.69',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '100.00',
                'Viviendas con Computadora' => '100.00',
                'Viviendas con Celular' => '100.00',
                'Viviendas con Internet' => '93.75'
            )
        );
    } // datos

} // Clase ResidencialLasVillas1aEtapa

?>
