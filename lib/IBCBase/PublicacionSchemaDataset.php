<?php
/**
 * Plataforma de Conocimiento - PublicacionSchemaDataset
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
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
 * @package PlataformaDeConocimiento
 */

namespace IBCBase;

/**
 * Clase PublicacionSchemaDataset
 */
abstract class PublicacionSchemaDataset extends \Base\Publicacion {

    // public $sitio_url;
    // public $fecha;
    // public $autor;
    // public $aparece_en_pagina_inicial;
    // public $para_compartir;
    // public $imagen;
    // public $imagen_previa;
    // public $imagen_id;
    // public $icono;
    // public $region_nivel;
    // public $estado;
    // public $poner_imagen_en_contenido;
    // public $include_extra_directorio;
    // public $nombre;
    // public $nombre_menu;
    // public $directorio;
    // public $archivo;
    // public $descripcion;
    // public $claves;
    // public $encabezado;
    // public $encabezado_color;
    // public $url;
    // public $url_etiqueta;
    // public $en_raiz;
    // public $en_otro;
    // public $archivo_url;
    // public $archivo_target;
    // public $boton_url;
    // public $boton_target;
    // public $contenido_archivo_html;
    // public $contenido_archivo_markdown;
    // public $categorias;
    // public $fuentes;
    // public $regiones;
    // public $imprenta_titulo;
    // protected $contenido;
    // protected $javascript;
    // protected $redifusion;
    // protected $validado;
    const LENGUETAS_ID = 'lenguetasIBC';

    abstract public function datos();

    /**
     * Validar
     */
    public function validar() {
        // Si ya fue validado, no se hace nada
        if ($this->validado) {
            return;
        }
        // El contenido es estructurado en un esquema
        $schema                = new \Base\SchemaDataset();
        $schema->is_article    = true;
        $schema->big_heading   = true;
        $schema->name          = $this->nombre;
        $schema->description   = $this->descripcion;
        $schema->image         = $this->imagen;
        $schema->image_show    = false;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido       = $schema;
        // Ejecutar método en el padre
        parent::validar();
    } // validar

    /**
     * Lengüeta Demografía
     *
     * @param  array  Datos
     * @return string Código HTML
     */
    protected function lengueta_demografia($datos) {
        $lenguetas_id = self::LENGUETAS_ID;
        $this->javascript[] = <<<CONTENIDO
$('#$lenguetas_id a[href="#demografia"]').on('shown.bs.tab', function(e){
    if (typeof vargraficaPoblacionMasculinaFemenina === 'undefined') {
        vargraficaPoblacionMasculinaFemenina = Morris.Donut({
            element: 'graficaPoblacionMasculinaFemenina',
            formatter: function(y){return y + ' %'},
            data: [
                {label: "Porcentaje de población masculina", value: "{$datos['Porcentaje de población masculina']}"},
                {label: "Porcentaje de población femenina", value: "{$datos['Porcentaje de población femenina']}"}
            ]
        });
    }
});
CONTENIDO;
        return <<<CONTENIDO
            <h3>Población total {$datos['Población total']}</h3>
            <div id="graficaPoblacionMasculinaFemenina" class="grafica"></div>
CONTENIDO;
    } // lengueta_demografia

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Definir
        $lenguetas = new \Base\Lenguetas(self::LENGUETAS_ID);
        foreach ($this->datos() as $eje => $eje_datos) {
            switch ($eje) {
                case 'Demografía':
                    $lenguetas->agregar(\Base\Funciones::caracteres_para_web($eje), $eje, $this->lengueta_demografia($eje_datos));
                    break;
                default:
                    $a = array();
                    foreach ($eje_datos as $etiqueta => $dato) {
                        $a[] = "<p>$etiqueta = $dato</p>";
                    }
                    $lenguetas->agregar(\Base\Funciones::caracteres_para_web($eje), $eje, implode("\n", $a));
            }
        }
        $this->contenido->extra = $lenguetas->html();
        $this->javascript[]     = $lenguetas->javascript();
        // Entregar
        return parent::html();
    } // html

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Definir
        $this->redifusion = "Debe haber algo aquí";
        // Entregar
        return parent::redifusion_html();
    } // redifusion_html

} // Clase Disenador

?>
