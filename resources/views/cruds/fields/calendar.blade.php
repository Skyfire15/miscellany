<?php
$calendars = \App\Models\Calendar::get();
$onlyOneCalendar = count($calendars) == 1;
$oldCalendarID = old('calendar_id');
$calendar = null;
if (!empty($oldCalendarID)) {
    $calendar = \App\Models\Calendar::findOrFail($oldCalendarID);
}
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4>{{ trans('crud.panels.calendar_date') }}</h4>
    </div>
    <div class="panel-body">
        <div class="form-group">
            <p class="help-block">{{ __('crud.hints.calendar_date') }}</p>

            <a href="#" id="entity-calendar-form-add" class="btn btn-default"
               style="<?=(!empty($model) && $model->hasCalendar() || !empty($oldCalendarID) ? "display: none" : null)?>" data-default-calendar="{{ ($onlyOneCalendar ? $calendars[0]->id : null) }}">
                <i class="ra ra-moon-sun"></i> {{ trans('crud.forms.actions.calendar') }}
            </a>


            <div class="entity-calendar-form" style="<?=((!isset($model) || !$model->hasCalendar()) && empty($oldCalendarID) ? "display: none" : null)?>">
                @if (count($calendars) == 1)
                    <input type="hidden" id="calendar_id" name="calendar_id" value="{{ (isset($model) && $model->hasCalendar() ? $model->calendar->id : null) }}">
                @else
                    <div class="form-group entity-calendar-selector">
                        {!! Form::select2(
                            'calendar_id',
                            (isset($model) && $model->calendar ? $model->calendar : FormCopy::field('calendar')->select()),
                            App\Models\Calendar::class,
                            false
                        ) !!}
                    </div>
                @endif

                <div class="row entity-calendar-subform" style="<?=((!isset($model) || !$model->hasCalendar()) && empty($oldCalendarID) ? "display: none" : null)?>">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>{{ trans('calendars.fields.current_year') }}</label>
                            {!! Form::number('calendar_year', FormCopy::field('calendar_year')->string(), ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-4">

                        <div class="form-group">
                            <label>{{ trans('calendars.fields.current_month') }}</label>
                            {!! Form::select('calendar_month', (!empty($model) && $model->hasCalendar() ? $model->calendar->monthList(): (!empty($calendar) ? $calendar->monthList() : [])), FormCopy::field('calendar_month')->string(), ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>{{ trans('calendars.fields.current_day') }}</label>
                            {!! Form::number('calendar_day', FormCopy::field('calendar_day')->string(), ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    @if (!isset($model) || !$model->hasCalendar())
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{ trans('calendars.fields.length') }}</label>
                                {!! Form::number('length', FormCopy::field('length')->string(), ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>
                                    {{ trans('calendars.fields.is_recurring') }}
                                </label>
                                <div class="checkbox no-margin">
                                    <label>
                                        {!! Form::checkbox('is_recurring') !!}
                                        {{ trans('calendars.checkboxes.is_recurring') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="entity-calendar-loading" style="display: none">
                    <p class="text-center">
                        <i class="fa fa-spin fa-spinner"></i>
                    </p>
                </div>
            </div>

            <a href="#" id="entity-calendar-form-cancel" class="pull-right" style="@if (isset($model) && $model->hasCalendar() && $onlyOneCalendar) @else display:none @endif">
                {{ __('crud.remove') }}
            </a>
        </div>
    </div>
</div>

<input type="hidden" name="calendar-data-url" data-url="{{ route('calendars.month-list', ['calendar' => 0]) }}">
