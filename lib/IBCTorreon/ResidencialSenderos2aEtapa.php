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
 * Clase ResidencialSenderos2aEtapa
 */
class ResidencialSenderos2aEtapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Residencial Senderos 2A. Etapa';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'residencial-senderos-2a-etapa';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Residencial Senderos 2A. Etapa de IBC Torreón.';
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
                'Población total' => '711',
                'Porcentaje de población masculina' => '48.80',
                'Porcentaje de población femenina' => '51.20',
                'Porcentaje de población de 0 a 14 años' => '27.22',
                'Porcentaje de población de 15 a 64 años' => '59.77',
                'Porcentaje de población de 65 y más años' => '4.55',
                'Porcentaje de población no especificada' => '8.46',
                'Fecundidad promedio' => '1.29',
                'Porcentaje de población nacida en otro estado' => '29.59',
                'Porcentaje de población con discapacidad' => '0.36'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '15.69',
                'Grado Promedio de Escolaridad masculina' => '16.08',
                'Grado Promedio de Escolaridad femenina' => '15.33'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '66.67',
                'Población Económicamente Activa masculina' => '60.93',
                'Población Económicamente Activa femenina' => '39.07',
                'Población Ocupada' => '98.32',
                'Población Ocupada masculina' => '60.61',
                'Población Ocupada femenina' => '39.39',
                'Población Desocupada' => '1.68',
                'Derechohabiencia' => '73.42'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '82.51',
                'Hogares Jefatura femenina' => '17.49',
                'Ocupación por Vivienda' => '3.50',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '99.51',
                'Viviendas con Televisión' => '99.51',
                'Viviendas con Automóvil' => '99.01',
                'Viviendas con Computadora' => '84.93',
                'Viviendas con Celular' => '98.52',
                'Viviendas con Internet' => '74.87'
            ),
            'Unidades Económicas' => array(
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '40.00',
                'Segunda actividad nombre' => 'Construcción',
                'Segunda actividad porcentaje' => '20.00',
                'Tercera actividad nombre' => 'Comercio Mayoreo',
                'Tercera actividad porcentaje' => '20.00',
                'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Cuarta actividad porcentaje' => '20.00',
                'Quinta actividad nombre' => 'Salud',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase ResidencialSenderos2aEtapa

?>
