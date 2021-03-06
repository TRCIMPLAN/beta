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
 * Clase FovisssteNuevaLosAngeles
 */
class FovisssteNuevaLosAngeles extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Fovissste Nueva Los Angeles';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'fovissste-nueva-los-angeles';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Fovissste Nueva Los Angeles de IBC Torreón.';
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
                'Población total' => '807',
                'Porcentaje de población masculina' => '47.71',
                'Porcentaje de población femenina' => '52.29',
                'Porcentaje de población de 0 a 14 años' => '16.45',
                'Porcentaje de población de 15 a 64 años' => '59.21',
                'Porcentaje de población de 65 y más años' => '16.78',
                'Porcentaje de población no especificada' => '7.56',
                'Fecundidad promedio' => '2.34',
                'Porcentaje de población nacida en otro estado' => '21.59',
                'Porcentaje de población con discapacidad' => '7.05'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '12.73',
                'Grado Promedio de Escolaridad masculina' => '13.36',
                'Grado Promedio de Escolaridad femenina' => '12.17'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '44.19',
                'Población Económicamente Activa masculina' => '57.71',
                'Población Económicamente Activa femenina' => '42.29',
                'Población Ocupada' => '89.24',
                'Población Ocupada masculina' => '56.73',
                'Población Ocupada femenina' => '43.27',
                'Población Desocupada' => '10.76',
                'Derechohabiencia' => '78.32'
            ),
            'Viviendas' => array(
                'Hogares' => '218',
                'Hogares Jefatura masculina' => '64.37',
                'Hogares Jefatura femenina' => '35.63',
                'Ocupación por Vivienda' => '3.70',
                'Viviendas con Electricidad' => '99.55',
                'Viviendas con Agua' => '99.08',
                'Viviendas con Drenaje' => '99.08',
                'Viviendas con Televisión' => '97.15',
                'Viviendas con Automóvil' => '71.69',
                'Viviendas con Computadora' => '64.55',
                'Viviendas con Celular' => '74.07',
                'Viviendas con Internet' => '53.07'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '22',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '22.73',
                'Segunda actividad nombre' => 'Salud',
                'Segunda actividad porcentaje' => '13.64',
                'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                'Tercera actividad porcentaje' => '13.64',
                'Cuarta actividad nombre' => 'Manejo de Residuos',
                'Cuarta actividad porcentaje' => '9.09',
                'Quinta actividad nombre' => 'Construcción',
                'Quinta actividad porcentaje' => '9.09'
            )
        );
    } // datos

} // Clase FovisssteNuevaLosAngeles

?>
