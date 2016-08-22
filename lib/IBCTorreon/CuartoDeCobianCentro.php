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
 * Clase CuartoDeCobianCentro
 */
class CuartoDeCobianCentro extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Cuarto De Cobian Centro';
        $this->autor           = 'IMPLAN Torreón Staff';
        $this->fecha           = '2016-08-22 15:46:47';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'cuarto-de-cobian-centro';
    //  $this->imagen          = '';
    //  $this->imagen_previa   = '';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Colonia Cuarto De Cobian Centro de IBC Torreón.';
        $this->claves          = 'IMPLAN, Torreon, Desagregación';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio      = 'ibc-torreon';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu     = 'IBC > IBC Torreón';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado          = 'publicar';
        // Indicar que NO se vaya a poner la imagen en la página y en la redifusión. Por defecto es verdadero.
        $this->poner_imagen_en_contenido = false;
        // El contenido es estructurado en un esquema
        $schema                = new \Base\SchemaBlogPosting();
        $schema->name          = $this->nombre;
        $schema->description   = $this->descripcion;
        $schema->datePublished = $this->fecha;
        $schema->image         = $this->imagen;
        $schema->image_show    = $this->poner_imagen_en_contenido;
        $schema->author        = $this->autor;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido       = $schema;
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
    protected function datos() {
        return array(
            'Demografía' => array(
                'Población total' => '11,116',
                'Porcentaje de población masculina' => '45.86 %',
                'Porcentaje de población femenina' => '54.14 %',
                'Porcentaje de población de 0 a 14 años' => '17.37 %',
                'Porcentaje de población de 15 a 64 años' => '64.34 %',
                'Porcentaje de población de 65 y más años' => '15.91 %',
                'Porcentaje de población no especificada' => '2.38 %',
                'Fecundidad promedio' => '2.2100',
                'Porcentaje de población nacida en otro estado' => '19.09 %',
                'Porcentaje de población con discapacidad' => '5.97 %'
            ),
            'Educación' => array(
                'Grado Promedio de Escolaridad' => '11.2500',
                'Grado Promedio de Escolaridad masculina' => '11.5800',
                'Grado Promedio de Escolaridad femenina' => '10.9900'
            ),
            'Características Económicas' => array(
                'Población Económicamente Activa' => '51.42 %',
                'Población Económicamente Activa masculina' => '56.63 %',
                'Población Económicamente Activa femenina' => '43.37 %',
                'Población Ocupada' => '91.39 %',
                'Población Ocupada masculina' => '56.21 %',
                'Población Ocupada femenina' => '43.79 %',
                'Población Desocupada' => '8.61 %',
                'Derechohabiencia' => '72.18 %'
            ),
            'Viviendas' => array(
                'Hogares Jefatura masculina' => '62.46 %',
                'Hogares Jefatura femenina' => '37.54 %',
                'Ocupación por Vivienda' => '3.2900',
                'Viviendas con Electricidad' => '99.49 %',
                'Viviendas con Agua' => '99.22 %',
                'Viviendas con Drenaje' => '99.01 %',
                'Viviendas con Televisión' => '98.03 %',
                'Viviendas con Automóvil' => '63.02 %',
                'Viviendas con Computadora' => '46.39 %',
                'Viviendas con Celular' => '70.35 %',
                'Viviendas con Internet' => '39.01 %'
            ),
            'Unidades Económicas' => array(
                'Primer actividad' => 'AEComercioMenu 26.72%',
                'Segunda actividad' => 'AEOtros 19.83%',
                'Tercera actividad' => 'AEAlimentos 13.02%',
                'Cuarta actividad' => 'AEManufactura 9.87%',
                'Quinta actividad' => 'AEComercioMayo 7.06%'
            )
        );
    } // datos

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Definir contenido HTML
        $lenguetas = new \Base\Lenguetas();
        $lenguetas->agregar("Demografía", "Demografía", "<p>Población total = 11,116</p><p>Porcentaje de población masculina = 45.86 %</p><p>Porcentaje de población femenina = 54.14 %</p><p>Porcentaje de población de 0 a 14 años = 17.37 %</p><p>Porcentaje de población de 15 a 64 años = 64.34 %</p><p>Porcentaje de población de 65 y más años = 15.91 %</p><p>Porcentaje de población no especificada = 2.38 %</p><p>Fecundidad promedio = 2.2100</p><p>Porcentaje de población nacida en otro estado = 19.09 %</p><p>Porcentaje de población con discapacidad = 5.97 %</p>");
        $lenguetas->agregar("Educación", "Educación", "<p>Grado Promedio de Escolaridad = 11.2500</p><p>Grado Promedio de Escolaridad masculina = 11.5800</p><p>Grado Promedio de Escolaridad femenina = 10.9900</p>");
        $lenguetas->agregar("Economía", "Características Económicas", "<p>Población Económicamente Activa = 51.42 %</p><p>Población Económicamente Activa masculina = 56.63 %</p><p>Población Económicamente Activa femenina = 43.37 %</p><p>Población Ocupada = 91.39 %</p><p>Población Ocupada masculina = 56.21 %</p><p>Población Ocupada femenina = 43.79 %</p><p>Población Desocupada = 8.61 %</p><p>Derechohabiencia = 72.18 %</p>");
        $lenguetas->agregar("Viviendas", "Viviendas", "<p>Hogares Jefatura masculina = 62.46 %</p><p>Hogares Jefatura femenina = 37.54 %</p><p>Ocupación por Vivienda = 3.2900</p><p>Viviendas con Electricidad = 99.49 %</p><p>Viviendas con Agua = 99.22 %</p><p>Viviendas con Drenaje = 99.01 %</p><p>Viviendas con Televisión = 98.03 %</p><p>Viviendas con Automóvil = 63.02 %</p><p>Viviendas con Computadora = 46.39 %</p><p>Viviendas con Celular = 70.35 %</p><p>Viviendas con Internet = 39.01 %</p>");
        $lenguetas->agregar("U. Económicas", "Unidades Económicas", "<p>Primer actividad = AEComercioMenu 26.72%</p><p>Segunda actividad = AEOtros 19.83%</p><p>Tercera actividad = AEAlimentos 13.02%</p><p>Cuarta actividad = AEManufactura 9.87%</p><p>Quinta actividad = AEComercioMayo 7.06%</p>");
        $this->contenido->articleBody = $lenguetas->html();
        // Entregar resultado del padre
        return parent::html();
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        // Definir código JavaScript
        $this->javascript[] = <<<FINAL
FINAL;
        // Entregar resultado del padre
        return parent::javascript();
    } // javascript

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Definir contenido para redifusión
        $this->redifusion = <<<FINAL
FINAL;
        // Entregar resultado del padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase CuartoDeCobianCentro

?>
