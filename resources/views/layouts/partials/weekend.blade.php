@inject('date', 'App\Utilities\Date')

@if($date::isWeekend())
    {{ "C'est le week-end" }}
@else
    {{ "Ce n'est pas le week-end" }}
@endif
