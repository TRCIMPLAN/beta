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
 * Clase ResidencialLasVillas4aEtapa
 */
class ResidencialLasVillas4aEtapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Residencial Las Villas 4A. Etapa';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'residencial-las-villas-4a-etapa';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Residencial Las Villas 4A. Etapa de IBC Torreón.';
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
                'Población total' => '194',
                'Porcentaje de población masculina' => '46.39',
                'Porcentaje de población femenina' => '53.61',
                'Porcentaje de población de 0 a 14 años' => '35.05',
                'Porcentaje de población de 15 a 64 años' => '56.70',
                'Porcentaje de población de 65 y más años' => '3.61',
                'Porcentaje de población no especificada' => '4.64',
                'Fecundidad promedio' => '1.65',
                'Porcentaje de población nacida en otro estado' => '20.62',
                'Porcentaje de población con discapacidad' => '0.71'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '14.89',
                'Grado Promedio de Escolaridad masculina' => '15.34',
                'Grado Promedio de Escolaridad femenina' => '14.53'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '50.00',
                'Población Económicamente Activa masculina' => '73.33',
                'Población Económicamente Activa femenina' => '26.67',
                'Población Ocupada' => '98.31',
                'Población Ocupada masculina' => '74.58',
                'Población Ocupada femenina' => '25.42',
                'Población Desocupada' => '1.69',
                'Derechohabiencia' => '81.96'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '86.36',
                'Hogares Jefatura femenina' => '13.64',
                'Ocupación por Vivienda' => '4.41',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '100.00',
                'Viviendas con Computadora' => '95.45',
                'Viviendas con Celular' => '97.73',
                'Viviendas con Internet' => '95.45'
            ),
            'Unidades Económicas' => array(
        );
    } // datos

} // Clase ResidencialLasVillas4aEtapa

?>
