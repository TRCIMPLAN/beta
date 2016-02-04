<?php
/**
 * TrcIMPLAN Sitio Web - Autores Config
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
 * @package TrcIMPLANSitioWeb
 */

namespace Configuracion;

/**
 * Clase AutoresConfig
 */
class AutoresConfig {

    public $autores              = array();              // Arreglo asociativo con instancias de \Base\Autor
    public $vinculos_indice      = 'VinculosTarjetas';   // Nombre de la clase para el índice de autores, en autores/index.html
    public $vinculos_individual  = 'VinculosDetallados'; // Nombre de la clase para listar las publicaciones de cada autor, a usarse en las páginas de los autores
    public $mostrar_no_definidos = false;                // Verdadero pone todos los autores encontrados, falso solo los definidos aquí
    public $icono_tamano         = 128;                  // Tamaño de los iconos a usar en el índice

    /**
     * Constructor
     */
    public function __construct() {
        // apodo, titulo, nombre_completo, icono, empresa, cargo, semblanza, email, twitter, estatus
        $this->autores[] = new \Base\Autor(
            '', 'Lic.', 'Adriana Vargas Flores', '',
            'IMPLAN Torreón', 'Integración de Proyectos',
            '',
            'avargas@trcimplan.gob.mx', '');
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
            '', 'Lic.', 'Felipe de Jesús Medina Delgado', '',
            'IMPLAN Torreón', 'Asistente de Direcciones',
            '',
            '@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', '', 'Francisco Valdés Perezgasga', 'francisco-valdes-perezgasga',
            'Consejero / PRODENAZAS', '',
            '',
            '', '');
        $this->autores[] = new \Base\Autor(
            '', 'Ing.', 'Guillermo Valdés Lozano', 'ing-guillermo-valdes-lozano',
            'IMPLAN Torreón', 'Programación y Software',
            'Desarrolla los sistemas informáticos y es responsable del sitio web; tiene conocimientos en software libre, GNU/Linux y bases de datos. Trabaja en proyectos en pro del gobierno abierto, las libertades digitales y la divulgación del conocimiento.',
            'gvaldes@trcimplan.gob.mx', 'guivaloz');
        $this->autores[] = new \Base\Autor(
            '', 'Lic.', 'Hugo Elohím Ramírez Martínez', '',
            'IMPLAN Torreón', 'Gestión y Difusión Social',
            '',
            'kuiny@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'Lic.', 'Israel Sinai Charur Méndez', '',
            'IMPLAN Torreón', 'Difusión y Diseño Gráfico',
            '',
            'sunno@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'Lic.', 'Janeth Ramírez Facio', '',
            'IMPLAN Torreón', 'Auxiliar Administrativo',
            '',
            '@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'Lic.', 'Julia de la Parra de Juambelz', '',
            'IMPLAN Torreón', 'Coordinador Jurídico',
            '',
            '@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'Arq.', 'Ilse Ávila García', 'arq-ilse-avila-garcia',
            'IMPLAN Torreón', 'Director de Proyectos Estratégicos',
            '',
            'iavila@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'Arq.', 'A. Melisa Rodríguez Salas', '',
            'IMPLAN Torreón', 'Analista de Costos',
            '',
            'mrodriguez@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'Arq.', 'Jair Miramontes Chávez', 'arq-jair-miramontes-chavez',
            'IMPLAN Torreón', 'Sistemas de Información Geográfica',
            '',
            'jmiramontes@trcimplan.gob.mx', '');
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
            '', 'Lic.', 'Mariana Segovia Mota', '',
            'IMPLAN Torreón', 'Coordinador Administrativo',
            '',
            '@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'Ing.', 'Natalia Zavala López', '',
            'IMPLAN Torreón', 'Asistente Presidencia',
            '',
            '@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', '', 'Olga Lidia Delgado Ramírez', '',
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
            '', 'C.P.', 'S. Julia Camarillo Aguirre', '',
            'IMPLAN Torreón', 'Contadora',
            '',
            'jcamarillo@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'Arq.', 'Teresita Benítez Saludado', 'arq-teresita-benitez-saludado',
            'IMPLAN Torreón', 'Estudios Sectoriales',
            '',
            'tsaludado@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'Ing.', 'Víctor Manuel Gómez Reynoso', '',
            'IMPLAN Torreón', 'Soporte Técnico',
            '',
            'vgomez@trcimplan.gob.mx', '');
    } // constructor

    /**
     * Obtener con apodo
     *
     * @param  string Apodo del autor a obtener
     * @return mixed  La instancia de Autor encontrada, falso si no se haya
     */
    public function obtener_con_apodo($apodo) {
        foreach ($this->autores as $autor) {
            if ($autor->apodo == $apodo) {
                return $autor;
            }
        }
        return false;
    } // obtener_con_apodo

    /**
     * Obtener con titulo y nombre completo
     *
     * @param  string Título y nombre completo del autor a obtener
     * @return mixed  La instancia de Autor encontrada, falso si no se haya
     */
    public function obtener_con_titulo_nombre_completo($titulo_nombre_completo) {
        foreach ($this->autores as $autor) {
            if ("{$autor->titulo} {$autor->nombre_completo}" == $titulo_nombre_completo) {
                return $autor;
            }
        }
        return false;
    } // obtener_con_titulo_nombre_completo

} // Clase AutoresConfig

?>
