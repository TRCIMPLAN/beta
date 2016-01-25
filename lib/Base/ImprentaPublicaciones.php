<?php
/**
 * Plataforma de Conocimiento - Imprenta Publicaciones
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
 * Clase ImprentaPublicaciones
 */
class ImprentaPublicaciones extends Imprenta {

    public $directorio;                    // Texto, nombre del directorio en raíz donde se guardará el archivo HTML
    public $publicaciones_directorio;      // Texto, nombre del directorio dentro de lib que contiene los archivos con las publicaciones
    public $encabezado;                    // Código HTML para usarse como encabezado
    public $encabezado_color;              // Texto, color de fondo del encabezado #nnnnnn
    public $encabezado_icono;              // Texto, icono Font Awesome
    public $claves;                        // Texto, palabras separadas por comas para meta tag
    public $nombre_menu;                   // Texto, opción del menú activa
    protected $titulo;                     // Texto, título de la página
    protected $descripcion;                // Texto, descripción para meta tag
    protected $archivo_ruta;               // Texto opcional, ruta al archivo HTML del concentrador
    protected $concentrador  = 'Indice';   // Texto, nombre de la clase que concentrará este conjunto de publicaciones (Indice, Galeria, Tarjetas)
    protected $recolector;                 // Instancia de Recolector
    protected $publicaciones_contador = 0; // Entero, cantidad de publicaciones producidas

    /**
     * Constructor
     */
    public function __construct() {
        $this->recolector = new Recolector();
    } // constructor

    /**
     * Validar
     */
    protected function validar() {
        // Validar publicaciones_directorio
        if (!is_string($this->publicaciones_directorio) || ($this->publicaciones_directorio == '')) {
            throw new \Exception("Falló la validación en ImprentaPublicaciones: No se ha definido el directorio de publicaciones.");
        }
        $lib_dir = sprintf('%s/%s', Recolector::LIB_DIR, $this->publicaciones_directorio);
        if (!is_dir($lib_dir)) {
            throw new \Exception("Falló la validación en ImprentaPublicaciones: No existe el directorio $lib_dir");
        }
        // Validar título
        if (!is_string($this->titulo) || ($this->titulo == '')) {
            $this->titulo = $this->publicaciones_directorio;
        }
        // Validar descripción
        if (!is_string($this->descripcion) || ($this->descripcion == '')) {
            $this->descripcion = "Índice de páginas para {$this->titulo}";
        }
        // Validar claves
        if (!is_string($this->claves) || ($this->claves == '')) {
            throw new \Exception("Falló la validación en ImprentaPublicaciones: No hay claves.");
        }
        // Validar directorio
        if (!is_string($this->directorio) || ($this->directorio == '')) {
            $this->directorio = $this->caracteres_para_web($this->publicaciones_directorio);
        }
        // Validar archivo_ruta
        if (!is_string($this->archivo_ruta) || ($this->archivo_ruta == '')) {
            $this->archivo_ruta = "{$this->directorio}/index.html";
        }
        // Validar nombre_menu
        if (!is_string($this->nombre_menu) || ($this->nombre_menu == '')) {
            $this->nombre_menu = $this->titulo;
        }
    } // validar

    /**
     * Imprimir publicaciones
     */
    protected function imprimir_publicaciones() {
        // Validar que haya publicaciones
        if ($this->recolector->obtener_cantidad_de_publicaciones() == 0) {
            throw new \Exception("Error en ImprentaPublicaciones: No hay publicaciones para crear.");
        }
        // Inciar la Plantilla
        $plantilla                = new Plantilla();
        $plantilla->navegacion    = new Navegacion();
        $plantilla->mapa_inferior = new MapaInferior();
        // Imprimir
        $c = 0;
        foreach ($this->recolector->obtener_publicaciones() as $publicacion) {
            // Al incorporar la publicación a la plantilla puede entregar falso cuando no se define el archivo de salida o no tener contenido
            if ($plantilla->incorporar_publicacion($publicacion) == true) {
                // Escribir el archivo HTML
                $this->crear_directorio($plantilla->directorio);
                $this->crear_archivo($plantilla->archivo_ruta, $plantilla->html());
                $c++;
            }
        }
        // Sumar al contador
        $this->publicaciones_contador += $c;
    } // imprimir_publicaciones

    /**
     * Imprimir index.html
     */
    protected function imprimir_index() {
        // Validar concentrador
        switch (strtolower($this->concentrador)) {
            case 'indice':
                $concentrador = new PaginasIndice($this->recolector);
                break;
            case 'galeria':
                $concentrador = new PaginasGalerias($this->recolector);
                break;
            case 'tarjetas':
                $concentrador = new PaginasTarjetas($this->recolector);
                break;
            default:
                throw new \Exception("Error en ImprentaPublicaciones: El concentrador es incorrecto.");
        }
        // Iniciar la plantilla
        $plantilla                = new Plantilla();
        $plantilla->navegacion    = new Navegacion();
        $plantilla->mapa_inferior = new MapaInferior();
        // Pasar al concentrador estos valores
        $concentrador->titulo           = $this->titulo;
        $concentrador->descripcion      = $this->descripcion;
        $concentrador->encabezado       = $this->encabezado;
        $concentrador->encabezado_color = $this->encabezado_color;
        $concentrador->encabezado_icono = $this->encabezado_icono;
        $concentrador->en_raiz          = false;
        $concentrador->en_otro          = false;
        // Pasar a la plantilla estos valores
        $plantilla->titulo                    = $this->titulo;
        $plantilla->descripcion               = $this->descripcion;
        $plantilla->claves                    = $this->claves;
        $plantilla->directorio                = $this->directorio;
        $plantilla->archivo_ruta              = $this->archivo_ruta;
        $plantilla->navegacion->opcion_activa = $this->nombre_menu;
        // Pasar a la plantilla el HTML y Javascript del concentrador
        $plantilla->contenido    = $concentrador->html();
        $plantilla->javascript[] = $concentrador->javascript();
        // Imprimir index.html
        $this->crear_directorio($plantilla->directorio);
        $this->crear_archivo($plantilla->archivo_ruta, $plantilla->html());
    } // imprimir_index

    /**
     * Imprimir
     */
    public function imprimir() {
        echo "ImprentaPublicaciones: ";
        $this->validar();
        $this->recolector->agregar_publicaciones_en($this->publicaciones_directorio, $this);
        $this->imprimir_publicaciones();
        $this->imprimir_index();
        echo sprintf("  fueron %d en %s con %s.\n", $this->publicaciones_contador, $this->publicaciones_directorio, strtolower($this->concentrador));
    } // imprimir

} // Clase ImprentaPublicaciones

?>
