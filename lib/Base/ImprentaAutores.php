<?php
/**
 * Plataforma de Conocimiento - Imprenta Autores
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
 * Clase ImprentaAutores
 */
class ImprentaAutores extends Imprenta {

    const AUTORES_DIR = 'autores';   // Nombre del directorio que se creará en la raiz para depositar los archivos HTML
    public $imprentas;               // Arreglo con rutas a las clases de ImprentaPublicaciones
    protected $recolector_autores;   // Instancia de RecolectorAutores
    protected $autores_contador = 0; // Entero, cantidad de archivos HTML de autores creados

    /**
     * Constructor
     */
    public function __construct() {
        $this->recolector_autores = new RecolectorAutores();
    } // constructor

    /**
     * Imprimir autores
     */
    protected function imprimir_autores() {
        // Iniciar la plantilla
        $plantilla                = new Plantilla();
        $plantilla->navegacion    = new Navegacion();
        $plantilla->mapa_inferior = new MapaInferior();
        $plantilla->directorio    = self::AUTORES_DIR;
    //  $plantilla->navegacion->opcion_activa = '';
        // Crear directorio
        $this->crear_directorio($plantilla->directorio);
        // Bucle por todas los autores
        foreach ($this->recolector_autores->obtener_autores() as $autor) {
            // Filtrar
            $this->recolector_autores->filtrar_publicaciones_de_autor($autor);
            // Iniciar Índice
            $concentrador              = new PaginasIndice($this->recolector_autores);
            $concentrador->titulo      = $autor;
            $concentrador->descripcion = "Publicaciones del autor.";
            $concentrador->en_raiz     = false;
            $concentrador->en_otro     = true;
            // Pasar a la plantilla estos valores
            $plantilla->titulo         = $concentrador->titulo;
            $plantilla->descripcion    = $concentrador->descripcion;
            $plantilla->claves         = "Autor, $autor";
            $plantilla->archivo_ruta   = sprintf('%s/%s.html', $this->caracteres_para_web($plantilla->directorio), $this->caracteres_para_web($autor));
            // Pasar a la plantilla el HTML y Javascript del concentrador
            $plantilla->contenido      = $concentrador->html();
            $plantilla->javascript     = $concentrador->javascript();
            // Crear archivo
            $this->crear_archivo($plantilla->archivo_ruta, $plantilla->html());
            $this->autores_contador++;
        }
    } // imprimir_autores

    /**
     * Imprimir index.html
     */
    protected function imprimir_index() {
        // Iniciar la plantilla
        $plantilla                = new Plantilla();
        $plantilla->navegacion    = new Navegacion();
        $plantilla->mapa_inferior = new MapaInferior();
    //  $plantilla->navegacion->opcion_activa = '';
        $plantilla->titulo        = "Autores";
        $plantilla->descripcion   = "Todas los autores";
        $plantilla->claves        = "Autores";
        $plantilla->directorio    = self::AUTORES_DIR;
        $plantilla->archivo_ruta  = sprintf('%s/index.html', $this->caracteres_para_web($plantilla->directorio));
        // Bucle por todos los autores
        $vinculos = array();
        foreach ($this->recolector_autores->obtener_autores() as $autor) {
            $this->recolector_autores->filtrar_publicaciones_de_autor($autor);
            $etiqueta            = sprintf('%s (%d)', $autor, $this->recolector_autores->obtener_cantidad_de_publicaciones());
            $vinculos[$etiqueta] = sprintf('%s.html', $this->caracteres_para_web($autor));
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
        echo "ImprentaAutores:       ";
        $this->recolector_autores->agregar_publicaciones_de_imprentas($this->imprentas);
        $this->imprimir_autores();
        $this->imprimir_index();
        // Mensaje
        echo sprintf("  fueron %d en %s con índice.\n", $this->autores_contador, self::AUTORES_DIR);
    } // imprimir

} // Clase ImprentaAutores

?>
