<?php
/**
 * TrcIMPLAN IBCBase - ImprentaJSONs
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
 * Clase ImprentaJSONs
 */
class ImprentaJSONs extends \Base\Imprenta {

    public $directorio;               // Texto, nombre del directorio en raíz donde se guardarán los archivos
    public $publicaciones_directorio; // Texto, nombre del directorio dentro de lib que contiene los archivos con las publicaciones
    protected $archivo_ruta;          // Texto opcional, ruta al archivo index
    protected $recolector;            // Instancia de \Base\Recolector
    protected $contador = 0;          // Entero, cantidad de publicaciones producidas

    /**
     * Constructor
     */
    public function __construct() {
        $this->recolector = new \Base\Recolector();
    } // constructor

    /**
     * Validar
     */
    protected function validar() {
        // Validar publicaciones_directorio
        if (!is_string($this->publicaciones_directorio) || ($this->publicaciones_directorio == '')) {
            throw new \Exception("Falló la validación en ImprentaJSONs: No se ha definido el directorio de publicaciones.");
        }
        $lib_dir = sprintf('%s/%s', \Base\Recolector::LIB_DIR, $this->publicaciones_directorio);
        if (!is_dir($lib_dir)) {
            throw new \Exception("Falló la validación en ImprentaJSONs: No existe el directorio $lib_dir");
        }
        // Validar directorio
        if (!is_string($this->directorio) || ($this->directorio == '')) {
            $this->directorio = \Base\Funciones::caracteres_para_web($this->publicaciones_directorio);
        }
        // Validar archivo_ruta
        if (!is_string($this->archivo_ruta) || ($this->archivo_ruta == '')) {
            $this->archivo_ruta = "{$this->directorio}/{$this->directorio}.json";
        }
    } // validar

    /**
     * Elaborar contenido JSON
     *
     * @param  mixed  Instancia de Publicacion
     * @return string Texto para ser el contenido del archivo JSON
     */
    protected function json(\Base\Publicacion $publicacion) {
        // Debe tener el método datos
        if (method_exists($publicacion, 'datos')) {
            $a = array();
            // Bucle por los datos
            foreach ($publicacion->datos() as $eje => $indicadores) {
                $b = array();
                foreach ($indicadores as $indicador => $valor) {
                    $b[] = "        \"$indicador\":\"$valor\"";
                }
                if (count($b) > 0) {
                    $a[] = "    \"$eje\":{\n".implode(",\n", $b)."\n    }";
                }
            }
            if (count($a) > 0) {
                return "[{\n".implode(",\n", $a)."\n}]\n";
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    } // json

    /**
     * Imprimir archivos JSON
     */
    protected function imprimir_archivos() {
        // Validar que haya publicaciones
        if ($this->recolector->obtener_cantidad_de_publicaciones() == 0) {
            throw new \Exception("Aviso en ImprentaJSONs: No hay publicaciones para crear los archivos JSON.");
        }
        // Iniciar contador en cero
        $this->contador = 0;
        // Bucle en las publicaciones
        foreach ($this->recolector->obtener_publicaciones() as $publicacion) {
            // Determinar la ruta al archivo a crear
            $archivo_ruta = "{$publicacion->directorio}/{$publicacion->archivo}.json";
            // Elaborar contenido
            $json = $this->json($publicacion);
            // Si hay contenido se crea el archivo, de lo contrario se elimina
            if (is_string($json)) {
                $this->crear_archivo($archivo_ruta, $json);
                $this->contador++;
            } else {
                $this->eliminar_archivo($archivo_ruta);
            }
        }
    } // imprimir_archivos

    /**
     * Imprimir índice JSON
     */
    protected function imprimir_indice() {
    } // imprimir_indice

    /**
     * Imprimir
     */
    public function imprimir() {
        echo "ImprentaJSONs: ";
        $this->validar();
        $this->recolector->agregar_publicaciones_en($this->publicaciones_directorio, $this);
        $this->crear_directorio($this->directorio);
        $this->imprimir_archivos();
    //~ $this->imprimir_indice();
        echo sprintf(" %d en %s\n", $this->contador, $this->directorio);
    } // imprimir

} // Clase ImprentaJSONs

?>
