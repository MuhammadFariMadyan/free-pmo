@inject('projectStatuses', 'App\Entities\Projects\Status')

<ul class="nav nav-second-level">
    @foreach($projectStatuses::toArray() as $statusId => $status)

    <?php
$projectCount = array_key_exists($statusId, $projectStatusStats) ? $projectStatusStats[$statusId] : 0;
$status .= '<span class="badge pull-right">'.$projectCount.'</span>';
?>

    <li>{!! html_link_to_route('projects.index', $status, ['status' => $statusId]) !!}</li>

    @endforeach
</ul>
