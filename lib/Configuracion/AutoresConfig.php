<?php
/**
 * TrcIMPLAN Sitio Web - Autores Config
 *
 * Copyright (C) 2016 IMPLAN Torreón
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

namespace Configuracion;

/**
 * Clase AutoresConfig
 */
class AutoresConfig {

    const VINCULOS_INDICE        = '\Base\VinculosTarjetas';           // Ruta a la clase para el índice de autores, en autores/index.html
    const VINCULOS_INDIVIDUAL    = '\Base\VinculosAcordeonesListados'; // Ruta a la clase para listar las publicaciones de cada autor, a usarse en las páginas de los autores
    const ORDENAR_POR            = 'dir_nombre_asc';                   // Texto que usa el Recolector para ordenar las publicaciones, puede ser fecha_desc o dir_nombre_asc
    public $autores              = array();                            // Arreglo asociativo con instancias de \Base\Autor
    public $mostrar_no_definidos = false;                              // Verdadero pone todos los autores encontrados, falso solo los definidos aquí
    public $imagen_tamano        = 128;                                // Tamaño del icono a usuarse en \Base\PaginasAutoresIndice

    /**
     * Constructor
     */
    public function __construct() {
        // Autor constructor parámetros: apodo, titulo, nombre_completo, icono, empresa, cargo, semblanza, email, twitter, perfil_archivo, estatus
        $this->autores[] = new \Base\Autor(
            '', 'Lic.', 'Adriana Vargas Flores', 'unknown',
            'IMPLAN Torreón', 'Integración de Proyectos',
            '',
            'avargas@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'Lic.', 'Alejandra Villarreal Meza', 'unknown',
            'IMPLAN Torreón', 'Secretario Técnico',
            '',
            'avillarreal@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'Lic.', 'Alfredo Viesca Domínguez', 'lic-alfredo-viesca-dominguez',
            'IMPLAN Torreón', 'Investigación Cualitativa',
            '',
            'aviesca@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'Lic.', 'Alicia Valdez Ibarra', 'lic-alicia-valdez-ibarra',
            'IMPLAN Torreón', 'Indicadores Económicos',
            '',
            'avaldez@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'Arq.', 'Cecilio Pedro Secunza Schott', 'arq-cecilio-pedro-secunza-schott',
            'IMPLAN Torreón', 'Regeneración Urbana',
            '',
            'csecunza@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'Arq.', 'Daniela Patricia Corral Hernández', 'arq-daniela-patricia-corral-hernandez',
            'IMPLAN Torreón', 'Analista SIG',
            '',
            'dcorral@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'Lic.', 'Eduardo Holguín Zehfuss', 'lic-eduardo-holguin-zehfuss',
            'IMPLAN Torreón', 'Director General Ejecutivo',
            '',
            'eholguin@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'Lic.', 'Felipe de Jesús Medina Delgado', 'unknown',
            'IMPLAN Torreón', 'Asistente de Direcciones',
            '',
            'fmedina@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', '', 'Francisco Valdés Perezgasga', 'francisco-valdes-perezgasga',
            'Consejero / PRODENAZAS', '',
            '',
            '', '');
        $this->autores[] = new \Base\Autor(
            '', 'Ing.', 'Guillermo Valdés Lozano', 'ing-guillermo-valdes-lozano',
            'IMPLAN Torreón', 'Programación y Software',
            'Desarrollador de los sistemas informáticos. Responsable del sitio web. Apoya las iniciativas de gobierno abierto y el uso del software libre.',
            'gvaldes@trcimplan.gob.mx', 'guivaloz', 'guillermo-valdes-lozano.md');
        $this->autores[] = new \Base\Autor(
            '', 'Lic.', 'Hugo E. Ramírez Martínez', 'unknown',
            'IMPLAN Torreón', 'Gestión y Difusión Social',
            '',
            'hramirez@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'Lic.', 'Israel Sinai Charur Méndez', 'unknown',
            'IMPLAN Torreón', 'Difusión y Diseño Gráfico',
            '',
            'scharur@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'Lic.', 'Janeth Ramírez Facio', 'unknown',
            'IMPLAN Torreón', 'Auxiliar Administrativo',
            '',
            'jramirez@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'Lic.', 'Julia de la Parra de Juambelz', 'unknown',
            'IMPLAN Torreón', 'Coordinador Jurídico',
            '',
            'jdelaparra@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'Arq.', 'Ilse Ávila García', 'arq-ilse-avila-garcia',
            'IMPLAN Torreón', 'Director de Proyectos Estratégicos',
            '',
            'iavila@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'Arq.', 'Ángeles Melisa Rodríguez Salas', 'unknown',
            'IMPLAN Torreón', 'Analista de Costos',
            '',
            'mrodriguez@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'Arq.', 'Jair Miramontes Chávez', 'arq-jair-miramontes-chavez',
            'IMPLAN Torreón', 'Sistemas de Información Geográfica',
            '',
            'jairmiramontes@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'Lic.', 'Luis A. Gutiérrez Arizpe', 'lic-luis-a-gutierrez-arizpe',
            'IMPLAN Torreón', 'Indicadores Sociodemográficos',
            '',
            'lgutierrez@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'Ing.', 'Luis Campos Hinojosa', 'ing-luis-campos-hinojosa',
            'IMPLAN Torreón', 'Director de Planeación Urbana',
            '',
            'lcampos@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'Lic.', 'Mariana Segovia Mota', 'unknown',
            'IMPLAN Torreón', 'Coordinador Administrativo',
            '',
            'msegovia@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'Ing.', 'Natalia Zavala López', 'unknown',
            'IMPLAN Torreón', 'Asistente Presidencia',
            '',
            'nzavala@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', '', 'Olga L. Delgado Ramírez', 'unknown',
            'IMPLAN Torreón', 'Servicios de Limpieza',
            '',
            '', '');
        $this->autores[] = new \Base\Autor(
            '', 'Lic.', 'Rodrigo González Morales', 'lic-rodrigo-gonzalez-morales',
            'IMPLAN Torreón', 'Director de Investigación Estratégica',
            '',
            'rgonzalez@trcimplan.gob.mx',  '');
        $this->autores[] = new \Base\Autor(
            '', 'Arq.', 'Susana Montano', 'arq-susana-montano',
            'IMPLAN Torreón', 'Integración de Proyectos',
            '',
            'smontano@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'C.P.', 'S. Julia Camarillo Aguirre', 'unknown',
            'IMPLAN Torreón', 'Contadora',
            '',
            'jcamarillo@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'Arq.', 'Teresita Benítez Saludado', 'arq-teresita-benitez-saludado',
            'IMPLAN Torreón', 'Estudios Sectoriales',
            '',
            'tsaludado@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'Ing.', 'Víctor M. Gómez Reynoso', 'unknown',
            'IMPLAN Torreón', 'Soporte Técnico',
            '',
            'vgomez@trcimplan.gob.mx', '');
    } // constructor

    /**
     * Obtener
     *
     * @param  string Apodo, titulo + nombre completo, nombre completo
     * @return mixed  La instancia de Autor encontrada, falso si no se haya
     */
    public function obtener($texto_a_buscar) {
        foreach ($this->autores as $autor) {
            if ($autor->apodo == $texto_a_buscar) {
                return $autor;
            } elseif ("{$autor->titulo} {$autor->nombre_completo}" == $texto_a_buscar) {
                return $autor;
            } elseif ($autor->nombre_completo == $texto_a_buscar) {
                return $autor;
            }
        }
        return false;
    } // obtener

} // Clase AutoresConfig

?>
