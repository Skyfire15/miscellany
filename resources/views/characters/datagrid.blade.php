@inject ('datagrid', 'App\Renderers\DatagridRenderer')

{!! $datagrid->filters($filters)
    ->render(
    $filterService,
    // Columns
    [
        // Avatar
        [
            'type' => 'avatar'
        ],
        // Name
        'name',
        'title',
        [
            'label' => trans('characters.fields.family'),
            'field' => 'family.name',
            'visible' => $campaign->enabled('families'),
            'render' => function($model) {
                if ($model->family) {
                    return $model->family->tooltipedLink();
                }
            }
        ],
        [
            'type' => 'location',
            'visible' => $campaign->enabled('locations'),
        ],
        [
            'label' => trans('characters.fields.race'),
            'field' => 'race.name',
            'visible' => $campaign->enabled('races'),
            'render' => function($model) {
                if ($model->race) {
                    return $model->race->tooltipedLink();
                }
            }
        ],
        'type',
        'age',
        'sex',
        'is_dead',
        [
            'type' => 'is_private',
        ]
    ],
    // Data
    $models,
    // Options
    [
        'route' => 'characters.index',
        'baseRoute' => 'characters',
        'trans' => 'characters.fields.',
        'campaign' => $campaign
    ]
) !!}