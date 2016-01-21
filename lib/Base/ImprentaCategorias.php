<?php
/**
 * Plataforma de Conocimiento - Imprenta Categorías
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

namespace Base;

/**
 * Clase ImprentaCategorias
 */
class ImprentaCategorias extends Imprenta {

    const CATEGORIAS_DIR = 'categorias'; // Nombre del directorio que se creará en la raiz para depositar los archivos HTML
    public $imprentas;                   // Arreglo con rutas a las clases de ImprentaPublicaciones
    protected $recolector_categorias;    // Instancia de RecolectorCategorias
    protected $categorias_contador = 0;  // Entero, cantidad de archivos HTML de categorías creados

    /**
     * Constructor
     */
    public function __construct() {
        $this->recolector_categorias = new RecolectorCategorias();
    } // constructor

    /**
     * Imprimir categorías
     */
    protected function imprimir_categorias() {
        // Iniciar la plantilla
        $plantilla                = new Plantilla();
        $plantilla->navegacion    = new Navegacion();
        $plantilla->mapa_inferior = new MapaInferior();
        $plantilla->directorio    = self::CATEGORIAS_DIR;
    //  $plantilla->navegacion->opcion_activa = '';
        // Crear directorio
        $this->crear_directorio($plantilla->directorio);
        // Bucle por todas las categorias
        foreach ($this->recolector_categorias->obtener_categorias() as $categoria) {
            // Filtrar
            $this->recolector_categorias->filtrar_publicaciones_de_categoria($categoria);
            // Iniciar Índice
            $concentrador              = new PaginasIndice($this->recolector_categorias);
            $concentrador->titulo      = $categoria;
            $concentrador->descripcion = "Publicaciones con esta categoría.";
            $concentrador->en_raiz     = false;
            $concentrador->en_otro     = true;
            // Pasar a la plantilla estos valores
            $plantilla->titulo         = $concentrador->titulo;
            $plantilla->descripcion    = $concentrador->descripcion;
            $plantilla->claves         = "Categoria, $categoria";
            $plantilla->archivo_ruta   = sprintf('%s/%s.html', $this->caracteres_para_web($plantilla->directorio), $this->caracteres_para_web($categoria));
            // Pasar a la plantilla el HTML y Javascript del concentrador
            $plantilla->contenido      = $concentrador->html();
            $plantilla->javascript     = $concentrador->javascript();
            // Crear archivo
            $this->crear_archivo($plantilla->archivo_ruta, $plantilla->html());
            $this->categorias_contador++;
        }
    } // imprimir_categorias

    /**
     * Imprimir index.html
     */
    protected function imprimir_index() {
        // Iniciar la plantilla
        $plantilla                = new Plantilla();
        $plantilla->navegacion    = new Navegacion();
        $plantilla->mapa_inferior = new MapaInferior();
    //  $plantilla->navegacion->opcion_activa = '';
        $plantilla->titulo        = "Categorías";
        $plantilla->descripcion   = "Todas las categorías";
        $plantilla->claves        = "Categorias";
        $plantilla->directorio    = self::CATEGORIAS_DIR;
        $plantilla->archivo_ruta  = sprintf('%s/index.html', $this->caracteres_para_web($plantilla->directorio));
        // Bucle por todas las categorias
        $vinculos = array();
        foreach ($this->recolector_categorias->obtener_categorias() as $categoria) {
            $this->recolector_categorias->filtrar_publicaciones_de_categoria($categoria);
            $etiqueta            = sprintf('%s (%d)', $categoria, $this->recolector_categorias->obtener_cantidad_de_publicaciones());
            $vinculos[$etiqueta] = sprintf('%s.html', $this->caracteres_para_web($categoria));
        }
        // Acumular el HTML
        $a   = array();
        $a[] = '      <div class="encabezado">';
        $a[] = sprintf('        <span><h1>%s</h1></span>', $plantilla->titulo);
        $a[] = sprintf('        <div class="encabezado-descripcion">%s</div>', $plantilla->descripcion);
        $a[] = '      </div>';
        $a[] = '      <ul>';
        foreach ($vinculos as $etiqueta => $url) {
            $a[] = sprintf('        <li><a href="%s">%s</a></li>', $url, $etiqueta);
        }
        $a[] = '      </ul>';
        // Definir contenido
        $plantilla->contenido = implode("\n", $a);
        // Crear archivo
        $this->crear_archivo($plantilla->archivo_ruta, $plantilla->html());
    } // imprimir_index

    /**
     * Imprimir
     */
    public function imprimir() {
        echo "ImprentaCategorias:    ";
        $this->recolector_categorias->agregar_publicaciones_de_imprentas($this->imprentas);
        $this->imprimir_categorias();
        $this->imprimir_index();
        // Mensaje
        echo sprintf("  fueron %d en %s con índice.\n", $this->categorias_contador, self::CATEGORIAS_DIR);
    } // imprimir

} // Clase ImprentaCategorias

?>
