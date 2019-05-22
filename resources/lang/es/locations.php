<?php

return [
    'characters'    => [
        'description'   => 'Personajes que están en este lugar.',
        'title'         => 'Personajes en :name',
    ],
    'create'        => [
        'description'   => 'Crear nuevo lugar',
        'success'       => 'Lugar \':name\' creado.',
        'title'         => 'Nuevo lugar',
    ],
    'destroy'       => [
        'success'   => 'Lugar \':name\' borrado.',
    ],
    'edit'          => [
        'success'   => 'Lugar \':name\' actualizado.',
        'title'     => 'Editar lugar :name',
    ],
    'events'        => [
        'description'   => 'Eventos que ocurren en este lugar.',
        'title'         => 'Eventos en :name',
    ],
    'fields'        => [
        'characters'        => 'Personajes',
        'image'             => 'Imagen',
        'is_map_private'    => 'Mapa privado',
        'location'          => 'Localización',
        'locations'         => 'Lugares',
        'map'               => 'Mapa',
        'name'              => 'Nombre',
        'relation'          => 'Relación',
        'type'              => 'Tipo',
    ],
    'helpers'       => [
        'characters'    => 'Muestra todos los personajes en este lugar y sus lugares anidados, o solo los que están aquí.',
        'descendants'   => 'Esta lista contiene todas las localizaciones que son descendientes de estos lugares, además de las que están directamente por debajo.',
        'map'           => 'Al añadir un mapa a un lugar, podrás crear puntos en él y enlazar a otras entidades de la campaña.',
        'nested'        => 'En la vista anidada puedes ver tus lugares de forma anidada. Las localizaciones que no tengan ninguna superior se mostrarán aquí por defecto. Las que tengan localizaciones anidadas se pueden ir clicando para mostrarlas. Puedes seguir haciendo click hasta que no haya más lugares anidados que ver.',
    ],
    'hints'         => [
        'is_map_private'    => 'Un mapa privado solo será visible para los miembros con el rol "Admin".',
    ],
    'index'         => [
        'actions'       => [
            'explore_view'  => 'Vista de exploración',
        ],
        'add'           => 'Nuevo Lugar',
        'description'   => 'Gestiona los lugares de :name.',
        'header'        => 'Lugares en :name',
        'title'         => 'Lugares',
    ],
    'items'         => [
        'description'   => 'Objetos situados o procedentes de este lugar.',
        'title'         => 'Objetos de :name',
    ],
    'journals'      => [
        'description'   => 'Diarios escritos en este lugar.',
        'title'         => 'Diarios de :name',
    ],
    'locations'     => [
        'description'   => 'Lugares situados en esta localización.',
        'title'         => 'Lugares de :name',
    ],
    'map'           => [
        'actions'   => [
            'admin_mode'    => 'Habilitar modo de edición',
            'big'           => 'Vista completa',
            'download'      => 'Descargar',
            'points'        => 'Editar puntos',
            'toggle_hide'   => 'Ocultar puntos',
            'toggle_show'   => 'Mostrar puntos',
            'view_mode'     => 'Volver al modo de vista',
            'zoom_in'       => 'Acercar',
            'zoom_out'      => 'Alejar',
            'zoom_reset'    => 'Resetear zoom',
        ],
        'helper'    => 'Haz click en el mapa para añadir un nuevo punto a una localización, o selecciona un punto existente para editarlo o eliminarlo.',
        'helpers'   => [
            'admin' => 'Actívalo para habilitar la creación de nuevos puntos sólo con hacer clic en el mapa, editarlos al seleccionarlos y moverlos fácilmente.',
            'info'  => 'Más información sobre los mapas.',
            'label' => 'Este punto es una descripción. Nada más y nada menos.',
            'view'  => 'Haz clic en cualquier punto del mapa para ver los detalles. Usa Ctrl+Rueda para acercarte y alejarte del mapa.',
        ],
        'legend'    => 'Leyenda',
        'modal'     => [
            'submit'    => 'Añadir',
            'title'     => 'Selección de nuevo punto',
        ],
        'no_map'    => 'Por favor, sube el mapa de la localización primero.',
        'points'    => [
            'empty_label'   => 'Punto sin nombre',
            'fields'        => [
                'axis_x'    => 'Eje X',
                'axis_y'    => 'Eje Y',
                'colour'    => 'Color',
                'icon'      => 'Icono',
                'name'      => 'Nombre',
                'shape'     => 'Forma',
                'size'      => 'Tamaño',
            ],
            'helpers'       => [
                'location_or_name'  => 'Un punto del mapa puede dirigir a una localización existente, o simplemente tener una etiqueta.',
            ],
            'icons'         => [
                'anchor'        => 'Ancla',
                'anvil'         => 'Yunque',
                'apple'         => 'Manzana',
                'aura'          => 'Aura',
                'axe'           => 'Hacha',
                'beer'          => 'Cerveza',
                'biohazard'     => 'Peligro biológico',
                'book'          => 'Libro',
                'bridge'        => 'Puente',
                'campfire'      => 'Hoguera',
                'candle'        => 'Vela',
                'cat'           => 'Gato',
                'cheese'        => 'Queso',
                'cog'           => 'Engranaje',
                'crown'         => 'Corona',
                'dead-tree'     => 'Árbol muerto',
                'diamond'       => 'Diamante',
                'dragon'        => 'Dragón',
                'emerald'       => 'Esmeralda',
                'entity'        => 'Imagen de la entidad',
                'fire'          => 'Fuego',
                'flask'         => 'Frasco',
                'flower'        => 'Flor',
                'horseshoe'     => 'Herradura',
                'hourglass'     => 'Reloj de arena',
                'hydra'         => 'Hidra',
                'kaleidoscope'  => 'Caleidoscopio',
                'key'           => 'Llave',
                'lever'         => 'Palanca',
                'meat'          => 'Carne',
                'octopus'       => 'Pulpo',
                'palm-tree'     => 'Palmera',
                'pin'           => 'Pin',
                'pine-tree'     => 'Pino',
                'player'        => 'Personaje',
                'potion'        => 'Poción',
                'reactor'       => 'Reactor',
                'repair'        => 'Herramientas',
                'sheep'         => 'Oveja',
                'shield'        => 'Escudo',
                'skull'         => 'Calavera',
                'snake'         => 'Serpiente',
                'spades-card'   => 'Carta de póker',
                'sprout'        => 'Brote',
                'sun'           => 'Sol',
                'tentacle'      => 'Tentáculo',
                'toast'         => 'Tostada',
                'tombstone'     => 'Lápida',
                'torch'         => 'Antorcha',
                'tower'         => 'Torre',
                'water-drop'    => 'Agua',
                'wooden-sign'   => 'Cartel de madera',
                'wrench'        => 'Llave inglesa',
            ],
            'modal'         => 'Crear o editar punto del mapa',
            'placeholders'  => [
                'axis_x'    => 'Posición izquierda',
                'axis_y'    => 'Posición superior',
                'name'      => 'Etiqueta del punto cuando no se ha establecido ninguna localización.',
            ],
            'return'        => 'Volver a :name',
            'shapes'        => [
                'circle'    => 'Círculo',
                'square'    => 'Cuadrado',
            ],
            'sizes'         => [
                'huge'      => 'Enorme',
                'large'     => 'Grande',
                'small'     => 'Pequeño',
                'standard'  => 'Estándar',
                'tiny'      => 'Mini',
            ],
            'success'       => [
                'create'    => 'Punto de localización creado en el mapa.',
                'delete'    => 'Punto de localización eliminado del mapa.',
                'update'    => 'Punto de localización actualizado en el mapa.',
            ],
            'title'         => 'Puntos del mapa de :name',
        ],
        'success'   => 'Puntos del mapa guardados.',
    ],
    'organisations' => [
        'description'   => 'Organizaciones situadas en la localización.',
        'title'         => 'Organizaciones de :name',
    ],
    'panels'        => [
        'map'   => 'Mapa',
    ],
    'placeholders'  => [
        'location'  => 'Elige el lugar al que está vinculado',
        'name'      => 'Nombre del lugar',
        'type'      => 'Ciudad, Reino, Ruinas',
    ],
    'quests'        => [
        'description'   => 'Misiones vinculadas a este lugar.',
        'title'         => 'Misiones en :name',
    ],
    'show'          => [
        'description'   => 'Vista detallada del lugar',
        'tabs'          => [
            'characters'    => 'Personajes',
            'events'        => 'Eventos',
            'information'   => 'Información',
            'items'         => 'Objetos',
            'journals'      => 'Diarios',
            'locations'     => 'Lugares',
            'map'           => 'Mapa',
            'menu'          => 'Menú',
            'organisations' => 'Organizaciones',
            'quests'        => 'Misiones',
        ],
        'title'         => 'Lugar :name',
    ],
];
