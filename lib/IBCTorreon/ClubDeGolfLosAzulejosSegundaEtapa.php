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
 * Clase ClubDeGolfLosAzulejosSegundaEtapa
 */
class ClubDeGolfLosAzulejosSegundaEtapa extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Club De Golf Los Azulejos Segunda Etapa';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-09-02 12:55:35';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'club-de-golf-los-azulejos-segunda-etapa';
        $this->imagen          = '../imagenes/imagen.jpg';
        $this->imagen_previa   = '../imagenes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Club De Golf Los Azulejos Segunda Etapa de IBC Torreón.';
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
                'Población total' => '34',
                'Porcentaje de población masculina' => '47.06',
                'Porcentaje de población femenina' => '52.94',
                'Porcentaje de población de 0 a 14 años' => '17.65',
                'Porcentaje de población de 15 a 64 años' => '79.41',
                'Porcentaje de población de 65 y más años' => '2.94',
                'Porcentaje de población no especificada' => '0.00',
                'Fecundidad promedio' => '1.69',
                'Porcentaje de población nacida en otro estado' => '11.25',
                'Porcentaje de población con discapacidad' => '0.00'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '6.93',
                'Grado Promedio de Escolaridad masculina' => '6.50',
                'Grado Promedio de Escolaridad femenina' => '7.36'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '35.48',
                'Población Económicamente Activa masculina' => '90.91',
                'Población Económicamente Activa femenina' => '9.09',
                'Población Ocupada' => '100.00',
                'Población Ocupada masculina' => '90.91',
                'Población Ocupada femenina' => '9.09',
                'Población Desocupada' => '0.00',
                'Derechohabiencia' => '58.82'
            ),
            'Viviendas' => array(
                'Hogares' => '8',
                'Hogares Jefatura masculina' => '100.00',
                'Hogares Jefatura femenina' => '0.00',
                'Ocupación por Vivienda' => '4.25',
                'Viviendas con Electricidad' => '100.00',
                'Viviendas con Agua' => '100.00',
                'Viviendas con Drenaje' => '100.00',
                'Viviendas con Televisión' => '100.00',
                'Viviendas con Automóvil' => '52.46',
                'Viviendas con Computadora' => '0.00',
                'Viviendas con Celular' => '68.20',
                'Viviendas con Internet' => '0.00'
            ),
            'Unidades Económicas' => array(
                'Total Actividades Económicas' => '3',
                'Primer actividad nombre' => 'Comercio Menudeo',
                'Primer actividad porcentaje' => '66.67',
                'Segunda actividad nombre' => 'Comercio Mayoreo',
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

} // Clase ClubDeGolfLosAzulejosSegundaEtapa

?>
