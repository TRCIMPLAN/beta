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
 * Clase ExHaciendaLaPerla2aEtapa
 */
class ExHaciendaLaPerla2aEtapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Ex-Hacienda La Perla 2A. Etapa';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-14 08:25:21';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'ex-hacienda-la-perla-2a-etapa';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Ex-Hacienda La Perla 2A. Etapa de IBC Torreón.';
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
                'Población total' => '1066',
                'Porcentaje de población masculina' => '50.00',
                'Porcentaje de población femenina' => '50.00',
                'Porcentaje de población de 0 a 14 años' => '38.37',
                'Porcentaje de población de 15 a 64 años' => '60.04',
                'Porcentaje de población de 65 y más años' => '1.31',
                'Porcentaje de población no especificada' => '0.28',
                'Fecundidad promedio' => '2.06',
                'Porcentaje de población nacida en otro estado' => '15.76',
                'Porcentaje de población con discapacidad' => '2.20'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '8.11',
                'Grado Promedio de Escolaridad masculina' => '7.88',
                'Grado Promedio de Escolaridad femenina' => '8.33'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '58.31',
                'Población Económicamente Activa masculina' => '71.26',
                'Población Económicamente Activa femenina' => '28.74',
                'Población Ocupada' => '85.89',
                'Población Ocupada masculina' => '69.89',
                'Población Ocupada femenina' => '30.11',
                'Población Desocupada' => '14.11',
                'Derechohabiencia' => '66.60'
            ),
            'Viviendas' => array(
                'Hogares' => '271',
                'Hogares Jefatura masculina' => '87.82',
                'Hogares Jefatura femenina' => '12.18',
                'Ocupación por Vivienda' => '3.93',
                'Viviendas con Electricidad' => '99.63',
                'Viviendas con Agua' => '98.89',
                'Viviendas con Drenaje' => '98.89',
                'Viviendas con Televisión' => '98.15',
                'Viviendas con Automóvil' => '33.20',
                'Viviendas con Computadora' => '23.67',
                'Viviendas con Celular' => '77.49',
                'Viviendas con Internet' => '16.15'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '21',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '57.14',
                'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                'Segunda actividad porcentaje' => '19.05',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '14.29',
                'Cuarta actividad nombre' => 'Manejo de Residuos',
                'Cuarta actividad porcentaje' => '4.76',
                'Quinta actividad nombre' => 'Salud',
                'Quinta actividad porcentaje' => '4.76'
            )
        );
    } // datos

} // Clase ExHaciendaLaPerla2aEtapa

?>
