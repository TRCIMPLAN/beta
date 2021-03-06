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
 * Clase VillasUniversidadOriente
 */
class VillasUniversidadOriente extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Villas Universidad Oriente';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'villas-universidad-oriente';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Villas Universidad Oriente de IBC Torreón.';
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
                'Población total' => '1095',
                'Porcentaje de población masculina' => '49.04',
                'Porcentaje de población femenina' => '50.96',
                'Porcentaje de población de 0 a 14 años' => '34.16',
                'Porcentaje de población de 15 a 64 años' => '62.83',
                'Porcentaje de población de 65 y más años' => '3.01',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '2.09',
                'Porcentaje de población nacida en otro estado' => '15.43',
                'Porcentaje de población con discapacidad' => '1.37'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '9.29',
                'Grado Promedio de Escolaridad masculina' => '9.39',
                'Grado Promedio de Escolaridad femenina' => '9.19'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '62.38',
                'Población Económicamente Activa masculina' => '67.81',
                'Población Económicamente Activa femenina' => '32.19',
                'Población Ocupada' => '91.93',
                'Población Ocupada masculina' => '67.29',
                'Población Ocupada femenina' => '32.71',
                'Población Desocupada' => '8.07',
                'Derechohabiencia' => '72.69'
            ),
            'Viviendas' => array(
                'Hogares' => '326',
                'Hogares Jefatura masculina' => '82.82',
                'Hogares Jefatura femenina' => '17.18',
                'Ocupación por Vivienda' => '3.36',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '97.85',
                'Viviendas con Automóvil' => '38.04',
                'Viviendas con Computadora' => '16.19',
                'Viviendas con Celular' => '82.52',
                'Viviendas con Internet' => '16.06'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '19',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '68.42',
                'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Segunda actividad porcentaje' => '10.53',
                'Tercera actividad nombre' => 'Salud',
                'Tercera actividad porcentaje' => '5.26',
                'Cuarta actividad nombre' => 'Manejo de Residuos',
                'Cuarta actividad porcentaje' => '5.26',
                'Quinta actividad nombre' => 'Educativos',
                'Quinta actividad porcentaje' => '5.26'
            )
        );
    } // datos

} // Clase VillasUniversidadOriente

?>
