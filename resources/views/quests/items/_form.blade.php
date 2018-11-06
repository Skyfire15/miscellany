{{ csrf_field() }}
<div class="row">
    <div class="col-md-12">
        <div class="form-group required">
            {!! Form::select2(
                'item_id',
                (isset($model) && $model->item ? $model->item : null),
                App\Models\Item::class,
                true
            ) !!}
        </div>
        <div class="form-group">
            <label>{{ trans('quests.items.fields.description') }}</label>
            {!! Form::textarea('description', null, ['class' => 'form-control html-editor', 'id' => 'description']) !!}
        </div>

        @if (Auth::user()->isAdmin())
        <div class="form-group">
            {!! Form::hidden('is_private', 0) !!}
            <label>{!! Form::checkbox('is_private') !!}
                {{ trans('crud.fields.is_private') }}
            </label>
            <p class="help-block">{{ trans('crud.hints.is_private') }}</p>
        </div>
        @endif
    </div>
</div>

{!! Form::hidden('quest_id', $parent->id) !!}