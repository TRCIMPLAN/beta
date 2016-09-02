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
 * Clase JoseDeLasFuentes
 */
class JoseDeLasFuentes extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Jose De Las Fuentes';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'jose-de-las-fuentes';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Jose De Las Fuentes de IBC Torreón.';
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
                'Población total' => '13',
                'Porcentaje de población masculina' => '56.64',
                'Porcentaje de población femenina' => '43.36',
                'Porcentaje de población de 0 a 14 años' => '29.09',
                'Porcentaje de población de 15 a 64 años' => '70.07',
                'Porcentaje de población de 65 y más años' => '0.84',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '1.22',
                'Porcentaje de población nacida en otro estado' => '16.85',
                'Porcentaje de población con discapacidad' => '0.84'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '9.82',
                'Grado Promedio de Escolaridad masculina' => '10.25',
                'Grado Promedio de Escolaridad femenina' => '9.05'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '80.47',
                'Población Económicamente Activa masculina' => '77.18',
                'Población Económicamente Activa femenina' => '22.82',
                'Población Ocupada' => '99.02',
                'Población Ocupada masculina' => '77.21',
                'Población Ocupada femenina' => '22.79',
                'Población Desocupada' => '0.98',
                'Derechohabiencia' => '89.65'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '93.64',
                'Hogares Jefatura femenina' => '6.36',
                'Ocupación por Vivienda' => '2.17',
                'Viviendas con Electricidad' => '99.70',
                'Viviendas con Agua' => '99.70',
                'Viviendas con Drenaje' => '99.70',
                'Viviendas con Televisión' => '99.70',
                'Viviendas con Automóvil' => '59.95',
                'Viviendas con Computadora' => '6.67',
                'Viviendas con Celular' => '82.42',
                'Viviendas con Internet' => '2.42'
            ),
            'Unidades Económicas' => array(
                'Primer actividad nombre' => 'Transportes, Correo, Almacenamiento',
                'Primer actividad porcentaje' => '66.67',
                'Segunda actividad nombre' => 'Educativos',
                'Segunda actividad porcentaje' => '33.33',
                'Tercera actividad nombre' => 'Salud',
                'Tercera actividad porcentaje' => '0.00',
                'Cuarta actividad nombre' => 'Información Medios Masivos',
                'Cuarta actividad porcentaje' => '0.00',
                'Quinta actividad nombre' => 'Manejo de Residuos',
                'Quinta actividad porcentaje' => '0.00'
            )
        );
    } // datos

} // Clase JoseDeLasFuentes

?>
