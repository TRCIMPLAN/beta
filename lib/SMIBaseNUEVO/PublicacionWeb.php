<?php
/**
 * TrcIMPLAN SMIBaseNUEVO - PublicacionWeb
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
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
 * @package TrcIMPLANSitioWeb
 */

namespace SMIBaseNUEVO;

/**
 * Clase abstracta PublicacionWeb
 */
abstract class PublicacionWeb extends \Base\Publicacion implements SalidaWeb {

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
    protected $lenguetas;                          // Instancia de LenguetasWeb
    const     LENGUETAS_ID = 'LenguetasIndicador'; // Identificador único para las lengüetas

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Iniciar el contenido que será un SchemaArticle
        $this->contenido = new \Base\SchemaArticle();
    } // constructor

    /**
     * Validar
     *
     * Puede causar excepción si falta una propiedad obligatoria. También busca definir las opcionales.
     */
    public function validar() {
        // Si ya fue validado, no se hace nada
        if ($this->validado) {
            return;
        }
        // Elaborar lengüetas
        $this->lenguetas = new LenguetasWeb(self::LENGUETAS_ID);
        $this->lenguetas->agregar('Datos', new SeccionDatosWeb($this));
    //~ $this->lenguetas->agregar('Gráfica', new SeccionGraficasWeb($this));
    //~ $this->lenguetas->agregar('Otras regiones', new SeccionOtrasRegionesWeb($this));
    } // validar

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Validar
        $this->validar();
        // Definir propiedades del contenido que es un SchemaArticle
        $this->contenido->big_heading   = TRUE;
        $this->contenido->headline      = $this->nombre;
        $this->contenido->description   = $this->descripcion;
        $this->contenido->author        = $this->autor;
        $this->contenido->datePublished = $this->fecha;
        $this->contenido->image         = $this->imagen;
        $this->contenido->image_show    = $this->poner_imagen_en_contenido;
        $this->contenido->articleBody   = $this->lenguetas->html();
        // Entregar
        return parent::html();
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        // Validar
        $this->validar();
        // Acumular Javascript de las lengüetas
        $this->javascript[] = $this->lenguetas->javascript();
        // Entregar
        return parent::javascript();
    } // javascript

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Elaborar redifusión
        $this->redifusion = "Debe haber algo aquí.";
        // Entregar
        return parent::redifusion_html();
    } // redifusion_html

    /**
     * Estructura
     *
     * @return array Arreglo de arreglos con la estructura de los datos
     */
    abstract public function estructura();

    /**
     * Datos
     *
     * @return array Arreglo de arreglos con los datos
     */
    abstract public function datos();

} // Clase abstracta PublicacionWeb

?>
